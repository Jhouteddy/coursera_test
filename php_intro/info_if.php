<!DOCTYPE html>
<html>

<body>

    <?php
    $number1 = 2;
    $number2 = 1;
    $number3 = 1;
    if ($number1 != $number2 and $number2 != $number3) {
        echo "True";
    } else {
        echo "False";
    }

    if ($number1 != $number2 OR $number2 != $number3) {
        echo "True";
    } else {
        echo "False";
    }

    ?>

</body>

</html>