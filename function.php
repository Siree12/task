<?php
include("config.php");

if(isset($_POST['submit']))
  {
      $name = $_POST['Username'];
      $password = $_POST['Email'];
      $gender = $_POST['Password'];
      $Gmail = $_POST['gender'];
      $MSG = $_POST['branch'];
      $name = $_POST['section'];
      $password = $_POST['Roll Number'];
      $gender = $_POST['MSG'];
      


      $result = mysqli_query($mysqli,"INSERT INTO from values('','$Username', '$Email', '$Password', '$gender',  '$branch', '$section', '$Roll Number',MSG')");

      if($result)
      {
          header("Location:index.html");
      }
      else{
        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['Email']; ?></td>
          <td><?php echo $row['Password']; ?></td>
          <td><?php echo $row['gender'] ?></td>
          <td><?php echo $row['branch'] ?></td>
          <td><?php echo $row['section']; ?></td>
          <td><?php echo $row['Roll Number']; ?></td>
          <td><?php echo $row['MSG']; ?></td>
          
          
      </tr>

      }
      
  }