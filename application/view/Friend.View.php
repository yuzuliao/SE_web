<?php
    include '../model/HeWoModel.php';
    include '../view/HeWoView.php';
    include '../controller/HeWoController.php';

    session_start();
    echo $_SESSION['model']->account;
    echo $_SESSION['model']->password;
    if (isset($_POST['FriendBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['FriendBtn']);
    }
    if (isset($_POST['FamilyBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['FamilyBtn']);
    }
    if (isset($_POST['CardBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['CardBtn']);
    }
    if (isset($_POST['HomeBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['HomeBtn']);
    }
    if (isset($_POST['LogoutBtn'])) {
        $_SESSION['controller']->userHasInput($_POST['LogoutBtn']); 
    }

    $_SESSION['model']->initState("FRIEND");

?>

<html>
<body>
    這裡是好友頁!
    <form action="" method="POST">
      <input type="submit" name="FriendBtn" value="Friend" >
      <input type="submit" name="FamilyBtn" value="Family" >
      <input type="submit" name="CardBtn" value="Card" >
      <input type="submit" name="HomeBtn" value="Home" >
      <input type="submit" name="LogoutBtn" value="Logout" >
    </form>
</body>
</html>