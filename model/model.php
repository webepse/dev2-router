<?php

    function getProducts()
    {
        $db = dbConnect();
        $req = $db->query("SELECT * FROM products");
        $don = $req->fetchall();

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