<?php 
include('./config.php') ;
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

    <a href="./add.php"><button type="button" class="btn btn-warning">Thêm người</button></a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">patientid </th>
                <th scope="col">firstname</th>
                <th scope="col">lastname</th>
                <th scope="col">gender</th>
                <th scope="col">mobile</th>
                <th scope="col">email</th>
                <th scope="col">height</th>
                <th scope="col">weight</th>
                <th scope="col">blood_type</th>
                <th scope="col">update</th>
                <th scope="col">delete</th>
                <th scope="col">chi tiết</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "select * from patient";
            $rs = mysqli_query($con, $sql);
            if (mysqli_num_rows($rs) > 0) {
                while ($row = mysqli_fetch_assoc($rs)) {
            ?>
                    <tr>
                        <th><?php echo $row['patientid'] ?></th>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php if ($row['gender'] == 1) {
                                echo "Nam";
                            } else if($row['gender'] == 0) {
                                echo "Nữ";
                            }
                            ?></td>
                        <td><?php echo $row['mobile'] ?></td>
                        <th><?php echo $row['email'] ?></th>
                        <td><?php echo $row['height'] ?></td>
                        <td><?php echo $row['weight'] ?></td>
                        <td><?php echo $row['blood_type'] ?></td>
                        <th><a href="./update.php?bd_id=<?php echo $row['patientid'] ?>"><i class="fas fa-user-edit"></i><button type="button" class="btn btn-danger">update</button></a></th>
                        <th><a href="./delete.php?bd_id=<?php echo $row['patientid'] ?>"<i class="fas fa-user-times"></i><button type="button" class="btn btn-primary">delete</button></a></th>
                        <th><a href="./users.php?bd_id=<?php echo $row['patientid'] ?>"">Chi tiết</a></th>
                    </tr>

            <?php
                }
            }
            ?>


        </tbody>
    </table>
</body>

</html>