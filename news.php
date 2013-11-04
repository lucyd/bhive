<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : TwoColours 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20130811

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="default.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>

$(document).ready(function () {

    $(".editable").each(function () {
	    if ($(this).attr("filename") == "embedded_system.txt")
	    {
		$("<button class='save_button'>Save</button>").insertBefore(".special_button");
        	//$(this).parent().append("<button class='save_button'>Save</button>");
	    }
	    else if ($(this).attr("filename") == "software_development.txt")
	    {
	    }
	    else if ($(this).attr("filename") == "ASIC.txt")
	    {
	    }
	    else if ($(this).attr("filename") == "PCB.txt")
	    {
	    }
	    else
	    {
        	$(this).parent().append("<button class='save_button'>Save</button>");
	    }
    });
    $(".save_button").hide();

    $(".editable").click(function (e) {
        $(this).next().show();
        e.stopPropagation();
    });

    $(".save_button").click(function (e) {
	var filename = $(this).prev().attr("filename");
	if(filename == "ASIC_page_1.txt")
	{
        	var content = $(this).prev().html();
	}
	else if(filename == "ASIC_page_2.txt")
	{
		var content = $(this).prev().html();
	}
	else
	{
		var content = $(this).prev().text();
	}
        var that = $(this);
        $.ajax({
            url: 'save.php',
            type: 'POST',
            data: {
                content: content,
                filename: filename
            },
            success: function (data) {
                alert(data);
                that.hide();

            }
        });
    });
});




</script>
</head>
<body>
<div id="logo" class="container">
	<h1>
	  <!-- <a href="#" style="text-decoration:none"><span>Bhive Design Technologies</span></a> -->
	  <img src="images/main_bhive_logo.png" alt="Bhive Design Technologies" width="500px"  style="padding-top:0.25em">
	</h1>
</div>
<!--<div id="header">-->
	<!-- <div id="menu" class="container"> -->
	<div id="cssmenu">
		<ul>
			<!-- <li class="current_page_item"><a href="#" accesskey="1" title="">Homepage</a></li> -->
			<li ><a href="index.php" accesskey="0" title=""><span>Homepage</span></a></li>
			<li class="active">
				<a href="#" accesskey="1" title=""><span>Design Services</span></a>
				<ul>
					<li><a href="ASIC.php"><span>ASIC</span></a></li>
					<li><a href="FPGA.php"><span>FPGA</span></a></li>
					<li><a href="embedded_systems.php"><span>Embedded Systems</span></a></li>
					<li><a href="PCB.php"><span>PCB</span></a></li>
					<li><a href="software_development.php"><span>Software Development</span></a></li>
				</ul>
			</li>

			<li><a href="products.php" accesskey="2" title=""><span>Products</span></a></li>
			<li class="has-sub">
				<a href="" accesskey="3" title=""><span>Corporate</span></a>
				<ul>
					<li><a href="management.php"><span>Management</span></a></li>
					<li><a href="partners.php"><span>Partners</span></a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="#" accesskey="4" title=""><span>Education</span></a>
				<ul>
					<li><a href="training.php"><span>Training</span></a></li>
					<li><a href="counselling.php"><span>Counselling</span></a></li>
					<li><a href="electronics.php"><span>Electronics &nbsp; Play School</span></a></li>
					<!-- <li><a href="#"><span></span></a></li> -->
				</ul>
			</li>
			<li class="has-sub">
				<a href="#" accesskey="5" title=""><span>Careers</span></a>
				<ul>
					<li><a href="internships.php"><span>Internships</span></a></li>
					<li><a href="jobs.php"><span>Jobs</span></a></li>
				</ul>
			</li>
			<li><a href="news.php" accesskey="6" title=""><span>News</span></a></li>
			<li><a href="contact.php" accesskey="7" title=""><span>Contact Us</span></a></li>
		</ul>
	</div>

<!--	
<div id="page" class="container" style="padding: 0.5em 0em; overflow: hidden">
	<div id="sidebar" style="width:97%; text-align: center; float:center" align="center">
		<a  class="image image-full"><img style src="images/ASIC_page.jpg" alt="" height="350px"/></a>
	</div>
-->
</div>
<div class="container">
	<div id="content" style="width:100%; padding-top:2em">
		<div class="title" style="padding-bottom:1.5em">
			<h2>News</h2>
		</div>
		<img src="images/page_under_construction.jpg" style="display:block; margin-left:auto; margin-right:auto">
</div>
<div id="copyright" class="container">
        <p>Copyright (c) Bhive Design Technologies 2013 (mybhive.com). All rights reserved.</p>
</div>

</body>
</html>
