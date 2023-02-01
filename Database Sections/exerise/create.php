<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
 

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <style>
    *{
      font-size:14px;
    }
   
  </style>
</head>
<body>
  <div class="container">
    <button type="button" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa fa-user-plus" aria-hidden="true"></i>&nbsp;
     Create
  </button>
  


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h5 class="modal-title">Fill Your Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="POST">
              <div class="mb-3 mt-3">
                <label for="name">Your Name:</label>
                <input type="text" class="form-control" id="name" placeholder="Name" name="userName" required>
              </div>
              <div class="mb-3">
                <label for="phone">Your Contact Number:</label>
                <input type="text" class="form-control" id="phone" placeholder="Contact Number" name="userPhone" required>
              </div>
              
              <button type="submit" class="btn btn-primary" name="addBtn">Add</button>
            </form>
            <!-- create section php -->
              <?php 
                require("db_connection.php");

                 if(isset($_POST['addBtn'])){
                  $name=$_POST['userName'];
                  $num=$_POST['userPhone'];


                  $sql="INSERT INTO user(name,phone)VALUES('$name','$num')";


                  if(mysqli_query($conn,$sql)){
                    header('location:create.php');
                  }else{
                    echo"Query Fail".mysqli_error();
                  }
                 }


               ?>
            <!-- create section php -->
      </div>

      <!-- Modal footer -->
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div> -->

    </div>
  </div>
</div>


<!-- read section php-->
 <table class="table table-bordered text-center">
      <thead>
        <tr>
           <th>ID</th>
           <th>Name</th>
           <th>Contact Phone</th>
           <th>Date</th>
           <th>Action</th>
        </tr>
      </thead>
      <tbody>
          
          <?php 
              require("db_connection.php");


              $sql="SELECT * FROM user";
              $query=mysqli_query($conn,$sql);

              

              while($row=mysqli_fetch_assoc($query)){
                  $time=date('d:m:Y-g:i:s:a',strtotime($row['created_at']));

                  echo"<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['phone']}</td>

            <td>$time</td>
            <td>
                <a href='update.php?id={$row['id']}' class='btn btn-warning text-white'><i class='fa fa-trash' aria-hidden='true'></i>&nbsp;Update</a>
                &nbsp;
                <a href='delete.php?id={$row['id']}' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i>&nbsp;Delete</a>
            </td>
          </tr>";
              }

           ?>
        

      </tbody>
    </table>
<!-- read section php-->











</div>







  
</body>
</html>
