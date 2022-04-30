<?php include "../layouts/header.php" ?>

<?php
$id = $_GET["id"];
$sql = "select * from posts where id = $id";
$result =  $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '
        <div class="post-details">
        <div class="img">
            <img src="' . $row['image'] . '" alt="">
        </div>
        <h1>' . $row['title'] . '</h1>
        <p>' . $row['description'] . '</p>
    </div>
            ';
    }
}

?>



<?php include "../layouts/footer.php" ?>