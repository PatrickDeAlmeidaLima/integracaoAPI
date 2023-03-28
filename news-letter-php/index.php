<?php session_start(); // place it on the top of the script ?>
<?php
    $statusMsg = !empty($_SESSION['msg'])?$_SESSION['msg']:'';
    unset($_SESSION['msg']);
    echo $statusMsg;
?>

<form method="post" action="action.php" target='teste'>
    <p><label>Email: </label><input type="text" name="email" id='teste'/></p>
    <p><input type="submit" name="submit" value="SUBSCRIBE"/></p>
</form>