<?php
    include_once 'include/dbh.inc.php';
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
    $sql = "SELECT * FROM news;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo $row['subtitle'];
        }
    }
    ?>
    </body>
</html>