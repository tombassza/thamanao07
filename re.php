<?php
// เรียกใช้คำสั่ง git clone เพื่อ clone repository จาก GitHub
shell_exec('git clone https://tombassza.github.io/thamanao07/');

// เรียกใช้คำสั่ง git pull เพื่อดึงการเปลี่ยนแปลงล่าสุดจาก GitHub
shell_exec('git pull origin master');

// เรียกใช้คำสั่ง git add, git commit, และ git push เพื่ออัปเดตโค้ดใน GitHub
shell_exec('git add .');
shell_exec('git commit -m "Update from PHP script"');
shell_exec('git push origin master');
?>
