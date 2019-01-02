<?php 
error_reporting(0);
?><table border='0' align='right'>
<tr><td><a href='login.php'>Admin Login</a></td>
</tr>
</table>
 

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="ddmenu.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <script src="ddmenu.js" type="text/javascript"></script>
    <script src="jquery.min.js"></script>
   <script src="pagescal.js"></script>
</head>
<body style="background: #eedfcc url(images/bg3.jpg) no-repeat center top;
				-webkit-background-size: cover;
				-moz-background-size: cover;
				background-size: cover;">
                
<nav id="ddmenu">
    <div class="menu-icon"></div><h2>ABDULLAH CLINICAL LABORATOTRY</h2>
   
    <ul>
        <li>
            <span class="top-heading"><a href="index.php">Home</a></span>
			
        </li>
       <!-- <li>
            <span class="top-heading"><a href="javascript:;" onclick="addmodel();">Add Product</a></span>
			
        </li>-->
        
        <!--<li>
            <a class="top-heading" href="#">Admission</a>
			<i class="caret"></i>            
            <div class="dropdown">
                <div class="dd-inner">
                    <div class="column">
                       
                        <a href="javascript:;" onclick="adduser();">Online Admission Form</a>
                        
                        
                    </div>
                </div>
            </div>
        </li>-->
        <!-- <li>
            <span class="top-heading"><a href="#">Examination</a></span>
			
        </li>
         <li>
            <span class="top-heading"><a href="#">Help Desk</a></span>
			
        </li>
        
         <li>
            <span class="top-heading"><a href="#">About Us</a></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
			
        </li>
        <li>
            <span class="top-heading"><a href="javascript:;" onclick="adduser();">Register</a></span></span>
			
        </li>-->
        <li>
            <span class="top-heading"><a href="login_test.php">Login</a></span>
			
        </li>
        
        
        
       
    </ul> <?php
		if($_GET['rep'] == 'success')
		
		{
		echo "Account Created Successfully";
		
		
}
if($_GET['varify'] == 'false')
		
		{
		echo "Email or Password Incorrect";
		
		
}
	?>
</nav>

    <div style="margin:40px auto 40px; width:100%;height:80%; font-size:20px;" id="container">
    
    </div>
    
      

</body>
</html>