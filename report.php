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
  <link rel="stylesheet" href="nav.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>

  <div class="wrapper">

    <div class="sidebar">

      <h2>Sidebar</h2>
      <ul>
        <li> <a href="admin.php"><i class="fa-solid fa-house"></i>Home</a> </li>
        <li> <a href="delivery_page.php"><i class="fa-solid fa-plus"></i>Add delivery</a> </li>
        <li> <a href="admin_del_report.php"><i class="fa-solid fa-flag"></i>Delivery report</a> </li>
        <?php
        if ($_SESSION['role'] == 'admin') {
          //echo "<script>window.location.href='index.php';</script>";

        ?>

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

      <div class="header">
        <h2>Welcome</h2>
      </div>



    </div>
  </div>


  <!-- Retrieve data code start from here  -->
  <div class="container mt-2">
    <div class="row">
      <div class="col-md-12">
        <div class="page-header">
          <h2>
            <th> SAF Staff's Information </th>
          </h2>
        </div>

        <table class="table">
          <thead>
            <tr>
            
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>
              <th scope="col">Phone</th>
              <th scope="col">City</th>
              <th scope="col">Branch</th>
              <th scope="col">Salary</th>
              <th scope="col">Customize</th>
            </tr>
          </thead>
          <tbody>
            <?php include 'retrieve_staff_page.php'; ?>

            <?php if ($result->num_rows > 0) : ?>

              
<?php
                while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['id']."</td>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['number']."</td>";    
        echo "<td>".$user_data['city']."</td>";
        echo "<td>".$user_data['branch']."</td>";
        echo "<td>".$user_data['salary']."</td>";  
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    } ?>

            <?php else : ?>
              <tr>
                <td colspan="3" rowspan="1" headers="">No Data Found</td>
              </tr>
            <?php endif; ?>

            <?php mysqli_free_result($result); ?>



          </tbody>
        </table>
      </div>
    </div>
  </div>
  <!-- Retrieve data code end from here  -->
  <br>



</body>

</html>