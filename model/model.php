<?php

    function getHomeProducts($limit)
    {
        $db = dbConnect();
        $req = $db->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0, :limit");
        $req->bindParam(':limit', $limit, PDO::PARAM_INT);
        $req->execute();
        $don = $req->fetchall();
        $req->closeCursor();
        return $don;
    }

    function getProduct($paramid)
    {
        $db = dbConnect();
        $req = $db->prepare("SELECT * FROM products WHERE id=?");
        $req->execute([$paramid]);
        $don = $req->fetch();
        $req->closeCursor();
        return $don;
    }

    function paginationNbPage($limit)
    {
        $db = dbConnect();
        $reqCount = $db->query("SELECT * FROM products");
        $count = $reqCount->rowCount(); 
        $reqCount->closeCursor();
        $nbPage = ceil($count/$limit);

        return $nbPage;
    }

    function getProducts($pg = 1, $limit = 4)
    {
        $offset = ($pg-1)*$limit;
        $db = dbConnect();
        $products = $db->prepare("SELECT * FROM products ORDER BY id DESC LIMIT :offset , :mylimit");
        $products->bindParam(':offset', $offset, PDO::PARAM_INT);
        $products->bindParam(':mylimit', $limit, PDO::PARAM_INT);
        $products->execute();
        $donProd = $products->fetchall();
        $products->closeCursor();
        return $donProd;
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