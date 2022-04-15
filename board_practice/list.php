<?php
    include_once "../db/connect.php";
    $conn = get_conn();
    $sql = "select * from t_board order by i_board desc";
    $result = mysqli_query($conn,$sql);
    $row_num = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>작성글 리스트</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>순서</th>
            <th>글번호</th>
            <th>제목</th>
            <th>작성일시</th>
            <th>수정일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)){
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                $mod_at = $row['mod_at'];
                print "<tr>";
                print "<td>${row_num}</td>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "<td>${mod_at}</td>";
                print "</tr>";
                $row_num++;
            }
        ?>
    </table>
</body>
</html>