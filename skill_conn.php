<?php
// database connection file
$databaseHost = 'localhost';//or localhost
$databaseName = 'progress'; // your db_name
$databaseUsername = 'root'; // root by default for localhost
$databasePassword = '';  // by defualt empty for localhost

$conn = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);



//UPDATE QUERY

// database insert SQL code
// $sql = "INSERT INTO `investigated details`(`complaint_id`, `amount_lost`, `main_type_complaint`,`main_type_other`, `subtype_complaint`, `subtype_other_complaint`, `detailed_description`, `motive`, `other_motive`)
// VALUES ('$something','$txtTotal_Amount_Lost','$txtMain_Type_comp','$txtOtherMain','$txtSub_Type_comp','$txtOther','$txtDescription','$txtMotive','$txtOtherMotive')";

// $sql = "INSERT INTO `pdetails`(`Name`, `total`, `current`, `percent`)
// VALUES ('$txtName','$txtCurrent','$txtTotal','$txtPercent')";
//  $result = mysqli_query($conn , $sql);

 $sql1 = "SELECT `Name`, `current`, `total`, `percent` FROM `pdetails` WHERE `Name`= 'Python'";
 $result1 = $conn->query($sql1);
 $row = $result1->fetch_assoc();

 if($result1)
 {

    $txtName = $row['Name'];
    $txtCurrent = $row['current'];
    $txtTotal =  $row['total'];
    $txtPercent =  $row['percent'];
    // echo "Data Saved";
    echo "Data Saved";

    header('Refresh: 4; URL= skill.php');

 }
 else {
   echo "Data not saved";
   header('Refresh: 4; URL= skill.php');
 }


?>
