<?php
    $expiry = time()-120;
    setcookie('cookieAttribute','cookieValue',$expiry,'','','',TRUE);//TRUE using in http only
?>

<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
<p><?php 
        if(isset($_COOKIE['cookieAttribute']))
            echo "Delete Cookie";
        else
            echo "No Cookie";
    ?></p>
</body>

</html>