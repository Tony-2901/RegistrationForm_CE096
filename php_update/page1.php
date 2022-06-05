

<?php
// require_once 'config.php';
require_once 'registered.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $ashish === 0)
{
    $app_no = $_POST['app_no'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `applications` (`Application_No`, `P_assword`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($link,$sql))
    {
        mysqli_stmt_bind_param($stmt,"ii",$app_no,$password);

        $app = $app_no;
        $pass = $password;

        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            $sql2 = "CREATE DATABASE `ash`";

            $result2 = mysqli_query($link,$sql2);

            $sql3 = "CREATE TABLE `ash`.`form1` ( `can_name` VARCHAR(15) NOT NULL , `fat_name` VARCHAR(15) NOT NULL , `bd` DATE NOT NULL , `gen` VARCHAR(10) NOT NULL , `id_type` VARCHAR(30) NOT NULL , `id_no` INT(15) NOT NULL ) ENGINE = InnoDB;";

            $result3 = mysqli_query($link,$sql3);

            $sql4 = "CREATE TABLE `ash`.`form2` ( `p_name` VARCHAR(15) NOT NULL , `sub_lo` VARCHAR(15) NOT NULL , `lo` VARCHAR(15) NOT NULL , `country` VARCHAR(15) NOT NULL , `district` VARCHAR(15) NOT NULL , `city` VARCHAR(15) NOT NULL , `pin` INT(6) NOT NULL , `email` VARCHAR(15) NOT NULL , `num` INT(10) NOT NULL ) ENGINE = InnoDB;";

            $result4 = mysqli_query($link,$sql4);

            $sql5 = "CREATE TABLE `ash`.`form3` ( `pass` VARCHAR(15) NOT NULL , `cpass` VARCHAR(15) NOT NULL ) ENGINE = InnoDB;";
            $result5 = mysqli_query($link,$sql5);


            echo "The record inserted successfully";

            echo "<a href='http://localhost/php_programs/php_update/ppp.php'>Next</a>";

            // exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }

        
    }
    // Close statement
    mysqli_stmt_close($stmt);

    // Close connection
    mysqli_close($link);
}
else if ($_SERVER["REQUEST_METHOD"] == "GET")
{
    echo "jalso";
}



?>