<!DOCTYPE html>

<?php 
    //if(!isset($_SESSION)) session_start();
    $wwwDir = $_SERVER['DOCUMENT_ROOT'];
    //require_once $wwwDir."/seni-velo/src/model.php";
    $_SESSION['active_page'] = "contact";
    //require_once $wwwDir.AJOUT_EMPLOYE_MODEL_ROUTE;
    //require_once $wwwDir.USERS_MODEL_ROUTE;
    if(isset($_GET["name"]) && isset($_GET["email"]) && isset($_GET["subject"]) && isset($_GET["message"])){
        $name = $_GET["name"];
        $email = $_GET["email"];
        $subject = $_GET["subject"];
        $message = $_GET["message"];
    }else {
        $name = "";
        $email = "";
        $subject = "";
        $message = "";
    }
?>
<html>
    <head>
    <meta charset = "utf-8"/>
        <title>Nous contacter</title>
        <link href="/seni-velo/styles/styles" rel="stylesheet" >
        <link href="/seni-velo/styles/bootstrap-3.3.7-dist/css/bootstrap" rel="stylesheet" >
        <script src="/seni-velo/styles/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
        <script src = "/seni-velo/src/js/jquery-3.2.1" ></script>
    </head>
    <body>
        <div class = "container" > 
            <?php include_once $wwwDir."/seni-velo/src/header.php"; ?> 
        </div>





<div class="container padding_top" >
	<div class="row" style="background-color: #eeeeee;margin: 20px;">
    <?php
        if(isset($_GET["status"])){
            if($_GET["status"] == "1"){
               echo " <div class='form-group has-feedback'>
                        <div class='_success'>Message bien envoyé...</div>

                    </div>";
            }else {
                echo "
                    <div class='form-group has-error has-feedback'>
                        <div class='_error'>Message non envoye...</div>
                    </div>";
            }

            ?>
                <script> 
                    $("._success").slideDown(2000).delay(3000).fadeOut(2000);
                    $("._error").slideDown(3000).delay(5000).fadeOut(5000);
                </script>
            <?php
        }
    ?>
        <div  id="contact" tabindex="-1" role="dialog" aria-labelledby="contactLabel" aria-hidden="true">
            <div class="modal-dialog">
            
                <form action="mail/send_email.php" method="post" accept-charset="utf-8">
                <div class="modal-body" style="padding: 5px;">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                                <input class="form-control" name="name" placeholder="Nom" type="text" required autofocus value=<?php echo $name?> ></input>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="email" placeholder="Email" type="text" required value=<?php echo $email ?>></input >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                                <input class="form-control" name="subject" placeholder="Sujet" type="text" required value="<?php echo $subject ?>" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <textarea style="resize:vertical;" class="form-control" placeholder="Message" rows="6" name="message" required value="<?php echo $message ?>"></textarea>
                            </div>
                        </div>
                    </div>  
                    <div class="panel-footer" style="margin-bottom:-14px;">
                        <input type="submit" class="btn btn-success" value="Envoyer"/>
                            <!--<span class="glyphicon glyphicon-ok"></span>-->
                        <input type="reset" class="btn btn-danger" value="Effacer" />
                            <!--<span class="glyphicon glyphicon-remove"></span>-->
                        <!-- <button style="float: right;" type="button" class="btn btn-default btn-close" data-dismiss="modal">Retour</button> -->
                    </div>
                </div>
            </div>
        </div>
	</div>
    
</div>



<?php 
                    include_once $wwwDir."/seni-velo/src/footer.php";
                ?> 
    </body>
</html>