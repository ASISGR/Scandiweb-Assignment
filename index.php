<?php 
    include_once "includes/header.inc.php";
    include_once 'classes/product.class.php';
?>
<form class="container" action="includes/deleteProducts.inc.php" method="POST">
<div style="display:flex; align-items:center;">

    <nav class="container navbar navbar-light bg-light">
        <a href="#" class="m-2 navbar-brand">Product List</a>
        <div>
            <div style="list-style-type: none;">
                <a class="btn btn-primary" href="../pages/addproduct.php"><li>ADD</li></a> 
                <button style="white-space:nowrap" name="btn-mass-delete" class="btn btn-danger" id="delete-product-btn">MASS DELETE</button>
            </div>
        </div>
    </nav>
</div>

    <hr>
        <div class="card" style="display:flex; align-items:center; justify-content:center;flex-direction:row;flex-wrap: wrap;">

        <?php
            $productObj = new Product();
            $productObj->showProducts();
        ?>

        </div>
    </form>

<?php 
    include_once "includes/footer.inc.php";
?>