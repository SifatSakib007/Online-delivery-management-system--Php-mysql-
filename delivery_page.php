<?php
require('db.php');
if (!isset($_SESSION['isUserLoggedIn'])) {
  echo "<script>window.location.href='index.php?user_not_logged_in';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Customer Dashboard</title>
  <script src="https://kit.fontawesome.com/0a5a931992.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="delivery_css.css">


</head>

<body>
  <div class="wrapper">
    <div class="sidebar">
      <h2>Sidebar</h2>
      <ul>
        <li> <a href="admin.php"><i class="fa-solid fa-house"></i>Home</a> </li>
        <li> <a href="delivery_page.php"><i class="fa-solid fa-plus"></i>Add delivery</a> </li>

        <?php
        if ($_SESSION['role'] == 'customer') {
          //echo "<script>window.location.href='index.php';</script>";

        ?>
          <li> <a href="customer_del_report.php"><i class="fa-solid fa-flag"></i>Delivery report</a> </li>
          <li> <a href="branch_report.php"><i class="fa-solid fa-circle-info"></i>Branch report</a> </li>
        <?php }  ?>
        <?php
        if ($_SESSION['role'] == 'admin') {
          //echo "<script>window.location.href='index.php';</script>";

        ?>
          <li> <a href="admin_del_report.php"><i class="fa-solid fa-flag"></i>Delivery report</a> </li>
          <li> <a href="staff.php"><i class="fa-sharp fa-solid fa-person-cane"></i>Add Staff</a> </li>
          <li> <a href="report.php"><i class="fa-solid fa-circle-info"></i>Staff Info</a> </li>
          <li> <a href="branch.php"><i class="fa-solid fa-code-branch"></i>Add Branch</a> </li>
          <li> <a href="branch_report.php"><i class="fa-solid fa-circle-info"></i>Branch report</a> </li>

        <?php }  ?>

      </ul>

      <div class="logout">
        <a href="logout.php"><i class="fa-solid fa-right-from-bracket"></i>Logout</a>
      </div>
    </div>
    <div class="main_concent">
      <div class="header">Welcome</div>
      <!-- code for delivery page form   -->
      <form class=""  method="post" id="frmContactus" action="delivery_page_conn.php">
        <div class="delForm">

          <div class="sender">

            <h2>Sender Information</h2>
            <input type="text" name="s_name" class="input" placeholder="Enter Full Name..." required><br>
            <input type="email" name="s_email" class="input" placeholder="Enter Email Id..." required><br>
            <input type="number" name="s_number" class="input" placeholder="Enter number..."><br>

            <h3>Address</h3>
            <input type="text" name="s_street" class="input" placeholder="Enter Street Address..." required><br>

            <div class="div-2">
              <div>
                <input type="text" name="s_city" placeholder="City" class="input" required>
              </div>


              <div>
                <input type="text" name="s_division" placeholder="Division" class="input" required>
              </div>

            </div>
            <!-- date and time
                          <h2 class="time">Date and Time</h2>
                  <div class="sent">
                      <input type="time" id="appt" name="appt">
                      <input type="date"  name="birthday">
                    </div>
                    <div class="div-2">
                    <div>
                       <input type="number" name="quantity" placeholder="Quantity" class="input"  required>
                      </div>
                      <div>
                       <input type="number" name="weight"  placeholder="Total weight" class="input" required>
                      </div>
                 </div>
                 <input class="add" type="submit" name="price" value="Add">
                 <br/>
                 <div>
                  <input type="number" name="price"  placeholder="Price" class="input" required>
                 </div>
               -->
          </div>

          <!--receiver-->
          <div class="reciever">
            <h2>Reciever Information</h2>
            <input type="text" name="r_name" class="input" placeholder="Enter Full Name..." class="input" required><br>
            <input type="email" name="r_email" class="input" placeholder="Enter Email Id..." class="input" required><br>
            <input type="number" name="r_number" class="input" placeholder="Enter number..." class="input"><br>
            <div class="row" required>
              <h3>Address</h3>
              <input type="text" name="r_street" class="input" placeholder="Enter Street Address..." class="input" required><br>
              <div class="div-2">
                <div>
                  <input type="text" name="r_city" placeholder="City" class="input" required>
                </div>
                <div class="div-2">
                  <div>
                    <input type="text" name="r_division" placeholder="Division" class="input" required>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <input type="submit" name="submit" id="submit" value="Submit" class="btn"></a><span style="color:red;" id="msg"></span>


      </form>



    </div>
  </div>
<!-- JavaScript -->


</body>

</html>