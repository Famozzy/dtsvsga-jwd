<?php include("_header.php") ?>
<?php
  session_start();
  if (isset($_SESSION["email"])) {
    header("Location: dashboard.php");
  }
?> 

<div class="container mt-5">
  <div class="row">
    <div class="col-md-5 mx-auto border rounded shadow-sm px-4 py-5">
      <h2 class="text-center">Admin Login</h2>
      <form method="post" action="action/login.php">
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input name="email" type="email" class="form-control" id="email" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
    </div>
  </div>
</div>

<?php include("_footer.php") ?>
  
