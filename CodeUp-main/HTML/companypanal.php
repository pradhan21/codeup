<?php
  SESSION_start();
  $id = $_SESSION['company_id'];
  if (isset($_SESSION['company_name']) && isset($_SESSION['company_id'])){
  include("connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
      <link rel="stylesheet" href="../CSS/admin-portal.css">
      <link rel="stylesheet" href="../css/Portal-Navigation.css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  </head>
  <body>
    <!-- ************* Navigation ******************* -->
    <div class="navigation-container">
      <ul>
      <li class="active">
        <a href="companypanal.php">
              <span class="ti-user"></span>
              <span><?php echo $_SESSION['company_name']; ?></span>
            </a>
        </li>
        <li>
          <a href="company-taskview.php">
            <span class="ti-check-box"></span>
            <span>Task List</span>
          </a>
        </li>
        <li>
          <a href="company-taskadd.php">
            <span class="ti-pin-alt"></span>
            <span>Add Task</span>
        </a>
      </li>
        <li>
          <a href="logout.php">
            <span class="ti-back-left"></span>
            <span>Logout</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- ***************** Body ********************** -->
    <div class="content">
      <div class="grid-container">
        <div class="grid-box dash-profile">
          <h2 class="dash-box-header">Profile</h2>
          <img src="../MEDIA/profile.png" alt="profile" width="200px"><br />
          <?php

           $sql = "SELECT * FROM company WHERE company_id = '$id'";
           $query = mysqli_query($conn, $sql);
           while ($res = mysqli_fetch_assoc($query)) {
          ?>
          <b>Username: </b><?php echo $res['company_username']; ?><br>
          <b>Company Name: </b><?php echo $res['company_name']; ?><br>
          <b>Email ID: </b><?php echo $res['Email']; ?><br>
          <b>Contact No: </b><?php echo $res['contact_num']; ?><br>
          <?php
           }
         ?>
         <button class="button button1" onclick="openform()"> Change Information </button>
          <button class="button button2" onclick="changeform()"> Change Password </button>
        </div>
        <div class="grid-box dash-agents">
          <h2 class="dash-box-header"><span class="ti-briefcase"></span>Company ID</h2>
          <div class="dash-count">
              <?php echo $id ?>
          </div>
        </div>
        <!-- <div class="grid-box dash-companies">
           <h2 class="dash-box-header"><span class="ti-reload"></span>Pending Bills</h2>
           <div class="dash-count">
              $18,000
           </div>
          </div> -->
          <div class="grid-box dash-queries">
            <h2 class="dash-box-header"><span class="ti-check-box"></span>Completed Tasks</h2>
            <div class="dash-count">
              <?php
              $sql="SELECT *FROM task where status='1' And company_id='$id'";
              $query=mysqli_query($conn,$sql);
              $count=mysqli_num_rows($query);
              echo "$count"; ?>
            </div>
          </div>
          <div class="grid-box dash-pending-task">
            <h2 class="dash-box-header"><span class="ti-reload"></span>Pending Tasks</h2>
            <div class="dash-count">
              <?php
              $sql="SELECT *FROM task where status='0' And company_id='$id'";
              $query=mysqli_query($conn,$sql);
              $count=mysqli_num_rows($query);
              echo "$count"; ?>
            </div>
          </div>
          <!-- .......................Query List............... -->
          <div class="grid-box dash-query-list">
            <h2 class="dash-box-header"><span class="ti-check-box"></span>Handeling Aget Info </h2>
            <?php
            $sql="SELECT *FROM company LEFT JOIN agent on company.agent_id=agent.agent_id where company_id='$id'";
            $query=mysqli_query($conn,$sql);
            while($res=mysqli_fetch_array($query)){
              ?>
              <div class="dash-query">
                <div class="dash-query-info">
              <b>Name:</b><?php echo $res['f_name']; ?><br>
              &nbsp;<b>Email:</b> <?php echo $res['Email']; ?>
                &nbsp;<b>Contact Number:</b> <?php echo $res['contact_num']; ?>
              </div>
            </div>
            <?php } ?>
          </div>
          <!-- ..........Task List........... -->
            <div class="grid-box dash-task-list">
              <h2 class="dash-box-header"><span class="ti-check-box"></span>Tasks</h2>
            <?php
            $sql="SELECT *FROM task NATURAL JOIN company  WHERE company_id='$id' AND status='0' ORDER BY task_id DESC LIMIT 3";
            $query=mysqli_query($conn,$sql);
            while($res=mysqli_fetch_array($query)){
              ?>
              <div class="dash-task">
                <div class="dash-task-info">
              <b><?php echo $res['subject']; ?></b><br>
              &nbsp; &nbsp;For <?php echo $res['company_name']; ?>
            </div>
              <div class="dash-task-date">
                <?php echo $res['issued_date']; ?>
              </div>
            </div>
            <?php } ?>
            <div class="viewtask-button">
            <a href="company-taskview.php">View Task</a>
          </div>
          </div>
        </div>
      </div>

      <!-- change information -->
      <div class="popup-overlay"></div>
     <div class="popup">
        <div class="popup-close" onclick="closeForm()">×</div>
       <div class="form">
         <?php

             $sql="SELECT * FROM company WHERE company_id = '$id'";
             $query = mysqli_query($conn,$sql);
             if (mysqli_num_rows($query) === 1) {
             $row =  mysqli_fetch_assoc($query);
             if($row['company_id'] === $id){
           ?>
           <form action="company_changeinfo_handle.php" method="POST">

          <div class="header">
                Change information
          </div>
          <hr><br>
         <div class="element">
           <label for="fname"><b>Company Name</b></label>
           <input type="text"  placeholder="Fullname" name="cname" id="fname" value="<?php echo $row["company_name"];   ?>"  required="required">
       </div>
   <div class="element">
     <label for="email"><b>Email</b></label>
       <input type="email"  placeholder="Email" name="email" id="email" value="<?php echo $row['Email']; ?>" required="required">
   </div>
   <div class="element">
     <label for="phone"><b>Phone number</b></label>
       <input type="text"  placeholder="Phone number" name="Phone_number" id="phone" value="<?php echo $row['contact_num']; ?>"  required="required">
   </div>
   <div class="element">
     <center><button type="submit" class="button2" name="save">Save changes</button></center>
   </div>
  </form>
   <?php
       }
     }
   ?>
   </div>
   </div>
   <!-- change password -->
   <div class="popup-overlay"></div>
     <div class="popup2">
        <div class="popup2-close" onclick="closeForm1()">×</div>
       <div class="form">

         <form action="company_changeinfo_handle.php " method="POST">
          <div class="header">
                Change Password
          </div>
          <hr><br>

         <div class="element">
            <label for="cpw"><b>Current Password</b></label>
             <input type="password"  placeholder="current_password" name="cpw" id="cpw" required="required">
         </div>

         <div class="element">
           <label for="npw"><b>New Password</b></label>
             <input type="password"  placeholder="new_password" name="npw" id="npw" required="required">
         </div>

         <div class="element">
           <label for="cpwd"><b>Confirm Password</b></label>
             <input type="password"  placeholder="confirm_password" name="cpwd" id="cpwd" required="required">
         </div>


         <div class="element">
           <button type="submit" class="button3" name="savechange">Save changes</button>
         </div>
     </form>

   </div>
  </div>
  <script>
  function openform(){
  document.body.classList.add("showLoginForm");
  }
  function changeform(){
  document.body.classList.add("showchangeForm");
  }
  function closeForm(){
  document.body.classList.remove("showLoginForm");
  }
  function closeForm1(){
  document.body.classList.remove("showchangeForm");
  }
  </script>
  </body>
</html>

<?php
}else{
  header("location:mainpage.php");
  exit();
}
?>
