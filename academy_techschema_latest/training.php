<!--/*******************************************************************************
@file_name index.php
@company Tech Schema
@author Hemraj Jibhau Solanki
@created_date 24 July 2014
@co-author -
@description This is the main page.
@modification_date 26 May 2015
@modification_history -------------------------------
*******************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
		<link rel="icon" href="/favicon.ico" type="image/x-icon">
		<title>Tech Schema</title>
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
	<body style="background-color: #CFAF4F;">
		<div class="container-fluid">
			<?php include_once(LAYOUT.'header.php'); ?>
			
			<div class="row-fluid" style="width: 960px; margin: 0px auto;">
				<div class="span12" style="height: 550px;">
					<span style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 4em; display: block; line-height: 80px; letter-spacing: 2px; margin: 20px 0 0 0;">
						<center>We provide Industry Oriented Training in PHP & Ruby On Rails</center> 
					</span>
					<div class="span12" style="margin-top: 30px">
						<div class="span4 offset2">
							<img src="/img/phplogo-highres.png" alt="PHP logo" title="PHP logo"></img>
						</div>
						<div class="span4">
							<img src="/img/ruby-on-rails.png" style="height: 190px;" alt="Ruby-on-Rails logo" title="Ruby-on-Rails logo"></img>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span4" style="margin-top: 35px; text-align: center;">
							<a href="<?php echo DOMAIN;?>/includes/php_portion.php" class="training_button" data-toggle="modal" id="php">PHP Syllabus</a>
						</div>
						<div class="span4" style="margin-top: 35px; text-align: center;">
							<a href="<?php echo DOMAIN;?>/includes/ruby_portion.php" class="training_button" data-toggle="modal" id="ruby">Ruby Syllabus</a>
						</div>
						<div class="span4" style="margin-top: 35px; text-align: center;">
							<a href="#myModal" class="training_button" data-toggle="modal" id="joinus">Join Us</a>
						</div>
					</div>
				</div>
			</div>
			<!--Modal Form for join us -->
			<div class="modal hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header"  style="background-color: #CFAF4F; border-top-left-radius: 5px; border-top-right-radius: 5px; color: #fff">
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
					<button type="submit" class="btn btn-primary" name="create_joinus">Save changes</button>
				</div>
				</form>
			</div>
			
			<div class="row-fluid">
				<div class="span12" style="background: #fff">
					<div style="text-align: center; padding: 20px">
					<h1 style="font-family: Raleway; font-weight: normal; text-transform: uppercase; font-size: 1.8em; color: #16161d;; letter-spacing: 2px; line-height: 1.5em; margin: 1em 8em .5em 8em;">WE ARE AN ORGANIZATION IN ALL TYPE SOFTWARE RESEARCH AND DEVELOPMENT.</h1>
					<p><i class="fa fa-leaf" style="font-size: 8em; color: #f7931d"></i></p>
					<a style="font-family: Raleway; font-size: .775em; padding: 1.5em 2.25em; color: #333232; margin: 2em .5em 5em; text-decoration: none; font-weight: 600; text-transform: uppercase; text-align: center; border-radius: 4px; cursor: pointer; border: 1px solid #333232;">Learn about our work</a>
					<p></p>
					</div>
				</div>
			</div>
			<?php include_once(LAYOUT.'footer.php'); ?>
		</div>
	</body>
</html>
