<?php $conn = mysqli_connect('localhost', 'root', '', 'test1')?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>notice</title>
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
        <tr>
            <td colspan="4"><a href="create.php"><button>CREATE</button></a></td>
        </tr>
    </table>
</body>
</html>