<?php include '../layouts/header.php'; ?>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $dir = "../public/img/" . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $dir);

    $query = "insert into posts (title, description, image) values('$title', '$description', '$dir')";
    if ($conn->query($query) == true) {
        echo "inserted success\n";
    } else {
        echo "Error";
    }
}
?>


<form action="/posts/create.php" method="POST" class="w-50 mx-auto" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="" class="form-label">Title</label>
        <input type="text" name="title" id="" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Description</label>
        <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Image</label>
        <input type="file" name="image" id="" class="form-control" required>
    </div>
    <input type="submit" value="Save" class="btn btn-primary">
</form>

<?php include '../layouts/footer.php'; ?>