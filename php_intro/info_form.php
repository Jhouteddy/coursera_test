<!DOCTYPE html>
<html>

<head>
    <title>Learn Jquery</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
</head>

<body>


    <?php

    print_r($_GET);
    echo "<br/>";
    print_r($_GET["name"]);

    if ($_GET["name"]) {
        echo "您的姓名是" . $_GET["name"];
    } else {
        echo "請輸入您的姓名";
    }
    ?>

    <form>
        <label for="name">姓名</label>
        <input name="name" type="text" />
        <input type="submit" name="submit" />
    </form>

    <hr />


    <?php

    $names = array("Ken", "Tom", "Jhon");
    $knowYou = 0;

    print_r($_POST);
    echo "<br/>";
    print_r($_POST["name1"]);

    if ($_POST["name1"]) {

        foreach ($names as $name) {
            if ($_POST["name1"] == $name) {
                echo "我認識您,您是" . $_POST["name1"];
                $knowYou=1;
            }
        }

        if(!$knowYou){
            echo "抱歉我不認識您.";
        }

    } else {
        echo "請輸入您的姓名";
    }
    ?>
    <form method="post">
        <label for="name1">姓名</label>
        <input name="name1" type="text" />
        <input type="submit" name="submit2" />
    </form>

</body>

</html>