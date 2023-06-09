<?php
$title = 'Форма обратной связи';
require "./components/header.php";
?>
<main>
    <div class="container mt-3">
        <h1>Форма</h1>
        <form action="post.php" method="post">
            <input type="text" name="username" placeholder="Имя" class="form-control"><br>
            <input type="email" name="email" placeholder="email" class="form-control"><br>
            <input type="password" name="password" placeholder="Пароль" class="form-control"><br>
            <textarea name="message" placeholder="Введите сообщение" class="form-control"></textarea><br>
            <input type="submit" value="Отправить" class="btn btn-success">
        </form>
    </div>
</main>
<?php
require "./components/footer.php";
?>
</body>

</html>