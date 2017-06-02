<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Home</title>
	<base href="{{base_url}}" />
			<meta name="viewport" content="width=992" />
		<meta name="description" content="" />
	<meta name="keywords" content="" />
		<meta name="generator" content="Zyro - Website Builder" />
	
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/main.js" type="text/javascript"></script>

	<link href="css/site.css?v=1.1.37" rel="stylesheet" type="text/css" />
	<link href="css/common.css?ts=1472543600" rel="stylesheet" type="text/css" />
	<link href="css/1.css?ts=1472543600" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="/gallery/icon.ico" type="image/x-icon" />
	<script type="text/javascript">var currLang = '';</script>		
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>


<body><div class="root"><div class="vbox wb_container" id="wb_header">
	
</div>
<div class="vbox wb_container" id="wb_main">
	
<div id="wb_element_instance0" class="wb_element"><ul class="hmenu"><li class="active"><a href="Home/" target="_self" title="Home">Home</a></li><li><a href="About/" target="_self" title="About">About</a></li><li><a href="Call-For-Papers/" target="_self" title="Call For Papers">Call For Papers</a></li><li><a href="Registration/" target="_self" title="Registration">Registration</a><ul><li><a href="Phase-I-Registration/" target="_self" title="Phase I Registration">Phase I Registration</a></li><li><a href="Phase-II-Paper-Submission/" target="_self" title="Phase II-Paper Submission">Phase II-Paper Submission</a></li><li><a href="Phase-III-Final-Registration/" target="_self" title="Phase III-Final Registration">Phase III-Final Registration</a></li></ul></li><li><a href="Downloads/" target="_self" title="Downloads">Downloads</a></li><li><a href="Committe/" target="_self" title="Committe">Committe</a><ul><li><a href="Organizing/" target="_self" title="Organizing">Organizing</a></li><li><a href="Student-Committe/" target="_self" title="Student Committe">Student Committe</a></li></ul></li><li><a href="Contact-Us/" target="_self" title="Contact Us">Contact Us</a></li></ul></div><div id="wb_element_instance1" class="wb_element" style=" overflow: hidden;"><marquee behavior="scroll" direction="left"><font size="1.5">This website is created by Factura2k17 team</font></marquee>


gallery/icon-ios7-location-128-ts1469120783.png</div><div id="wb_element_instance2" class="wb_element" style=" overflow: hidden;"><br/><br/><br/><br/><br/><b><font color=white>Latest News</font></b><br><marquee behavior="scroll" direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" ><div id=change><a href="Phase-I-Paper-Submission/"><font color="#000000" face="Tahoma"> <small></small><small></small>    <b>Phase-I Registration<br/>is now open</div></b></font></a></marquee></div><div id="wb_element_instance3" class="wb_element"><a href="https://www.fb.com/factura2k17"><img src="img/fb.png" height="40px"width="40px"></a></div><div id="wb_element_instance4" class="wb_element"><div id="wb_element_instance5_gp_plus_one"></div>
<script type="text/javascript">
	window.___gcfg = {parsetags: 'explicit'};
</script><script src="https://apis.google.com/js/platform.js" type="text/javascript"></script><script type="text/javascript">
	if (window.gapi) {
		window.gapi.plusone.render('wb_element_instance5_gp_plus_one', {
			size: 'small',
			annotation: 'bubble',
			width: '50'
		});
	}
</script></div><div id="wb_element_instance5" class="wb_element" style=" overflow: hidden;">
  </div><div id="wb_element_instance6" class="wb_element" style="width: 100%;">
			<?php
				global $show_comments;
				if (isset($show_comments) && $show_comments) {
					renderComments(1);
			?>
			<script type="text/javascript">
				$(function() {
					var block = $("#wb_element_instance6");
					var comments = block.children(".wb_comments").eq(0);
					var contentBlock = $("#wb_main");
					contentBlock.height(contentBlock.height() + comments.height());
				});
			</script>
			<?php
				} else {
			?>
			<script type="text/javascript">
				$(function() {
					$("#wb_element_instance6").hide();
				});
			</script>
			<?php
				}
			?>
			</div></div>
<div class="vbox wb_container" id="wb_footer" style="height: 80px;">
	
<div id="wb_element_instance7" class="wb_element" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#wb_footer");
					footer.height(1);
				}
			});
			</script></div></div><div class="wb_sbg"></div></div>

<script type="text/javascript">
	var today = new Date();
	var year = today.getFullYear();
	var month = today.getMonth();
	var day = today.getDate();
	if(year >= 2017 && month >=5 && day >=25)
	{
		document.getElementById('change').innerHTML = 'Everything is closed';
	}
	
	else if( year >=2017 && month ==5 && day >=6)
	{
		document.getElementById('change').innerHTML = 'Registration is now closed';
	}
	if( year >=2017 && month ==5 && day >=8)
	{
		document.getElementById('change').innerHTML = '<a href="Phase-II-Paper-Submission/"><font color="#000000" face="Tahoma"> <small></small><small></small>    <b>Phase-II Registration<br/>is now open';
	}
	if( year >=2017 && month ==5 && day >13)
	{
		document.getElementById('change').innerHTML = 'Paper submission is now closed';
	}
	if( year >=2017 && month ==5 && day >=20)
	{
		document.getElementById('change').innerHTML = '<a href="Phase-III-Final-Registration/"><font color="#000000" face="Tahoma"> <small></small><small></small>    <b>Phase-III Registration<br/>is now open';
	}
	if( year >=2017 && month ==5 && day >25)
	{
		document.getElementById('change').innerHTML = 'Final Registration is closed';
	}

</script>
</body>
</html>
