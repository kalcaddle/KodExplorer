<!DOCTYPE html>
<html dir="ltr" mozdisallowselectionprint moznomarginboxes>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php echo $fileName;?></title>
</head>

<?php if(get_path_ext($path) == 'odt'){ ?>
<style type="text/css">
	#theBODY{margin:0;padding:0;background:#f0f0f0;}
	#odf{text-align: center;width:100%;display: block !important;}
	#odf > div{text-align: center;width:100%;background:#f0f0f0 !important;}
	document{
		margin:20px 0;background:#fff;
		border-bottom: 1px solid rgb(217, 217, 217);
		box-shadow: rgb(204, 204, 204) 0px 1px 6px;
	}
</style>
<?php } ?>


<body id="theBODY">
	<div id="odf"></div>
	<script src="<?php echo $this->pluginHost;?>static/webodf.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
    	var fileURL = "<?php echo $fileUrl;?>";
		var odfelement = document.getElementById("odf"),
		odfcanvas = new odf.OdfCanvas(odfelement);
		odfcanvas.load(fileURL);
	</script>
</body>
</html>
