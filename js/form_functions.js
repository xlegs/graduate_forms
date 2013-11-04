function addUnits () {
	var scuUnits=0;
	var transferUnits=0;
	var totalUnits=0;
	var temp=0;

//Count Core
	$( "input[name~='core']" ).each(function() {
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
	

//Count AMTH
	$("input[name~='amth']").each(function() {
		temp = $(this).val().trim();

		if (temp == '') {
			//No Course Entered
		} else{
			//Look up units in value string
			//eg 'AMTH 000 - 2' is 2 units
			temp = temp.charAt(temp.length-1);
			
			scuUnits+=temp;
		}
	});


//Count Systems Core
	$("input:checked").each(function() {
		temp = $(this).val().trim();

		//Look up units in value string
		//eg 'AMTH 000 - 2' is 2 units
		temp = temp.charAt(temp.length-1);
		
		scuUnits+=temp;
	});

//Count Breadth
	$("input[name~='breadth']").each(function() {
		temp = $(this).val().trim();

		if (temp == '') {
			//No Course Entered
		} else{
			//Look up units in value string
			//eg 'AMTH 000 - 2' is 2 units
			temp = temp.charAt(temp.length-1);
			
			scuUnits+=temp;
		}
	});

//Count Electives
	$("input[name~='elective'][type='number']").each(function() {
		temp = $(this).val().trim();

		if (temp == 0) {
			//No Course Entered
		} else{
			//Get elective field #
			temp = $(this).id();
			temp = temp.charAt(8);

			//Check if adjacent fields are filled
			if ($('#elective'+temp+'_number') != '') {
				if ($('#elective'+temp+'_title') != '') {
					temp = $(this).val().trim();
					//Look up units in value string
					//eg 'AMTH 000 - 2' is 2 units
					temp = temp.charAt(temp.length-1);
					
					scuUnits+=temp;
				};
			};
			
			
		}
	});

//Count transfer
	$("input[name~='transfer'][type='number']").each(function() {
		temp = $(this).val().trim();

		if (temp == 0) {
			//No Course Entered
		} else{
			//Get transfer field #
			temp = $(this).id();
			temp = temp.charAt(8);

			//Check if adjacent fields are filled
			if ($('#transfer'+temp+'_number') != '') {
				if ($('#transfer'+temp+'_title') != '') {
					if ($('#transfer'+temp+'_grade') != '') {
						if ($('#transfer'+temp+'_year') != '') {
							temp = $(this).val().trim();
							//Look up units in value string
							//eg 'AMTH 000 - 2' is 2 units
							temp = temp.charAt(temp.length-1);
							
							transferUnits+=temp;
						};
					};

				};
			};
			
			
		}
	});

 //Output
 	$('#transferUnits').text(transferUnits);
 	$('#totalSCUUnits').text(scuUnits);
 	$('#totalUnits').text(scuUnits+transferUnits);
}