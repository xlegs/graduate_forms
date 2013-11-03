<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<?php include 'inc/global.php'; ?>

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Program of Studies</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  

  <script src="js/vendor/custom.modernizr.js"></script>
 
</head>
<body>
<?php include 'inc/uploadxml.php';?>
<?php include 'inc/load.php';?>

	<div class="row">
		<div class="small-12 columns">
			<h2>Program of Studies</h2>
			<h3>Electrical Engineering &middot; Master's Degree</h3>
			<h4>Area: Systems</h4>
			<hr />
		</div>
	</div>

	<div class="row">
		<div class="small-12 columns">
			<form class="custom" action="print.php" method="post">
			  <fieldset>
			    <legend>Personal Information</legend>
				<div class="row">
					<div class="small-4 columns">
					    <label>First Name</label>
					    <input name="firstName" id="firstName" type="text" placeholder="First Name">
					</div>
					<div class="small-4 columns">
					    <label>Middle Name</label>
					    <input name="middleName" id="middleName" type="text" placeholder="Middle Name">
					</div>
					<div class="small-4 columns">
					    <label>Last Name</label>
					    <input name="lastName" id="lastName" type="text" placeholder="Last Name">
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
					    		<input name="SCUid" id="SCUid" type="text" placeholder="0123456">
					    	</div>
					    </div>
					</div>
					<div class="small-4 columns">
					    <label>Home Phone</label>
					    <input name="homePhone" id="homePhone" type="text" placeholder="(408) 555-5555">
					</div>
					<div class="small-4 columns">
					    <label>Work Phone</label>
					    <input name="workPhone" id="workPhone" type="text" placeholder="(408) 555-5555">
					</div>
			    </div>
			    <div class="small-centered row">
					<div class="small-4 columns">
					    <label>E-mail Address</label>
							<input name="email" id="email" type="email" placeholder="user@domain.com">
					</div>

					<div class="small-4 columns">
					    <label for="advisor">Faculty Advisor</label>
						<select name="advisor" id="advisor">
						    <option SELECTED>Select an advisor</option>
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
					<div class="small-4 columns">
					    <label>Emerging Topics in Engineering</label>
					    <input name="core1" id="core1" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Engineering and Business/Entrepreneurship</label>
					    <input name="core2" id="core2" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Engineering and Society</label>
					    <input name="core3" id="core3" type="text" placeholder="ELEN 000">
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
					    <label for="amth1">Course Number One</label>
					    <select id="amth1" name="amth1">
						    <option SELECTED value="">Select a course</option>
						    <option value="ENGR 000 - 2">This is another option</option>
						    <option value="ENGR 000 - 2">This is another option too</option>
						    <option value="ENGR 000 - 2">Look, a third option</option>
						  </select>
						<p>When a student selects a course from the above drop-down menu, that course's information will appear here.</p>
					</div>
					<div class="small-6 columns">
					    <label for="amth2">Course Number Two</label>
					    <select id="amth2" name="amth2">
						    <option SELECTED value="">Select a course</option>
						    <option value="ENGR 000 - 2">This is another option</option>
						    <option value="ENGR 000 - 2">This is another option too</option>
						    <option value="ENGR 000 - 2">Look, a third option</option>
						  </select>
						<p>When a student selects a course from the above drop-down menu, that course's information will appear here.</p>
					</div>
			    </div>
			    <div class="row">
					<div class="small-12 columns">
						<p>A list of Applied Mathematics courses and their syllabi can be found <a href="http://syllabi.engr.scu.edu/list.cgi?dept=AMTH" target="_blank">here</a>.</p>
						<p>If you used an Applied Mathematics course to satisfy a Graduate Core requirement, it can also satisfy an Applied Mathematics requirement with the approval of your advisor.</p>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Electrical Engineering Core Focus Area: Systems</legend>
			    <div class="row">
					<div class="small-6 columns">
						<p>Check any two of the following courses:</p>
					
					    <label><input name="focus1[]" id="focus1-1" type="checkbox" value="ENGR 000 - 2"> ELEN 000 - Course Name - <a href="">More Info</a></label>
					    <label><input name="focus1[]" id="focus1-2" type="checkbox" value="ENGR 001 - 2"> ELEN 000 - Course Name - <a href="">More Info</a></label>
					    <label><input name="focus1[]" id="focus1-3" type="checkbox" value="ENGR 002 - 2"> ELEN 000 - Course Name - <a href="">More Info</a></label>
					
					</div>

			    
					<div class="small-6 columns">
						<p>Choose one from the following courses:</p>
					
					    <label><input name="focus3" id="focus3-1" type="radio" value="ENGR 000 - 2"> ELEN 000 - Course Name - <a href="">More Info</a></label>
					    <label><input name="focus3" id="focus3-2" type="radio" value="ENGR 000 - 2"> ELEN 000 - Course Name - <a href="">More Info</a></label>
					    <label><input name="focus3" id="focus3-3" type="radio" value="ENGR 000 - 2"> ELEN 000 - Course Name - <a href="">More Info</a></label>
					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Core Breadth: Electronics and Communication &amp; Microwave (2 units required per area)</legend>
			    <div class="row">
					<div class="small-6 columns">
						 <label for="breadth1">Electronics and Communication</label>
						<select id="breadth1" name="breadth1">
						    <option SELECTED value="">Select a course</option>
						    <option value="ENGR 000 - 2">This is another option</option>
						    <option value="ENGR 000 - 2">This is another option too</option>
						    <option value="ENGR 000 - 2">Look, a third option</option>
						  </select>
						<p>When a student selects a course from the above drop-down menu, that course's information will appear here.</p>
					</div>
					<div class="small-6 columns">
						 <label for="breadth2">Microwave</label>
						<select id="breadth2" name="breadth2">
						    <option SELECTED value="">Select a course</option>
						    <option value="ENGR 000 - 2">This is another option</option>
						    <option value="ENGR 000 - 2">This is another option too</option>
						    <option value="ENGR 000 - 2">Look, a third option</option>
						  </select>
						<p>When a student selects a course from the above drop-down menu, that course's information will appear here.</p>

					</div>
				</div>
				 <div class="row">
					<div class="small-12 columns">
						<p>A list of all Electrical Engineering courses and their syllabi can be found <a href="http://syllabi.engr.scu.edu/list.cgi?dept=ELEN" target="_blank">here</a>. Note that only courses with a number of 200 or above are open to graduate students.</p>
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
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective1_number" id="elective1_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective1_title" id="elective1_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective1_units" id="elective1_units" type="number"  min="0" max="5" value="0">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective2_number" id="elective2_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective2_title" id="elective2_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective2_units" id="elective2_units" type="number"  min="0" max="5" value="0">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective3_number" id="elective3_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective3_title" id="elective3_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective3_units" id="elective3_units" type="number"  min="0" max="5" value="0">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective4_number" id="elective4_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective4_title" id="elective4_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective4_units" id="elective4_units" type="number"  min="0" max="5" value="0">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective5_number" id="elective5_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective5_title" id="elective5_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective5_units" id="elective5_units" type="number"  min="0" max="5" value="0">
					</div>
					
			    </div>
			    <div class="row">
					<div class="small-3 columns">
					    <label>Course Number</label>
					    <input name="elective6_number" id="elective6_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-7 columns">
					    <label>Course Title</label>
					    <input name="elective6_title" id="elective6_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="elective6_units" id="elective6_units" type="number"  min="0" max="5" value="0">
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
						    <option SELECTED value="">Select an institution</option>
						    <option value="Santa Clara University">Santa Clara University (12 units maximum)</option>
						    <option value="Santa Clara University 5 Year Program">Santa Clara University 5 Year Program (20 units maximum)</option>
						    <option value="Other">Other (9 units maximum)</option>
						  </select>
					</div>

					<div class="small-6 columns">
					    <label>If other institution, please name:</label>
						<input name="transferInstitution" id="transferInstitution" type="text" placeholder="Institution Name">
					</div>

			    </div>

				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer1_number" id="transfer1_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer1_title" id="transfer1_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer1_units" id="transfer1_units" type="number"  min="0" max="5" value="0">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer1_grade" id="transfer1_grade" type="text" placeholder="Grade">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer1_year" id="transfer1_year" type="text" placeholder="YYYY">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer2_number" id="transfer2_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer2_title" id="transfer2_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer2_units" id="transfer2_units" type="number"  min="0" max="5" value="0">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer2_grade" id="transfer2_grade" type="text" placeholder="Grade">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer2_year" id="transfer2_year" type="text" placeholder="YYYY">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer3_number" id="transfer3_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer3_title" id="transfer3_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer3_units" id="transfer3_units" type="number"  min="0" max="5" value="0">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer3_grade" id="transfer3_grade" type="text" placeholder="Grade">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer3_year" id="transfer3_year" type="text" placeholder="YYYY">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer4_number" id="transfer4_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer4_title" id="transfer4_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer4_units" id="transfer4_units" type="number"  min="0" max="5" value="0">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer4_grade" id="transfer4_grade" type="text" placeholder="Grade">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer4_year" id="transfer4_year" type="text" placeholder="YYYY">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer5_number" id="transfer5_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer5_title" id="transfer5_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer5_units" id="transfer5_units" type="number"  min="0" max="5" value="0">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer5_grade" id="transfer5_grade" type="text" placeholder="Grade">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer5_year" id="transfer5_year" type="text" placeholder="YYYY">
					</div>

			    </div>
				<div class="row">
					<div class="small-2 columns">
					    <label>Course Number</label>
					    <input name="transfer6_number" id="transfer6_number" type="text" placeholder="ELEN 000">
					</div>
					<div class="small-4 columns">
					    <label>Course Title</label>
					    <input name="transfer6_title" id="transfer6_title" type="text" placeholder="Course Title">
					</div>
					<div class="small-2 columns">
					    <label>Number of Units</label>
					    <input name="transfer6_units" id="transfer6_units" type="number"  min="0" max="5" value="0">
					</div>
					<div class="small-2 columns">
					    <label>Grade</label>
					    <input name="transfer6_grade" id="transfer6_grade" type="text" placeholder="Grade">
					</div>
					<div class="small-2 columns">
					    <label>Year Completed</label>
					    <input name="transfer6_year" id="transfer6_year" type="text" placeholder="YYYY">
					</div>

			    </div>
				
			    <hr/>
			    <div class="row">
					<div class="small-4 columns">
					    <p>Transfer Units: <span id="transferUnits">0</span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total SCU Units: <span id="totalSCUUnits">0</span></p>
					</div>
					<div class="small-4 columns">
					    <p>Total Units (45 quarter units minimum): <span id="totalUnits">0</span></p>
					</div>
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
						<input type="submit" class="button">
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
