<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<?php include 'inc/global.php'; ?>

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Program of Studies</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" type="text/css" href="css/print.css">

  <script src="js/vendor/custom.modernizr.js"></script>
	  
</head>
<body>	
<?php include 'inc/save.php'; ?>
<?php
			if ($_POST['area']!='') {
			  	$area=$_POST['area']; 
			  }

			 $name = preg_replace('/_/', ' ', $area);
			 $name = ucwords($name);
?>

	<div class="row">
		<div class="small-8 columns">
			<h2>Program of Studies</h2>
			<h3>Electrical Engineering &middot; Master's Degree</h3>
			<h4>Area: <?php  echo $name;?></h4>
		</div>
		<div class="small-4 columns">
			<a href="javascript:window.print()" class="button hide-on-print">Print</a>
			<a href="download.php" target="_blank" class="button hide-on-print">Save</a>
			<p class="print-only">Student Initial Here:</p>
			<p class="print-only">Advisor Initial Here:</p>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns">
			<form>
				<fieldset>
				<legend>Personal Information</legend>
				<div class="row">
					<div class="small-4 columns">
					    <p><?php echo $_POST['firstName'].' '.$_POST['middleName'].' '.$_POST['lastName'];?></p>
					</div>

					<div class="small-4 columns">
					    <p><?php echo 'SCU #: W'.$_POST['SCUid'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?php echo $_POST['email'];?></p>
					</div>

					
			    </div>
			    <div class="row">

					<div class="small-4 columns">
					    <p><?php if ($_POST['homePhone']!='') echo 'Home: '.$_POST['homePhone'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?php if ($_POST['workPhone']!='') echo 'Work: '.$_POST['workPhone'];?></p>
					</div>
					<div class="small-4 columns">
						<p>Advisor: <?php echo $_POST['advisor'];?></p>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Graduate Core Requirements (minimum of 6 units)</legend>
				<div class="row">
					<div class="small-4 columns">
					    <p><?php echo $_POST['core1_number']." - ".$_POST['core1_title'].", ".$_POST['core1_units']." Units";?></p>
					</div>
					<div class="small-4 columns">
					    <p><?php echo $_POST['core2_number']." - ".$_POST['core2_title'].", ".$_POST['core2_units']." Units";?></p>
					</div>
					<div class="small-4 columns">
					    <p><?php echo $_POST['core3_number']." - ".$_POST['core3_title'].", ".$_POST['core3_units']." Units";?></p>
					</div>
			    </div>    
			  </fieldset>
			  <fieldset>
			    <legend>Applied Mathematics (4 units required)</legend>
				<div class="row">
					<div class="small-6 columns">
					    <p><?php echo $_POST['amth1_number']." - ".$_POST['amth1_title'].", ".$_POST['amth1_units']." Units";?></p>
					</div>
					<div class="small-6 columns">
					    <p><?php echo $_POST['amth2_number']." - ".$_POST['amth2_title'].", ".$_POST['amth2_units']." Units";?></p>
					</div>
			    </div>
			  </fieldset>
			  <?php include 'inc/'.$area.'_print.php'; ?>

			  <fieldset>
			    <legend>Additional Elective Courses</legend>
			    <div class="row">
					<div class="small-12 columns">
						<p>The following courses must be approved by your academic advisor.</p>
					</div>
			    </div>

				<div class="row">
					<?php 
						# Output only when filled
						for ($i=1; $i < $electiveMax+1; $i++) { 
							if ($_POST['elective'.$i.'_number']!='' && $_POST['elective'.$i.'_title']!='' && $_POST['elective'.$i.'_units']!='' && $_POST['elective'.$i.'_units']!=0) {
					    		if ($i % 2 == 1) {echo '<div class="small-6 columns">';}
					    		echo "<p>";
					    			echo $_POST['elective'.$i.'_number']." - ".$_POST['elective'.$i.'_title'].", ".$_POST['elective'.$i.'_units']." Units";
					    		echo "</p>";
					    		if ($i % 2 == 1) {echo '</div>';}
					    	}
						}
					?>

			    </div>

			  </fieldset>
			  <div id="page-break"></div>
			  <fieldset>
			    <legend>Transfer Credit Requested</legend>
			    <div class="row">
					<div class="small-12 columns">
						<p>
						<?php
							if ($_POST['institution']=="Other") {
								echo $_POST['transferInstitution'];
							} else {
								echo $_POST['institution'];
							}
								
						?>
						</p>
					</div>
			    </div>

				<div class="row">
					<?php 
						# Output only when filled
						for ($i=1; $i < $transferMax+1; $i++) { 
							if ($_POST['transfer'.$i.'_number']!='' && $_POST['transfer'.$i.'_title']!='' && $_POST['transfer'.$i.'_units']!='' && $_POST['transfer'.$i.'_units']!=0 && $_POST['transfer'.$i.'_grade']!='' && $_POST['transfer'.$i.'_year']!='') {
					    		if ($i % 2 == 1) {echo '<div class="small-6 columns">';}
					    		echo "<p>";
					    			echo $_POST['transfer'.$i.'_number']." - ".$_POST['transfer'.$i.'_title']." - ".$_POST['transfer'.$i.'_units']." Units - ".$_POST['transfer'.$i.'_grade']." &middot; ".$_POST['transfer'.$i.'_year'];
					    		echo "</p>";
					    		if ($i % 2 == 1) {echo '</div>';}
					    	}
						}
					?>
			    </div>

			    <hr/>
			    <div class="row">
					<div class="small-4 columns">
					    <p>Transfer Units: <span><?php echo $_POST['transferUnits'];?></span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total SCU Units: <span><?php echo $_POST['totalSCUUnits'];?></span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total Units (45 quarter units min): <span><?php echo $_POST['totalUnits'];?></span></p>
					</div>
			    </div>
			    <div class="row">
					<div class="small-12 columns">
						<p>Note: Prerequisite courses are not included in the total SCU unit count.</p>
					</div>
			    </div>

			  </fieldset>
			  <div class="row">
			  		<div class="small-11 small-centered columns panel">
						<p>I understand it is my responsibility:</p>
						
						<ul>
							<li>To ensure that transcripts for transfer credits are sent to Graduate Services Office.</li>
							<li>To obtain my advisor's approval and signature of this program and of any subsequent changes needed.</li>
							<li>To complete the program as approved with a minimum of 45 units and 3.0 GPA.</li>

						</ul>
					    <div class="row">
							<div class="small-6 columns">
							    <p>Student Signature:</p>
							    <p>Date:</p>
							</div>
							<div class="small-6 columns">
							    <p>Advisor Signature:</p>
							    <p>Date:</p>
							</div>
					    </div>
					 </div>
			</div>
			</form>
		</div>
	</div>

		

  <script>
  document.write('<script src=' +
  ('__proto__' in {} ? 'js/vendor/zepto' : 'js/vendor/jquery') +
  '.js><\/script>')
  </script>
  
  <script src="js/foundation.min.js"></script>
  <!--
  
  <script src="js/foundation/foundation.js"></script>
  
  <script src="js/foundation/foundation.alerts.js"></script>
  
  <script src="js/foundation/foundation.clearing.js"></script>
  
  <script src="js/foundation/foundation.cookie.js"></script>
  
  <script src="js/foundation/foundation.dropdown.js"></script>
  
  <script src="js/foundation/foundation.forms.js"></script>
  
  <script src="js/foundation/foundation.joyride.js"></script>
  
  <script src="js/foundation/foundation.magellan.js"></script>
  
  <script src="js/foundation/foundation.orbit.js"></script>
  
  <script src="js/foundation/foundation.reveal.js"></script>
  
  <script src="js/foundation/foundation.section.js"></script>
  
  <script src="js/foundation/foundation.tooltips.js"></script>
  
  <script src="js/foundation/foundation.topbar.js"></script>
  
  <script src="js/foundation/foundation.interchange.js"></script>
  
  <script src="js/foundation/foundation.placeholder.js"></script>
  
  <script src="js/foundation/foundation.abide.js"></script>
  
  -->
  
  <script>
    $(document).foundation();
  </script>
</body>
</html>
