<?php

include 'connect.php';

if(isset($_POST['submit'])) {

    $name=$_POST['name'];
    $date_of_joining=$_POST['date_of_joining'];
    $address=$_POST['address'];
    $department=$_POST['department'];
    $phone_number=$_POST['phone_number'];
    $gender=$_POST['gender'];
    $blood_group=$_POST['blood_group'];

    $sql="insert into 'staff'(name,date_of_joining,address,department,phone_number,gender,blood_group) values('$name','$date_of_joining','$address','$department','$phone_number','$gender','$blood_group')";
     $result=mysqli_query($con,$sql);
    if($result) {
        //echo "Data entered successfully";
        header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}





?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="ws_noth=device-ws_noth, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> 

    <title>college</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="mb-3">
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Enter your Name" name="name">
                </div>
                <div class="mb-3">
                    <label>Date of Joining</label>
                    <input type="date" class="form-control" placeholder="Enter your Date of Joining" name="dateof joining">
                </div>
                <label>Address</label>
                <input type="text" class="form-control" placeholder="Enter your Address" name="address">
               
                <div class="mb-3">
                    <label>Phone Number</label>
                    <input type="text" class="form-control" placeholder="Enter your Phone Number" name="phone_number">
                </div>
                <div class="mb-3">
                    <label>Gender</label>
                </div>
                <div>
                <input type="radio"  name="gender" value="male">Male
                </div>
                <div>
                <input type="radio"  name="gender" value="female">Female
                </div>
                <div class="from-group">
                    <label>Blood Group</label>
                    <select name="blood_group" class="form-control"  >
                        <option value=""name="blood_group">...Select Blood Group...</option>
                        <option value="A+ve" name="A+ve">A+ve</option>
                        <option value="A-ve" name="A-ve">A-ve</option>
                        <option value="B+ve" name="B+ve">B+ve</option>
                        <option value="B-ve" name="B-ve">B-ve</option>
                        <option value="O+ve" name="O+ve">O+ve</option>
                        <option value="O-ve" name="O-ve">O-ve</option>
                        
                    </select>
                </div>
                <div class="from-group">
                    <label>Department</label>
                    <select name="department" class="form-control"  >
                        <option value=""name="department">...Select Department...</option>
                        <option value="physics" name="physics">Physics</option>
                        <option value="viscom" name="viscom">Viscom</option>
                        <option value="chemistry" name="chemistry">Chemistry</option>
                        <option value="computer_science" name="computer_science">Computer Science</option>
                        
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>


</body>

</html>