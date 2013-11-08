		  <fieldset>
			    <legend>Electrical Engineering Core Focus Area: Electronics</legend>
			    <div class="row">
					<div class="small-4 columns">
					    <p><?php if ($_POST['focus1_other']=="Other") {				    	
				                echo '<p>'.$_POST['focus1_other_number']." - ".$_POST['focus1_other_title']." - ".$_POST['focus1_other_units'].'</p>';
					    } else {
					    	echo $_POST['focus1'];
					    }?></p>

					</div>
					<div class="small-4 columns">
					    <p><?php if ($_POST['focus2_other']=="Other") {				    	
				                echo '<p>'.$_POST['focus2_other_number']." - ".$_POST['focus2_other_title']." - ".$_POST['focus2_other_units'].'</p>';
					    } else {
					    	echo $_POST['focus2'];
					    }?></p>

					</div>
					<div class="small-4 columns">
					    <p><?php if ($_POST['focus3_other']=="Other") {				    	
				                echo '<p>'.$_POST['focus3_other_number']." - ".$_POST['focus3_other_title']." - ".$_POST['focus3_other_units'].'</p>';
					    } else {
					    	echo $_POST['focus3'];
					    }?></p>

					</div>


			    </div>
			  </fieldset>
			  <fieldset>
			    <legend>Core Breadth: Systems and Communication &amp; Microwave (2 units required per area)</legend>
			    <div class="row">
					<div class="small-6 columns">
					    <p><?php if ($_POST['breadth1']=="Other") {
				                echo $_POST['breadth1_other_number']." - ".$_POST['breadth1_other_title']." - ".$_POST['breadth1_other_units'];
					    } else {
					    	echo $_POST['breadth1'];
					    }?></p>
					</div>
					<div class="small-6 columns">
					    <p><?php if ($_POST['breadth2']=="Other") {
				                echo $_POST['breadth2_other_number']." - ".$_POST['breadth2_other_title']." - ".$_POST['breadth2_other_units'];
					    } else {
					    	echo $_POST['breadth2'];
					    }?></p>
					</div>
				</div>
			  </fieldset>