<?php
  include_once 'INCLUDE/session.php'?>
  
  
<!DOCTYPE html>
<html lang="eng">
<head>
  <title>Home<?php echo $title ?></title>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width,intial-scale=1.0,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
   <style type="text/css">
    body{
		background-color:#f2f2d9;
	}
    html {
	   font-size:100%; 
	}
	.text{
		color:white;
	}
	input{
		width:100%;
		padding:12px;
		margin:8px 0;
		border:1px solid #ccc;
		box-sizing:border-box;
	}
	.p1{
		font-family:Arial, Helveica, sans-serif, "Times New Roman";
	}
	button{
		width:100%;
		background-color:#04aa6D;
		color:white;
		margin:8px 0;
		padding:14px 20px;
		border-color:#04aa6D;
		cursor:pointer;
	}
	button:hover{
		opacity:0.8;
	}
	a:link{
		color:#ffffff;
		text-decoration:none;
	}
	a:hover{
		color:#FFFF00;
		text-decoration:underline;
	}
	a:active{
		color:#00FFFF;
		text-decoration:none;
	}
	a:visited{
		color:white;
		text-decoration:none;
	}
	ul{
		height:520px;
		width:1000x;
		background-color:rgba(255,255,255,0.13);
		border-radius:10px;
		padding:50px 25px;
		list-style-type: none;
		display:block;
	}
	.cont{
		position:relative;
	}
	.word{
		position:absolute;
		top:70%;
		left:50%;
		transform:translate(-50%, -50%);
		color:white;
		background-color:rgba(0,0,0,0.5);
		padding:3px 10px 3px 10px;
		width:1000px;
		height:650px:
	}
	@media screen and (max-width: 768px) {
		.text, input, .p1, button, ul, .word, .cont {
			width: 100%;
		}
		#primary { width:100%; }
        #secondary { width:100%; margin:0; border:none; }
	}
	@media (min-width: 640px) {
		body {font-size:1rem;} 
	}  
  </style>
</head>
<body>
<div class="text" class="p1">
  <table width="100%" height="10px" cellspacing="3" cellpadding="3" align="center" bgcolor="#333">
    <tr>
	 <td>
	  <table width="500px" height="10px" cellspacing="5" cellpadding="5" align="left" bgcolor="#333">
	    <tr>
		 <td align="left"> H&P </td>
		 <td align="left"><a href="index.php">Home</a></td>
		 <td align="left"><a href="About.php">About</a></td>
		 <td align="left"><a href="contact.php">Contact</a></td>
		</tr>
      </table>
     <td align="left">
	    <?php
		    if(!isset($_SESSION['userid'])){
		?>
		    <a href="login.php">Login</a>
		<?php } else { ?> 
		    <span class="p1" class="text">HELLO <?php echo $_SESSION['uname'] ?> !</span>
		    <a href="logout.php">Logout</a>
		<?php } ?>
	 </td>	  
	 </td>
	</tr> 
  </table>	
</div>