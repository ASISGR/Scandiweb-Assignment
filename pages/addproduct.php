<?php 

    include_once "../includes/header.inc.php";

    include_once '../classes/product.class.php';

?>

<form class="container" id="product_form" action="../includes/addProducts.inc.php" method="POST">

<div style="display:flex; align-items:center;">



    <nav class="container navbar navbar-light bg-light">

        <a href="#" class="m-2 navbar-brand">Product Add</a>

        <div>

            <div style="list-style-type: none;">

                <button name="btn-save" class=" btn btn-primary" >Save</button>

                <a class="btn btn-danger" href="/"><li>Cancel</li></a> 

            </div>

        </div>

    </nav>



</div>



    <hr>

        <div class="container-add">

            <div>

                <label for="sku">SKU</label>

                <input type="text" placeholder="e.g FFE-KKF-LLS-013" name="sku" id="sku" required>

            </div>

            <div>

                <label for="name">Name</label>

                <input type="text" placeholder="Product Name" name="productname" id="name" required>

            </div>

            <div>

                <label for="price">Price ($)</label>

                <input type="number" placeholder="e.g. 10" name="pricevalue" id="price" required>

            </div>

            <div>

                <label for="productType">Type Switcher</label>

                <select class="custom-select" name="switchvalue" id="productType">

                    <option selected>Select a type</option>

                    <option value="1">DVD</option>

                    <option value="2">Book</option>

                    <option value="3">Furniture</option>

                </select>

                <span id="switchnotification"><b>Please select a type</b></span>

            </div>

            <div id="DVD">

                <div>

                    <label for="size">Size (MB)</label>

                    <input type="number" placeholder="e.g. 500" name="sizembvalue" id="size">

                    <span><b>Please, provide size in MB</b></span>

                </div>



            </div>

            <div id="Book">

                <div>

                    <label for="weight">Weight (KG)</label>

                    <input type="number" placeholder="e.g. 10" name="sizekgvalue" id="weight">

                    <span><b>Please, provide size in KG</b></span>

                </div>

             </div>

            <div id="Furniture">

                <div>

                    <label for="height">Height (CM)</label>

                    <input type="number" placeholder="e.g. 120" name="heightvalue" id="height">                    

                </div>



                <div>

                    <label for="width">Width (CM)</label>

                    <input type="number" placeholder="e.g. 120" name="widthvalue" id="width">                    

                </div>

                <div>

                    <label for="length">Length (CM)</label>

                    <input type="number" placeholder="e.g. 120" name="lengthvalue" id="length">                

                    <span><b>Please, provide dimensions</b></span>

                </div>

            </div>

        </div>

    </form>



<?php 

    include_once "../includes/footer.inc.php";

?>