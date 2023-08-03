<!DOCTYPE html>
<html>
<head>
  <title>แสดงข้อมูล</title>
  <style>
    table {
      border-collapse: collapse;
      width: 100%;
    }

    th, td {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <h1>ข้อมูลที่มีอยู่ในฐานข้อมูล</h1>

  <table>
    <tr>
      <th>ID</th>
      <th>ชื่อ</th>
      <th>อีเมล</th>
      <th>อายุ</th>
      <th>เพศ</th>
    </tr>

    <?php
    // ทำการเชื่อมต่อฐานข้อมูล
    $db_host = 'localhost';
    $db_user = 'root'; // ชื่อผู้ใช้ฐานข้อมูล
    $db_pass = 'Saroch55'; // รหัสผ่านฐานข้อมูล
    $db_name = 'health_survey';
    
    $connection = mysqli_connect ($db_host, $db_user, $db_pass, $db_name);
    if (!$connection) {
      die('ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้: ' . mysqli_connect_error());
    }

    // ดึงข้อมูลจากตาราง
    $sql = "SELECT * FROM assessors";
    $result = mysqli_query($connection, $sql);

    // แสดงข้อมูลในรูปแบบตาราง
    if (mysqli_num_rows($result) > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['age'] . "</td>";
        echo "<td>" . $row['gender'] . "</td>";
        echo "</tr>";
      }
    } else {
      echo "<tr><td colspan='5'>ไม่มีข้อมูล</td></tr>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($connection);
    ?>
  </table>
</body>
</html>
