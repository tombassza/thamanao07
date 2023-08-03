<?php
$db_host = 'localhost';
$db_user = 'root'; // ชื่อผู้ใช้ฐานข้อมูล
$db_pass = 'Saroch55'; // รหัสผ่านฐานข้อมูล
$db_name = 'health_survey';

$connection = mysqli_connect ($db_host, $db_user, $db_pass, $db_name);

if (!$connection) {
  die('ไม่สามารถเชื่อมต่อกับฐานข้อมูลได้: ' . mysqli_connect_error());
}

// รับข้อมูลจากแบบประเมิน
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];
$q6 = $_POST['q6'];
$q7 = $_POST['q7'];
$q8 = $_POST['q8'];
$q9 = $_POST['q9'];
$q10 = $_POST['q10'];
$q11 = $_POST['q11'];
$q12 = $_POST['q12'];
$q13 = $_POST['q13'];
$q14 = $_POST['q14'];
$q15 = $_POST['q15'];
// รับข้อมูลผู้ประเมิน
$name = $_POST['name'];

$age = $_POST['age'];
$gender = $_POST['gender'];
// บันทึกข้อมูลผู้ประเมินลงในตาราง assessors
$sql_assessor = "INSERT INTO assessors (name, age, gender) VALUES ('$name', $age, '$gender')";
if (!mysqli_query($connection, $sql_assessor)) {
  die('เกิดข้อผิดพลาดในการบันทึกข้อมูลผู้ประเมิน: ' . mysqli_error($connection));
}

// คำนวณคะแนน
$total_score = $q1 + $q2 + $q3 + $q4 + $q5 + $q6 + $q7 + $q8 + $q9 + $q10 + $q11 + $q12 + $q13 + $q14 + $q15;

// บันทึกข้อมูลลงในฐานข้อมูล
$sql = "INSERT INTO survey_results (q1, q2, q3, q4, q5, q6, q7, q8, q9, q10, q11, q12, q13, q14, q15, total_score) 
        VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9', '$q10', '$q11', '$q12', '$q13', '$q14', '$q15', '$total_score')";

if (!mysqli_query($connection, $sql)) {
  die('เกิดข้อผิดพลาดในการบันทึกข้อมูล: ' . mysqli_error($connection));
}

// นำคะแนนไปยังหน้าผลการประเมิน
header('Location: result.html?score=' . $total_score);


exit;
?>
