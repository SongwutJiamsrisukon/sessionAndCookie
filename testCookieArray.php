<?php
    $expiry = time()+120;//second 120 = 2min
    setcookie('userdata[name]','phantomXIII',$expiry,'','','',TRUE);//TRUE using in http only
    setcookie('userdata[age]','31',$expiry,'','','',TRUE);//TRUE using in http only
    setcookie('userdata[gender]','Male',$expiry,'','','',TRUE);//TRUE using in http only

    setcookie('stuff[name]','Edgar Morris',$expiry,'','','',TRUE);//TRUE using in http only
    setcookie('stuff[age]','37',$expiry,'','','',TRUE);//TRUE using in http only
    setcookie('stuff[gender]','Female',$expiry,'','','',TRUE);//TRUE using in http only
?>

<html>
<head>
    <title>Cookie Demo</title>
</head>
<body>
    <p>
        <?php
            if(isset($_COOKIE['userdata']) && isset($_COOKIE['stuff'])){

                echo $_COOKIE['stuff']['name']."<br/>";

                if (isset($_COOKIE['userdata'])) {
                foreach ($_COOKIE['userdata'] as $name => $value) {
                    $name = htmlspecialchars($name);
                    $value = htmlspecialchars($value);
                    echo "$name : $value <br />\n";
                    }
                } 
                echo "<br/>";
                print_r($_COOKIE);
            }
            else{
                echo "Set Cookie";
            }
        ?>
    </p>

</body>

</html>