<!--/*******************************************************************************
@file_name contact_us.php
@company Tech Schema
@author Hemraj Jibhau Solanki
@created_date 28 July 2014
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
		<title>Meet us</title>
		<meta name="description" content="academy tech schema address">
		<meta name="keywords" content="B.Sc it classes in mumbai thane ulhasnagar dombivali badlapur, php mysql classes in ulhasnagar dombivali thane badlapur, ruby on rails classes in  ulhasnagar dombivali thane badlapur, academy tech schema address">
		<?php
		     require_once('../configuration.php');
		     require_once(LIB.'db.php');
		     include_once(LAYOUT.'stylesheet.php');
		     include_once(LAYOUT.'javascript.php');
		?>
		<script type="text/javascript">
			
		</script>
	</head>
	<body style="background-color: #5DBB55;">
		<div class="container-fluid">
			<?php include_once(LAYOUT.'header.php'); ?>
			<div class="row-fluid">
				<div class="span12" style="background-color: #5DBB55; height: 900px;">
					<span style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 4em; display: block; padding: 0 0 0 1em; line-height: 60px; letter-spacing: 2px;margin-left: 50px;margin-top: 10px">
						CONTACT US
					</span>
					<p style="border: 1px solid #B4DBBf; padding: .5em 0 0 0; background-color: #B4DBBf; margin-top: 20px;"></p>
					<div class="row-fluid">
						<div class="span12" style="padding: 0 0 0 1em;">
							<div class="span3">
								<ul style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1em;letter-spacing: 2px;margin-left: 100px;margin-top: 25px;list-style: none">
									<a href="#block_1" style="color: #fff"><i class="fa fa-envelope-o" style="float: left"></i><li style="float: left; margin-left: 10px">Contact Information</li></a><br/>
									<a href="#block_2" style="color: #fff;"><i class="fa fa-folder-open-o" style="float: left; margin-top: 10px;"></i><li style="float: left; margin-left: 10px; margin-top: 10px">Opening Hours</li></a>
								</ul>
							</div>
							<div class="span9">
								<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 50px;margin-top: 10px" id="block_1">
									CONTACT INFORMATION
								</span>
								<p style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 1em; display: block;letter-spacing: 2px;margin-left: 50px;margin-top: 10px">
									<b>Mailing address</b><br/>
									Shop No. 4<br/> 
									Shivshankar apt.<br/>  
									Next to Ambica temple<br/>
									Ulhasnagar-421004
								</p>
								<p style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 1em; display: block;letter-spacing: 2px;margin-left: 50px;margin-top: 15px">
									<b>Email</b><br/>
									info@techschema.com
								</p>
								<p style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 1em; display: block;letter-spacing: 2px;margin-left: 50px;margin-top: 15px">
									<b>Mobile / WhatsApp No.</b><br/>
									+91 &mdash; 9604737557<br/> 
									+91 &mdash; 9920518910<br/>
									+91 &mdash; 8108970148<br/>
								</p>
								<p style="border: 1px solid #B4DBBf; background-color: #B4DBBf; margin-top: 20px; margin-left: 50px; width: 50%"></p>
								<span style="display: block;width: 9px;height: 9px;margin-top: -17px;margin-left: 48px; border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
								<span style="display: block;width: 9px;height: 9px;margin-top: -11px;margin-left:55%;border: 1px solid #B4DBBf;border-radius: 5px;background-color: #fff;"></span>
								<span style="font-family: Raleway; font-weight: bold; color: #fff; font-size: 1.5em; display: block; line-height: 60px; letter-spacing: 2px;margin-left: 50px;margin-top: 20px" id="block_2">
									OPENING HOURS
								</span>
								<p style="font-family: Raleway; font-weight: normal; color: #fff; font-size: 1em; display: block;letter-spacing: 2px;margin-left: 50px;margin-top: 10px">
									<b>Regular office hours</b><br/>
									Monday to Sunday 08.30 to 20.00.<br/><br/>
									Note: We are available any time for your help.<br/> 
								</p>		
							</div>
						</div>
					</div>
					
					<!--div style="padding: 0 0 0 12em;">
						<input type="text" style="height: 50px; width: 500px; background: rgba(255,255,255,0.6); color: #fff; font-size: 20px; left-margin: 50px; line-height: 24px;" value="2000"></input><br/>
					</div-->
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12" style="background-color: #39AE9D; border-color: #B4DBBf">
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