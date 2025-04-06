<div class="container">
   <h1 class="heading">Singup</h1> 
   <form method="post" action="./server/request.php" >
   <div class="col-6 offset-sm-3 margin-15">
  <label for="username" class="form-label">Name</label>
  <input type="text" name="username" class="form-control" id="username" placeholder="Enter your name">
</div>
<div class="col-6 offset-sm-3 margin-15">
  <label for="Email" class="form-label">Email address</label>
  <input type="text" name="email" class="form-control" id="email" placeholder="Enter your Eamil">
</div>
<div class="col-6 offset-sm-3 margin-15">
  <label for="Password" class="form-label">Password</label>
  <input type="text" name="password" class="form-control" id="password" placeholder="Enter The Password">
</div>
<div class="col-6 offset-sm-3 margin-15">
  <label for="addresh" class="form-label">Addresh</label>
  <textarea class="form-control" name="addresh" id="addresh" rows="3"></textarea>
</div>
<div class="col-6 offset-sm-3 margin-15">
    <button type="submit" name="singup" class="btn btn-primary mb-3">Singup</button>
  </div>
   </form>
</div>