<?php
    include '../model/HeWoModel.php';
    include '../view/HeWoView.php';
    include '../controller/HeWoController.php';

    session_start();
    echo $_SESSION['model']->account;
    echo $_SESSION['model']->password;
    $_SESSION['model']->initState("CARD");

?>

<html>
<body>
    這裡是抽卡頁!
</body>
</html>