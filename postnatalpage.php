<?php session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>We Care</title>
<meta name="keywords" content="graphite theme, professional, free templates, CSS, HTML" />
<meta name="description" content="Graphite Theme, professional free CSS template from templatemo.com website" />
<link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.cs"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>
  
</head>
<body id="home">
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
               
          
            </ul>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
    </div> <!-- end of header -->
    
    <div id="templatemo_middle">
    
    <div id="templatemo_main">
    	
        <div class="col_fw_last">
        	<div class="col_allw300">

     <img src="images/vaccine.jpg" height="260px" width="960px">
      <h3><a href="vaccinespage.php" rel="nofollow">Vaccines</a></h3></br>


      <img src="images/hospital.png" height="260px" width="960px">
      <h3><a href="hospitalspage.php" rel="nofollow">Hospitals</a></h3></br>


      <img src="images/sanitation.png" height="260px" width="960px">
      <h3><a href="sanitationpage.php" rel="nofollow">Sanitation</a></h3>
              
              
              

			  <div class="cleaner h20"></div>
             
          	</div>
            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
		
    </div> <!-- end of main -->
	
</div> <!-- end of wrapper -->

<div id="templatemo_footer_wrapper">
    <div id="templatemo_footer">
        Copyright © 2017 <a href="#">We Care</a> | 
        Designed and Developed by <a href="http://www.goforcode.com" rel="nofollow" target="_parent">Hold The Code Team</a>
        <div class="cleaner"></div>
    </div>
</div> 
  

<script type='text/javascript' src='js/logging.js'></script>
</body>
</html>