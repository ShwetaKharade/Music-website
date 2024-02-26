<div >
  <h2>All User</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">User Name </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Joining Date</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from user_form where isAdmin=0";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["name"]?> </td>
      <td><?=$row["email"]?></td>
      <td><?=$row["phone"]?></td>
      <td><?=$row["registered_at"]?></td>
      <td><button class="btn btn-primary" >Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="userDelete('<?=$row['id']?>')">Delete</button></td>
    </tr>
    

    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>
<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-secondary" style="height:40px" data-toggle="modal" data-target="#myModal">
    Add User
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New User</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addCustController.php" method="POST">
            <div class="form-group">
              <label for="u_name">User Name:</label>
              <input type="text" class="form-control" name="u_name" required>
              <label for="u_email">Email:</label>
              <input type="text" class="form-control" name="u_email" required>
              <label for="u_phone">Contact :</label>
              <input type="text" class="form-control" name="u_phone" required>
              
              
              
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" name="upload" style="height:40px">Add User</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>



  </div>