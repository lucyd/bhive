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
        var content = $(this).prev().text();
        var that = $(this);
	var filename = $(this).prev().attr("filename");
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
			<li class="active"><a href="#" accesskey="1" title=""><span>Homepage</span></a></li>
			<li class="has-sub">
				<a href="#" accesskey="1" title=""><span>Design Services</span></a>
				<ul>
					<li><a href="#"><span>ACPI</span></a></li>
					<li><a href="#"><span>FPGA</span></a></li>
					<li><a href="#"><span>Embedded Systems</span></a></li>
					<li><a href="#"><span>PCB</span></a></li>
					<li><a href="#"><span>Software Development</span></a></li>
				</ul>
			</li>

			<li><a href="#" accesskey="2" title=""><span>Products</span></a></li>
			<li class="has-sub">
				<a href="#" accesskey="3" title=""><span>Corporate</span></a>
				<ul>
					<li><a href="#"><span>Management</span></a></li>
					<li><a href="#"><span>Partners</span></a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="#" accesskey="4" title=""><span>Education</span></a>
				<ul>
					<li><a href="#"><span>Training</span></a></li>
					<li><a href="#"><span>Counselling</span></a></li>
					<li><a href="#"><span>Electronics &nbsp; Play School</span></a></li>
					<!-- <li><a href="#"><span></span></a></li> -->
				</ul>
			</li>
			<li class="has-sub">
				<a href="#" accesskey="5" title=""><span>Careers</span></a>
				<ul>
					<li><a href="#"><span>Internships</span></a></li>
					<li><a href="#"><span>Jobs</span></a></li>
				</ul>
			</li>
			<li><a href="#" accesskey="6" title=""><span>News</span></a></li>
			<li><a href="#" accesskey="7" title=""><span>Contact Us</span></a></li>
		</ul>
	</div>
<!--</div>-->
<div id="page" class="container">
	<div id="content">
		<div class="title">
			<h2 style="font-family:'DejavuSans',sans-serif; padding-left:2em" >Welcome to Bhive</h2>
		</div>
		<div class="editable" contentEditable="true" filename="intro.txt">
			<p>
			<?php
				echo file_get_contents("intro.txt");
			?>
			</p>
		</div>
	</div>
	<div id="sidebar"><a href="#" class="image image-full"><img style src="images/pic01.jpg" alt="" height="350px"/></a></div>
</div>
<div id="featured-wrapper">
	<div id="featured" class="container">
		<table width="100%">
		<tr>
		<td>
		<div class="column1">
			<!-- <span class="icon icon-bar-chart"></span> -->
			<img src="images/vision.jpg" width="100%" alt="Vision">
			<div class="title">
				<h2>Vision</h2>
				<div class="editable" contentEditable="true" filename="vision.txt">
					<span class="byline">
					<?php
						echo file_get_contents("vision.txt");
					?>
					</span>
				</div>
			</div>
		</div>
		</td>
		<td>
		<div class="column2">
			<div class="title">
			<img src="images/expertise.jpg" width="90%"  alt="Expertise">
				<h2>Expertise</h2>
				<div class="editable" contentEditable="true" filename="expertise.txt">
					<span class="byline">
					<?php
						echo file_get_contents("expertise.txt");
					?>
					</span>
				</div>
			</div>
		</div>
		</td>
		<td>
		<div class="column3">
			<img src="images/design_services.png" width="80%" style="padding-left:20px;"  alt="Design Services">
			<div class="title">
				<h2>Design Services</h2>
				<div class="editable" contentEditable="true" filename="design_services.txt">
					<span class="byline">
					<?php
						echo file_get_contents("design_services.txt");
					?>
					</span>
				</div>
			</div>
		</div>
		</td>
		</tr>
		</table>
	</div>
</div>
<div id="portfolio-wrapper">
	<div id="portfolio" class="container">
		<div class="column1">
			<h2>Embedded system</h2>
			</br>
			<a href="#" class="image image-full"><img src="images/embedded_system.jpg" height="150" alt="" /></a>
			<div class="box">
				<div class="editable" contentEditable="true" filename="embedded_system.txt">
					<p class="special_p">
						<?php
							echo file_get_contents("embedded_system.txt");
						?>
					</p>
				</div>
				<a href="#" class="special_button">Read More</a>
			</div>
		</div>		
		<div class="column2">
			<h2>Software development</h2>
			</br>
			<a href="#" class="image image-full"><img src="images/software_development.jpg" height="150" alt="" /></a>
			<div class="box">
				<div class="editable" contentEditable="true" filename="software_development.txt">
				<p class="special_p">
					<?php
						echo file_get_contents("software_development.txt");
					?>
				</p>
				</div>
				<a href="#" class="special_button">Read More</a>
			</div>
		</div>		
		<div class="column3">
			<h2>ASIC</h2>
			</br>
			<a href="#" class="image image-full"><img src="images/ASIC.jpg" height="150" alt="" /></a>
			<div class="box">
				<div class="editable" contentEditable="true" filename="ASIC.txt">
				<p class="special_p">
					<?php
						echo file_get_contents("ASIC.txt");
					?>
				</p>
				</div>
				<a href="#" class="special_button">Read More</a>
			</div>
		</div>			
		<div class="column4">
			<h2>PCB</h2>
			</br>
			<a href="#" class="image image-full"><img src="images/PCB.jpg" height="150" alt="" /></a>
			<div class="box">
				<div class="editable" contentEditable="true" filename="PCB.txt">
					<p class="special_p">
						<?php
							echo file_get_contents("PCB.txt");
						?>
					</p>
				</div>
				<a href="#" class="special_button">Read More</a>
			</div>
		</div>			
	</div>
</div>
<div id="contact" class="container">
		<div class="major">
			<h2>Follow us</h2>
			<span class="byline">We are more than welcome to receive your feedback</span>
		</div>
		<ul class="contact">
			<a href="#"><li><img height="64" width="64" src="images/facebook_follow.png"></li></a>
			<a href="#"><li><img height="64" width="64" src="images/twitter_follow.png"></li></a>
			<a href="#"><li><img height="64" width="64" src="images/googleplus_follow.png"></li></a>
			<a href="#"><li><img height="64" width="64" src="images/youtube_follow.png"></li></a>
			<a href="#"><li><img height="64" width="64" src="images/linkedin_follow.png"></li></a>
			<a href="#"><li><img height="64" width="64" src="images/blogger_follow.png"></li></a>
		</ul>
</div>
<div id="copyright" class="container">
	<p>Copyright (c) 2013 MYBHIVE.com. All rights reserved.</p>
</div>
</body>
</html>
