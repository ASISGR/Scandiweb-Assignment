<?php

include_once 'dbh.class.php';



class Product extends Dbh{



    //protected $id, $sku, $name, $price, $product_details;



    function showProducts(){

        $sql = "SELECT * FROM product_list_items ORDER BY id ASC    ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $rows = $stmt->fetchAll();



        foreach($rows as $row){



           echo '<div class="card m-4 card-body" style="display:flex;align-items:center;display:flex;width:200px; max-width:250px">

                <input class="delete-checkbox" name="productID[]" style="align-self:start;" value="'.$row['id'].'" type="checkbox">

                <p class="card-text">'.$row['sku'].'</p>

                <p class="card-text">'.$row['name'].'</p>

                <p class="card-text">'.$row['price'].'  $</p>

                <p class="card-text">'.$row['productdetails'].'</p>

                </div>';

        }

    }



    function deleteMassProducts($pIDS){



        $ids = implode("','", $pIDS);

        $sql = "DELETE FROM product_list_items WHERE id IN ('$ids') ";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        $this->conn = NULL;

        header("Location: /");

    }



    function listProduct($sku, $name, $price, $desc){

        //Get SKU values

        $sqlGetSku = "SELECT * FROM product_list_items";

        $statement = $this->conn->prepare($sqlGetSku);

        $statement->execute();

        $rows = $statement->fetchAll();

        //check existing values

        foreach($rows as $row){

            if(strtolower($row['sku']) == strtolower($sku)){

                $this->conn = NULL;

                header("Location: /");

            }

        }

        //if nothing found insert to database

        $sql = "INSERT INTO product_list_items (sku,name,price,productdetails) VALUES (?,?,?,?)";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$sku,$name,$price,$desc]);

        $this->conn = NULL;

        header("Location: /");

    }

}

?>