<?php
    $expiry = time()+120;//second 120 = 2min
    setcookie('cookieAttribute','cookieValue',$expiry,'','','',TRUE);//TRUE using in http only
?>
<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <p><?php 
        if(isset($_COOKIE['cookieAttribute']))
            echo $_COOKIE['cookieAttribute'];
        else
            echo "Set Cookie";
    ?></p>
</body>

</html>

