<?php
  $id = $_GET['id'];
  include 'proses.php';
  $proses = new Proses();
  $data = $proses->edit($id);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Student List</title>
  </head>
  <body>
    <div class="container">
      <h1>Edit Form</h1>
      <form action = 'edit.php' method="post">
        <input name="id" type="hidden" class="form-control" id="exampleInputText1" value="<?php echo $data->id ?>">
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">Name</label>
          <input name="name" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->name ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">Class</label>
          <input name="class" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->class ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">NIM</label>
          <input name="nim" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->nim ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">Address</label>
          <input name="address" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->address ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" value="<?php echo $data->email ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputText1" class="form-label">Phone</label>
          <input name="phone" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->phone ?>">
        </div>
        <button name="Save" type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>