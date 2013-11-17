			  <fieldset>
			    <legend>Electrical Engineering Core Focus Area: Systems</legend>
				<div class="row">
					<?php

					if ($_POST['focus1-1_other']=="Other") {
		                echo '<div class="small-4 columns">';
		                echo '<p>'.$_POST['focus1-1_other_number']." - ".$_POST['focus1-1_other_title'].", ".$_POST['focus1-1_other_units']." Units".'</p>';
		                echo '</div>';
				    }

					if ($_POST['focus1-2_other']=="Other") {
		                echo '<div class="small-4 columns">';
		                echo '<p>'.$_POST['focus1-2_other_number']." - ".$_POST['focus1-2_other_title'].", ".$_POST['focus1-2_other_units']." Units".'</p>';
		                echo '</div>';
				    }

			    	foreach($_POST['focus1'] as $val)
		            {
		                echo '<div class="small-4 columns">';
		                echo '<p>'.$val.'</p>';
		                echo '</div>';
		            }
					    
					
	            	?>
					<div class="small-4 columns">
					    <p><?php if ($_POST['focus3_other']=="Other") {
				                echo $_POST['focus3_other_number']." - ".$_POST['focus3_other_title'].", ".$_POST['focus3_other_units']." Units";
					    } else {
					    	echo $_POST['focus3'];
					    }?></p>
					</div>
			    </div>    
			  </fieldset>
			  <fieldset>
			    <legend>Core Breadth: Electronics and Communication &amp; Microwave (2 units required per area)</legend>
			    <div class="row">
					<div class="small-6 columns">
					    <p><?php if ($_POST['breadth1']=="Other") {
				                echo $_POST['breadth1_other_number']." - ".$_POST['breadth1_other_title'].", ".$_POST['breadth1_other_units']." Units";
					    } else {
					    	echo $_POST['breadth1'];
					    }?></p>
					</div>
					<div class="small-6 columns">
					    <p><?php if ($_POST['breadth2']=="Other") {
				                echo $_POST['breadth2_other_number']." - ".$_POST['breadth2_other_title'].", ".$_POST['breadth2_other_units']." Units";
					    } else {
					    	echo $_POST['breadth2'];
					    }?></p>
					</div>
				</div>
			  </fieldset>