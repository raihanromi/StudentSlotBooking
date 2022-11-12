<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Lecturer Dashboard</title>
</head>
<body style="margin: 50px">

<table class="table">
    <thead>
         <tr>
        <th>Name</th>
        <th>SID</th>
        <th>Email</th>
        <th>Time</th>
    </tr>
    </thead>
   <tbody>
    <?php 
    include_once('dbConnection.php');

    $sql="SELECT * FROM user WHERE user_type='student'";
    $result=$conn->query($sql);

    if(!$result){
        die("Invalid query:". $conn->errno);
    }

    while($row=$result->fetch_assoc()){
        echo"<tr>
        <td>".$row['name']."</td>
        <td>".$row['sid']."</td>
        <td>".$row['email']."</td>
        <td>".$row['slot']."</td>
    </tr>"; 
    }


    ?>

   </tbody>



</table>

</body>
</html>