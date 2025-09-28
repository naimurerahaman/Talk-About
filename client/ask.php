<div class="container">
    <h2 class="header">Ask A Question</h2>
    <form action="./server/request.php" method="post">
        
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title">
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" class="form-control" id="description"></textarea>
        </div>
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <label for="category" class="form-label">Category</label>
            <?php
            include("category.php");
            ?>
        </div>
        
        <div class="col-6 offset-sm-3 margin-bottom-15">
            <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
        </div>
    </form>

</div>  