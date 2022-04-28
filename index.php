<?php include 'layouts/header.php'; ?>
<a href="/posts/create.php" class="btn btn-primary">Create</a>

<?php
$query = "select * from posts";
$result =  $conn->query($query);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
            <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">' . $row['title'] . '</h5>
                <p class="card-text">' . $row['description'] . '</p>
                <a href="#" class="btn btn-primary">Read more</a>
            </div>
        </div>
            ';
    }
}
?>

<?php include 'layouts/footer.php'; ?>