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
			<form class="custom" action="print.php" method="post">
				<input name="area" type="hidden">
			  <fieldset>
			    <legend>Personal Information</legend>
				<div class="row">
					<div class="small-4 columns">
					    <label>First Name</label>
					    <input name="firstName" id="firstName" type="text" placeholder="First Name" value="<?php echo $file_data['firstName']?>">
					</div>
					<div class="small-4 columns">
					    <label>Middle Name</label>
					    <input name="middleName" id="middleName" type="text" placeholder="Middle Name" value="<?php echo $file_data['middleName']?>">
					</div>
					<div class="small-4 columns">
					    <label>Last Name</label>
					    <input name="lastName" id="lastName" type="text" placeholder="Last Name" value="<?php echo $file_data['lastName']?>">
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
					    		<input name="SCUid" id="SCUid" type="text" placeholder="0123456" value="<?php echo $file_data['SCUid']?>">
					    	</div>
					    </div>
					</div>
					<div class="small-4 columns">
					    <label>Home Phone</label>
					    <input name="homePhone" id="homePhone" type="text" placeholder="(408) 555-5555" value="<?php echo $file_data['homePhone']?>">
					</div>
					<div class="small-4 columns">
					    <label>Work Phone</label>
					    <input name="workPhone" id="workPhone" type="text" placeholder="(408) 555-5555" value="<?php echo $file_data['workPhone']?>">
					</div>
			    </div>
			    <div class="small-centered row">
					<div class="small-4 columns">
					    <label>E-mail Address</label>
							<input name="email" id="email" type="email" placeholder="user@domain.com" value="<?php echo $file_data['email']?>">
					</div>

					<div class="small-4 columns">
					    <label for="advisor">Faculty Advisor</label>
						<select name="advisor" id="advisor">
						    <option>Select an advisor</option>
						    <option>This is another option</option>
						    <option>This is another option too</option>
						    <option>Look, a third option</option>
						  </select>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Graduate Core Requirements (minimum of 6 units)</legend>
				<div class="row">
					<div class="small-12 columns">
					    <label>Emerging Topics in Engineering</label>
						<div class="row"><hr/>
							<div class="small-3 columns">
							    <label>Course Number</label>
							    <input name="core1_number" id="core1_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['core1_number']?>">
							</div>
							<div class="small-7 columns">
							    <label>Course Title</label>
							    <input name="core1_title" id="core1_title" type="text" placeholder="Course Title" value="<?php echo $file_data['core1_title']?>">
							</div>
							<div class="small-2 columns">
							    <label>Number of Units</label>
							    <input name="core1_units" id="core1_units" type="number"  min="0" max="5" value="<?php echo $file_data['core1_units']?>">
							</div>
						</div>

				   
					</div>
					</div>
				<div class="row">
					<div class="small-12 columns">
					    <label>Engineering and Business/Entrepreneurship</label>
						<div class="row"><hr/>
							<div class="small-3 columns">
							    <label>Course Number</label>
							    <input name="core2_number" id="core2_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['core2_number']?>">
							</div>
							<div class="small-7 columns">
							    <label>Course Title</label>
							    <input name="core2_title" id="core2_title" type="text" placeholder="Course Title" value="<?php echo $file_data['core2_title']?>">
							</div>
							<div class="small-2 columns">
							    <label>Number of Units</label>
							    <input name="core2_units" id="core2_units" type="number"  min="0" max="5" value="<?php echo $file_data['core2_units']?>">
							</div>
						</div>

				   
					</div>
					</div>
				<div class="row">
					<div class="small-12 columns">
					    <label>Engineering and Society</label>
						<div class="row"><hr/>
							<div class="small-3 columns">
							    <label>Course Number</label>
							    <input name="core3_number" id="core3_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['core3_number']?>">
							</div>
							<div class="small-7 columns">
							    <label>Course Title</label>
							    <input name="core3_title" id="core3_title" type="text" placeholder="Course Title" value="<?php echo $file_data['core3_title']?>">
							</div>
							<div class="small-2 columns">
							    <label>Number of Units</label>
							    <input name="core3_units" id="core3_units" type="number"  min="0" max="5" value="<?php echo $file_data['core3_units']?>">
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
						 		<input name="amth1_number" id="amth1_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['amth1_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="amth1_units" id="amth1_units" type="number"  min="0" max="5" value="<?php echo $file_data['amth1_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="amth1_title" id="amth1_title" placeholder="Course Title" type="text" value="<?php echo $file_data['amth1_title']?>">

					</div>
					<div class="small-6 columns">
					    <label>Course Number Two</label>
						 <div class="row"><hr/>
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="amth2_number" id="amth2_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['amth2_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="amth2_units" id="amth2_units" type="number"  min="0" max="5" value="<?php echo $file_data['amth2_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="amth2_title" id="amth2_title" placeholder="Course Title" type="text" value="<?php echo $file_data['amth2_title']?>">

					</div>
			    </div>
			    <div class="row">
					<div class="small-12 columns">
						<p>A list of Applied Mathematics courses and their syllabi can be found <a href="http://syllabi.engr.scu.edu/list.cgi?dept=AMTH" target="_blank">here</a>.</p>
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

				<div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective1_number" id="elective1_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['elective1_number']?>">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective1_title" id="elective1_title" type="text" placeholder="Course Title" value="<?php echo $file_data['elective1_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective1_units" id="elective1_units" type="number"  min="0" max="5" value="<?php echo $file_data['elective1_units']?>">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective2_number" id="elective2_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['elective2_number']?>">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective2_title" id="elective2_title" type="text" placeholder="Course Title" value="<?php echo $file_data['elective2_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective2_units" id="elective2_units" type="number"  min="0" max="5" value="<?php echo $file_data['elective2_units']?>">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective3_number" id="elective3_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['elective3_number']?>">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective3_title" id="elective3_title" type="text" placeholder="Course Title" value="<?php echo $file_data['elective3_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective3_units" id="elective3_units" type="number"  min="0" max="5" value="<?php echo $file_data['elective3_units']?>">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective4_number" id="elective4_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['elective4_number']?>">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective4_title" id="elective4_title" type="text" placeholder="Course Title" value="<?php echo $file_data['elective4_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective4_units" id="elective4_units" type="number"  min="0" max="5" value="<?php echo $file_data['elective4_units']?>">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective5_number" id="elective5_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['elective5_number']?>">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective5_title" id="elective5_title" type="text" placeholder="Course Title" value="<?php echo $file_data['elective5_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective5_units" id="elective5_units" type="number"  min="0" max="5" value="<?php echo $file_data['elective5_units']?>">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective6_number" id="elective6_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['elective6_number']?>">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective6_title" id="elective6_title" type="text" placeholder="Course Title" value="<?php echo $file_data['elective6_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective6_units" id="elective6_units" type="number"  min="0" max="5" value="<?php echo $file_data['elective6_units']?>">
					</div>
					
			    </div>
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
						    <option <?php if ($file_data['institution']==" Other") {echo "SELECTED ";}?>value="Other">Other (9 units maximum)</option>
						  </select>
					</div>

					<div class="small-6 columns">
					    <label>If other institution, please name:</label>
						<input name="transferInstitution" id="transferInstitution" type="text" placeholder="Institution Name" value="<?php echo $file_data['transferInstitution']?>">
					</div>

			    </div>

				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer1_number" id="transfer1_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['transfer1_number']?>">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer1_title" id="transfer1_title" type="text" placeholder="Course Title" value="<?php echo $file_data['transfer1_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer1_units" id="transfer1_units" type="number"  min="0" max="5" value="<?php echo $file_data['transfer1_units']?>">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer1_grade" id="transfer1_grade" type="text" placeholder="Grade" value="<?php echo $file_data['transfer1_grade']?>">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer1_year" id="transfer1_year" type="text" placeholder="YYYY" value="<?php echo $file_data['transfer1_year']?>">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer2_number" id="transfer2_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['transfer2_number']?>">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer2_title" id="transfer2_title" type="text" placeholder="Course Title" value="<?php echo $file_data['transfer2_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer2_units" id="transfer2_units" type="number"  min="0" max="5" value="<?php echo $file_data['transfer2_units']?>">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer2_grade" id="transfer2_grade" type="text" placeholder="Grade" value="<?php echo $file_data['transfer2_grade']?>">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer2_year" id="transfer2_year" type="text" placeholder="YYYY" value="<?php echo $file_data['transfer2_year']?>">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer3_number" id="transfer3_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['transfer3_number']?>">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer3_title" id="transfer3_title" type="text" placeholder="Course Title" value="<?php echo $file_data['transfer3_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer3_units" id="transfer3_units" type="number"  min="0" max="5" value="<?php echo $file_data['transfer3_units']?>">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer3_grade" id="transfer3_grade" type="text" placeholder="Grade" value="<?php echo $file_data['transfer3_grade']?>">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer3_year" id="transfer3_year" type="text" placeholder="YYYY" value="<?php echo $file_data['transfer3_year']?>">
					</div>

			    </div>

				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer4_number" id="transfer4_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['transfer4_number']?>">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer4_title" id="transfer4_title" type="text" placeholder="Course Title" value="<?php echo $file_data['transfer4_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer4_units" id="transfer4_units" type="number"  min="0" max="5" value="<?php echo $file_data['transfer4_units']?>">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer4_grade" id="transfer4_grade" type="text" placeholder="Grade" value="<?php echo $file_data['transfer4_grade']?>">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer4_year" id="transfer4_year" type="text" placeholder="YYYY" value="<?php echo $file_data['transfer4_year']?>">
					</div>

			    </div>

				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer5_number" id="transfer5_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['transfer5_number']?>">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer5_title" id="transfer5_title" type="text" placeholder="Course Title" value="<?php echo $file_data['transfer5_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer5_units" id="transfer5_units" type="number"  min="0" max="5" value="<?php echo $file_data['transfer5_units']?>">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer5_grade" id="transfer5_grade" type="text" placeholder="Grade" value="<?php echo $file_data['transfer5_grade']?>">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer5_year" id="transfer5_year" type="text" placeholder="YYYY" value="<?php echo $file_data['transfer5_year']?>">
					</div>

			    </div>


				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer6_number" id="transfer6_number" type="text" placeholder="ELEN 000" value="<?php echo $file_data['transfer6_number']?>">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer6_title" id="transfer6_title" type="text" placeholder="Course Title" value="<?php echo $file_data['transfer6_title']?>">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer6_units" id="transfer6_units" type="number"  min="0" max="5" value="<?php echo $file_data['transfer6_units']?>">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer6_grade" id="transfer6_grade" type="text" placeholder="Grade" value="<?php echo $file_data['transfer6_grade']?>">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer6_year" id="transfer6_year" type="text" placeholder="YYYY" value="<?php echo $file_data['transfer6_year']?>">
					</div>

			    </div>

				
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
					<div class="small-8 columns">
						<p>Note: Prerequisite courses are not included in the total SCU unit count.</p>
					</div>
					<div class="small-4 columns">
						<a class="button small secondary count">Count</a>
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
						<input type="submit" class="button">
					</div>
			</div>

			</form>
		</div>
	</div>

		

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  
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
  <script type="text/javascript" src="js/form_functions.js"></script>
			  <?php include 'inc/'.$area.'_js.php'; ?>
  <script type="text/javascript">

  $('.count').click(function() {
  addUnits();
});
  </script>


</body>
</html>
