<!--/*******************************************************************************
@file_name index.php
@company Tech Schema
@author Hemraj Jibhau Solanki
@created_date 29 July 2014
@co-author -
@description This is the main page.
@modification_date 29 July 2014
@modification_history -------------------------------
*******************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Syllabus</title>
		<?php
		     require_once('../configuration.php');
		     require_once(LIB.'db.php');
		     include_once(LAYOUT.'stylesheet.php');
		     include_once(LAYOUT.'javascript.php');
		?>
		<script type="text/javascript">
			
		</script>
	</head>
	<body style="background-color: #475575;">
		<div class="container-fluid">
			<?php include_once(LAYOUT.'header.php'); ?>
			<div class="row-fluid">
				<div class="span12" style="background-color: #475575; margin-bottom: 20px">
					<div class="row-fluid">
						<div class="span12">
							<span style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 4em; display: block;line-height: 60px; letter-spacing: 2px;margin-left: 100px;margin-top: 10px">
								PHP Syllabus
							</span>
							<p style="border: 1px solid #85abfc; padding: .5em 0 0 0; background-color: #85abfc; margin-top: 20px;"></p>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12" style="margin-top: 30px">
							<span id="php_portion" style="margin-left: 100px; ">
								We divide PHP syllabus in 2 parts:-
							</span>
							<br/>
							<a href="#block_core" style="color: #fff">
								<p id="php_portion" style="padding-top: .5em; margin-left: 150px">
									1) Core PHP
								</p>
							</a>
							<a href="#block_advanced" style="color: #fff">
								<p id="php_portion" style="padding-top: .5em; margin-left: 150px">
									2) Advanced PHP
								</p>
							</a>
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 110px;margin-top: 20px" id="block_core">
								CORE PHP
							</span>
							<p style="border: 1px solid #85abfc; margin-top: 5px; margin-left: 100px; width: 50%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left: 90px; border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<span style="display: block;width: 9px;height: 9px;margin-top: -11px;margin-left:57%;border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 100px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<span style="padding-right: 20px; float: left; width: 20%">Introduction web</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; width: 70%; float: left;">
											History of web<br/>
											World wide web<br/>
											Web browsers<br/>
											Client-Server architecture<br/>
											Thin client architecture<br/>
											Thick client architecture<br/>
											Network<br/>
											TCP/IP<br/>
											DNS<br/>
											HTTP protocol & methods
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Basics of Language</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
											Introduction to computer language &mdash; Low level & High level<br/>
											Number system &mdash; Decimal, Binary, Octal, Hexadecimal<br/>
											Network<br/>
											Conversions<br/>
											ASCII<br/>
											Unicode
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Basics of HTML</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
											Past of HTML<br/>
											Introduction of HTML & XHTML<br/>
											Doctype<br/>
											Editor<br/>
											Structural HTML tags/elements<br/>
											Head tags/elements<br/>
											Text formatting tags<br/>
											List tags<br/>
											Anchor tag<br/>
											Media elements tags<br/>
											Table tags<br/>
											Form elements<br/>
											Div & span tags<br/>
											Common attribute<br/>
											Event attribute<br/>
											Best Practice for web documents
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Basics of CSS</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Introduction to CSS
											<br/> Applying CSS to HTML and rules
											<br/> Selectors(id, class)
											<br/> Cascade
											<br/> Group
											<br/> Inheritance
											<br/> Pseudo class & elements
											<br/> Chain selector
											<br/> Measurements
											<br/> Margin, padding, border
											<br/> Box model
											<br/> Color, background & images
											<br/> Positions
											<br/> Layouts
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Basics of Javascript</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Introduction Javascript
											<br/> Introduction & basics of JQuery
											<br/> Downloading & including JQuery
											<br/> Features of JQuery
											<br/> DOM (Document Object Model)
											<br/> Start with JQuery
											<br/> Selectors
											<br/> DOM traversal methods
											<br/> DOM manipulation methods
											<br/> Events
											<br/> AJAX
											<br/> Introduction to plugins
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Basics of communication languages</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Introduction of communication
											<br/> XML
											<br/> JSON
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Introduction and past of PHP</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Server configuration for PHP(windows & Linux)
											<br/> PHP configurations
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">PHP Basics</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  PHP code with HTML (Default syntax)
											<br/> Comments in PHP
											<br/> O/p data
											<br/> Datatypes
											<br/> Identifires
											<br/> Variables
											<br/> Constants
											<br/> Expressions
											<br/> String interpolation
											<br/> Control structure &mdash; for, foreach, while, do-while, if-else, switch and others
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">PHP Functions</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Introduction to function
											<br/> Create functions
											<br/> Invoke functions
											<br/> Function arguments by value & reference
											<br/> Scope of function
											<br/> Recursive functions
											<br/> PHP in-bult function
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Array</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Array
											<br/> Associative array (Hashmap)
											<br/> Array functions
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Form handling</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  PHP Form Handling
											<br/> PHP Form Validation
											<br/> PHP Form Required
											<br/> PHP Form URL/E-mail
											<br/> PHP Form Complete
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">File upload</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Introduction to mime-type
											<br/> File validation
											<br/> File uploading
											<br/> File storage
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Inclusion of file</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  include(), include_once(), require(), require_once()
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Strings and regular expressions</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  String functions
											<br/> Reguler expressions
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Date and time</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Unix Timestamp
											<br/> Date & time functions
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Error and Exception Handling</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  Configuration Directives
											<br/> Error Logging
											<br/> Exception Handling
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">PHP cookies</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
										&nbsp;&nbsp;&nbsp;
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">PHP sessions</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
										&nbsp;&nbsp;&nbsp;
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">File manipulation</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												  File Handling
											<br/> File Open/Read
											<br/> File Create/Write
										</div>
									</li>
								</a>
							</ul>
							
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 110px;margin-top: 20px" id="block_advanced">
								ADVANCED PHP
							</span>
							<p style="border: 1px solid #85abfc; margin-top: 5px; margin-left: 100px; width: 50%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left: 90px; border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<span style="display: block;width: 9px;height: 9px;margin-top: -11px;margin-left:57%;border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 100px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<span style="padding-right: 20px; float: left; width: 20%">Object-Oriented PHP</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; width: 70%; float: left;">
													Introduction to OOP
											<br/> Classes
											<br/> Objects
											<br/> Fields
											<br/> Properties
											<br/> Constants
											<br/> Methods
											<br/> Constructors and Destructors
											<br/> Static Class Members
											<br/> instanceof Keyword
											<br/> Helper Functions
											<br/> Autoloading Objects
											<br/> Encapsulation
											<br/> Polymorphism
											<br/> Object Cloning
											<br/> Inheritance
											<br/> Interface
											<br/> Abstract Classes
											<br/> Namespaces
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Networking in PHP</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
													Apache configuration
											<br/> PHP Mailer
											<br/> Introduction to Shell command
											<br/> CURL
											<br/> Request & response details
											<br/> PHP & LDAP
											<br/> PHP & API call
											<br/> RSS feeds
											<br/> Web services &mdash; REST
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">Basics Security handlings in PHP</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												Session fixation
											<br/> URL rewriting
											<br/> XSS
											<br/> CSRF
											<br/> Brute force
											<br/> Sanitize user input
											<br/> HTML parse
											<br/> Hashing functions &mdash; MD5, SHA
											<br/> SQL injection
											<br/> User authentication
											<br/> User data privacy
											<br/> Web crawling
											<br/> iframe security
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">PHP and MySQL</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												PHP mysql connectivity &mdash; mysql_connect, mysqli_connect
											<br/> PDO
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">PHP reporting</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												PDF
											<br/> CSV
											<br/> Excel
											<br/> Graphs
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%;  padding-top: 10px;">MySQL</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%;  padding-top: 10px;">
												Introduction to MySQL
											<br/> Installing and Configuring MySQL
											<br/> Introduction to PHPMyAdmin
											<br/> MySQL Storage Engines and Datatypes
										</div>
									</li>
								</a>
								<a href="#block_2" style="color: #fff;">
									<li style="margin-left: 10px;">
										<span style="padding-right: 20px; float: left; width: 20%; padding-top: 10px;">MySQL Basics</span>
										<div style="padding-left: 20px; border-left: 1px solid #85abfc; float: left; width: 70%; padding-top: 10px;">
												Create Database
											<br/> Create Database
											<br/> Create Table
											<br/> Table Fields
											<br/> Primary Key & Foreign Key
											<br/> Where clause
											<br/> Alias
											<br/> AND & OR
											<br/> Like
											<br/> Between
											<br/> Order By
											<br/> Group By
											<br/> Having
											<br/> Sub Query
											<br/> Import and Export through Command line
											<br/> Import and Export through PHPMYADMIN Tool
											<br/> JOINs
											<br/> MySQL functions
										</div>
									</li>
								</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12" style="background-color: #85abfc; border-color: #475575;">
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