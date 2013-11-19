<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<?php include 'inc/global.php'; ?>

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Program of Studies</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <link rel="stylesheet" href="css/form.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>
 
</head>
<body>
<?php include 'inc/uploadxml.php';?>
<?php include 'inc/load.php';?>
<?php
			if ($_POST['area']!='') {
			  	$area=$_POST['area']; 
			  } else {
			  	$area=$file_data['area']; 
			  }

			 $name = preg_replace('/_/', ' ', $area);
			 $name = ucwords($name);
?>

	<div class="row">
		<div class="small-12 columns">
			<h2>Program of Studies</h2>
			<h3>Electrical Engineering &middot; Master's Degree</h3>
			<h4>Area: <?php  echo $name;?></h4>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns">
			<form action="print.php" method="post" data-abide>
				<input name="area" type="hidden" value="<?php  echo $area;?>">
			  <fieldset>
			    <legend>Personal Information</legend>
				<div class="row">
					<div class="small-4 columns">
					    <label>First Name</label>
					    <input name="firstName" id="firstName" type="text" placeholder="First Name" value="<?php echo $file_data['firstName']?>" required>
					</div>
					<div class="small-4 columns">
					    <label>Middle Name</label>
					    <input name="middleName" id="middleName" type="text" placeholder="Middle Name" value="<?php echo $file_data['middleName']?>">
					</div>
					<div class="small-4 columns">
					    <label>Last Name</label>
					    <input name="lastName" id="lastName" type="text" placeholder="Last Name" value="<?php echo $file_data['lastName']?>" required>
					</div>
			    </div>
			    <div class="row">
					<div class="small-4 columns">
					    <label>SCU ID #</label>
					    <div class="row collapse">
							<div class="small-2 columns">
					    		<span class="prefix">W</span>
					    	</div>
							<div class="small-10 columns">
					    		<input name="SCUid" id="SCUid" type="text" placeholder="0123456" value="<?php echo $file_data['SCUid']?>" required>
					    	</div>
					    </div>
					</div>
					<div class="small-4 columns">
					    <label>Home Phone</label>
					    <input name="homePhone" id="homePhone" type="text" placeholder="(408) 555-5555" value="<?php echo $file_data['homePhone']?>" required>
					</div>
					<div class="small-4 columns">
					    <label>Work Phone</label>
					    <input name="workPhone" id="workPhone" type="text" placeholder="(408) 555-5555" value="<?php echo $file_data['workPhone']?>">
					</div>
			    </div>
			    <div class="small-centered row">
					<div class="small-4 columns">
					    <label>E-mail Address</label>
							<input name="email" id="email" type="email" placeholder="user@domain.com" value="<?php echo $file_data['email']?>" required>
					</div>

					<div class="small-4 columns">
					    <label for="advisor">Faculty Advisor</label>
						<select name="advisor" id="advisor" required>
						    <option value="">Select an advisor</option>
							<?php
								$temp = $_SESSION['xmlDataBase'][$area]['advisors'];
								$i=0;
								foreach ($temp as $value) {
									$i++;
									$str=$value;
									echo "<option ";
									if ($file_data['advisor'] == $str) echo "SELECTED";
									echo ' value="'.$value.'">'.$value.'</option>';
								}
							?>
						  </select>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Graduate Core Requirements (minimum of 6 units)</legend>
				<div class="row">
					<div class="small-12 columns">
					    <h6>Emerging Topics in Engineering</h6>
						<div class="row">
							<div class="small-3 columns">
							    <label>Course Number</label>
							    <input name="core1_number" id="core1_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['core1_number']?>" required>
							</div>
							<div class="small-7 columns">
							    <label>Course Title</label>
							    <input name="core1_title" id="core1_title" type="text" placeholder="Course Title" value="<?php echo $file_data['core1_title']?>" required>
							</div>
							<div class="small-2 columns">
							    <label>Number of Units <small>1-5</small></label>
							    <input name="core1_units" id="core1_units"  type="text" value="<?php echo $file_data['core1_units']?>"  pattern="max5" required>
							</div>
						</div>

				   
					</div>
					</div>
				<div class="row">
					<div class="small-12 columns">
					    <h6>Engineering and Business/Entrepreneurship</h6>
						<div class="row">
							<div class="small-3 columns">
							    <label>Course Number</label>
							    <input name="core2_number" id="core2_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['core2_number']?>" required>
							</div>
							<div class="small-7 columns">
							    <label>Course Title</label>
							    <input name="core2_title" id="core2_title" type="text" placeholder="Course Title" value="<?php echo $file_data['core2_title']?>" required>
							</div>
							<div class="small-2 columns">
							    <label>Number of Units <small>1-5</small></label>
							    <input name="core2_units" id="core2_units" type="text" value="<?php echo $file_data['core2_units']?>"  pattern="max5" required>
							</div>
						</div>

				   
					</div>
					</div>
				<div class="row">
					<div class="small-12 columns">
					    <h6>Engineering and Society</h6>
						<div class="row">
							<div class="small-3 columns">
							    <label>Course Number</label>
							    <input name="core3_number" id="core3_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['core3_number']?>" required>
							</div>
							<div class="small-7 columns">
							    <label>Course Title</label>
							    <input name="core3_title" id="core3_title" type="text" placeholder="Course Title" value="<?php echo $file_data['core3_title']?>" required>
							</div>
							<div class="small-2 columns">
							    <label>Number of Units <small>1-5</small></label>
							    <input name="core3_units" id="core3_units" type="text" value="<?php echo $file_data['core3_units']?>"  pattern="max5" required>
							</div>
						</div>

				   
					</div>
					</div>

				<div class="row">
					<div class="small-12 columns">
						<p>For more information about the Graduate Core and the courses that satisfy each requirement, please visit the <a href="http://www.scu.edu/engineering/graduate/information/core.cfm" target="_blank">Graduate Core website</a>.</p>
					</div>
			    </div>
			    
			  </fieldset>
			  <fieldset>
			    <legend>Applied Mathematics (4 units required)</legend>
				<div class="row">
					<div class="small-6 columns">
					    <label>Course Number One</label>
						 <div class="row"><hr/>
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="amth1_number" id="amth1_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['amth1_number']?>" required>
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units <small>1-5</small></label>
							    <input name="amth1_units" id="amth1_units" type="text" value="<?php echo $file_data['amth1_units']?>" pattern="max5" required>
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="amth1_title" id="amth1_title" placeholder="Course Title" type="text" value="<?php echo $file_data['amth1_title']?>" required>

					</div>
					<div class="small-6 columns">
					    <label>Course Number Two</label>
						 <div class="row"><hr/>
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="amth2_number" id="amth2_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['amth2_number']?>" required>
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units <small>1-5</small></label>
							    <input name="amth2_units" id="amth2_units" type="text" value="<?php echo $file_data['amth2_units']?>"  pattern="max5" required>
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="amth2_title" id="amth2_title" placeholder="Course Title" type="text" value="<?php echo $file_data['amth2_title']?>" required>

					</div>
			    </div>
			    <div class="row">
					<div class="small-12 columns">
						<p>A list of Applied Mathematics courses and their syllabi can be found <a href="http://syllabi.engr.scu.edu/list.cgi?dept=AMTH" target="_blank">here</a>. The bulletin can be found <a href="http://www.scu.edu/academics/bulletins/engineering/amth.cfm" target="_blank">here</a>.</p>
						<p>If you used an Applied Mathematics course to satisfy a Graduate Core requirement, it can also satisfy an Applied Mathematics requirement with the approval of your advisor.</p>
					</div>
			    </div>
			  </fieldset>
			  <?php include 'inc/'.$area.'.php'; ?>

			  <fieldset>
			    <legend>Additional Elective Courses</legend>
			    <div class="row">
					<div class="small-12 columns">
						<p>The following courses must be approved by your academic advisor.</p>
					</div>
			    </div>

