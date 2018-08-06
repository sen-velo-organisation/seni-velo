<!DOCTYPE html>

<?php 
    //if(!isset($_SESSION)) session_start();
    $wwwDir = $_SERVER['DOCUMENT_ROOT'];
    require_once $wwwDir."/seni-velo/src/model.php";
    $_SESSION['active_page'] = "categorie";
    //require_once $wwwDir.AJOUT_EMPLOYE_MODEL_ROUTE;
    //require_once $wwwDir.USERS_MODEL_ROUTE;

    $velos = get14PoucesVelos();
    // echo "<p>";
    // foreach($velos as $velo) 
    // print_r($velo["nom"]."  " );
    // echo "</p>";

        
?>
<html>
    <head>
    <meta charset = "utf-8"/>
        <title>seni-velo</title>
        <link href="/seni-velo/styles/styles" rel="stylesheet" >
        <link href="/seni-velo/styles/bootstrap-3.3.7-dist/css/bootstrap" rel="stylesheet" >
        <script src = "/seni-velo/src/js/jquery-3.2.1" ></script>
    </head>
    <body>
        <div class = "container" > 
                <?php 
                    include_once $wwwDir."/seni-velo/src/header.php";
                ?> 
                    
            </div>

        <div class="panel panel-primary padding_top">
        <table class="table table-condensed">
            <div class="panel-heading"> 
            <h3 style="text-align:center;" class="panel-title">
                SENI-VELO 
            </h3>
            </div>
            <thead style="color:blue;">
            <tr>
                <th style="text-align:center;">NOMS</th>
                <th style="text-align:center;">TAILLES</th>
                <th style="text-align:center;">COULEURS</th>
                <th style="text-align:center;">USAGES</th>
                <th  style="text-align:center;">POIDS</th>
                <th  style="text-align:center;">PRIX</th>
                <th  style="text-align:center;">ACCESSOIRES</th>
                <th  style="text-align:center;">IMAGES</th>
            </tr>
            </thead>
            <tbody>
            <script>
            clients = [];
            </script>
            <?php
                $nbVelos = 0;
                foreach($velos as $value){
            ?>
            <script>
                clients[ "<?php echo $nbVelos ?>" ] = {
                nom: " <?php echo $value["nom"] ?> " ,
                taille: "<?php echo $value["taille"] ?>" ,
                couleur: "<?php echo $value["couleur"] ?>" ,
                usages:"<?php echo $value["usages"] ?>" ,
                poids: "<?php echo $value["poids"] ?>",
                prix: "<?php echo $value["prix"] ?>",
                accessoires: "<?php echo $value["accessoires"] ?>",
                image: "<?php echo $value["image"] ?>"
                };
            </script>
            <?php
                    echo 
                    "<tr valign='middle' id = '".$nbVelos."' >
                        <td width='5%' align='center' id = 'nom_".$nbVelos."' >".$value["nom"]."</td>".
                        "<td width='5%' align='center' id = 'taille_".$nbVelos."' >".$value["taille"]."</td>".
                        "<td width='5%' align='center' id = 'couleur_".$nbVelos."' >".$value["couleur"]."</td>".
                        "<td width='10%' align='center' id = 'usages_".$nbVelos."' >".$value["usages"]."</td>".
                        "<td width='5%' align='center' id = 'poids_".$nbVelos."' >".$value["poids"]."</td>".
                        "<td width='5%' align='center' id = 'prix_".$nbVelos."' >".$value["prix"]."</td>".
                        "<td width='20%' align='center' id = 'accessoires_".$nbVelos."' >".$value["accessoires"]."</td>".
                        "<td width='5%' align='center' id = 'image_".$nbVelos."' ><a href='/seni-velo/src/ficheProduit.php?nom=".$value["nom"]."&taille=".$value["taille"]."&couleur=".$value["couleur"]."&usages=".$value["usages"]."&poids=".$value["poids"]."&prix=".$value["prix"]."&accessoires=".$value["accessoires"]."&image=".$value["image"]."'><image class='vignette' src='/seni-velo/img/".$value["image"]."'></image> </a></td>".
                    "</tr>";
                    $nbVelos++;
                }

            ?>
            </tbody>
        </table>
        </div>
        <?php 
                    include_once $wwwDir."/seni-velo/src/footer.php";
                ?> 
    </body>
</html>