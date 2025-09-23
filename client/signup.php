<div class="container">
    <h2 class="header">Sign Up</h2>
    <form method="POST" action="server/request.php">
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" id="username">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="address" class="form-label">Address</label>
            <input type="text" name="address" class="form-control" id="address">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="signup" class="btn btn-primary">Sign Up</button>
        </div>
    </form>

</div>