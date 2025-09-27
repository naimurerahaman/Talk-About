<div class="container">
    <h2 class="header">Login</h2>
    <form action="./server/request.php" method="post">
        
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password">
        </div>
        
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="login" class="btn btn-primary">Log In</button>
        </div>
    </form>

</div>