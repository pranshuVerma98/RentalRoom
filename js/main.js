function verify()
	{
		var pass=document.getElementById('exampleInputPassword1').value;
		var confirm=document.getElementById('exampleConfirmPassword').value;
		var mobile=document.getElementById('exampleInputmobile').value;
		if(confirm.localeCompare(pass))
		{
			alert("Password Does Not Match");
				document.getElementById('exampleConfirmPassword').value="";
				document.getElementById('exampleConfirmPassword').focus();
			return false;
		}
		else if(pass.length<8)
		{
				alert("Password Should be greater Than 8 letters");
				document.getElementById('exampleInputPassword1').value="";
				document.getElementById('exampleInputPassword1').focus();
				return false;
		}
		else if(mobile.length != 10)
		{	
				alert("Mobile No must be of 10 Digit");
				document.getElementById('exampleInputmobile').value="";
				document.getElementById('exampleInputmobile').focus();
				return false;
		}
		return true;
	}
	
	function strength()
	{
		var pass=document.getElementById('exampleInputPassword1').value;
		//Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
		var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(pass)) {
                passed++;
            }
        }
		var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
       $("#password_strength").css("color", color);
	   $("#password_strength").html(strength);
	}
	