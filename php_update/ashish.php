<?php
require_once "config2.php";
require_once __DIR__ . '/vendor/autoload.php';
// require_once "page2.php";


if($_SERVER["REQUEST_METHOD"] == "POST" && count($errors) === 0)
{
    $can_name = $_POST['can_name'];
    $fat_name = $_POST['fat_name'];
    $bd = $_POST['bd'];
    $gen = $_POST['gen'];
    $id_type = $_POST['id_type'];
    $id_no = $_POST['id_no'];

    $p_name = $_POST['p_name'];
    $sub_lo = $_POST['sub_lo'];
    $lo = $_POST['lo'];
    $country = $_POST['country'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $pin = $_POST['pin'];
    $email = $_POST['email'];
    $num = $_POST['num'];
    
    $pass = $_POST['pass'];
    $cpass= $_POST['cpass'];
    
    $sql = "INSERT INTO `form1` (`can_name`, `fat_name`,`bd`,`gen`,`id_type`,`id_no`) VALUES (?,?,?,?,?,?)";
    
    $sqll = "INSERT INTO `form2` (`p_name`,`sub_lo`,`lo`,`country`,`district`,`city`,`pin`,`email`,`num`) VALUES (?,?,?,?,?,?,?,?,?)";

    $sqlll = "INSERT INTO `form3` (`pass`,`cpass`) VALUES (?,?)";

    if ($stmt = mysqli_prepare($link,$sql))
    {
        mysqli_stmt_bind_param($stmt,"sssssi",$t_can,$t_fat,$t_bd,$t_gen,$t_idt,$t_idn);

        $t_can = $can_name;
        $t_fat = $fat_name;
        $t_bd = $bd;
        $t_gen = $gen;
        $t_idt = $id_type;
        $t_idn = $id_no;

        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            echo "The form1 inserted successfully<br>";
            // exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
        
    }
    mysqli_stmt_close($stmt);
    
    if ($stmt = mysqli_prepare($link,$sqll))
    {
        mysqli_stmt_bind_param($stmt,"ssssssisi",$t_p,$t_sub,$t_lo,$t_country,$t_district,$t_city,$t_pin,$t_email,$t_num);

        
        $t_p = $p_name;
        $t_sub = $sub_lo;
        $t_lo = $lo;
        $t_country = $country;
        $t_district = $district;
        $t_city = $city;
        $t_pin = $pin;
        $t_email = $email;
        $t_num = $num;
        
        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            echo "The form2 inserted successfully<br>";
            // exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
        
    }
    mysqli_stmt_close($stmt);

    if ($stmt = mysqli_prepare($link,$sqlll))
    {
        mysqli_stmt_bind_param($stmt,"ss",$t_pass,$t_cpass);
        
        $t_pass = $pass;
        $t_cpass = $cpass;

        if (mysqli_stmt_execute($stmt)) {
            // Records created successfully. Redirect to landing page
            echo "The form3 inserted successfully<br>";
            // echo "Download Your Details";
            // echo "<a href='http://localhost/php_programs/php_update/download.php'>Download</a>";
            // exit();
        } else {
            echo "Something went wrong. Please try again later.";
        }
        
        
    }
    // echo "<script type='text/javascript'>alert('Your Form inserted Successfully');</script>";

    mysqli_stmt_close($stmt);
    mysqli_close($link);


    $mpdf = new \Mpdf\Mpdf();

    $data = '';
    
    $data .= "<h1> Your Details </h1><br>";
    
    $data .= "Candidate Name : ".$can_name."<br>";
    $data .= "Candidate Father's Name : ".$fat_name."<br>";
    $data .= "Candidate Birth Date : ".$bd."<br>";
    $data .= "Candidate Gender : ".$gen."<br>";
    $data .= "Candidate Id Type : ".$id_type."<br>";
    $data .= "Candidate Id no. : ".$id_no."<br>";
    $data .="<br>";
    $data .= "Premise Name : ".$p_name."<br>";
    $data .= "Sub-Locality : ".$sub_lo."<br>";
    $data .= "Locality : ".$lo."<br>";
    $data .= "Country : ".$country."<br>";
    $data .= "District : ".$district."<br>";
    $data .= "City : ".$city."<br>";
    $data .= "Pin-Code : ".$pin."<br>";
    $data .= "Candidate email : ".$email."<br>";
    $data .= "Candidate Mobile Number : ".$num."<br>";

    $mpdf->WriteHTML($data);


    $mpdf->Output('my_details.pdf', 'D');

}
else{
    echo "Ashish";
}

?>