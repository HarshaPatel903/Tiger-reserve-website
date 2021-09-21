<?php 
    $title="Success";
    require_once 'INCLUDE/header.php'; 
    require_once 'db/conn.php';


    if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$email = $_POST['email'];
		$number = $_POST['number'];
		$comment = $_POST['comment'];
		$issuccess = $crud->insert($fname,$lname,$email,$number,$comment);
		if($issuccess){
			echo '<h1 style="color:#04aa6D;" align="center"><span class="p1">Your Detailes has been saved successfull</span></h1>';
		}
		else{
			echo 'Error Ocurred';
		}
	}
?>
	<br/>
	<br/>
	<p align="center"><span class="p1" class="text">
	Thank You For Your Time.<br/>
	We will Contact You Shortly,<br/>
	and My Email Adress is : harshapatel309@gmail.com<br/>
    Feel Free To Reach Me.<br/>             	
	</span>
	</p>
	<br/>
	<br/>
	<br/>
	<br/>
	<a href="index.php"><button type="button">BACK HOME</button></a>
	<?php require'INCLUDE/footer.php'?>
	