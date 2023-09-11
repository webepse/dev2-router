<?php
    require "model/model.php";
    $menu = [
        "home" => "home.php",
        "presentation" => "presentation.php",
        "contact" => "contact.php"
    ];
    if(isset($_GET['action']))
    {
        $getMenu = htmlspecialchars($_GET['action']);

        if(array_key_exists($getMenu,$menu))
        {
            if($getMenu=="home")
            {
                $products = getProducts();
                $myMenu = $menu['home'];
            }elseif($getMenu=="presentation")
            {
                $myMenu = $menu['presentation'];
            }elseif($getMenu=="contact")
            {
                $myMenu = $menu['contact'];
                include('model/postcontact.php');
            }



        }else{
           header("LOCATION:404.php");
        }


    }else{
        $myMenu = $menu['home'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    
    <title>Document</title>
</head>
<body>
    <?php include("partials/header.php"); ?>
    <main>
        <?php
            include("view/".$myMenu);
        ?>
    </main>
    <?php include("partials/footer.php"); ?>
</body>
</html>