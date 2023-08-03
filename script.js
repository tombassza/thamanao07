// สร้างฟังก์ชันในการแสดงผลคะแนนและรายละเอียด
function showResult(score) {
    const scoreValueSpan = document.getElementById('scoreValue');
    const detailsDiv = document.getElementById('details');
    scoreValueSpan.textContent = score;
  
    let detailsHTML = '';
    if (score >= 0 && score <= 15) {
      detailsHTML = '<pคุณมีสุขภาพจิตที่ต้องให้คำปรึกษา</p>';
    } else if (score >= 16 && score <= 30) {
      detailsHTML = '<p>คุณมีสุขภาพจิตปานกลาง</p>';
    } else if (score >= 31 && score <= 45) {
      detailsHTML = '<p>คุณมีสุขภาพจิตที่ดี</p>';
    } else {
      detailsHTML = '<p>คุณมีสุขภาพจิตที่ดีมาก</p>';
    }
  
    detailsDiv.innerHTML = detailsHTML;
  }
  
  // ดึงคะแนนที่คำนวณได้จาก URL หลังจากเปิดหน้าผลการประเมิน
  const urlParams = new URLSearchParams(window.location.search);
  const scoreFromURL = urlParams.get('score');
  if (scoreFromURL) {
    showResult(scoreFromURL);
  }
  