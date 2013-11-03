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
  <script type="text/javascript">
  	function onDownload() {
    document.location = 'data:Application/octet-stream,' +
                         encodeURIComponent('<?php include 'inc/save.php';?>');
}
  </script>
  
</head>
<body>	<div class="row">
		<div class="small-8 columns">
			<h2>Program of Studies</h2>
			<h3>Electrical Engineering &middot; Master's Degree</h3>
			<h4>Area: Systems</h4>
		</div>
		<div class="small-4 columns">
			<a href="javascript:window.print()" class="button">Print</a>
			<a href="javascript:onDownload()" class="button">Save</a>
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns">
			<form>
				<fieldset>
				<legend>Personal Information</legend>
				<div class="row">
					<div class="small-2 columns">
					    <p><?echo $_POST['firstName'];?></p>
					</div>
					<div class="small-2 columns">
					    <p><?echo $_POST['middleName'];?></p>
					</div>
					<div class="small-2 columns">
					    <p><?echo $_POST['lastName'];?></p>
					</div>
					<div class="small-6 columns">
					    <p><?echo $_POST['SCUid'];?></p>
					</div>
					
			    </div>
			    <div class="row">

					<div class="small-4 columns">
					    <p><?echo $_POST['homePhone'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?echo $_POST['workPhone'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?echo $_POST['email'];?></p>
					</div>
			    </div>
			    <div class="row">
					<div class="small-4 columns">
						<p>Advisor: Dr. Sally Wood</p>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Graduate Core Requirements (minimum of 6 units)</legend>
				<div class="row">
					<div class="small-4 columns">
					    <p><?echo $_POST['core1'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?echo $_POST['core2'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?echo $_POST['core3'];?></p>
					</div>
			    </div>    
			  </fieldset>
			  <fieldset>
			    <legend>Applied Mathematics (4 units required)</legend>
				<div class="row">
					<div class="small-4 columns">
					    <p><?echo $_POST['amth1'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?echo $_POST['amth2'];?></p>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Electrical Engineering Core Focus Area: Systems</legend>
				<div class="row">
					<? 
					foreach($_POST['focus1'] as $val)
		            {
		                echo '<div class="small-4 columns">';
		                echo '<p>'.$val.'</p>';
		                echo '</div>';
		            }
	            	?>
					<div class="small-4 columns">
					    <p><?echo $_POST['focus3'];?></p>
					</div>
			    </div>    
			  </fieldset>
			  <fieldset>
			    <legend>Core Breadth: Electronics and Communication &amp; Microwave (2 units required per area)</legend>
			    <div class="row">
					<div class="small-4 columns">
					    <p><?echo $_POST['breadth1'];?></p>
					</div>
					<div class="small-4 columns">
					    <p><?echo $_POST['breadth2'];?></p>
					</div>
				</div>
			  </fieldset>
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
						for ($i=1; $i < 7; $i++) { 
							if ($_POST['elective'.$i.'_number']!='' && $_POST['elective'.$i.'_title']!='' && $_POST['elective'.$i.'_units']!='' && $_POST['elective'.$i.'_units']!=0) {
					    		if ($i % 2 == 1) {echo '<div class="small-6 columns">';}
					    		echo "<p>";
					    			echo $_POST['elective'.$i.'_number']." - ".$_POST['elective'.$i.'_title']." - ".$_POST['elective'.$i.'_units'];
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
						<?
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
						for ($i=1; $i < 7; $i++) { 
							if ($_POST['transfer'.$i.'_number']!='' && $_POST['transfer'.$i.'_title']!='' && $_POST['transfer'.$i.'_units']!='' && $_POST['transfer'.$i.'_units']!=0 && $_POST['transfer'.$i.'_grade']!='' && $_POST['transfer'.$i.'_year']!='') {
					    		if ($i % 2 == 1) {echo '<div class="small-6 columns">';}
					    		echo "<p>";
					    			echo $_POST['transfer'.$i.'_number']." - ".$_POST['transfer'.$i.'_title']." - ".$_POST['transfer'.$i.'_units']." - ".$_POST['transfer'.$i.'_grade']." &middot; ".$_POST['transfer'.$i.'_year'];
					    		echo "</p>";
					    		if ($i % 2 == 1) {echo '</div>';}
					    	}
						}
					?>
			    </div>

			    <hr/>
			    <div class="row">
					<div class="small-4 columns">
					    <p>Transfer Units: <span>0</span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total SCU Units: <span>0</span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total Units (45 quarter units minimum): <span>0</span></p>
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
