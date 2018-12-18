<?php
    include '../model/HeWoModel.php';
    include '../view/HeWoView.php';
    include '../controller/HeWoController.php';

    session_start();

    $model = new HeWoModel();
    $controller = new HeWoController($model);
    $view = new HeWoView($controller, $model);
    $model->setView($view);
    $controller->setView($view);

    $_SESSION['model'] = $model;
    $_SESSION['view'] = $view;
    $_SESSION['controller'] = $controller;

    if (isset($_POST['LoginBtn'])) {
        $_SESSION['model']->account=$_POST['username'];
        $_SESSION['model']->password=$_POST['password'];
        
        $_SESSION['controller']->userHasInput($_POST['LoginBtn']);
    }
    $_SESSION['model']->initState("START");

?>

<html>
<body>
    <form action="" method="POST">
        帳號：<input name="username" type="text" /><br/>
        密碼：<input name="password" type="password" /><br/>
      <input type="submit" name="LoginBtn" value="Login" >
    </form>
</body>
</html>