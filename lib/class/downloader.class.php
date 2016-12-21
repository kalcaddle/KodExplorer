<?php

/**
 * User: djunny
 * Date: 2016-04-29
 * Mail: 199962760@qq.com
 *
 * downloader::get('http://dzs.aqtxt.com/files/11/23636/201604230358308081.rar', 'test.rar')
 */
class downloader {
    /**
     * download file to local path
     *
     * @param       $url
     * @param       $save_file
     * @param int   $speed
     * @param array $headers
     * @param int   $timeout
     * @return bool
     * @throws Exception
     */
    static function get($url, $save_file, $speed = 10240, $headers = array(), $timeout = 20) {
        $url_info = self::parse_url($url);
        if (!$url_info['host']) {
            throw new Exception('Url is Invalid');
        }

        // default header
        $def_headers = array(
            'Accept'          => '*/*',
            'User-Agent'      => 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1; Trident/4.0)',
            'Accept-Encoding' => 'gzip, deflate',
            'Host'            => $url_info['host'],
            'Connection'      => 'Close',
            'Accept-Language' => 'zh-cn',
        );

        // merge heade
        $headers = array_merge($def_headers, $headers);
        // get content length
        $content_length = self::get_content_size($url_info['host'], $url_info['port'], $url_info['request'], $headers, $timeout);

        // content length not exist
        if (!$content_length) {
            throw new Exception('Content-Length is Not Exists');
        }
        // get exists length
        $exists_length = is_file($save_file) ? filesize($save_file) : 0;
        // get tmp data file
        $data_file = $save_file . '.data';
        // get tmp data
        $exists_data = is_file($data_file) ? json_decode(file_get_contents($data_file), 1) : array();
        // check file is valid
        if ($exists_length == $content_length) {
            $exists_data && @unlink($data_file);
            return true;
        }
        // check file is expire
        if ($exists_data['length'] != $content_length || $exists_length > $content_length) {
            $exists_data = array(
                'length' => $content_length,
            );
        }
        // write exists data
        file_put_contents($data_file, json_encode($exists_data));

        try {
            $download_status = self::download_content($url_info['host'], $url_info['port'], $url_info['request'], $save_file, $content_length, $exists_length, $speed, $headers, $timeout);
            if ($download_status) {
                @unlink($data_file);
            }
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
        return true;
    }

    /**
     * parse url
     *
     * @param $url
     * @return bool|mixed
     */
    static function parse_url($url) {
        $url_info = parse_url($url);
        if (!$url_info['host']) {
            return false;
        }
        $url_info['port']    = $url_info['port'] ? $url_info['host'] : 80;
        $url_info['request'] = $url_info['path'] . ($url_info['query'] ? '?' . $url_info['query'] : '');
        return $url_info;
    }

    /**
     * download content by chunk
     *
     * @param $host
     * @param $port
     * @param $url_path
     * @param $headers
     * @param $timeout
     */
    static function download_content($host, $port, $url_path, $save_file, $content_length, $range_start, $speed, &$headers, $timeout) {
        $request = self::build_header('GET', $url_path, $headers, $range_start);
        $fsocket = @fsockopen($host, $port, $errno, $errstr, $timeout);
        stream_set_blocking($fsocket, TRUE);
        stream_set_timeout($fsocket, $timeout);
        fwrite($fsocket, $request);
        $status = stream_get_meta_data($fsocket);
        if ($status['timed_out']) {
            throw new Exception('Socket Connect Timeout');
        }
        $is_header_end = 0;
        $total_size    = $range_start;
        $file_fp       = fopen($save_file, 'a+');
        while (!feof($fsocket)) {
            if (!$is_header_end) {
                $line = @fgets($fsocket);
                if (in_array($line, array("\n", "\r\n"))) {
                    $is_header_end = 1;
                }
                continue;
            }
            $resp        = fread($fsocket, $speed);
            $read_length = strlen($resp);
            if ($resp === false || $content_length < $total_size + $read_length) {
                fclose($fsocket);
                fclose($file_fp);
                throw new Exception('Socket I/O Error Or File Was Changed');
            }
            $total_size += $read_length;
            fputs($file_fp, $resp);
            // check file end
            if ($content_length == $total_size) {
                break;
            }
            //sleep(1);
            //break;
        }
        fclose($fsocket);
        fclose($file_fp);
        return true;

    }

    /**
     * get content length
     *
     * @param $host
     * @param $port
     * @param $url_path
     * @param $headers
     * @param $timeout
     * @return int
     */
    static function get_content_size($host, $port, $url_path, &$headers, $timeout) {
        $request = self::build_header('HEAD', $url_path, $headers);
        $fsocket = @fsockopen($host, $port, $errno, $errstr, $timeout);
        stream_set_blocking($fsocket, TRUE);
        stream_set_timeout($fsocket, $timeout);
        fwrite($fsocket, $request);
        $status = stream_get_meta_data($fsocket);
        $length = 0;
        if ($status['timed_out']) {
            return 0;
        }
        while (!feof($fsocket)) {
            $line = @fgets($fsocket);
            if (in_array($line, array("\n", "\r\n"))) {
                break;
            }
            $line = strtolower($line);
            // get location
            if (substr($line, 0, 9) == 'location:') {
                $location = trim(substr($line, 9));
                $url_info = self::parse_url($location);
                if (!$url_info['host']) {
                    return 0;
                }
                fclose($fsocket);
                return self::get_content_size($url_info['host'], $url_info['port'], $url_info['request'], $headers, $timeout);
            }
            // get content length
            if (strpos($line, 'content-length:') !== false) {
                list(, $length) = explode('content-length:', $line);
                $length = (int)trim($length);
            }
        }
        fclose($fsocket);
        return $length;

    }

    /**
     * build header for socket
     *
     * @param     $action
     * @param     $url_path
     * @param     $headers
     * @param int $range_start
     * @return string
     */
    static function build_header($action, $url_path, &$headers, $range_start = -1) {
        $out = $action . " {$url_path} HTTP/1.0\r\n";
        foreach ($headers as $hkey => $hval) {
            $out .= $hkey . ': ' . $hval . "\r\n";
        }
        if ($range_start > -1) {
            $out .= "Accept-Ranges: bytes\r\n";
            $out .= "Range: bytes={$range_start}-\r\n";
        }
        $out .= "\r\n";

        return $out;
    }
}
