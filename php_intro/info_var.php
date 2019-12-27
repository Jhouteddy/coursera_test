<!DOCTYPE html>
<html>

<body>

    <?php
    $string_var = "這是php語言.";
    $another_string = "這是一個\"字符串\"變量.";
    echo "Hello World!";
    echo $string_var . $another_string;

    $number = 10;
    echo $number / 2;

    $name = "Ken";
    echo "我的名字是$name";
    echo "我的名字是" . $name;

    $a = "name";
    echo $$a;

    $myArray = array("漢堡", "巧克力", "咖啡");
    print_r($myArray);
    echo "<br/>";
    echo $myArray[2];
    echo "<br/>";

    $anotherArray[0] = "ice";
    $anotherArray[1] = "apple";
    print_r($anotherArray);
    echo "<br/>";

    $thirArray = array(
        "法國" => "法語",
        "日本" => "日語",
        "美國" => "英文"
    );
    print_r($thirArray);
    echo "<br/>";
    echo $thirArray["美國"];
    echo "<br/>";

    $anotherArray[] = "banana";
    print_r($anotherArray);
    echo "<br/>";

    unset($thirArray["美國"]);
    print_r($thirArray);
    echo "<br/>";

    $name1 = "teddy";
    unset($name1);
    echo "1" . $name1;
    ?>

</body>

</html>