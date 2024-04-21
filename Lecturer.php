<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `user` WHERE CONCAT(`sid`, `firstname`, `email`, `slot`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `user` where user_type='student'";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "assignment3");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Lecturer Dashboard</title>
           <style>
        .top-view{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .top-link{
            color: white;
        }
        .top-link:hover{
            color: white;
            text-decoration: none;
        }
    </style>
        
    </head>
    <body style="margin:30px;">

    <div class="top-view">
    <h1>Lecturer Dashboard</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
  <a href="Signout.php" class="top-link btn btn-danger me-md-2" type="button">Logout</a>
</div>
</div>
        
        <form action="Lecturer.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Email</th>
                    <th>Time</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['sid'];?></td>
                    <td><?php echo $row['firstname'];?></td>
                    <td><?php echo $row['email'];?></td>
                    <td><?php echo $row['slot'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>