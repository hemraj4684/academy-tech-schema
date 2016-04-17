<!--/*******************************************************************************
@file_name index.php
@company Tech Schema
@author Hemraj Jibhau Solanki
@created_date 30 July 2014
@co-author -
@description This is the main page.
@modification_date 26 May 2015
@modification_history -------------------------------
*******************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ruby Syllabus</title>
		<meta name="description" content="learn ruby on rails, learn MVC, learn rails framework, learn ruby, learn rails, RoR developer training">
		<meta name="keywords" content="web designer classes in mumbai thane ulhasnagar dombivali badlapur, 
		web developer classes in mumbai thane ulhasnagar dombivali badlapur, front developer classes in mumbai thane ulhasnagar dombivali badlapur, 
		backend developer classes in mumbai thane ulhasnagar dombivali badlapur, job oriented classes in mumbai thane ulhasnagar dombivali badlapur, 
		100% placement, html5 css3 jquery javascript classes in mumbai thane ulhasnagar dombivali badlapur, 
		php mysql classes in mumbai thane ulhasnagar dombivali badlapur, ruby on rails classes in mumbai thane ulhasnagar dombivali badlapur, 
		responsive web designing in mumbai thane ulhasnagar dombivali badlapur">
		<?php
		     require_once('../configuration.php');
		     require_once(LIB.'db.php');
		     include_once(LAYOUT.'stylesheet.php');
		     include_once(LAYOUT.'javascript.php');
		?>
		<script type="text/javascript">
			
		</script>
	</head>
	<body style="background-color: #B42738;">
		<div class="container-fluid">
			<?php include_once(LAYOUT.'header.php'); ?>
			<div class="row-fluid">
				<div class="span12" style="background-color: #B42738; margin-bottom: 20px">
					<div class="row-fluid">
						<div class="span12">
							<span style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 4em; display: block;line-height: 60px; letter-spacing: 2px;margin-left: 100px;margin-top: 10px">
								Ruby On Rails Syllabus
							</span>
							<p style="border: 1px solid #751520; padding: .5em 0 0 0; background-color: #751520; margin-top: 20px;"></p>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12" style="margin-top: 30px">
							<span id="php_portion" style="margin-left: 100px; ">
								See following are the Ruby on rails syllabus:-
							</span>
							<br/>
							<!--a href="#block_core" style="color: #fff">
								<p id="php_portion" style="padding-top: .5em; margin-left: 150px">
									1) Core PHP
								</p>
							</a>
							<a href="#block_advanced" style="color: #fff">
								<p id="php_portion" style="padding-top: .5em; margin-left: 150px">
									2) Advanced PHP
								</p>
							</a-->
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 110px;margin-top: 20px" id="block_core">
								Ruby Content
							</span>
							<p style="border: 1px solid #751520; margin-top: 5px; margin-left: 100px; width: 50%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left: 90px; border: 1px solid #751520;border-radius: 5px;background-color: #fff;"></span>
							<span style="display: block;width: 9px;height: 9px;margin-top: -11px;margin-left:57%;border: 1px solid #751520;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 100px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<span style="padding-right: 20px; float: left; width: 20%">Ruby Content</span>
										<div style="padding-left: 20px; border-left: 1px solid #751520; width: 75%; float: left;">
											Introduction web
											<br/> Introduction to Ruby
											<br/> Installing Ruby
											<br/> Structure and execution of Ruby
											<br/> Datatypes (Duck typing)
											<br/> Literals and operators
											<br/> Expressions
											<br/> Control structure and statements
											<br/> Methods, procs, lambda & closures
											<br/> Modules
											<br/> Threads and process
											<br/> Classes and objects
											<br/> OOP
											<br/> Reflection and metaprogramming
											<br/> Array
											<br/> Hash
											<br/> String manipulation
											<br/> File manipulation
											<br/> Documenting in Ruby
											<br/> Ruby CGI, cookies, servers
											<br/> Web service in ruby
											<br/> Unit testing
											<br/> Socket programming
											<br/> Pacakge management rubygems
											<br/> Ruby Tk
											<br/> Ruby and windows
											<br/> Introduction to IronRuby and JRuby
											<br/> YAML
											<br/> Introduction to Rails
											<br/> Installing rails on windows, linux
											<br/> Introduction of rubygems
											<br/> Introduction to MVC
											<br/> Create simple application in rails(scaffolding)
											<br/> Rails directory structure
											<br/> Create simple application in rails(without
											scaffolding)
											<br/> Configurations
											<br/> UI in rails with asset pipeline
											<br/> Action view
											<br/> Helpers
											<br/> Database
											<br/> Active record
											<br/> Migration
											<br/> Active Model
											<br/> Validation
											<br/> Action dispatch and Action controller
											<br/> Action mailer
											<br/> Active resources
											<br/> Active support
											<br/> Rake task
											<br/> REST webservice
											<br/> Unit testing with RSpec/Cucumber
											<br/> I18n
											<br/> Caching in rails
											<br/> Create own web application
											<br/> Antipatters in rails
											<br/> Deployment and production use
										</div>
									</li>
								</a>
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<span style="padding-right: 20px; float: left; width: 20%; padding-top: 10px;">Rails Content</span>
										<div style="padding-left: 20px; border-left: 1px solid #751520; width: 75%; float: left; padding-top: 10px;">
											Introduction to Rails
											<br/> Installing rails on windows, linux
											<br/> Introduction of rubygems
											<br/> Introduction to MVC
											<br/> Create simple application in rails(scaffolding)
											<br/> Rails directory structure
											<br/> Create simple application in rails(without
											scaffolding)
											<br/> Configurations
											<br/> UI in rails with asset pipeline
											<br/> &nbsp;&nbsp;&nbsp;&nbsp;Action view
											<br/> &nbsp;&nbsp;&nbsp;&nbsp;Helpers
											<br/> Database
											<br/> &nbsp;&nbsp;&nbsp;&nbsp;Active record
											<br/> &nbsp;&nbsp;&nbsp;&nbsp;Migration
											<br/> &nbsp;&nbsp;&nbsp;&nbsp;Active Model
											<br/> Validation
											<br/> Action dispatch and Action controller
											<br/> Action mailer
											<br/> Active resources
											<br/> Active support
											<br/> Rake task
											<br/> REST webservice
											<br/> Unit testing with RSpec/Cucumber
											<br/> I18n
											<br/> Caching in rails
											<br/> Create own web application
											<br/> Antipatters in rails
											<br/> Deployment and production use
										</div>
									</li>
								</a>
							</ul>
							
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 110px;margin-top: 20px" id="block_core">
								Extra
							</span>
							<p style="border: 1px solid #751520; margin-top: 5px; margin-left: 100px; width: 50%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left: 90px; border: 1px solid #751520;border-radius: 5px;background-color: #fff;"></span>
							<span style="display: block;width: 9px;height: 9px;margin-top: -11px;margin-left:57%;border: 1px solid #751520;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 100px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<span style="padding-right: 20px; float: left; width: 20%">Introduction web</span>
										<div style="padding-left: 20px; border-left: 1px solid #751520; width: 75%; float: left;">
											GitHub repository
											<br/> Heroku depolyment
											<br/> Capistrano deployment
											<br/> Apache deployment
											<br/> Nginx deployment with passenger
											<br/> Introduction to Mongoid (NoSQL)
											<br/> Introduction to HAML
											<br/> Introduction to SCSS
											<br/> Introduction to CoffeeScript
										</div>
									</li>
								</a>
							</ul>
							
							
							
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12" style="background-color: #6C3B98; border-color: #fff;">
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