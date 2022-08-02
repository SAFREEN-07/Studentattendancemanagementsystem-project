
<!-- 
<header>

    <h1>Student-Digital Attendance Management System</h1>
  
</header> -->

<center><h2><b>VELAMMAL COLLEGE OF ENGINEERING AND TECHNOLOGY</b></h2>
<h4><b>Viraganoor-Madurai</h4></b></center><br><br>
<center>
    <img src="img/logo.jpg" style="height:10%;width:10%"></img></center><br><br>
<center>
<div class="container">
  <div class="row">
    <div class="col-lg-6">
      <h3 class="text-center">Teacher's Section</h3>
		<?php if(isset($_GET['invalid'])) : ?>
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Username Or Password.
				</div>
			
		<?php endif; ?>
	
      <form class="form-horizontal" id="loginForm" action="modules/verify.php" method="post" data-toggle="validator">
				<div class="form-group">
          <label for="inputEmail3" class="control-label">Username</label>
          <input type="text" class="form-control" id="inputEmail3" name="name" maxlength="16" placeholder="Enter Username" required>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="control-label">Password</label>
          <input type="password" class="form-control" id="inputPassword3"  name="pass" maxlength="16" placeholder="Enter Password" required>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="btn btn-success btn-block" style="border-radius:0%" value="Login">
        </div>
      </form>
   
    </div>


    <div class="col-lg-6">
      <h3 class="text-center">Student's Section</h3>
		<?php if(isset($_GET['student'])) : ?>
			
				<div class="form-group alert alert-dismissible alert-danger">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>Sorry!</strong> Invalid Student Roll No.
				</div>
			
		<?php endif; ?>
	
    <div class="col-md-8 col-md-offset-3 col-lg-8">
      <form class="form-horizontal" action="index.php" method="post" id="studentForm" data-toggle="validator">
        <div class="form-group">
          <label for="rollno" class="control-label">Roll Number</label>
          <input type="number" class="form-control" id="rollno" maxlength="6" name="rollno" placeholder="Please Enter Student's Roll Number" required>
        </div>
				
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-danger btn-block" style="border-radius:0%" value="Proceed">
				</div>
				
				<input type="hidden" name="student" value="y" />
      </form>
    </div> 
    </div>
  </div>

  <hr  />

</div>

<script>
	$('#loginForm').validator();
	$('#studentForm').validator();
</script>

