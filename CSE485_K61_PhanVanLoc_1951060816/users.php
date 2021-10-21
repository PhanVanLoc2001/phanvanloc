<?php include('./config.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <?php
            if (isset($_GET['bd_id'])) {
                $id = $_GET['bd_id'];
                $sql = "select * from blood_donor where bd_id='$id'";
                $rs = mysqli_query($con, $sql);
                if (mysqli_num_rows($rs) > 0) {
                    $row = mysqli_fetch_assoc($rs);
                    $name = $row['bd_name'];
                    $sex = $row['bd_sex'];
                    $age = $row['bd_age'];
                    $bgrounp = $row['bd_bgroup'];
                    $reg_date = $row['bd_reg_date'];
                    $number = $row['bd_phno'];
                }
            }
            ?>
            <form method="POST">
                <div class="container">
                    <div class="wrapper">
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">bd_id </label>
                            <div class="col-sm-10">
                                <input value="<?php echo $id ?>" name="bd_id" readonly type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">bd_name</label>
                            <div class="col-sm-10">
                                <input value="<?php echo $name ?>" readonly name="bd_name" type="text" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">bd_sex </label>
                            <div class="col-sm-10">
                                <input <?php if ($sex == 1) {
                                            echo "checked";
                                        } ?> class="form-check-input" disabled type="radio" name="bd_sex" value="1">Nam
                                <input <?php if ($sex == 0) {
                                            echo "checked";
                                        } ?> class="form-check-input" disabled type="radio" name="bd_sex" value="0">Nữ
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">bd_age</label>
                            <div class="col-sm-10">
                                <input value="<?php echo $age ?>" readonly name="bd_age" type="text" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">bd_bgroup </label>
                            <div class="col-sm-10">
                                <input value="<?php echo $bgrounp ?>" readonly name="bd_bgroup" type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">bd_reg_date</label>
                            <div class="col-sm-10">
                                <input value="<?php echo $reg_date ?>" readonly name="bd_reg_date" type="date" class="form-control" id="inputPassword3">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">bd_phno </label>
                            <div class="col-sm-10">
                                <input value="<?php echo $number ?>" readonly name="bd_phno" type="text" class="form-control" id="inputEmail3">
                            </div>
                        </div>

                        <a href="./index.php"><button type="button" name="back" class="btn btn-success">table</button></a>
                    </div>

                </div>
            </form>

        </div>

    </div>

</body>

</html>