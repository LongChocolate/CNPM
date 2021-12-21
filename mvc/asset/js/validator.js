function Validator(options)
{
	//lưu lại rule trùng
	var selectorRules = {};

	function validate(inputElement,rule)
	{
		var errorMessage ;
		var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
		var rules = selectorRules[rule.selector];
		for (var i = 0; i< rules.length;++i)
		{
			errorMessage = rules[i](inputElement.value);
			if(errorMessage) break;
		}

		if(errorMessage)
		{
			errorElement.innerText = errorMessage;
			inputElement.parentElement.classList.add('invalid');
		}
		else
		{
			errorElement.innerText = '';
			inputElement.parentElement.classList.remove('invalid');
		}
		return !!errorMessage;
	}

	let formElement = document.querySelector(options.form);
	if (formElement)
	{
		// Kiểm tra lỗi khi submit
		formElement.onsubmit = function(e)
		{
			// Ngăn chặn chức năng cơ bản
			e.preventDefault();
			var isValid = true;
			// hiện thị tất cả lỗi
			options.rules.forEach(function(rule)
			{
				var inputElement = formElement.querySelector(rule.selector)
				var is = validate(inputElement,rule);
				console.log(is)
				if(is)
				{
					isValid = false;		
				}
				
			});
			
			if(isValid)
			{
				formElement.submit();
			}
		}

		// kiểm tra và hiện thị lỗi trong input
		options.rules.forEach(function(rule){
			var inputElement = formElement.querySelector(rule.selector)
			if (inputElement) {

				if(Array.isArray(selectorRules[rule.selector]))
				{
					selectorRules[rule.selector].push(rule.test);
				}else
				{
					selectorRules[rule.selector] = [rule.test];
				}


				inputElement.onblur = function()
				{
					validate(inputElement,rule);
				}
				// Xử lý khi người dùng nhập
				inputElement.oninput = function(){
					var errorElement = inputElement.parentElement.querySelector(options.errorSelector);
					errorElement.innerText = '';
					inputElement.parentElement.classList.remove('invalid');
				}
			}
		})
	}
}

function isC(string)
{
	for(var i = 0; i < string.length; i++)
	{
		if(isNaN(parseInt(string[i])) == false)
		{
			return false;
		}
	}
	return true;
}
function isN(string)
{
	for(i = 0; i < string.length; i++)
	{
		if(isNaN(parseInt(string[i])) == true)
		{
			return false;
		}
	}
	return true;
}

Validator.isRequired = function(selector,message)
{
	return {
		selector:selector,
		test: function(value){
			return value.trim() ? undefined : 'Vui lòng nhập ' + message;
		}
	};
}

Validator.isEmail = function(selector,message)
{
	return {
		selector:selector,
		test: function(value){
			var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			return regex.test(value) ? undefined : 'Vui lòng nhập đúng dạng ' + message;
		}
	};
}

Validator.isLength = function(selector,min,message)
{
	return{
		selector:selector,
		test: function(value){
			return value.length >= min ? undefined : message+' phải có it nhất '+min+' ký tự';
		}
	};
}

Validator.isConfirmed = function(selector,getConfirmValue,message)
{
	return{
		selector:selector,
		test: function(value){
			return value == getConfirmValue() ? undefined : message + ' nhập vào không chính xác';
		}
	};
}

Validator.isChar = function(selector,message)
{
	return{
		selector:selector,
		test: function(value){
			return isC(value) ? undefined : message + ' phải là chữ cái.';
		}
	};
}

Validator.isNumber = function(selector,message)
{
	return{
		selector:selector,
		test: function(value){
			return isN(value) ? undefined : message + ' phải là số.' ;
		}
	};
}