function numEmpty (nameSegment) {
	// Check if neighbors are empty. Returns # of empty fields
		var temp;
		temp = $('input[name*="'+nameSegment+'"]').filter(function() { return $(this).val() == ""; }).length;
		return temp;
}
function checkDup () {
	var set = $(this).closest('fieldset');
	var temp=0;
	var tempCourseNum;
	var courses = [];
	var val;

	$('fieldset').each(function() {
		set=$(this);

		set.find('input[name*="number"]:visible').each(function() {
			  temp = $(this).val().trim();
			  if(temp != ""){
			  	if ($.inArray( temp, courses )==-1) {
				    courses.push(temp);
			  	}else{
			  		//Dup found
			  		$(this).attr('data-invalid', 'data-invalid');
			  		$(this).parent().addClass('error');
			  		return false;
			  	}

			  }

		});
		set.find('input[value!="Other"][type="checkbox"]:checked').each(function() {
			  temp = $(this).val().trim().slice(0,8);
			  if(temp != ""){
			  	if ($.inArray( temp, courses )==-1) {
				    courses.push(temp);
			  	}else{
			  		//Dup found
			  		$(this).attr('data-invalid', 'data-invalid');
			  		$(this).parent().addClass('error');
			  		return false;
			  	}

			  }

		});
		set.find('input[type="radio"]:checked').each(function() {
			  temp = $(this).val().trim().slice(0,8);
			  if(temp != ""){
			  	if ($.inArray( temp, courses )==-1) {
				    courses.push(temp);

			  	}else{
			  		//Dup found
			  		$(this).attr('data-invalid', 'data-invalid');
			  		$(this).parent().addClass('error');
			  		return false;
			  	}

			  }

		});
		set.find('option[value!="Other"]:selected').each(function() {
			  temp = $(this).val().trim().slice(0,8);
			  if(temp != ""){
			  	if ($.inArray( temp, courses )==-1) {
				    courses.push(temp);
				    			    console.log(courses);
			  	}else{
			  		//Dup found
			  		$(this).attr('data-invalid', 'data-invalid');
			  		$(this).parent().parent().addClass('error');
			  		return false;
			  	}

			  }

		});
	});
}

