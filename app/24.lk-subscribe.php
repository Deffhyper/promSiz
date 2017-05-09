<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header_auth.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container padding-bottom-md">

    <p class="margin-bottom-md">
        Компания «ПромСИЗ» — национальный производитель, разработчик и поставщик средств индивидуальной защиты, одно из
        крупнейших предприятий в Украине по комплексному обслуживанию клиентов различных отраслей промышленности.
        Компания «ПромСИЗ» национальный производитель, разработчик и поставщик промышленных средств индивидуальной
        защиты, одно из крупнейших предприятий в Украине по комплексному обслуживанию клиентов различных отраслей
        промышленности.
    </p>

    <ul class="lk-navigate margin-bottom-lg">
        <li>
            <a href="#">
                <span class="lk-navigate__image">
                    <object type="image/svg+xml" data="img/svg-image/lk-1.svg"></object>
                </span>
                <span class="lk-navigate__title">Личные данные</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="lk-navigate__image">
                    <object type="image/svg+xml" data="img/svg-image/lk-2.svg"></object>
                </span>
                <span class="lk-navigate__title">Корзина</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="lk-navigate__image">
                    <object type="image/svg+xml" data="img/svg-image/lk-3.svg"></object>
                </span>
                <span class="lk-navigate__title">Текущие заказы</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="lk-navigate__image">
                    <object type="image/svg+xml" data="img/svg-image/lk-4.svg"></object>
                </span>
                <span class="lk-navigate__title">История заказов</span>
            </a>
        </li>
        <li>
            <a href="#">
                <span class="lk-navigate__image">
                    <img src="img/svg-image/lk-5.png" alt="icon">
                </span>
                <span class="lk-navigate__title">Подписки</span>
            </a>
        </li>
    </ul>
    <div class="clearfix"></div>

    <div class="lk-subscribe">
        <h2 class="block-title-md">Подписки</h2>

        <form action="#">
            <table class="lk-subscribe__table">
                <tbody>
                    <tr class="lk-subscribe__table--item">
                        <td><label for="u-3">Введите ваш e-mail:</label></td>
                        <td><input type="text" id="u-3" class="input-border"></td>
                        <td><button type="button" class="btn btn-md btn--accent">Подписаться</button></td>
                    </tr>
                    <tr class="lk-subscribe__table--output">
                        <td><span>Вы подписаны на e-mail:</span></td>
                        <td><a href="mailTo:example@mail.ru" class="bold-text">example@mail.ru</a></td>
                        <td><button type="button" class="btn btn-md btn-accent--hover">Отменить подписку</button></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>



    

</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
