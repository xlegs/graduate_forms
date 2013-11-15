<script type="text/javascript">
$("#focus1_other").change(
	function() {
		$(".focus1_other").toggleClass('disabled');
		$(".focus1_other input").toggleRequired();
		$("input[name*='focus1'][type='radio']").toggleRequired();
	}
);
$("#focus2_other").change(
	function() {
		$(".focus2_other").toggleClass('disabled');
		$(".focus2_other input").toggleRequired();
		$("input[name*='focus2'][type='radio']").toggleRequired();
	});
$("#focus3_other").change(
	function() {
		$(".focus3_other").toggleClass('disabled');
		$(".focus3_other input").toggleRequired();
		$("input[name*='focus3'][type='radio']").toggleRequired();
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