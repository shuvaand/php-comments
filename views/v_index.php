<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Комментарии</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header">
    <div class="wrapper">
        <img class="header__logo" src="img/logo.svg" width="163" height="172" alt="">
        <div class="header__contacts">
            <p>Телефон: (499)340-94-71</p>
            <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
        </div>
        <h2>Комментарии</h2>
    </div>
</header>
<section class="content">
    <div class="wrapper">
        <ul class="comments">
        <? foreach($comments as $comment) :
                $comment_dt = new DateTime($comment['dt']);
                $comment_date = $comment_dt->format("d.m.Y");
                $comment_time = $comment_dt->format("H:i");
            ?>
            <li class="comment">
                <div class="comment__title">
                    <span class="comment__name"><?=$comment['name']?></span>
                    <span class="comment__time"><?=$comment_time?></span>
                    <span class="comment__date"><?=$comment_date?></span>
                </div>
                <p class="comment__text"><?=$comment['text']?></p>
            </li>
        <? endforeach; ?>
        </ul>
        <h2>Оставить комментарий</h2>
        <form class="form" action="index.php" method="post">
            <label for="name">Ваше имя</label>
            <input class="form__control form__name" type="text" name="name" id="name" required>
            <label for="text">Ваш комментарий</label>
            <textarea class="form__control form__text" name="text" id="text" required></textarea>
            <button class="form__button" type="submit">Отправить</button>
        </form>
    </div>
</section>
<footer class="footer">
    <div class="wrapper">
        <img class="footer__logo" src="img/logo.svg" width="100" height="105" alt="">
        <div class="footer__contacts">
            <p>Телефон: (499)340-94-71</p>
            <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
            <p>Адрес: <a href="#">115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</a></p>
        </div>
        <div class="footer__copyright">&copy; 2010-2014 Future. Все права защищены</div>
    </div>
</footer>
</body>
</html>