function addUnits () {
	var scuUnits=0;
	var transferUnits=0;
	var totalUnits=0;
	var temp=0;
	var tempCourseNum;
	var courses = [];
	var i=1;

	var area = window.area;

//Count Core
$("input[name*='core'][name*='units']").each(function() {
  temp = $(this).val().trim();
  if(temp != "" && numEmpty('core'+i+'_')==0){
    scuUnits += parseInt(temp);
    courses.push($("input[name='core"+i+"_number']").val().trim());
  }
  i++;
});

//Count AMTH
i=1;
$("input[name*='amth'][name*='units']").each(function() {
  temp = $(this).val().trim();
  if(temp != "" && numEmpty('amth'+i+'_')==0){
    tempCourseNum = $("input[name='amth"+i+"_number']").val().trim();
    if($.inArray(tempCourseNum, courses) == -1){
    	courses.push(tempCourseNum);
	scuUnits += parseInt(temp);
    }
    i++;
  }else
    i++;
});

if (area=="communication_and_microwave") {
	//Count Focus Area (Comm & Microwave)
	i=1;
	$("input[name*='focus'][type='checkbox']").each(function() {
		if($(this).is(':checked')){
			temp = $("input[name*='focus1-"+i+"'][name*='units']").val().trim();
			if(temp != "" && numEmpty('focus1-'+i+'_other')==0){	
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
}

if (area=="electronics") {
	//Count Focus Area (electronics)
	i=1;
	$("input[name*='focus'][type='checkbox']").each(function() {
		if($(this).is(':checked')){
			temp = $("input[name*='focus"+i+"'][name*='units']").val().trim();
			if(temp != "" && numEmpty('focus'+i+'_other')==0){	
				tempCourseNum = $("input[name*='focus"+i+"'][name*='number']").val().trim();
				if($.inArray(tempCourseNum, courses) == -1){
	    				courses.push(tempCourseNum);
					scuUnits += parseInt(temp);
				}
				i++;
			}else
				i++;
		}else{
			temp = $("input[name*='focus"+i+"'][type='radio']").val().trim();
			tempCourseNum = temp.slice(0,-4);
			if($.inArray(tempCourseNum, courses) == -1){
				courses.push(tempCourseNum);
	  			temp = temp.charAt(temp.length - 7);
	    			scuUnits += parseInt(temp);
			}
			i++;
		}
	});
}

if (area=="systems") {
	//Count Focus Area (systems)
	i=1;
	$("input[name*='focus1'][type='checkbox']").each(function() {
		if($(this).is(':checked')){
			i = $(this).attr("id").charAt(7);
			console.log(i);
			if ($(this).val()=="Other"){
				temp = $("input[name*='focus1-"+i+"'][name*='units']").val().trim();
				if(temp != "" && numEmpty('focus1-'+i+'_other')==0){	
					tempCourseNum = $("input[name*='focus1-"+i+"'][name*='number']").val().trim();
					if($.inArray(tempCourseNum, courses) == -1){
		    				courses.push(tempCourseNum);
						scuUnits += parseInt(temp);
					}
				}
			}else{
				temp = $(this).val().trim();
				if(temp != ""){	
				tempCourseNum = temp.slice(0,-4);
					if($.inArray(tempCourseNum, courses) == -1){
		    				courses.push(tempCourseNum);
		    				temp = temp.charAt(temp.length - 7);

						scuUnits += parseInt(temp);
					}
				}
			}
		}
		
	});

	i=1;
	$("input[name*='focus3'][type='checkbox']").each(function() {
		if($(this).is(':checked')){
			temp = $("input[name*='focus3'][name*='units']").val().trim();
			if(temp != "" && numEmpty('focus3_other')==0){	
				tempCourseNum = $("input[name*='focus3_other'][name*='number']").val().trim();
				if($.inArray(tempCourseNum, courses) == -1){
	    				courses.push(tempCourseNum);

					scuUnits += parseInt(temp);
				}
				i++;
			}else
				i++;
		}else{
			$("input[name*='focus3'][type='radio']:checked").each(function() {

				temp = $(this).val().trim();
				if(temp != ""){	
						tempCourseNum = $(this).val().trim();
						if($.inArray(tempCourseNum, courses) == -1){
			    				courses.push(tempCourseNum);
			    				temp = temp.charAt(temp.length - 7);

							scuUnits += parseInt(temp);
						}

				}
			});
		}
	});

}


//Count Core Breadth
i=1;
$("select[name*='breadth'] option:selected").each(function() {
	if($(this).val() == "Other"){
		temp = $("input[name='breadth"+i+"_other_units']").val().trim();
		if(temp != "" && numEmpty('breadth'+i+'_other')==0){
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


//Count Electives
i=1;
$("input[name*='elective'][name*='units']").each(function() {
	temp = $(this).val().trim();
	if(temp != "" && numEmpty('elective'+i+'_')==0){
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
	if(temp != ""&& numEmpty('transfer'+i+'_')==0){
		tempCourseNum = $("input[name='transfer"+i+"_number']").val().trim();
		if($.inArray(tempCourseNum, courses) == -1){
			courses.push(tempCourseNum);
			transferUnits += parseFloat(temp);
		}
		i++;
	}else
		i++;	
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
		//Extract ID prefix
		i = i.trim().split("_");
		i.pop();
		i = i.join("_");
		i = i+"_";

		if (numEmpty(i)==5) {
			$('input[name*="'+i+'"]').removeAttr('required');
		} else{
			$('input[name*="'+i+'"]').attr('required', 'required');
		};
}
function fillElective() {
	var i = $(this).attr("id");

		//Extract ID prefix
		i = i.trim().split("_");
		i.pop();
		i = i.join("_");
		i = i+"_";

		if (numEmpty(i)==3) {
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