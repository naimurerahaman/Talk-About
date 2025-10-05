<div class="container">
    <h1 class="header">Question</h1>
    <div class="col-8">
        <?php
        include 'common/db.php';
        $query = "select * from questions where id = $qid";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
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
</div>