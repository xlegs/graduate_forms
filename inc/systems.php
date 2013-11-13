		  <fieldset>
			    <legend>Electrical Engineering Core Focus Area: Systems</legend>
			    <div class="row">
					<div class="small-6 columns">
						<p>Check any two of the following courses:</p>
					<?php
						$temp = $_SESSION['xmlDataBase']['systems']['pairnumbers'][1];
						$i=0;
						foreach ($temp as $key => $value) {
							$i++;
							$str=$key.' - '.$value['units'];
							echo "<label>";
							echo "<input ";
							foreach ($file_data['focus1'] as $val) {
								if ($val == $str) echo "CHECKED";
							}
							echo ' name="focus1[]" id="focus1-'.$i.'" type="checkbox" value="'.$key.' - '.$value['units'].'"> '.$key.' - '.$value['name'].' - '.$value["units"];
							echo "</label>";
						}
					?><hr/>

				    <label> <input name="focus1-1_other" id="focus1-1_other" type="checkbox" value="Other" <?php if($file_data['focus1-1_other']=="Other") echo "CHECKED"?>>Substitute 1...</label>

					<div class="focus1-1_other <?php if($file_data['focus1-1_other']!="Other") echo "disabled"?>">

						 <div class="row">
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="focus1-1_other_number" id="focus1-1_other_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['focus1-1_other_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="focus1-1_other_units" id="focus1-1_other_units" type="number"  min="0" max="5" value="<?php echo $file_data['focus1-1_other_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="focus1-1_other_title" id="focus1-1_other_title" placeholder="Course Title" type="text" value="<?php echo $file_data['focus1-1_other_title']?>">

					    <hr/>

					 </div>

					
				    <label> <input name="focus1-2_other" id="focus1-2_other" type="checkbox" value="Other" <?php if($file_data['focus1-2_other']=="Other") echo "CHECKED"?>>Substitute 2...</label>

					<div class="focus1-2_other <?php if($file_data['focus1-2_other']!="Other") echo "disabled"?>">

						 <div class="row">
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="focus1-2_other_number" id="focus1-2_other_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['focus1-2_other_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="focus1-2_other_units" id="focus1-2_other_units" type="number"  min="0" max="5" value="<?php echo $file_data['focus1-2_other_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="focus1-2_other_title" id="focus1-2_other_title" placeholder="Course Title" type="text" value="<?php echo $file_data['focus1-2_other_title']?>">

					</div>
					</div>

			    
					<div class="small-6 columns">
						<p>Choose one from the following courses:</p>
					<?php
						$temp = $_SESSION['xmlDataBase']['systems']['pairnumbers'][2];
						$i=0;
						foreach ($temp as $key => $value) {
							$i++;
							$str=$key.' - '.$value['units'];
							echo "<label>";
							echo "<input ";
							if ($file_data['focus3'] == $str) echo "CHECKED";
							echo ' name="focus3" id="focus3-'.$i.'" type="radio" value="'.$key.' - '.$value['units'].'" required> '.$key.' - '.$value['name'].' - '.$value['units'];
							echo "</label>";
						}
					?><hr/>
					<label> <input name="focus3_other" id="focus3_other" type="checkbox" value="Other" <?php if($file_data['focus3_other']=="Other") echo "CHECKED"?>>Substitute...</label>

					<div class="focus3_other <?php if($file_data['focus3_other']!="Other") echo "disabled"?>">


						 <div class="row">
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="focus3_other_number" id="focus3_other_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['focus3_other_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="focus3_other_units" id="focus3_other_units" type="number"  min="0" max="5" value="<?php echo $file_data['focus3_other_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="focus3_other_title" id="focus3_other_title" placeholder="Course Title" type="text" value="<?php echo $file_data['focus3_other_title']?>">


					</div>

					</div>
			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Core Breadth: Electronics and Communication &amp; Microwave (2 units required per area)</legend>
			    <div class="row">
					<div class="small-6 columns">
						 <label for="breadth1">Electronics</label>
						<select id="breadth1" name="breadth1" required>
						    <option value="">Select a course</option>
						    <option value="Other">Substitute for other...</option>
							<?php
								$temp = $_SESSION['xmlDataBase']['electronics']['courses'];
								$i=0;
								foreach ($temp as $key => $value) {
									$i++;
									$str=$key.' - '.$value['units'];
									echo "<option ";
									if ($file_data['breadth1'] == $str) echo "SELECTED";
									echo ' value="'.$key.' - '.$value['units'].'"> '.$key.' - '.$value['name'].' - '.$value['units'].'</option>';
								}
							?>

						  </select>

						 <div class="breadth1_other <?php if($file_data['breadth1_other']!="Other") echo "disabled"?>">

						 <div class="row"><hr/>
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="breadth1_other_number" id="breadth1_other_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['breadth1_other_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="breadth1_other_units" id="breadth1_other_units" type="number"  min="0" max="5" value="<?php echo $file_data['breadth1_other_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="breadth1_other_title" id="breadth1_other_title" placeholder="Course Title" type="text" value="<?php echo $file_data['breadth1_other_title']?>">

					    </div>

						<p>When a student selects a course from the above drop-down menu, that course's information will appear here.</p>
					</div>
					<div class="small-6 columns">
						 <label for="breadth2">Communication &amp; Microwave</label>
						<select id="breadth2" name="breadth2" required>
						    <option value="">Select a course</option>
						    <option value="Other">Substitute for other...</option>
							<?php
								$temp = $_SESSION['xmlDataBase']['communication_and_microwave']['courses'];
								$i=0;
								foreach ($temp as $key => $value) {
									$i++;
									$str=$key.' - '.$value['units'];
									echo "<option ";
									if ($file_data['breadth2'] == $str) echo "SELECTED";
									echo ' value="'.$key.' - '.$value['units'].'"> '.$key.' - '.$value['name'].' - '.$value['units'].'</option>';
								}
							?>
						  </select>
 
						 <div class="breadth2_other <?php if($file_data['breadth2_other']!="Other") echo "disabled"?>">

						 <div class="row"><hr/>
						 	<div class="small-6 columns">
						 		<label>Course Number</label>
						 		<input name="breadth2_other_number" id="breadth2_other_number" placeholder="ELEN 000" type="text" value="<?php echo $file_data['breadth2_other_number']?>">
						 	</div>
						 	<div class="small-6 columns">
						 		<label>Course Units</label>
							    <input name="breadth2_other_units" id="breadth2_other_units" type="number"  min="0" max="5" value="<?php echo $file_data['breadth2_other_units']?>">
						 	</div>
						 </div>
					    <label>Course Title</label>
					    <input name="breadth2_other_title" id="breadth2_other_title" placeholder="Course Title" type="text" value="<?php echo $file_data['breadth2_other_title']?>">

					    </div>


						<p>When a student selects a course from the above drop-down menu, that course's information will appear here.</p>

					</div>
				</div>
				 <div class="row">
					<div class="small-12 columns">
						<p>A list of all Electrical Engineering courses and their syllabi can be found <a href="http://syllabi.engr.scu.edu/list.cgi?dept=ELEN" target="_blank">here</a>. Note that only courses with a number of 200 or above are open to graduate students.</p>
					</div>
			    </div>
			  </fieldset>