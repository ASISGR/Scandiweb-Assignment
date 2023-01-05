<?php 

    include_once '../classes/product.class.php';

    $sku = $_POST['sku'];

    $name = $_POST['productname'];

    $price = $_POST['pricevalue'];

    $switchType = $_POST['switchvalue'];

    $mbSize = $_POST['sizembvalue'];

    $weightKg = $_POST['sizekgvalue'];

    $heightCm = $_POST['heightvalue'];

    $widthCm = $_POST['widthvalue'];

    $lengthCm = $_POST['lengthvalue'];

    $result = "";

    if($switchType == 1){

        $result = 'Size: ';

        $result .= $mbSize;

        $result .= " MB";

    }else if ($switchType == 2){

        $result = 'Weight: ';

        $result .= $weightKg;

        $result .= ' KG';

    }else if ($switchType == 3){

        $result = 'Dimension: ';

        $result .= $heightCm .= 'x';

        $result .= $widthCm .= 'x';

        $result .= $lengthCm;

    }

    $productObj = new Product();

    $productObj->listProduct($sku,$name,$price,$result);

?>



