<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" value="<?=$email?>" class="form-control" id="email"  name="email">
    </div>
    <div class="form-group">
      <label for="password">Password:</label>
      <input type="password" value="<?=$password?>" class="form-control" id="password"  name="password">
    </div>
    <div class="form-group date">
      <label> Date of Birth:</label>
      <input class="form-control" type="date" value="<?=$dob?>" name="date">
      
    </div>
    <div class="form-group date">
      
      <input class="form-control" type="hidden" name="hidden" vlaue="" id="">
      
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>

</body>
</html>
