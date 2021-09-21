<?php $title="/login";

    require_once'INCLUDE/header.php';
    require_once'db/conn.php';
	  
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$uname = strtolower(trim($_POST['uname']));
		$password = $_POST['password'];
		$new_password = md5($password.$uname);
		
		$result = $user->getuser($uname,$new_password);
	  if($result){
		$_SESSION['uname'] = $uname;
		$_SESSION['userid'] = $result['id'];
		header("Location: index.php");
	  }else{
		echo '<h1 style="color:#eb3434;" align="center"><span class="p1">Username or Password is incorrect! Please try again.</span></h1>';
		}
	}
?>
<br/>
<br/>
<br/>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<div id="m2">
<img src="s.jpg" height="300px" style="border-radius:50%; border-radius:50%; width:30%; margin:0px 50px 0px 398px;">
</div> 
<div class="p1">
   <label for="uname" >Username :</label>
   <input type="text" maxlength="10" name="uname"  placeholder="Enter Your username"  id="uname" required />
    
    <label for="password" >Password :</label>
    <input type="text" maxlength="10" name="password"  placeholder="password" id="password"  class="form-control" required />
</div>
<button type="submit">LOGIN</button>
</form>
<br/>
<?php require'INCLUDE/footer.php'?>