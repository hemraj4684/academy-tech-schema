<!--/*******************************************************************************
@file_name index.php
@company Tech Schema
@author Hemraj Jibhau Solanki
@created_date 24 July 2014
@co-author -
@description This is the main page.
@modification_date 24 July 2014
@modification_history -------------------------------
*******************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Academy Tech Schema | Classes for Software developement</title>
		<meta name="description" content="classes for web developer and designer">
		<meta name="keywords" content="web designer classes in mumbai thane ulhasnagar dombivali badlapur, 
		web developer classes in mumbai thane ulhasnagar dombivali badlapur, front developer classes in mumbai thane ulhasnagar dombivali badlapur, 
		backend developer classes in mumbai thane ulhasnagar dombivali badlapur, job oriented classes in mumbai thane ulhasnagar dombivali badlapur, 
		100% placement, html5 css3 jquery javascript classes in mumbai thane ulhasnagar dombivali badlapur, 
		php mysql classes in mumbai thane ulhasnagar dombivali badlapur, ruby on rails classes in mumbai thane ulhasnagar dombivali badlapur, 
		responsive web designing in mumbai thane ulhasnagar dombivali badlapur">

		<?php
		     require_once('configuration.php');
		     require_once(LIB.'db.php');
		     include_once(LAYOUT.'stylesheet.php');
		     include_once(LAYOUT.'javascript.php');
		?>
				<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700|Source+Sans+Pro:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<?php     
		     if(isset($_POST['create_joinus']))
			  	{
			     	if(isset($_POST['name']) && !empty($_POST['name']) && isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mobileno']) && !empty($_POST['mobileno'])  && isset($_POST['type']) && !empty($_POST['type']))
					{
						$type = implode(',',$_POST['type']);
						$sql_join_us = "INSERT INTO join_us (id, name, email, mobile_number, comment, type, created_at) VALUES ('', :name, :email, :mobile_number, :comment, :type, now());";
						$flag = $db->queryPrepared($sql_join_us, array(':name' => $_POST['name'], ':email' => $_POST['email'], ':mobile_number' => $_POST['mobileno'], ':comment' => $_POST['comment'], ':type' => $type))->rowcount();
					}
					else
					{
						echo("<script>alert('Please fill all fields!')</script>");
					}
					if($flag == 1)
					{
						echo("<script>alert('Thank You ". $_POST['name']."!')</script>");
					}
				}
		?>
		<script type="text/javascript">
			
		</script>
	</head>
	<body style="background-color: #fe4444;">
		<div class="container-fluid">
			<?php include_once(LAYOUT.'header.php'); ?>
			<div class="row-fluid" class="courses_font" style="background: url('img/img-decor-03.jpg')">
				<div class="span12" style="background-size: cover;">
					<div class="visual">
						<div class="container">
							<h2>Courses and Pricing</h2>
							<hr/>
							<div class="pricing-tables">
								<div class="plan recommended">
					                <div class="head">
					                    <h3>Web Desigining</h3>
					                </div>
					                <div class="price">
					                    <span class="price-main"><span class="symbol"><i class="fa fa-inr"></i></span>25,000/-</span>
					                    <span class="price-additional">Subjects</span>
					                </div>
					                <ul>
					                    <li>HTML5</li>
					                    <li>CSS3</li>
					                    <li>JQuery</li>
					                    <li>Responsive Web Design</li>
					                    <li>Bootstrap</li>
					                </ul>
					                <button type="button" class="btn btn-default rounded">purchase</button>
					            </div>
					            
					            <div class="plan recommended">
					                <div class="head">
					                    <h3>Web Developement</h3> </div>
					                <div class="price">
					                    <span class="price-main"><span class="symbol"><i class="fa fa-inr"></i></span>35,000/-</span>
					                    <span class="price-additional">Subjects</span>
					                </div>
					                    <ul class="item-list">
						                    <li>HTML</li>
						                    <li>CSS</li>
						                    <li>PHP5</li>
						                    <li>MySQL</li>
						                    <li>Ajax</li>
					                    </ul>
					                <button type="button" class="btn btn-default rounded">purchase</button>
					            </div>

					            <div class="plan recommended">
					                <div class="head">
					                    <h3>Web Developement</h3> </div>
					                <div class="price">
					                    <span class="price-main"><span class="symbol"><i class="fa fa-inr"></i></span>40,000/-</span>
					                    <span class="price-additional">Subjects</span>
					                </div>
					                    <ul class="item-list">
						                    <li>HTML</li>
						                    <li>CSS</li>
						                    <li>Ruby on Rails</li>
						                    <li>MySQL</li>
						                    <li>Ajax</li>
					                    </ul>
					                <button type="button" class="btn btn-default rounded">purchase</button>
					            </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			

			<div class="row-fluid">
				<div class="span12" style="background: #fff">
					<div style="text-align: center; padding: 20px">
					<h1 style="font-family: Raleway; font-weight: normal; text-transform: uppercase; font-size: 1.8em; color: #16161d;; letter-spacing: 2px; line-height: 1.5em; margin: 1em 8em .5em 8em;">WE ARE AN ORGANIZATION IN ALL TYPE SOFTWARE RESEARCH AND DEVELOPMENT.</h1>
					<p><i class="fa fa-leaf" style="font-size: 8em; color: #f7931d"></i></p>
					<a style="font-family: Raleway; font-size: .775em; padding: 1.5em 2.25em; color: #333232; margin: 2em .5em 5em; text-decoration: none; font-weight: 600; text-transform: uppercase; text-align: center; border-radius: 4px; cursor: pointer; border: 1px solid #333232;">Learn about our work</a>
					<p>
					</p>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12" style="background-color: #4a3b4e; border-color: #fff;">
					<?php include_once(LAYOUT.'footer.php'); ?>
				</div>
			</div>
		</div>
	</body>
</html>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63399703-1', 'auto');
  ga('send', 'pageview');
</script>