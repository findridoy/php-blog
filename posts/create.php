<?php include '../layouts/header.php'; ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $query = "insert into posts (title, description) values('$title', '$description')";
    if ($conn->query($query) == true) {
        echo "inserted success\n";
    }
}
?>


<form action="/posts/create.php" method="POST">
    <div>
        <label for="">Title</label> <br>
        <input type="text" name="title" id="">
    </div>

    <div>
        <label for="">Description</label> <br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="Save">
</form>

<?php include '../layouts/footer.php'; ?>