<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="A3-main\assignment3\MDB5\css\mdb.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <title>Lecturer Dashboard</title>

</head>

<body style="margin: 50px">

    <!-- <table class="table">
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
    // include_once('dbConnection.php');
    
    // $sql="SELECT * FROM user WHERE user_type='student'";
    // $result=$conn->query($sql);
    
    // if(!$result){
    //     die("Invalid query:". $conn->errno);
    // }
    
    // while($row=$result->fetch_assoc()){
    //     echo"<tr>
    //     <td>".$row['name']."</td>
    //     <td>".$row['sid']."</td>
    //     <td>".$row['email']."</td>
    //     <td>".$row['slot']."</td>
    // </tr>"; 
    // }
    
    ?>

   </tbody>

</table> -->

    <section class="pb-4">
        <div class="input-group mb-4">
            <input type="text" class="form-control" id="advanced-search-input"
                placeholder="phrase in:column1,column2" />
            <button class="btn btn-primary" id="advanced-search-button" type="button">
                <i class="fa fa-search"></i>
            </button>
        </div>
        <div id="datatable"></div>
    </section>


    <script src="MDB5\js\mdb.min.js"></script>
    <script>
        const element = document.getElementById('datatable');
        const data = {
            columns: [
                {

                    label: 'Full name',
                    field: 'name'
                },
                {
                    label: 'Student ID',
                    field: 'sid'
                },
                {
                    label: 'Email',
                    field: 'email'
                },
                {
                    label: 'Timeslot ID',
                    field: 'timeslot'
                },
            ],
            rows: <?php
        // $sql = ' SELECT`fullname`, `sid`, `email`, `timeslot_id` FROM`student`;';
        // $result = $db->getMany($sql, false);
        // echo json_encode($result);
        include_once('dbConnection.php ');
        $sql  = " SELECT firstname, sid, email, slot FROM user ";
        $result  =  $conn -> query($sql) -> fetch_all(MYSQLI_NUM);
        echo json_encode($result);


        ?>
      };

        const instance = new mdb.Datatable(element, data, { striped: true, maxHeight: "350px", maxWidth: "940px" });
        const advancedSearchInput = document.getElementById('advanced-search-input');

        const search = (value) => {
            let [phrase, columns] = value.split(' in:').map((str) => str.trim());

            if (columns) {
                columns = columns.split(',').map((str) => str.toLowerCase().trim());
            }

            instance.search(phrase, columns);
        }

        document.getElementById('advanced-search-button').addEventListener('click', (e) => {
            search(advancedSearchInput.value)
        });

        advancedSearchInput.addEventListener('keydown', (e) => {
            if (e.keyCode === 13) {
                search(e.target.value);
            }
        })

    </script>
</body>

</html>