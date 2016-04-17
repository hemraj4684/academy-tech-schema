<?php
     session_start();
     require_once('../configuration.php');
     require_once(LIB.'db.php');
     if (! isset($_SESSION['user']))
     {
         $uname = $_REQUEST['username'];
         $pass = md5($_REQUEST['password']);
         if($uname != '' && $pass != '')
         {
            $sql = "SELECT * FROM `users` WHERE username = :uname AND password = :pass AND is_active = true";
            $result = $db->fetchQueryPrepared($sql, array(':uname'=>$uname,':pass'=>$pass));
            if(!empty($result))
            {
	        $_SESSION['user'] = $result[0]['username'];
	        $_SESSION['user_id'] = $result[0]['id'];
	        header("Location:".DOMAIN."/admin/dashboard.php");
            }
            else
            {
              $login="false";
              header("Location:".DOMAIN."/admin/index.php?login=$login");
            } 
       }
       else
           {
             $login="blank";
             header("Location:".DOMAIN."/admin/index.php?login=$login");
           }
    }
    else
    {
         if(isset($_GET['login']))
         {
           $login = $_GET['login'];
           if($login == 'logout')
           {
             session_destroy();
             header("Location:".DOMAIN."/admin/index.php?logout=true");
           }
         }
    }
?>
