function addUnits () {
	var scuUnits=0;
	var transferUnits=0;
	var totalUnits=0;
	var temp=0;

//Count Core
	$( "input[name*='core']" ).each(function() {
		temp = $(this).val().trim();

		if (temp == '') {
			//No Course Entered
		} else{
			if (temp.toUpperCase().charAt(0) =="A") {
					//Is AMTH, so 4 units
					scuUnits+=4;
				} else{
					//!AMTH so 2 units
					scuUnits+=2;
				};
			};
		});


//Count Dropdowns
	$(".custom.dropdown .current").each(function() {
		temp = $(this).text().trim();
		
		if (temp == '') {
			//No Course Entered
		} else{
			//Look up units in value string
			//eg 'AMTH 000 - 2' is 2 units
			temp = parseInt(temp.charAt(temp.length-1));
			
			if(!isNaN(temp)){scuUnits+=temp;}
		}
	});

//Count Systems Core
	$(".checkbox.checked").each(function() {
		temp = $(this).parent().text().trim();

		//Look up units in value string
		//eg 'AMTH 000 - 2' is 2 units
		temp = parseInt(temp.charAt(temp.length-1));
		
		scuUnits+=temp;
	});
	$(".radio.checked").each(function() {
		temp = $(this).parent().text().trim();

		//Look up units in value string
		//eg 'AMTH 000 - 2' is 2 units
		temp = parseInt(temp.charAt(temp.length-1));
		
		scuUnits+=temp;
	});


//Count Electives
	$("input[name*='elective'][type='number']").each(function() {
		temp = $(this).val().trim();

		if (temp == 0) {
			//No Course Entered
		} else{
			//Get elective field #
			temp = $(this).attr('id');
			temp = temp.charAt(8);

			//Check if adjacent fields are filled
			if ($('#elective'+temp+'_number').val().trim() != '') {
				if ($('#elective'+temp+'_title').val().trim() != '') {
					temp = $(this).val().trim();
					
					//Look up units in value string
					//eg 'AMTH 000 - 2' is 2 units
					temp = parseInt(temp.charAt(temp.length-1));
					
					scuUnits+=temp;
				};
			};
			
			
		}
	});

//Count transfer
	$("input[name*='transfer'][type='number']").each(function() {
		temp = $(this).val().trim();

		if (temp == 0) {
			//No Course Entered
		} else{
			//Get transfer field #
			temp = $(this).attr('id');
			temp = temp.charAt(8);

			//Check if adjacent fields are filled
			if ($('#transfer'+temp+'_number').val().trim() != '') {
				if ($('#transfer'+temp+'_title').val().trim() != '') {
					if ($('#transfer'+temp+'_grade').val().trim() != '') {
						if ($('#transfer'+temp+'_year').val().trim() != '') {
							temp = $(this).val().trim();
							//Look up units in value string
							//eg 'AMTH 000 - 2' is 2 units
							temp = parseInt(temp.charAt(temp.length-1));
							
							transferUnits+=temp;
						};
					};

				};
			};
			
			
		}
	});

 //Output
 	$('.transferUnits').text(transferUnits).val(transferUnits);
 	$('.totalSCUUnits').text(scuUnits).val(scuUnits);
 	$('.totalUnits').text(scuUnits+transferUnits).val(scuUnits+transferUnits);
}

function autocomplete() {
	var fields = $(this).attr("name").split("_");
	var num = $(this).val().trim().toUpperCase();
	var db = window.database[num];
	fields.pop();
	fields = fields.join("_");

	if (db!="undefined") {
		$('input[name="'+fields+'_number"]').val(num);
		$('input[name="'+fields+'_title"]').val(db["name"]);
		$('input[name="'+fields+'_units"]').val(db["units"]);
	};
}
function newElective() {
	var i = $(this).attr("id");


	if (i !== 'undefined') {

		i = i.trim();
		i = parseInt(i.charAt(8));

		for (var j = i+1; j >= 0; j--) {
			$('div.elective'+j).removeClass('disabled');
		};

	}
}
function newTransfer() {
	var i = $(this).attr("id");


	if (i !== 'undefined') {

		i = i.trim();
		i = parseInt(i.charAt(8));

		for (var j = i+1; j >= 0; j--) {
			$('div.transfer'+j).removeClass('disabled');
		};

	}
}
function fillTransfer() {
	var i = $(this).attr("id");
	var temp=0;


	if (i !== 'undefined') {

		i = i.trim().split("_",1);
		temp = $('input[name*="'+i+'"]').filter(function() { return $(this).val() == ""; }).length;
		if (temp==5) {
			$('input[name*="'+i+'"]').removeAttr('required');
		} else{
			$('input[name*="'+i+'"]').attr('required', 'required');
		};
	}
}
function fillElective() {
	var i = $(this).attr("id");
	var temp=0;


	if (i !== 'undefined') {

		i = i.trim().split("_",1);
		temp = $('input[name*="'+i+'"]').filter(function() { return $(this).val() == ""; }).length;
		if (temp==3) {
			$('input[name*="'+i+'"]').removeAttr('required');
		} else{
			$('input[name*="'+i+'"]').attr('required', 'required');
		};
	}
}
(function($) {
    $.fn.toggleRequired = function() {
        return this.each(function() {
            var $this = $(this);
            if ($this.attr('required')) $this.removeAttr('required');
            else $this.attr('required', 'required');
        });
    };
})(jQuery);