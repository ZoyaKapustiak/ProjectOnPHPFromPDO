<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;1,700&display=swap" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/style.css">
  <script defer src="../script.js"></script>
  <title>Pop-Up</title>
</head>
<body>
  <main class="center">
    <div class="block">
      <div class="info">
        <h1 class="infoHeader">Получите набор файлов для руководителя:</h1>
        <div class="infoImg">
          <img src="../img/fileDoc.png" alt="file">
          <img src="../img/fileXLS.png" alt="file">
          <img src="../img/filePDF.png" alt="file">
          <img src="../img/filePDF.png" alt="file">
          <img src="../img/filePDF.png" alt="file">
          <img src="../img/filePDF.png" alt="file">
          <img src="../img/filePDF.png" alt="file">
        </div>
        <div class="infoPhoto">
          <img src="../img/book.png" alt="photo">
        </div>

      </div>
      <form action="?controller=popup" method="post" class="form">
        <label class="formLabel formLabelMb" for="email" >Введите Email для получения файлов:</label>
        <input class="formInput formInputEmail" id="email" name="email" type="email" placeholder="E-mail" required>
        <label class="formLabel" for="phone">Введите телефона для подтверждения доступа:</label>
        <input class="formInput formInputPhone" data-phone-pattern id="phone" name="phone" type="text"
          placeholder="+7(000)-000-00-00" required>
        <div class="formButton">
          <input class="formSubmit" name="submit" type="submit" value="Скачать файлы">
          <div class="formButtonPng"><img src="../img/button.png" alt="button"></div>
        </div>
        <div class="formDoc">
          <p>PDF 4,7 MB</p>
          <p>DOC 0,8 MB</p>
          <p>XLS 1,2 MB</p>
        </div>
      </form>
      <a href="?controller=click" class="close">
        <img src="../img/close.png" alt="">
      </a>
    </div>
  </main>
  

</body>

</html>