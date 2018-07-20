(function signUp(target) {
	
	var months = {
		"Jan" : 31,
		"Feb" : 28,
		"Mar" : 31,
		"Apr" : 30,
		"May" : 31,
		"Jun" : 30,
		"Jul" : 31,
		"Aug" : 31,
		"Sep" : 30,
		"Oct" : 31,
		"Nov" : 30,
		"Dec" : 31
	};

	var DomNodes = createSelects(target);
	console.log(DomNodes);
	
	function createSelects(target){
		
		var DomNodesContainer = {};
		DomNodesContainer.daySelect  = createDaySelect(target);
		DomNodesContainer.monthSelect  = createMonthSelect(target);
		DomNodesContainer.yearSelect  = createYearSelect(target);

		return DomNodesContainer;
	}

	for(var key in DomNodes){
		console.log(key);
		DomNodes[key].addEventListener('invalid', function() {
	      this.setCustomValidity("You should complete the field");
	    });
	    DomNodes[key].addEventListener('change', function() {
	      this.setCustomValidity("");
	    });
	}

	function createDaySelect(target) {
		var daySelect = document.createElement("select");
		daySelect.setAttribute("id", "days");
		daySelect.setAttribute("required", "");

		var blankOption = document.createElement("option");
		blankOption.setAttribute("value", "");
		blankOption.text = "Day";
		daySelect.appendChild(blankOption);

		for (var i = 1; i <= 31; i++) {
			var option = document.createElement("option");
			option.setAttribute("value", i);
			option.text = i;
			daySelect.appendChild(option);
		}
		target.appendChild(daySelect);
		return daySelect;
	}

	function createMonthSelect(target) {
		var monthSelect = document.createElement("select");
		monthSelect.setAttribute("id", "month");
		monthSelect.setAttribute("required", "");

		var blankOption = document.createElement("option");
		blankOption.setAttribute("value", "");
		blankOption.text = "Month";
		monthSelect.appendChild(blankOption);

		for (month in months) {
			var option = document.createElement("option");
			option.setAttribute("value", month);
			option.text = month;
			monthSelect.appendChild(option);
		}

		target.appendChild(monthSelect);
		return monthSelect;
	}

	function createYearSelect(target) {
		var yearSelect = document.createElement("select");
		yearSelect.setAttribute("id", "year");
		yearSelect.setAttribute("required", "");

		var blankOption = document.createElement("option");
		blankOption.setAttribute("value", "");
		blankOption.text = "Year";
		yearSelect.appendChild(blankOption);

		for(var i = 2000; i > 1920; i--) {
			var option = document.createElement("option");
			option.setAttribute("value", i);
			option.text = i;
			yearSelect.appendChild(option);
		}

		target.appendChild(yearSelect);
		return yearSelect;
	}
	
	DomNodes.monthSelect.addEventListener('change',calcDaysAndRedrawThem);
	DomNodes.yearSelect.addEventListener('change',calcDaysAndRedrawThem);

	function createInput(target) {
		var inputSelect = document.createElement("input");
		inputSelect.setAttribute("id", "years");

		
		return inputSelect;
	}

	function redrawDaysSelect(numberOfDays){
		//distruge zilele
		DomNodes.daySelect.innerHTML = '';

		var blackOption = document.createElement("option");
		blackOption.setAttribute('value', "");
	    blackOption.text = "Day";
	    DomNodes.daySelect.appendChild(blackOption);

		for (var i = 1; i <= numberOfDays; i++) {
			var option = document.createElement("option");
		    option.setAttribute("value", i);
		    option.text = i;
		    DomNodes.daySelect.appendChild(option);
		}
	}

	function calcDaysAndRedrawThem(){
		//an bisect
		if(DomNodes.yearSelect.value % 4 == 0){
			months.Feb = 29;
		}else{
			months.Feb = 28;
		}
		//recreaza zilele
		redrawDaysSelect(months[DomNodes.monthSelect.value]);
	}

})(document.getElementById('formFild'));