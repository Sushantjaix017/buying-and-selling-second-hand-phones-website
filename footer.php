<section class="new">
  <div class="container py-5">
    <div class="row">
      <div class="col-lg-9 m-auto text-center">
        <h1>Join Our Secret Society</h1>
        <form method="POST">
        <input name="emaill"type="text" class="px-3" placeholder="Enter your email.">
        <button name="submitt" class="btn2">Submit</button>
        </form>
      </div>
    </div>
    <hr>
    <p class="text-center">Copyright 2023 All rights reserved | This is made by Sushant Jaix </p>
  </div>
</section>
<?php
if (isset($_POST['submitt'])) {
  $emaill = $_POST['emaill'];
 
  $query = "insert into joinus (id, emaill) values (NULL, '$emaill')";
$conn->query($query);
echo "<script>alert('Joined successfully.')</script>";}
?>