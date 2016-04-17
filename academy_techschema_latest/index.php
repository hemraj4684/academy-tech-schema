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
			
			<div class="row-fluid">
				<div class="span12" style="background: ; height: 600px; background-size: cover;">
					<span style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 4em; display: block; padding: 1em 0 0 8em; line-height: 60px; letter-spacing: 2px;margin-left: 160px; margin-bottom: -210px; margin-top: 80px">
						We provide guidance<br/><span style="">for projects in I.T. & C.S.</span> 
					</span>
					<div class="row-fluid" style="margin-top: -110px">
						<div class="span9 offset2" id="box1">
							<!--second box-->
							<div class="box1" id="box2_first" style="margin-top: 75px;">
							</div>
							<div class="box2" id="box2_second" style="margin-top: 75px;">
								<center id="banner_text" class="box2_text" >Diploma</center>
							</div>
							<div class="box3" id="box2_third" style="margin-top: 75px;">
								
							</div>
							<!--second box-->
							<div class="box1" id="box2_first" style="margin-top: 0px; margin-left: -40px">
							</div>
							<div class="box2" id="box2_second"  style="margin-top: 0px; margin-left: 0px">
								<center id="banner_text" class="box2_text" style="">BCA /MCA</center>
							</div>
							<div class="box3" id="box2_third"  style="margin-top: 0px; margin-left: 0px">
								
							</div>
							<div class="box1" id="box2_first" style="margin-top: 150px; margin-left: -200px">
							</div>
							<div class="box2" id="box2_second"  style="margin-top: 150px; margin-left: -150px">
								<center id="banner_text" class="box2_text" style="">B.E.</center>
							</div>
							<div class="box3" id="box2_third"  style="margin-top: 150px; margin-left: -50px">
								
							</div>
							<!--Third box-->
							<div class="box1" id="box2_first" style="margin-top: 225px; margin-left: -360px">
							</div>
							<div class="box2" id="box2_second"  style="margin-top: 225px; margin-left: -310px">
								<center id="banner_text" class="box2_text" style="">M.E.</center>
							</div>
							<div class="box3" id="box2_third"  style="margin-top: 225px; margin-left: -210px">
								
							</div>
							<!--firth box-->
							<div class="box1" id="box2_first" style="margin-top: 225px; margin-left: -40px">
							</div>
							<div class="box2" id="box2_second"  style="margin-top: 225px">
								<center id="banner_text" class="box2_text" style="">B.Sc.<br/> /M.Sc.</center>
							</div>
							<div class="box3" id="box2_third"  style="margin-top: 225px">
								
							</div>
							<!--fifth box-->
							<div class="box1" id="box2_first" style="margin-top: 300px; margin-left: -360px">
							</div>
							<div class="box2" id="box2_second"  style="margin-top: 300px; margin-left: -310px">
								<center id="banner_text" class="box2_text" style="">Ph.D.</center>
							</div>
							<div class="box3" id="box2_third"  style="margin-top:300px; margin-left: -210px">
								
							</div>
							
						</div>
					</div>
					<div class="row-fluid">
						<div class="span9" style="margin-top: -150px; text-align: right;">
							<a href="#myModal" class="training_button" data-toggle="modal" id="needhelp">Need Help</a>	
						<!--Modal Form for join us -->
						<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="text-align: left;">
							<div class="modal-header"  style="background-color: #fe4444; border-top-left-radius: 5px; border-top-right-radius: 5px; color: #fff">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3>Join Us</h3>
							</div>
							<div class="modal-body">
								<form class="form-horizontal" method="post">
									<div class="control-group">
										<label class="control-label" for="inputEmail">Name</label>
										<div class="controls">
											<input type="text" name="name" id="name" placeholder="Name" required>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputEmail">Email</label>
										<div class="controls">
											<input type="email" name="email" id="email" placeholder="Email" required>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword">Mobile Number</label>
										<div class="controls">
											<input type="number" name="mobileno" id="mobileno" placeholder="e.g. 9540568545" required>
										</div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputPassword">Comment</label>
										<div class="controls">
											<textarea id="comment" name="comment"></textarea>
										</div>
									</div>
									<div class="control-group">
										<div class="controls">
											<label class="checkbox">
												<input type="checkbox" name="type[]" value="project"> Project
											</label>
											<label class="checkbox">
												<input type="checkbox" name="type[]" value="training"> Training
											</label>
										</div>
									</div>
							</div>
							<div class="modal-footer">
								<a href="#" class="btn">Close</a>
								<button type="submit" class="btn btn-primary" name="create_joinus">Submit</button>
							</div>
							</form>
						</div>
					</div>
					<div class="span3">
						
					</div>
				</div>
					<!--div style="padding: 0 0 0 12em;">
						<input type="text" style="height: 50px; width: 500px; background: rgba(255,255,255,0.6); color: #fff; font-size: 20px; left-margin: 50px; line-height: 24px;" value="2000"></input><br/>
					</div-->
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
			<?php include_once(LAYOUT.'footer.php'); ?>
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