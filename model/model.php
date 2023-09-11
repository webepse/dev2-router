<?php

    function getHomeProducts($limit)
    {
        $db = dbConnect();
        $req = $db->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0, :limit");
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $don = $req->fetchall();

        return $don;
    }

    function getProduct($paramid)
    {
        $db = dbConnect();
        $req = $db->prepare("SELECT * FROM products WHERE id=?");
        $req->execute([$paramid]);
        $don = $req->fetch();

        return $don;
    }


    function dbConnect(): PDO
    {
        try{
            $bdd = new PDO('mysql:host=localhost;dbname=stock;charset=utf8','root','',[
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
            return $bdd;

        }catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }

?>