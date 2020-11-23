<?php 
session_start();

if(isset($_SESSION['last_activity']) && (time() - $_SESSION['last_activity'] > 300)){
  session_unset();
  session_destroy();
  ?>
    <script type="text/javascript">
    var answer = confirm('Your session is expire!');
	if (answer){
		
        window.location = 'index.php';

    } 
    </script>
  <?php

}

$_SESSION['last_activity'] = time();

 ?>