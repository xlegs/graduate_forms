<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->


<?php include 'inc/global.php';?>


<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Program of Studies</title>

  
  <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/form.css">


  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>
<?php include 'inc/init_session.php';?>
	<div class="row">
		<div class="large-12 columns">
			<h2>Program of Studies</h2>
			<h3>Electrical Engineering &middot; Master's Degree</h3>
			<hr />
		</div>
	</div>
<?php 
  if ($_SESSION["error"]) {
    echo "string";

  }
?>
	<div class="row">
		<div class="large-5 columns panel">
			<h4>Start From Scratch</h4>
      <form action="form.php" method="post">

				<label for="area">Area of Study</label>
				<select name="area" id="area" required>
				    <option SELECTED value="">Select an area</option>
				    <option value="systems">Systems</option>
				    <option value="communication_and_microwave">Communication and Microwave</option>
				    <option value="electronics">Electronics</option>
				  </select>
          <input class="button" type="submit" value="Go">
			</form>
		</div>
		<div class="large-5 columns panel">
			<h4>Continue From a File</h4>
			<form enctype="multipart/form-data" action="form.php" method="post">
				<label>Upload File</label>
				<input type="file" class="upload" name="upload" id="upload" required>
				<input class="button" type="submit" value="Go">
			</form>

		</div>
	</div>
	

<script src="js/vendor/jquery.js"></script>
<script src="js/foundation/foundation.min.js"></script>
<script src="js/foundation-migrate.js"></script>
  <script>
    $(document).foundation();
  </script>

</body>
</html>
