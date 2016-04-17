<!--/*******************************************************************************
@file_name frontend_portion.php
@company Tech Schema
@author Hemraj Jibhau Solanki
@created_date 31 May 2015
@co-author -
@description This is the main page.
@modification_date 31 May 2015
@modification_history 
*******************************************************************************/-->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Front end developer-portion | Academy tech schema</title>
		<meta name="description" content="classes for front end developer">
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
	<body style="background-color: #475575;">
		<div class="container-fluid">
			<?php include_once(LAYOUT.'header.php'); ?>
			<div class="row-fluid">
				<div class="span12" style="background-color: #475575; margin-bottom: 20px">
					<div class="row-fluid">
						<div class="span12">
							<span style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 4em; display: block;line-height: 60px; letter-spacing: 2px;margin-left: 100px;margin-top: 10px">
								Web Designing / Front end development
							</span>
							<p style="border: 1px solid #85abfc; padding: .5em 0 0 0; background-color: #85abfc; margin-top: 20px;"></p>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12" style="margin-top: 30px">
							<span id="php_portion" style="margin-left: 100px; ">
								Web Designing / Front end development has 3 major subjects:-
							</span>
							<br/>
							<a href="#block_core" style="color: #fff">
								<p id="php_portion" style="padding-top: .5em; margin-left: 150px">
									1) HTML 2) CSS 3) Jquery
								</p>
							</a>
						</div>
					</div>
					<div style="padding:10px;">
					<div class="row-fluid">
						<div class="span4" style="margin-top: 10px; border-right: 1px solid #85abfc;">		
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 25px;margin-top: 20px" id="block_core">
								HTML
							</span>
							<p style="border: 1px solid #85abfc; margin-top: 5px; margin-left: 20px; width: 110%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left: 15px; border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<span style="display: block;width: 9px;height: 9px;margin-top: -11px;margin-left:98.8%;border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family:Raleway;font-weight: bold;color: #fff;font-size: 1em;letter-spacing: 2px;margin-left: 20px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 0px">
										<div style="">
											What is web and it's architeture?<br/>
											History of web <br/>
											Introduction to HTML & XHTML <br/>
											<div style="margin-left:5%;">
												Past of HTML<br/>
												Basic structure of HTML<br/>
												HTML & XHTML syntax<br/>
												HTML vs XHTML<br/>
												Doctype<br/>
											</div>
											Tools for HTML<br/>
											<div style="margin-left:5%;">
												HTML on Windows, Mac or Linux<br/>
												Web browser <br/>
											</div>
											Structural HTML tags/elements <br/>
											Head tags/elements<br/>
											Text formatting tags<br/>
											List tags<br/>
											Media elements tags<br/>
											Table tags<br/>
											Form elements<br/>
											Frame & window elements<br/>
											Common attribute<br/>
											Event attribute<br/>
											Best Practice for web documents<br/>
											Build your own website in “div” layout <br/>
											Deploy your website on server Introduction to HTTP, FTP protocols and URL
										</div>
									</li>
								</a>
							</ul>
						</div>
						<div class="span4" style="margin-top: 10px; border-right: 1px solid #85abfc;">		
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px; margin-left: 25px;margin-top: 20px" id="block_core">
								CSS
							</span>
							<p style="border: 1px solid #85abfc; margin-top: 5px; margin-left: 20px; width: 120%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left:98.8%;border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 20px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<div style="">
											Introduction to CSS<br/>
											Applying CSS to HTML and rules<br/>
											Concepts of CSS <br/>
											<div style="margin-left:5%;">
												Selectors(id, class)<br/>
												Cascade<br/>
												Group<br/>
												Inheritance<br/>
												Pseudo class & elements<br/>
												Chain selector<br/>
												Measurements<br/>
											</div>
											Blocks in CSS<br/>
											<div style="margin-left:5%;">
												Margin, padding, border<br/>
											</div>
											Box model<br/>
											Text stylling<br/>
											Color, background & images<br/>
											Navigation<br/>
											Lists<br/>Links<br/>Tables<br/>Forms<br/>Positions<br/>
											Layout<br/>
											<div style="margin-left:5%;">
												Fixed<br/>Fluid/Liquid<br/>Elastic<br/>Variable fixed width<br/>
											</div>
											CSS for printed page<br/>Tips & tricks<br/>960 Grid System<br/>
											Twitter bootstrap (Responsive CSS)<br/>
											Build web template with HTML and CSS<br/>
											Build static website
										</div>
									</li>
								</a>
							</ul>
						</div>
						<div class="span4" style="margin-top: 10px; border-right: 1px solid #85abfc;">		
							<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px; margin-left: 25px;margin-top: 20px" id="block_core">
								Jquery 
							</span>
							<p style="border: 1px solid #85abfc; margin-top: 5px; margin-left: 20px; width: 95%"></p>
							<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left:98.5%;border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
							<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 15px;margin-top: 40px;list-style: none">
								<a href="#block_1" style="color: #fff">
									<li style="margin-left: 10px">
										<div style="">
											Introduction Javascript<br/> 
											Introduction & basics of JQuery<br/>
											Downloading & including JQuery<br/>
											Features of JQuery<br/>
											DOM (Document Object Model)<br/>
											Start with JQuery<br/>
											Selectors<br/>
											<div style="margin-left:5%;">
												CSS selectors<br/>
												XPath selectors<br/>
												Attribute selectors<br/>
												Form selectors<br/>
												Custom selectors<br/>
											</div>
											DOM traversal methods<br/>
											<div style="margin-left:5%;">
												JQuery factory function $()<br/>
												Filtering methods<br/>
												Tree traversal methods<br/>
												Miscellaneous traversal methods<br/>
											</div>
											DOM manipulation methods<br/>
											<div style="margin-left:5%;">
												General Attributes<br/>
												Style properties<br/>
												Class attributes<br/>
												DOM replacement<br/>
												DOM insertion, inside<br/>
												DOM insertion, outside<br/>
												DOM insertion, around<br/>DOM copying<br/>DOM removal<br/>
											</div>
											Events<br/>
											<div style="margin-left:5%;">
												Event handler<br/>
												Document load<br/>
												Mouse event<br/>
												Form event<br/>
												Keyboard event<br/>
												Browser event<br/>
											</div>
											Effect<br/>
											<div style="margin-left:5%;">
												Effects<br/>
												Customized effects<br/>
											</div>
											AJAX<br/>
											<div style="margin-left:5%;">
												Interface<br/>
												Shorthand method<br/>
												AJAX event handler<br/>
												Helper functions<br/>
											</div>
											JSON<br/>
											Plug­in API<br/>
											<div style="margin-left:5%;">
												Study & create plug­in<br/>
											</div>
											Dimension plug­in<br/>
											<div style="margin-left:5%;">
												Size methods<br/>
												Position methods<br/>
											</div>
											Form plug­in<br/>
											<div style="margin-left:5%;">
												AJAX form submission<br/>
												Retriving form values<br/>
												Form manipulation<br/>
											</div>
											Miscellaneous methods<br/>
											Create dynamic webpages using JQuery
										</div>
									</li>
								</a>
							</ul>
						</div>
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