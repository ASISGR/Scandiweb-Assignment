<?php 
    include_once '../classes/product.class.php';
    //returing array of products checkboxes
    if(isset($_POST['btn-mass-delete']) && isset($_POST['productID']) ){
        $productsIdArr = $_POST['productID'];
        $ProductsObj = new Product();
        $ProductsObj->deleteMassProducts($productsIdArr);

     }else{
        header("Location: /");
    }
    //print_r($productsIdArr);
?>