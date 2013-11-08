
<script type="text/javascript">
$("#focus1_other").change(
	function() {$(".focus1_other").toggleClass('disabled')}
	
);
$("#focus2_other").change(
	function() {$(".focus2_other").toggleClass('disabled')}
	
);
$("#focus3_other").change(
	function() {$(".focus3_other").toggleClass('disabled')}
	
);
$("#breadth1").change(
	function() {
		if ($(this).val()=="Other") {
			$(".breadth1_other").removeClass('disabled');
		} else {
			$(".breadth1_other").addClass('disabled');
		};
	}
	
);
$("#breadth2").change(
	function() {
		if ($(this).val()=="Other") {
			$(".breadth2_other").removeClass('disabled');
		} else {
			$(".breadth2_other").addClass('disabled');
		};
	}
	
);
</script>