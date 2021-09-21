<?php 
   include_once 'INCLUDE/session.php'?>
<?php 
    session_destroy();
	header("Location :index.php");
?>
   