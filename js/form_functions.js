function addUnits () {
	var scuUnits=0;
	var transferUnits=0;
	var totalUnits=0;
	var temp=0;
	var tempCourseNum;
	var courses = [];
	var i=1;
console.log ('scuUnits');
//Count Core
$("input[name*='core'][name*='units']").each(function() {
  temp = $(this).val().trim();
  if(temp != ""){
    scuUnits += parseInt(temp);
    courses.push($("input[name='core"+i+"_number']").val().trim());
  }
  i++;
});

//Count AMTH
i=1;
$("input[name*='amth'][name*='units']").each(function() {
  temp = $(this).val().trim();
  if(temp != ""){
    tempCourseNum = $("input[name='amth"+i+"_number']").val().trim();
    if($.inArray(tempCourseNum, courses) == -1){
    	courses.push(tempCourseNum);
	scuUnits += parseInt(temp);
    }
    i++;
  }else
    i++;
});


//Count Focus Area (Comm & Microwave)
i=1;
$("input[name*='focus'][type='checkbox']").each(function() {
	if($(this).is(':checked')){
		temp = $("input[name*='focus1-"+i+"'][name*='units']").val().trim();
		if(temp != ""){	
			tempCourseNum = $("input[name*='focus1-"+i+"'][name*='number']").val().trim();
			if($.inArray(tempCourseNum, courses) == -1){
    				courses.push(tempCourseNum);
				scuUnits += parseInt(temp);
			}
			i++;
		}else
			i++;
	}else{
		temp = $("input[name*='focus"+i+"'][type='hidden']").val().trim();
		tempCourseNum = temp.slice(0,-4);
		if($.inArray(tempCourseNum, courses) == -1){
			courses.push(tempCourseNum);
  			temp = temp.charAt(temp.length - 7);
    			scuUnits += parseInt(temp);
		}
		i++;
	}
});

//Count Core Breadth
// add name="breadth" in to <option> tags
i=1;
$("select[name*='breadth'] option:selected").each(function() {
	if($(this).val() == "Other"){
		temp = $("input[name='breadth"+i+"_other_units']").val().trim();
		if(temp != ""){
			tempCourseNum = $("input[name='breadth"+i+"_other_number']").val().trim();
			if($.inArray(tempCourseNum, courses) == -1){
				courses.push(tempCourseNum);
				scuUnits += parseInt(temp);
			}
			i++;
		}else
			i++;
	}else{
		temp = $(this).val().trim();
		if (temp != "") {
			tempCourseNum = temp.slice(0,-4);
			if($.inArray(tempCourseNum, courses) == -1){
				courses.push(tempCourseNum);
				temp = temp.charAt(temp.length - 7);
				scuUnits += parseInt(temp);
			}
		}
		i++;
	}
});

/*
$(":checked").each(function() {
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
*/


//Count Electives
i=1;
$("input[name*='elective'][name*='units']").each(function() {
	temp = $(this).val().trim();
	if(temp != ""){
		tempCourseNum = $("input[name='elective"+i+"_number']").val().trim();
		if($.inArray(tempCourseNum, courses) == -1){
			courses.push(tempCourseNum);
			scuUnits += parseInt(temp);
		}
		i++;
	}else
		i++;
});

//Count Transfer
i=1;
$("input[name*='transfer'][name*='units']").each(function() {
	temp = $(this).val().trim();
	if(temp != ""){
		tempCourseNum = $("input[name='transfer"+i+"_number']").val().trim();
		if($.inArray(tempCourseNum, courses) == -1){
			courses.push(tempCourseNum);
			transferUnits += parseInt(temp);
		}
		i++;
	}else
		i++;	
});

/*
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
*/
	
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

	if (fields.indexOf("transfer")!=-1 && ($("#institution").val()=="Other" || $("#institution").val()=="")) return;

	if (db) {
		$('input[name="'+fields+'_number"]').val(num);
		$('input[name="'+fields+'_title"]').val(db["name"]);
		$('input[name="'+fields+'_units"]').val(db["units"]);
	};
}
function newElective() {
	var i = $(this).attr("id");


	if (i) {

		i = i.trim();
		i = parseInt(i.charAt(8));

		for (var j = i+1; j >= 0; j--) {
			$('div.elective'+j).removeClass('disabled');
		};

	}
}
function newTransfer() {
	var i = $(this).attr("id");


	if (i) {

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
		i = i.trim().split("_");
		i.pop();
		i = i.join("_");
		i = i+"_";
		temp = $('input[name*="'+i+'"]').filter(function() { return $(this).val() == ""; }).length;
		console.log(temp);
		if (temp==5) {
			$('input[name*="'+i+'"]').removeAttr('required');
		} else{
			$('input[name*="'+i+'"]').attr('required', 'required');
		};
}
function fillElective() {
	var i = $(this).attr("id");
	var temp=0;
		i = i.trim().split("_");
		i.pop();
		i = i.join("_");
		i = i+"_";

		temp = $('input[name*="'+i+'"]').filter(function() { return $(this).val() == ""; }).length;
		if (temp==3) {
			$('input[name*="'+i+'"]').removeAttr('required');
		} else{
			$('input[name*="'+i+'"]').attr('required', 'required');
		};
}
function showInfo() {
	var type = $(this).attr('type');
	var fields = $(this).attr("name").split("_");
	if (type=='text') {
		fields.pop();
		fields = fields.join("_");
	}

	if (fields.indexOf("transfer")!=-1 && ($("#institution").val()=="Other" || $("#institution").val()=="")) return;

	//Syllabus Link
	var target = $(this).siblings().filter('label:first');

	if (type!='text') {
		var num = $(this).val().split("-").shift().trim();
	} else{
		var num = $(this).val().trim().toUpperCase();
	}

	$("."+fields+"_info").remove();
	var string = "<span class='"+fields+"_info'> &middot; <a target='_blank' href='http://syllabi.engr.scu.edu/list.cgi?dept=";
	var temp = num.split(" ");
	var dept = temp[0];
	var number = temp[1];

	if (dept.match(/^[\S]{4}$/) && number) {
		string = string + dept + "&crse=" + number + "'>";
		string = string + "Syllabi</a></span>";
		target.append(string);
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