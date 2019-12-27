<!DOCTYPE html>
<html>

<body>

    <?php
    for ($i = 1; $i < 10; $i++) {
        echo $i . "<br/>";
    }

    $myArray = array("cat", "dog", "fish");
    foreach ($myArray as $key => $value) {
        echo "位置: $key ,值為: $value <br/>";
    }

    $i = 0;
    while ($i <= 10) {
        echo $i . "<br/>";
        $i++;
    }

    //$myArray = array("cat", "dog", "fish");
    //$i = 0;
    while ($myArray[$i]) {
        //echo $myArray[$i] . "<br/>";
        echo "位置: $i ,值為: $myArray[$i] <br/>";
        $i++;
    }



    ?>

</body>

</html>