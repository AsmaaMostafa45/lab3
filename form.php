
<html>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<body>
<br><br><br>
  <div class="container">
  <form action="lab4.php" method="post">
    <h2>User Registration Form</h2>
    <hr>
    <p>Please fill this form and submit to add user record to the database</p>
    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
    </div>
    <label class="form-label">Gender</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" value="female">
      <label class="form-check-label">
        female
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" value="male">
      <label class="form-check-label">
        male
      </label>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" name="status">
      <label class="form-check-label">Receive E-mails from us</label>
    </div>
    <input type="submit" class="btn btn-primary">
    <button type="button" class="btn btn-light">cancel</button>
  </form>
</div>
</body>
</html>