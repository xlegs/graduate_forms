<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->


<?php include 'inc/global.php';?>


<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Program of Studies</title>

  
  <link rel="stylesheet" href="css/foundation.css">
  <style type="text/css">
  	input#upload {
    display: none;
    visibility: hidden;
    width: 0;
    height: 0;
}
  </style>
  

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

	<div class="row">
		<div class="large-5 columns panel">
			<h4>Start From Scratch</h4>
      <form class="custom">

				<label for="area">Area of Study</label>
				<select name="area" id="area">
				    <option SELECTED>Select an area</option>
				    <option value="Systems">Systems</option>
				    <option value="Communications and Microwave">Communications and Microwave</option>
				    <option value="Electronics">Electronics</option>
				  </select>
				  <a href="form.php" class="button">Go</a>
			</form>
		</div>
		<div class="large-5 columns panel">
			<h4>Continue From a File</h4>
			<form enctype="multipart/form-data" action="form.php" method="post">
				<label>Upload File</label>
				<input type="file" class="upload" name="upload" id="upload" >
				<a href="#" class="button upload small secondary">Browse...</a>
        <span id="filename">No file selected</span><br/>
				<input class="button" type="submit" value="Go">
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
  <script type="text/javascript">$('a.upload').click(function(){
    $('input.upload').click();
});</script>
<script type="text/javascript">
  $("document").ready(function(){
    $('#upload').change(
        function(){
          var str = $('#upload').val();
          var n = str.lastIndexOf("\\");
          str = str.substring(n+1);
          $('#filename').text(str);
        }
      );
  });

</script>
  <script>
    $(document).foundation();
  </script>

</body>
</html>
