<?php 
    if(!isset($_SESSION['active_page'])) $_SESSION['active_page'] = "accueil";
?>

<meta charset = "utf-8" >
        <!-- <link href='/sunusalon/styles/bootstrap-3.3.7-dist/css/bootstrap.css' rel='stylesheet'>
        <link href='/sunusalon/styles/colors'  rel='stylesheet' >
        <link href='/sunusalon/styles/paddings'  rel='stylesheet' >
        <script src = "/sunusalon/js/jquery-3.2.1" ></script> -->

<link href="/seni-velo/styles/styles" rel="stylesheet" >
<link href="/seni-velo/styles/bootstrap-3.3.7-dist/css/bootstrap" rel="stylesheet" >
<script src = "/seni-velo/src/js/jquery-3.2.1" ></script>

<?php 
    include_once $wwwDir."/seni-velo/src/headCategoriesNav.php";
?> 

<div class = "navbar navbar-inverse navbar-fixed-top" >
    <div class = "container-fluid" >
        <div class = "navbar-header" >
        <a href="<?php echo "/seni-velo"?>">
            <button class = "navbar-brand btn" id = "links" style = "background-color: black;">
                <image src="/seni-velo/img/logo.png" style="width: 50px; height: 40; "></image>
            </button>     
        </a> 
        </div>
        <ul class = "nav navbar-nav" >
            <li class = <?php echo $_SESSION['active_page'] == "accueil" ? 'active' : '' ?>  ><a href="<?php echo "/seni-velo"?>">Accueil</a></li>
            
            <li id="categorie" class = <?php echo $_SESSION['active_page'] == "categorie" ? 'active' : '' ?> ><a href="#">Categories</a></li>
            <li class = <?php echo $_SESSION['active_page'] == "contact" ? 'active' : '' ?>  ><a href="<?php echo "/seni-velo/src/contact.php"?>">Nous contacter</a></li>

        </ul>

        <form class="navbar-form navbar-right inline-form" method="GET" action="<?php echo $_SESSION['active_page'] == "accueil" ? 'src/resultatRecherche.php' : 'resultatRecherche.php' ?>">
            <div class="form-group">
                <input type="search" name="text_search" class="input-sm form-control" placeholder="Recherche">
                <button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-eye-open"></span> Chercher</button>
            </div>
        </form>

    </div>
</div>

<script>
    $(document).ready(function(){

        // $("#profil_btn").on("click", function(){
        //     if($('.profil_nav:visible').length == 0){
        //         $(".profil_nav").show("slow");
        //         //$( ".profil_nav-sm" ).focus();
        //     }
        //     else $(".profil_nav").hide("slow");
        // });

        // $("#profil_btn").focusout(function(){
        //     $(".profil_nav").hide("slow");
        // }); 

        $('#categorie').on("click", function(){
            
            if($('.categories_nav:visible').length == 0){
                $(".categories_nav").show("slow");
            }
            else $(".categories_nav").hide("slow");

        });

        $("#categorie").focusout(function(){
            $(".categories_nav").hide("slow");
        }); 

    })
</script>