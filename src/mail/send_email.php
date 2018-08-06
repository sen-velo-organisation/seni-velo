<?php 
    if(!isset($_SESSION)) session_start();
    $wwwDir = $_SERVER['DOCUMENT_ROOT'];
    //require_once $wwwDir."/sunusalon/routers/route.php";
    // require_once $wwwDir.INSCRIPTION_MODEL_ROUTE;
    require_once $wwwDir."/seni-velo/src/mail/mail.php";


    if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["subject"]) && isset($_POST["message"]) ){
        if(!is_null($_POST["name"]) && !is_null($_POST["email"]) && !is_null($_POST["subject"]) && !is_null($_POST["message"]) ){
            
            $result = send_mail($_POST["email"], $_POST["name"], $_POST["subject"], $_POST["message"]);

            if ($result) {
                header("Location: ../contact.php?status=1");
            }else {
                header("Location: ../contact.php?in=t&status=0&name=".$_POST["name"]."&email=".$_POST["email"]."&subject=".$_POST["subject"]."&message=".$_POST["message"]);
            }

        }else header("Location: ../contact.php?status=0&name=".$_POST["name"]."&email=".$_POST["email"]."&subject=".$_POST["subject"]."&message=".$_POST["message"]);
    }else header("Location: ../contact.php?status=0&name=".$_POST["name"]."&email=".$_POST["email"]."&subject=".$_POST["subject"]."&message=".$_POST["message"]);