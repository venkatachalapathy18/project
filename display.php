<?php
include 'connect.php';
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>college</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 

</head>
<body>
      <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add User</a>
            </button>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Date of joining</th>
                    <th scope="col">Address</th>
                    <th scope="col">Department</th>
                    <th scope="col">Phone number</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Blood group</th>          
                  </tr>
                </thead>
                <tbody>

                    <?php 
                       $sql="Select * from 'staff'";
                       $result=mysqli_query($con,$sql);
                       if($result)
                        {
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $id=$row['id'];
                                $name=$row['name'];
                                $date_of_joining =$row['date_of_joining'];
                                $address=$row['address'];
                                $department=$row['department'];
                                $phone_number=$row['phone_Number'];
                                $gender=$row['gender'];
                                $blood_group=$row['blood_group'];
                                echo '<tr>
                                <th scope="row">'.$id.'</th>
                                <td>'.$name.'</td>
                                <td>'.$date_of_joining.'</td>
                                <td>'.$address.'</td>
                                <td>'.$department.'</td>
                                <td>'.$phone_number.'</td>
                                <td>'.$gender.'</td>
                                <td>'.$blood_group.'</td>
                                <td>
                   <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                   <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                    </td>
                              </tr>';
                              
                            }
                        }






                    ?>
                
                   
                </tbody>
              </table>
      </div>
</body>
