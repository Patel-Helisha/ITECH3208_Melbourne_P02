<script type="text/javascript">
		
		function validateform()
{    
		
	var email = document.forms["form"]["email"].value; //<-----validation for the empty field------>
	if(email=="")
		{
			document.getElementById("msg1").innerHTML = "*Please enter email address";
			document.form.email.focus();
			return false;
		}
	else
		{
			document.getElementById("msg1").innerHTML = "";
		}
		
	
	
	var password = document.forms["form"]["password"].value; //<-----validation for the empty field------>
	if(password=="")
		{
			document.getElementById("msg2").innerHTML = "*Please enter your password";
			document.form.password.focus();
			return false;
		}
		else
		{
			document.getElementById("msg2").innerHTML = "";
		}
		
	var captcha = document.forms["form"]["captcha"].value; //<-----validation for the empty field------>
	if(captcha=="")
		{
			document.getElementById("msg3").innerHTML = "*Please enter your captcha code!";
			document.form.captcha.focus();
			return false;
		}
		else
		{
			document.getElementById("msg3").innerHTML = "";
		}
		
		
		alert("Welcome, you have been successfully placed order, " + lname + ""  + fname);
}
		
		function cap() {

			var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
			           ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
			           'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

			var a=alpha[Math.floor(Math.random()*62)];
			var b=alpha[Math.floor(Math.random()*62)];
			var c=alpha[Math.floor(Math.random()*62)];
			var d=alpha[Math.floor(Math.random()*62)];
			var e=alpha[Math.floor(Math.random()*62)];
			var f=alpha[Math.floor(Math.random()*62)];

			var sum=a + b + c + d + e + f;

			document.getElementById("capt").value=sum;
		}

		function validcap() {
			var string1 = document.getElementById('capt').value;
			var string2 = document.getElementById('textinput').value;
			if (string1 == string2){
				alert("Form is validated Succesfully");
				return true;
			}
			else {
				alert("Please enter a valid captcha");
				return false;
			}
		}


	</script>