

<?php

require_once 'config2.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $app_no = $_POST['app_no'];
    $password = $_POST['password'];
    $ashish = 0;

    $sql = "SELECT Application_No, P_assword FROM applications";
    $result = $link->query($sql);
    
    // echo "<br> Great <br>";

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if(($app_no === $row["Application_No"]) && ($password === $row["P_assword"]))
            {
                echo "You are already registered<br>";
                
                $ashish = 1;
                break;
            }
        }
    } 
}
else if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    echo "jalso";
}



?>