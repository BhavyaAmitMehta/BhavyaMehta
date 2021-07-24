<!DOCTYPE html>
<head>
  <style>
    .box{
      background-color: #f0f5f5;
      position: relative;
      padding: 0% 20% 15% 20%;
      border: 2px solid grey;
      border-radius: 20px;
      margin-top: 10%;
    }
    #file{
      height:22px;
      margin-top: 1%;
    }
  </style>
  <title>Progress</title>
  <h1>Bhavya Mehta</h1>
</head>
<body>
  <?php
   include "skill_conn.php";
    ?>
    <br>
  <?php
  $sql = "SELECT `Name`, `total`, `current`, `percent` FROM `pdetails` WHERE 1";

  if($sql)
  {
     // echo "Data Saved";
     $current = (int)$txtCurrent;
     $total = (int)$txtTotal;
     echo "$current \t";
     echo "$total";
     echo "</br>";

  }
  // INSERT "name","current","total" from 'pdetails' where id="id";

   ?>
   <?php
   for ($j = 1; $j <= 2; $j++) {
   $sql1 = "SELECT * FROM `pdetails` WHERE `id` = $j";

   $result2 = $conn->query($sql1);
   while ($row = $result2->fetch_assoc()) {}

   // if($sql1)
   // {
      // echo "Data Saved";
      $name = $row['Name'];
      $current =  (int)$row['current'];
      $total =  (int)$row['total'];
      // $current = (int)$txtCurrent;
      // $total = (int)$txtTotal;
      echo "$current \t";
      echo "$total";

   // }
 }
   // INSERT "name","current","total" from 'pdetails' where id="id";

    ?>
   <br>
   <progress id="ppp" value="$current" max="$total"> 10% </progress>
  <div class="box">
    <h2 align='center'>Skills</h2>
    <p>
      <label for="skill_1">Python</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br><progress id="file" value="150" max="381"> 50% </progress>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      $total = 381;
      $current = 150;
      $percent = round(($current/$total) * 100);
      ?>
      <?php
      echo "progress $current out of $total = $percent %";
      ?>
<br>
<br>

      <label for="skill_1">Python programming Course Bundle</label>
      <br><progress id="file" value="4" max="276"> 50% </progress>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      $total = 276;
      $current = 4;
      $percent = round(($current/$total) * 100);
      ?>
      <?php
      echo "progress $current out of $total = $percent %";
      ?>
<br>
<br>
      <label for="skill_1">Photoshop</label>
      <br><progress id="file" value="17" max="122"> 50% </progress>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      $total = 122;
      $current = 17;
      $percent = round(($current/$total) * 100);
      ?>
      <?php
      echo "progress $current out of $total = $percent %";
      ?>
<br>
<br>
      <label for="skill_1">data Science / ML</label>
      <br><progress id="file" value="4" max="51"> 50% </progress>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      $total = 51;
      $current = 4;
      $percent = round(($current/$total) * 100);
      ?>
      <?php
      echo "progress $current out of $total = $percent %";
      ?>
<br>
<br>
      <label for="skill_1">C++</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br><progress id="file" value="2" max="55"> 50% </progress>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      $total = 55;
      $current = 2;
      $percent = round(($current/$total) * 100);
      ?>
      <?php
      echo "progress $current out of $total = $percent %";
      ?>
<br>
<br>
      <label for="skill_1">Flutter</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <br><progress id="file" value="4" max="24"> 50% </progress>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <?php
      $total = 24;
      $current = 4;
      $percent = round(($current/$total) * 100);
      ?>
      <?php
      echo "progress $current out of $total = $percent %";
      ?>

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <!-- add a progress bar over here -->
      <!-- show percentage of progress -->
      <!-- show progress in minutes/number of lectures -->
      <br><br><br><br><br><br><br><br><br><br>
      <input type="float" name="minutes" id="minutes">
      <input type="submit" id="more_fields" onclick="add_fields();" value="Add More">
    </p>





    <?php
    //
    // $sql1 = "SELECT `amount_lost`, `main_type_complaint`, `subtype_complaint`,`subtype_other_complaint`, `detailed_description`, `motive` FROM `investigated_details` WHERE `complaint_id`= '$id_viewcase'";
    // $result1 = $conn->query($sql1);

    // $sql1 = "SELECT `current`, `total`, `percent` FROM `pdetails` WHERE `Name`= '$id_viewcase'";
    // $result1 = $conn->query($sql1);

    // $sql = "INSERT INTO `pdetails`(`Name`, `total`, `current`, `percent`) VALUES ('$txtName','$txtCurrent','$txtTotal','$txtPercent')";
    // $result = mysqli_query($conn , $sql);

    while ($row = $result1->fetch_assoc()) {

      // $id_iform = $row['complaint_id'];
      $txtName = $row['Name'];
      $curr = $row['current'];
      $tot = $row['total'];
      $per = $row['percent'];
      // $stype = encrypt_decrypt('decrypt', $row['subtype_complaint']);
      // $stypeother = encrypt_decrypt('decrypt', $row['subtype_other_complaint']);
      // // $id_nc = encrypt_decrypt('decrypt', $row['non_complainant_id']);
      // $dd = encrypt_decrypt('decrypt', $row['detailed_description']);
      // $motive = encrypt_decrypt('decrypt', $row['motive']);
    }
    ?>
    <div class="container">
      <div style="border: 1px solid black;padding: 2%;margin-top: 2%;" class="container-fluid">

        <div style="padding-bottom: 2%;" class="container">
          <div class="row" style="padding-top: 1%;">

            <div class="col-md-12">
              <label style="padding-left: 2%;font-size: x-large;" for="">
                <b><span style="font-size: x-large;font-family: 'Roboto', sans-serif;text-decoration: underline;">Complaint ID:</span>
                  &nbsp: &nbsp <?php $id_viewcase = $txtName; echo "$txtCurrent";  ?></b> </label>

            </div>


          </div>
        </div>
  </div>

</body>
<script type="text/javascript">
function add_fields() {

}

</script>
</html>