<?php

for ($i=1; $i < $electiveMax+1; $i++) {
	$active ='disabled';
	if ($file_data['elective'.$i.'_number']!='' || $i < 4) $active='';
	echo '
				<div class="row elective'.$i.' '.$active.'">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective'.$i.'_number" id="elective'.$i.'_number" type="text" placeholder="ELEN 000" value="'.$file_data['elective'.$i.'_number'].'">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective'.$i.'_title" id="elective'.$i.'_title" type="text" placeholder="Course Title" value="'.$file_data['elective'.$i.'_title'].'">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units <small>1-5</small></label>
					    <input name="elective'.$i.'_units" id="elective'.$i.'_units" type="text" value="'.$file_data['elective'.$i.'_units'].'" pattern="max5">
					</div>
					
			    </div>
		';
}

?>			    
			  </fieldset>
			  <fieldset>
			    <legend>Transfer Credit Requested</legend>
			    <div class="row">
					<div class="small-12 columns">
						<p>If you are transferring from a semester-based school, multiply the number of credits by 1.5.</p>
						
						<ul class="panel">
							<li>One official transcript is sent to the Graduate Services Office by the registrar of the institution(s).</li>
							<li>Transcripts must indicate that transfer units were not used to satisfy other degree requirements.</li>
							<li>Extension or continuing education units are <em>not</em> accepted for transfer credit.</li>
							<li>Credit will not be allowed for courses that duplicate prior work.</li>
						</ul>
						
					</div>
			    </div>
			    <div class="row">

					<div class="small-6 columns">
					    <label for="institution">Institution</label>
						<select name="institution" id="institution">
						    <option value="">Select an institution</option>
						    <option <?php if ($file_data['institution']=="Santa Clara University") {echo "SELECTED ";}?> value="Santa Clara University">Santa Clara University (12 units maximum)</option>
						    <option <?php if ($file_data['institution']=="Santa Clara University 5 Year Program") {echo "SELECTED ";}?>value="Santa Clara University 5 Year Program">Santa Clara University 5 Year Program (20 units maximum)</option>
						    <option <?php if ($file_data['institution']=="Other") {echo "SELECTED ";}?>value="Other">Other (9 units maximum)</option>
						  </select>
					</div>

					<div class="small-6 columns">
					    <label>If other institution, please name:</label>
						<input name="transferInstitution" id="transferInstitution" type="text" placeholder="Institution Name" value="<?php echo $file_data['transferInstitution']?>">
					</div>

			    </div>

