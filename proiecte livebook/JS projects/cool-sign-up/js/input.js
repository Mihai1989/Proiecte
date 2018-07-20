(function signUp(target) {

	var DomNodes = createSelects(target);
	
	function createSelects(target){
		
		var DomNodesContainer = {};

		DomNodesContainer.inputName  = createNameInput(target);
		DomNodesContainer.inputEmail  = createEmailInput(target);
		DomNodesContainer.inputPassword  = createPasswordInput(target);
		
		return DomNodesContainer;
	}

	function createNameInput(target) {
		var nameInput = document.createElement("input");
		nameInput.setAttribute("type", "text");
		nameInput.setAttribute("placeholder", "Name")
		target.appendChild(nameInput);	
	}

	function createEmailInput(target) {
		var emailInput = document.createElement("input");
		emailInput.setAttribute("type", "email");
		emailInput.setAttribute("placeholder", "Email")
		target.appendChild(emailInput);	
	}

	function createPasswordInput(target) {
		var passwordInput = document.createElement("input");
		passwordInput.setAttribute("type", "password");
		passwordInput.setAttribute("placeholder", "Password")
		target.appendChild(passwordInput);	
	}

})(document.getElementById('inputFild'));