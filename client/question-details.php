<div class="container">
    <h1 class="header">Question</h1>
    <div class="row">
    <div class="col-8">
        <?php
        include 'common/db.php';
        $query = "select * from questions where id = $qid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $cid = $row['category_id'];
        echo "<h4 class='margin-bottom-15 question-title' >Question: " . $row['title'] . "</h4>";
        echo "<p class='margin-bottom-15' >" . $row['description'] . "</p>";
        include('client/answer.php');
        ?>
        
        <form action="server/request.php" method="post">
            <input type="hidden" name="question_id" value="<?php echo $qid; ?>">
        <textarea name="answer" class="form-control margin-bottom-15" placeholder="Write your answer here..."></textarea>
        <button  class="btn btn-primary">Submit your answer</button>
        </form>
    </div>
    <div class="col-4">
        <?php
        $categoryQuery = "select name from category where id = $cid";
        $categoryResult = $conn->query($categoryQuery);
        $categoryRow = $categoryResult->fetch_assoc();
        echo"<h1>".ucfirst($categoryRow['name'])."</h1>";

        $query = "select * from questions where category_id=$cid and id != $qid";
        $result = $conn->query($query);
        foreach ($result as $row) {
            $title = $row['title'];
            $id = $row['id'];
            echo "<div class='question-list'> <h4><a href=?q-id=$id>$title</a></h4></div>";
        }
        ?>
    </div>
    </div>
</div>