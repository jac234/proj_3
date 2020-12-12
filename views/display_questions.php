<?php include('abstract-views/header.php'); ?>

<a href=".?action=display_question_form&userId=<?php echo $userId; ?>">Add Question</a>
<a href=".?action=display_questions&userId=<?php echo $userId; ?>&listType=mine">My Questions</a>
<a href=".?action=display_questions&userId=<?php echo $userId; ?>&listType=all">All Questions</a>
<table border="2" class="table table-hover table-sm">
    <thead class="thead-dark">
    <tr class ="table-dark text-dark">
        <th>ID</th>
        <th>Owner Email</th>
        <th>Owner ID</th>
        <th>Date Created</th>
        <th>Title</th>
        <th>Body</th>
        <th>Skills</th>
        <th>Score</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($questions as $val) :?>
        <tr class="table-success">
            <td><?php echo $val['id']?></td>
            <td><?php echo $val['owneremail']?></td>
            <td><?php echo $val['ownerid']?></td>
            <td><?php echo $val['createddate']?></td>
            <td><?php echo $val['title']?></td>
            <td><?php echo $val['body']?></td>
            <td><?php echo $val['skills']?></td>
            <td><?php echo $val['score']?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?php include('abstract-views/footer.php'); ?>