<?php include_once("config.php");
    //Unset login_agent_detail session
    unset($_SESSION['login_agent_detail']);
    header("Location: ".WEBSITEURL); 
?>