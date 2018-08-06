
<?php 

    $wwwDir = $_SERVER['DOCUMENT_ROOT'];
?>

<!DOCTYPE html>
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->

<link href="/seni-velo/styles/styles" rel="stylesheet" >
<link href="/seni-velo/styles/bootstrap-3.3.7-dist/css/bootstrap" rel="stylesheet" >
<script src = "/seni-velo/src/js/jquery-3.2.1" ></script>
<?php 
if($_GET['nom'] && $_GET['taille'] && $_GET['couleur'] && $_GET['usages'] && $_GET['poids'] && $_GET['prix'] && $_GET['accessoires'] && $_GET['image']){


?>
<html>
<head>
    <title><?php echo $_GET['nom']  ?></title>
    <link href="/seni-velo/styles/styles" rel="stylesheet" >
<link href="/seni-velo/styles/bootstrap-3.3.7-dist/css/bootstrap" rel="stylesheet" >
<script src = "/seni-velo/src/js/jquery-3.2.1" ></script>
</head>
    <body>
        <div >
            <div class="container" >
                <div class="row">
                <div class="col-xs-7 item-photo">
                        <img style="max-width:100%;" src="<?php echo "/seni-velo/img/".$_GET['image'] ?>" />
                    </div>
                    <div class="product_desc" class="col-xs-5" >
                        <!-- Datos del vendedor y titulo del producto -->
                        <h1><?php echo $_GET['nom'] ?></h1>    
                        <dl>
                            <dt>TAILLE</dt>
                            <dd><?php echo $_GET['taille'] ?></dd>
                            <dt>COULEUR</dt>
                            <dd><?php echo $_GET['couleur'] ?></dd>
                            <dt>POIDS</dt>
                            <dd><?php echo $_GET['poids'] ?></dd>
                            <dt>PRIX</dt>
                            <dd><?php echo $_GET['prix'] ?></dd>
                            <dt>ACCESSOIRES</dt>
                            <dd><?php echo $_GET['accessoires'] ?></dd>
                        </dl>
                    </div>                              	
                </div>
            </div>  
        </div>   
        
        <?php 
                    include_once $wwwDir."/seni-velo/src/footer.php";
                ?> 
    </body>
</html>

<?php 
}
else header('Location: ..');
?>