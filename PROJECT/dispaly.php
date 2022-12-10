<?php
/* display the users */
require 'header.php';
session_start();
if(!isset($_SESSION['user_id'])){
    header('location:signup.php');
    exit();
}else{
    require './inc/dbh.php';
    $sql = "SELECT * FROM blood_donors";
    if (!empty($conn)) {
        $result = $conn->query($sql);
    }
    echo '<section class="person-row">';
    echo '<table class="table table-striped">
              <tr>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Email</th>
               <th>Phone Number</th>
              </tr>';
    foreach($result as $row){
        echo '<tr>
                 <td>' . $row['fname'] . '</td>
                 <td>' . $row['lname'] . '</td>
                 <td>' . $row['email'] . '</td>
                 <td>' . $row['telNumber'] . '</td>
                </tr>';
    }
    echo '</table>';
    echo '<a href="logout.php" class="btn btn-warning">Logout</a>';
    echo '</section>';
    $conn = null;
}
?>
