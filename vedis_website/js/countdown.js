 var count = 10;
    var redirect = "http://www.vedis.co.in";
     
    function countDown(){
        var timer = document.getElementById("timer");
        if(count > 0){
            count--;
            timer.innerHTML = count;
            setTimeout("countDown()", 1000);
        }else{
            window.location.href = redirect;
        }
    }
    
function validateForm()
{
	var name = document.contactForm.uname.value;
	var company = document.contactForm.company.value;
	var email = document.contactForm.email.value;
	
	var str = "Name cannot be left blank OR enter valid name";
	var regex = /^[a-zA-z\s]+$/;
	var atpos = email.indexOf("@");
	var dotpos = email.lastIndexOf(".");
	
	if(name==null || name=="" || regex.test(name) === false)
	{
		document.getElementById("jsmsg").innerHTML = str;
		return false;
	}
	if(company == null || company == "")
	{
		document.getElementById("jsmsg").innerHTML = "Please mention company name";
		return false;
	}
	if(email == null || email == "" || atpos<1 || dotpos<atpos+2 || dotpos+2>=email.length)
	{
		document.getElementById("jsmsg").innerHTML = "valid email mandatory";
		return false;
	}
}
