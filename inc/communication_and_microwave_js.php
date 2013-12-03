<script type="text/javascript">
$("#focus1-1_other").change(
	function() {
		$(".focus1-1_other").toggleClass('disabled');
		$(".focus1-1_other input").toggleRequired();
	}
);
$("#focus1-2_other").change(
	function() {
		$(".focus1-2_other").toggleClass('disabled');
		$(".focus1-2_other input").toggleRequired();
	});
$("#focus1-3_other").change(
	function() {
		$(".focus1-3_other").toggleClass('disabled');
		$(".focus1-3_other input").toggleRequired();
	});
$("#breadth1").change(
	function() {
		if ($(this).val()=="Other") {
			$(".breadth1_other").removeClass('disabled'); 
			$(".breadth1_other input").attr('required', 'required');
		} else {
			$(".breadth1_other").addClass('disabled');
			$(".breadth1_other input").removeAttr('required');
		};
	}
	
);
$("#breadth2").change(
	function() {
		if ($(this).val()=="Other") {
			$(".breadth2_other").removeClass('disabled');
			$(".breadth2_other input").attr('required', 'required');
		} else {
			$(".breadth2_other").addClass('disabled');
			$(".breadth2_other input").removeAttr('required');
		};
	}
	
);
</script>