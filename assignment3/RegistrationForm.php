<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <form action="Student/adduser.php" method="post">
          <div class="mb-3">
            <i class="fas fa-user"></i><lable for="stuname" class="pl-2 font-weight-bold">Name</lable><input type="text" class="form-control" placeholder="Name" name="stuname" required >
          </div>
          <div class="mb-3">
            <i class="fas fa-envelope"></i><lable for="stuemail" class="pl-2 font-weight-bold">Email</lable><input type="email" class="form-control" placeholder="Email" name="stuemail" required >
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3"><i class="fas fa-key"></i>
      <label for="stupass" class="pl-2 font-weight-bold">Password</label>
      <input type="password" class="form-control" name="stupass" required>
    </div>
    <i class="fa-solid fa-users"></i><label for="stupass" class="pl-2 font-weight-bold"> User</label>
      <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="student">Student</option>
			  <option value="faculty">Lecture</option>
		  </select>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Sign UP</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
     
    </form>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
