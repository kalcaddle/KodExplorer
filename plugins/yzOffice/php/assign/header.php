<!DOCTYPE html>
<html>
<head>

<style type="text/css">
	html body{
		font-family:-apple-system,BlinkMacSystemFont,PingFang SC,
			Helvetica,Tahoma,Arial,Hiragino Sans GB,Microsoft YaHei,Heiti,sans-serif;
		background-image:none !important;
		/*background-color:#f0f0f0;*/
	}
	.powerby{text-align: center;font-size:12px;color:#ccc;}
	div.word-body, .ppt-body{background:#f9f9f9;}
	div.word-page{border-bottom:1px solid #d9d9d9;box-shadow:0 1px 6px #ccc;}
	div.navbar{display:none;}
	
	body > div,body > hr{display:none;}
	body div.container-fluid,
	body div.navbar-inverse,
	body #header,
	div.openSide #loading,
	div.openSide #header
	{display:block;}

	div.navbar-inverse{opacity:1;}
	div.openSide .side-pager {
		cursor: pointer;display: inline-block;font-size: 12px;color: #666;font-weight: 100;
		background: #eee;padding: 0px 1em;margin-top: 4px;border-radius: 18px;
	}
	div#next, div#prev{
		border-radius:4px;text-decoration: inherit;
		font-family: FontAwesome;
		font-weight: normal;font-style: normal;
		-webkit-font-smoothing: antialiased;
		color: rgba(0,0,0,0.001);
	}

	div.navbar-inverse .navbar-inner {
		background:#eee;
	    background-image: linear-gradient(to bottom,#fff,#eee);
	    border-bottom: 1px solid #ddd;
	    background-repeat: repeat-x;
	}
	div.navbar-inverse .nav>li>a {color: #666;text-shadow: none;}
	div.navbar-inverse .brand{color: #666;text-shadow: none;width:40%;margin-left:0px;}


	div.navbar .nav{position: static;}
	.nav.word-tab-title .dropdown.word-tab-title-li{position:absolute;left:0px;}
	div.navbar-inverse .nav>li>a.dropdown-toggle{}
	ul.dropdown-menu{margin-top:0;border-radius:2px;border: 1px solid rgba(0,0,0,0.1);}
	ul.dropdown-menu>li>a:hover, 
	ul.dropdown-menu>li>a:focus, 
	ul.dropdown-submenu:hover>a, 
	ul.dropdown-submenu:focus>a{background:#2196F3 !important}

	div.navbar-inverse .nav>li>a:focus, 
	div.navbar-inverse .nav>li>a:hover,
	div.left a:hover,div.right a:hover{
	    color: #2196F3;background-color:rgba(0,0,0,0.05);
	}
	div.left,div.right{margin-right:5px;}
	div.left a,div.right a{width:40px;text-align: center;display: block;}

	div.navbar-inverse .brand:hover, 
	div.navbar-inverse .nav>li>a:hover, 
	div.navbar-inverse .brand:focus, 
	div.navbar-inverse .nav>li>a:focus{
		color: #2196F3;
	}

	div.navbar-inverse .nav .active>a, 
	div.navbar-inverse .nav .active>a:hover, 
	div.navbar-inverse .nav .active>a:focus {
	    color: #fff !important;background: #2196F3 !important;
	}

	#next:after, #prev:after{color:#222;margin-left:-25px;}
	#prev:after{content: "\f104";}
	#next:after{content: "\f105";}
	/*excle*/
	@media (max-width: 979px) {
		div.navbar-inverse .nav-collapse .nav>li>a:hover, 
		div.navbar-inverse .nav-collapse .nav>li>a:focus, 
		div.navbar-inverse .nav-collapse .dropdown-menu a:hover, 
		div.navbar-inverse .nav-collapse .dropdown-menu a:focus{
			background-color: #d4ecff;
		}
	}

	/*word*/
	@media (max-width: 743px) {
		div.word-page,div.word-page .word-content{border-bottom:none;box-shadow:none;}
		/*.container-fluid{padding:20px 10px;}*/
	}
	<?php 
		$doc = array('doc','docx','docm','dot','dotx','dotm','rtf',  'wps','wpt');
		if(in_array(get_path_ext($app->filePath),$doc)){
			echo '
			html body{background-color:#f0f0f0;}
			div.powerby{display:block;}
			';
		}
	?>
</style>
<link href="./static/style/font-awesome/css/font-awesome.css?ver=<?php echo KOD_VERSION;?>" rel="stylesheet">
<!--[if IE 7]>
<link rel="stylesheet" href="./static/style/font-awesome/css/font-awesome-ie7.css">
<![endif]--> 