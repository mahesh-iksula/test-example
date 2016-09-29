<script type = "text/javascript" >
function validateForm() {

    var u_name = (document.forms["broke_frm"]["uname"].value).trim();
    var u_email = (document.forms["broke_frm"]["uemail"].value).trim();
    var u_phno = (document.forms["broke_frm"]["umobile"].value).trim();

    var reg_name = /^[a-zA-Z ]*$/;
    var reg_mail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var reg_mobile = /^\+?[0-9]{10,10}$/;

    if (u_name == null || u_name == "") {
        alert("Name must be filled out");
        document.getElementById("uname").focus();
        return false;
    }
    if (!(reg_name.test(u_name))){

		alert("Please Enter a valid name");
		document.getElementById("uname").value = "";
        document.getElementById("uname").focus();
        return false;   	
    }
    if (u_email == null || u_email == "") {
        alert("Email ID must be filled out");
        document.getElementById("uemail").focus();
        return false;
    }
    if (!(reg_mail.test(u_email))){

		alert("Please Enter a valid Email ID");
		document.getElementById("uemail").value = "";
        document.getElementById("uemail").focus();
        return false;   	
    }
    if (u_phno == null || u_phno == "") {
        alert("Mobile No. must be filled out");
        document.getElementById("umobile").focus();
        return false;
    }
    if (!(reg_mobile.test(u_phno))){

		alert("Please Enter a valid 10 Digit Mobile Number ");
		document.getElementById("umobile").value = "";
        document.getElementById("umobile").focus();
        return false;   	
    }

    
    //all validation are true 
    return true;
}
</script>

<form id="broke_frm" name="broke_frm" method="post" action="test-result.php" onsubmit="return validateForm()">
	<label>Name : </label>
	<input type = "text" name = "uname" id = "uname" />
	<label>Email Address :</label>
	<input type = "email" name = "uemail" id = "uemail" />
	<label>Mobile No : </label>
	<input type = "phone" name = "umobile" id = "umobile" />
	<input type = "submit" name = "submit" value = "SEND" />
</form>