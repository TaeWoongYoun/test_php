<?php $conn = mysqli_connect('localhost', 'root', '', 'test1')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Title</th>
            <th class="date">Date</th>
        </tr>
        <?php
            $sql = "SELECT * FROM notice";
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
                echo "
                <tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['title']}</td>
                    <td>{$row['date']}</td>
                </tr>";
            }
        ?>
        <form action="createProcess.php" method="post">
            <th>id</th>
        </form>
    </table>
</body>
</html>