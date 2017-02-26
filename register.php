<?php session_start();

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>We Care</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/jsDatePick_ltr.min.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>
<script type="text/javascript" src="js/jsDatePick.min.1.3.js"></script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
<script type="text/javascript">
function validateForm()
{
if(document.register.password.value != document.register.confirmpassword.value)
{
alert('Confirm Password Not Match');
document.register.confirmpassword.focus();     
return false;
} 
} 
</script>  



<script type="text/javascript">
	window.onload = function()
	{
		new JsDatePick({useMode:2,target:"last_donated",dateFormat:"%d-%M-%Y"});	
		new JsDatePick({useMode:2,target:"dob",dateFormat:"%d-%M-%Y"});
	};
</script>


<script type="text/javascript">
function onKeyPressBlockNumbers(e)
{
	var key = window.event ? e.keyCode : e.which;
	var keychar = String.fromCharCode(key);
	reg = /\d/;
	return !reg.test(keychar);
}


 function onlyNumbers(event) {
        var e = event || evt; // for trans-browser compatibility
        var charCode = e.which || e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
        return true;
    }

</script>


</head>
<body id="sub_page">
<div id="templatemo_wrapper">
	<div id="templatemo_top"> 
    	<div id="templatemo_login">
<?php 
include('includes/top.inc.php');
?>
		</div> 
    </div> <!-- end of top -->
    
  	<div id="templatemo_header">
    	
		<div id="site_title">
		     <h1><a href="index.php" rel="nofollow">We Care</a></h1>
	    </div> 
        
		<div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
              	<li><a href="index.php" class="selected">Home</a></li>
         		<li><a href="about_news.php">News</a></li>
        <li class="dropdown">
          <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Health Care <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="prenatalpage.php">Prenatal</a></li>
            <li><a href="postnatalpage.php">Postnatal</a></li>
           
            
          </ul>
        </li>
              <li><a href="last_donations.php">About Us</a></li>
          <li><a href="register.php">Register</a></li>
               
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
   
    
    <div id="templatemo_main">
    	
      <h2>Register</h2>
        <div class="col_w630 float_l">
        	
             <div id="contact_form">
        
                <h4>Enter your Details</h4> <br/>
				
				<span style="font-size:16px;color:red;">* All fields are mandatory</span> <br/><br/>				

				
                <form method="post" name="register" id="register" action="process_register.php" onsubmit="return validateForm();" enctype="multipart/form-data">
					
					<label for="author">Mother Name:</label> 
					<input type="text" id="fullname" name="fullname" class="required input_field" required />
					<div class="cleaner h10"></div>


					<label for="email">Date Of Birth:</label>
					<input type="text" size="12" id="dob" name="dob" class="validate-email required input_field" required/>
					<div class="cleaner h10"></div>		



					<label for="author">Address:</label> 
					<input type="text" id="address" name="address" class="required input_field" required />
					<div class="cleaner h10"></div>
					

					<label for="subject">Phone Number:</label> 
					<input type="text" class="validate-subject required input_field" name="mobilenumber" id="mobilenumber" onkeypress="return onlyNumbers(event);" maxlength="15" required/>				               
					<div class="cleaner h10"></div>

					<label for="email">Email:</label> 
					<input type="email" class="validate-email required input_field" name="email" id="email" required/>
					<div class="cleaner h10"></div>
					
		

                 <!--   <label for="email">Date of Birth:</label> 
					<input type="date" name="dob" id="dob" value="' . date('d-m-y') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div>		-->
					
					<label for="email">Delivery Date:</label>
					<input type="text" size="12" id="dob" name="dob" class="validate-email required input_field" required/>
					<div class="cleaner h10"></div>						
<?php     
//	<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
echo '
';	  
?>													
                     <!--  <label for="subject">Vaccines:</label>
					<select id="bloodgroup" name="bloodgroup" class="validate-subject required input_field" required>
								<option value="" selected="selected">--Select--
			
								<option value="O+">O+</option>

								<option value="O-">O-</option>
								<option value="A+">A+</option>
								<option value="A-">A-</option>
								<option value="B+ ">B+</option>
								<option value="B-">B-</option>
								<option value="AB+">AB+</option>
								<option value="AB-">AB-</option>
								</option>
					</select>-->
					<div class="cleaner h10"></div>			


					<label for="author">Used Vaccines:</label> 
					<textarea id="vaccine" name="vaccine" class="required input_field" placeholder="hueheh"></textarea>
				

					
					
					
					<div class="cleaner h10"></div>
					
				<!--	<label for="email">Last Donated:</label> 
					<input type="date" name="last_donated" value="' . date('Y-m-d') . '" min="' . date('Y-m-d') . '"/ class="validate-email required input_field" required>
					<div class="cleaner h10"></div> -->
					
					<input type="text" size="12" id="last_donated" name="last_donated" class="validate-email required input_field" style="display:none;" />
					
					
					
					<label for="subject">District:</label>
					<select id="district" name="district" class="validate-subject required input_field" required>
					<option value="" selected="selected">--Select--</option>
					<option value="Baitadi">Baitadi</option>
					<option value="Biratnagar">Biratnagar</option>
					<option value="Dadeldhura">Dadeldhura</option>
					<option value="Gorkha">Gorkha</option>
					<option value="Ilam">Ilam</option>
					<option value="Kanchanpur ">Kanchanpur </option>
					<option value="Kathmandu">Kathmandu</option>
					<option value="Lalitpur">Lalitpur</option>
					<option value="Manang">Manang </option>
					<option value="Nepaljung">Nepaljung</option>
					<option value="Parsa">Parsa</option>
					<option value="Pokhara">Pokhara</option>
					<option value="Ramechap">Ramechap</option>
					<option value="Saptari">Saptari</option>
					<option value="Syanja">Syanja</option>
					</select>
					<div class="cleaner h10"></div>


					<label for="author">Delivered Place:</label> 
					<input type="text" id="place" name="place" class="required input_field" placeholder="Hospital/Healthpost"required />
					<div class="cleaner h10"></div>

					
			
					
					
					<div class="cleaner h10"></div>
			
					
					
					<input type="submit" value="Submit" id="submit" name="submit" class="submit_btn float_l" />
					<input type="reset" value="Reset" id="reset" name="reset" class="submit_btn float_l" />
										
				</form>
 

             </div>
			 </div>
             
  
 <div class="cleaner"></div>
    </div> <!-- end of main -->
</div> <!-- end of wrapper -->
<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2015 <a href="#">We Care</a> | 
        Designed and Developed by <a href="http://www.goforcode.com" rel="nofollow" target="_parent">Hold The Code Team</a>
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>