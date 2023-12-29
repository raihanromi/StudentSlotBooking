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
<!-- start navbar -->
<nav class="navbar navbar-expand-sm navbar-light bg-light pl-5" >
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CSE391</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <ul class="navbar-nav">
        <li class="nav-item custom-nav-item"><a href="index.php" class="nav-link"> Home </a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- end navbar -->
  <form action="Auth/adduser.php" method="post">
          <div class="mb-3">
            <i class="fas fa-user"></i><lable for="stuname" class="pl-2 font-weight-bold">Name</lable><input type="text" class="form-control" placeholder="Name" name="stuname" required >
          </div>
           <div class="mb-3">
            <i class="fas fa-user"></i><lable for="stuname" class="pl-2 font-weight-bold">Firstname</lable><input type="text" class="form-control" placeholder="Firstname" name="Firstname" required >
          </div>
          <div class="mb-3">
            <i class="fas fa-user"></i><lable for="stuname" class="pl-2 font-weight-bold">SID</lable><input type="text" class="form-control" placeholder="SID" name="sid" required >
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
			  <option value="lecturer">Lecturer</option>
		  </select>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Sign UP</button>
      </div>
     
    </form>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>