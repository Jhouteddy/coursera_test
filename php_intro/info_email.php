<!DOCTYPE html>
<html>

<body>

    <?php
    $emailTO = "a0936695551@gmail.com";
    $title = "Test email";
    $body = "That is test email content.";
    $headers = "From:myEmail@address.com";

    if (mail($emailTO, $title, $body, $headers)) {
        echo "郵件發送成功";
    } else {
        echo "郵件發送失敗";
    }

    ?>

</body>

</html>