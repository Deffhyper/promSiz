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

    <h2 class="block-title-md">Личные данные</h2>

    <div class="col-md-9 col-sm-8 col-xs-12 no-padding">
        <div class="lk-form">
            <form action="#">
                <ul class="input-group">
                    <li class="input-group__item">
                        <label for="u-3" class="input-group__item--label">Ваше имя:</label>
                        <input type="text" id="u-3" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-4" class="input-group__item--label">Фамилия:</label>
                        <input type="text" id="u-4" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-5" class="input-group__item--label">Отчество:</label>
                        <input type="text" id="u-5" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-6" class="input-group__item--label">E-mail:</label>
                        <input type="text" id="u-6" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-7" class="input-group__item--label">Новый пароль:</label>
                        <input type="text" id="u-7" class="input-border">
                    </li>
                    <li class="input-group__item">
                        <label for="u-7" class="input-group__item--label">Подтверждение нового пароля:</label>
                        <input type="text" id="u-7" class="input-border">
                    </li>
                </ul>
                <ul class="list-inline">
                    <li>
                        <button type="submit" class="btn btn--accent">сохранить</button>
                    </li>
                    <li>
                        <button type="reset" class="btn btn-md--gray-border btn-accent--hover">Сбросить</button>
                    </li>
                </ul>
            </form>
        </div>
    </div>

    <div class="col-md-3 col-sm-4 col-xs-12 no-padding">
        <div class="user-data">
            <div class="user-data__image">
                <img src="img/jpeg_files/user-big.jpg" alt="user">
            </div>
            <h3 class="user-data__title">Ответственный менеджер:</h3>
            <ul class="user-data__prop">
                <li class="user-data__prop--title"><span class="bold-text">Петрова Светлана Николаевна</span></li>
                <li><span class="bold-text">тел.: </span><a href="tel:(044) 555 11 22">(044) 555 11 22</a></li>
                <li><span class="bold-text">email: </span><a href="mailto:sales@promsiz.com.ua">sales@promsiz.com.ua</a>
                </li>
            </ul>
        </div>
    </div>

</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
