<div class="container">
    <h2 class="header">Ask A Question</h2>
    <form action="./server/request.php" method="post">
        
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="email" name="title" class="form-control" id="title">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <select class="form-control" name="category" id="category">
                <option>Mobiles</option>
                <option>General</option>
                <option>Coding</option>
            </select>
        </div>
        
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="login" class="btn btn-primary">Submit</button>
        </div>
    </form>

</div>  