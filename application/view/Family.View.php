<?php
    include '../model/HeWoModel.php';
    include '../view/HeWoView.php';
    include '../controller/HeWoController.php';

    session_start();
    echo $_SESSION['model']->account;
    echo $_SESSION['model']->password;
    $_SESSION['model']->initState("FAMILY");

?>

<html>
<body>
    這裡是家族頁!
</body>
</html>