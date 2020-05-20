<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Полигон 45:00</title>
    <link rel="stylesheet" href="css/style.min.css">
</head>

<body>
    <form action="" class="fomrd">
       имя
        <input type="text" placeholder="Имя" name="name">
        <span class="error_name"></span>
        Email
        <input type="text" placeholder="Email" name="email">
        <span class="error_email"></span>
        телефон
        <input type="text" placeholder="Телефон" name="phone">
        <span class="error_phone"></span>
        <input type="button" value="отправить" class="send">
    </form>
    <br/>
    <hr>
    <div class="loader">
        
    </div>
    <div class="result">
        
    </div>
    <script src="js/libs.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>