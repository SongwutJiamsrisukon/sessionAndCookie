<?php
session_start();

//sessionเปลี่ยนtabจะบันทึกอยู่ แต่ถ้าปิด browser จะหายหมด

if(isset($_SESSION['view'])){
    $_SESSION['view'] = $_SESSION['view']+1;
}else{
    $_SESSION['view']=1;
}
?>

<html>
    <head>
    <title>Session Demo</title>
    </head>
    <body>
        <p><?php echo $_SESSION['view'] ?></p>
    </body>

</html>