<?php

for ($i=1; $i < $transferMax+1; $i++) {
	$active ='disabled';
	if ($file_data['transfer'.$i.'_number']!='' || $i < 4) $active='';
	echo '
				<div class="row transfer'.$i.' '.$active.'">
					<div class="small-2 columns">
					    <label>Course #</label>
					    <input name="transfer'.$i.'_number" id="transfer'.$i.'_number" type="text" placeholder="ELEN 000" value="'.$file_data['transfer'.$i.'_number'].'">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer'.$i.'_title" id="transfer'.$i.'_title" type="text" placeholder="Course Title" value="'.$file_data['transfer'.$i.'_title'].'">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units <small>1-9</small></label>
					    <input name="transfer'.$i.'_units" id="transfer'.$i.'_units" type="text" value="'.$file_data['transfer'.$i.'_units'].'" pattern="max9">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer'.$i.'_grade" id="transfer'.$i.'_grade" type="text" placeholder="Grade" value="'.$file_data['transfer'.$i.'_grade'].'">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer'.$i.'_year" id="transfer'.$i.'_year" type="text" placeholder="YYYY" value="'.$file_data['transfer'.$i.'_year'].'">
					</div>

			    </div>

		';
}

?>			    

				
			    <hr/>
			    <div class="row">
					<div class="small-4 columns">
					    <p>Transfer Units: <span class="transferUnits">0</span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total SCU Units: <span class="totalSCUUnits">0</span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total Units (45 quarter units min): <span class="totalUnits">0</span></p>
					</div>
					<input type="hidden" name="transferUnits" class="transferUnits">
					<input type="hidden" name="totalSCUUnits" class="totalSCUUnits">
					<input type="hidden" name="totalUnits" class="totalUnits">
			    </div>
			    <div class="row">
					<div class="small-12 columns">
						<p>Note: Prerequisite courses are not included in the total SCU unit count.</p>
					</div>
			    </div>

			  </fieldset>
			  <hr/>
			  <div class="row">
			  		<div class="small-11 small-centered columns panel">
						<p>I understand it is my responsibility:</p>
						
						<ul>
							<li>To ensure that transcripts for transfer credits are sent to Graduate Services Office.</li>
							<li>To obtain my advisor's approval and signature of this program and of any subsequent changes needed.</li>
							<li>To complete the program as approved with a minimum of 45 units and 3.0 GPA.</li>

						</ul>
						<input type="submit" class="button" value="Submit">
					</div>
			</div>

			</form>
		</div>
	</div>

		

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
  <script src="js/foundation.min.js"></script>
   <script src="js/foundation/foundation.abide.js"></script>
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
  
 
  
  -->
  
  <script>
    $(document).foundation().foundation('abide', {
   live_validate : true,
   focus_on_invalid : true,
   timeout : 1000,

    patterns : {
    max5:/^[1-5]$/,
    max9:/^[1-9]$/
  }
});
  </script>
  <script type="text/javascript" src="js/form_functions.js"></script>
			  <?php include 'inc/'.$area.'_js.php'; ?>

  <script type="text/javascript">
  	window.database = <?php echo $JavaScript_Array;?>;
  $(function(){ 

  	$('input,select').change(function(){addUnits();});
  	$('div[class*="elective"] input').change(newElective);
  	$('div[class*="transfer"] input').change(newTransfer);
  	$('div[class*="elective"] input').change(fillElective);
  	$('div[class*="transfer"] input').change(fillTransfer);
  	$('input[name*="number"]').change(autocomplete);
  	$('input[type!="checkbox"],select').change(showInfo);
  	$('input[type!="checkbox"][type!="radio"]:visible,select').each(showInfo);
  });
  </script>


</body>
</html>
