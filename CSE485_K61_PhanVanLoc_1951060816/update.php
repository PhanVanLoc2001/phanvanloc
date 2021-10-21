<?php 
include('./config.php');
include('./header.php');
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>

<body>
    <?php
    if(isset($_POST['update']))
    {
      
        $patientid = $_POST['patientid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_type = $_POST['blood_type'];
        }
    }
    ?>
    <form method="POST">
        <div class="container">
            <div class="wrapper">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">patientid </label>
                    <div class="col-sm-10">
                        <input name="patientid" type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">firstname</label>
                    <div class="col-sm-10">
                        <input name="firstname" type="text" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">lastname</label>
                    <div class="col-sm-10">
                        <input name="lastname" type="text" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">dateofbirth</label>
                    <div class="col-sm-10">
                        <input name="ateofbirth" type="date" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">gender </label>
                    <div class="col-sm-10">
                    <input class="form-check-input" type="radio" name="bd_sex" value="1">Nam
                    <input class="form-check-input" type="radio" name="bd_sex" value="0">Nữ
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">mobile</label>
                    <div class="col-sm-10">
                        <input name="mobile" type="text" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">email </label>
                    <div class="col-sm-10">
                        <input name="email" type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">height</label>
                    <div class="col-sm-10">
                        <input name="height" type="text" class="form-control" id="inputPassword3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">weight </label>
                    <div class="col-sm-10">
                        <input name="weight" type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">blood_type </label>
                    <div class="col-sm-10">
                        <input name="blood_type" type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                  
                <button type="submit" name="add" class="btn btn-primary">Add</button>
                <a href="./index.php"><button type="button" name="back" class="btn btn-success">table</button></a>
            </div>

        </div>
    </form>
    <?php
    if(isset($_POST['add']))
    {
      
        $patientid = $_POST['patientid'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $dateofbirth = $_POST['dateofbirth'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobile'];
        $email = $_POST['email'];
        $height = $_POST['height'];
        $weight = $_POST['weight'];
        $blood_type = $_POST['blood_type'];
        $sql_update = "UPDATE `patient` SET `$firstname`='$firstname',`lastname`='$lastname',`dateofbirth`='$dateofbirth',`gender`='$gender',`mobile`='$mobile',`email`='$email',`height`='$height',`weight`='$weight',`blood_type`='$blood_type' WHERE `patientid`='$patientid'";
        echo $sql_update;
        $rs_update = mysqli_query($con,$sql_update);
        if($rs_update)
        {
            header('location:index.php');
        }else 
        {
            header('eror.php');
        }
    }
    ?>

</body>

</html>