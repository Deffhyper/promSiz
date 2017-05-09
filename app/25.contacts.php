<?php include_once "parts/head.php" ?>
<body>
<?php include_once "parts/header.php" ?>

<?php include_once "parts/breadcrumbs.php" ?>

<div class="container">
    <div class="col-md-7 col-sm-6 col-xs-12 no-padding">

        <ul class="contacts-list">

            <li class="contacts-list__item">
                <div class="contacts-list__item--image">
                    <object data="img/svg-image/c-1.svg" type="image/svg+xml"></object>
                </div>
                <p class="contacts-list__item--title bold-text">Адрес</p>
                <ul>
                    <li>08298</li>
                    <li>Киевcкая область, Киево-Святошинский район, пгт. Коцюбинское,ул. Пономарева, 32</li>
                </ul>
            </li>

            <li class="contacts-list__item">
                <div class="contacts-list__item--image">
                    <object data="img/svg-image/c-2.svg" type="image/svg+xml"></object>
                </div>
                <p class="contacts-list__item--title bold-text">Телефоны</p>
                <ul>
                    <li><a href="tel:+38 (044) 390-40-90">+38 (044) 390-40-90 (многоканальный) </a></li>
                    <li><a href="tel:+38 (044) 390-40-72">+38 (044) 390-40-72 (многоканальный) </a></li>
                    <li><a href="tel:+38 (044) 503-70-70 ">+38 (044) 503-70-70 </a></li>
                    <li><a href="tel:+38 (044) 503-70-77">+38 (044) 503-70-77</a></li>
                </ul>
            </li>

            <li class="contacts-list__item">
                <div class="contacts-list__item--image">
                    <object data="img/svg-image/c-3.svg" type="image/svg+xml"></object>
                </div>
                <p class="contacts-list__item--title bold-text">График работы офиса</p>
                <ul>
                    <li>Пн. - Пт.: с 09:00 до 18:00 </li>
                    <li>Сб. - Вн.: выходной </li>
                </ul>
            </li>
            
            <li class="contacts-list__item">
                <div class="contacts-list__item--image">
                    <object data="img/svg-image/c-4.svg" type="image/svg+xml"></object>
                </div>
                <p class="contacts-list__item--title bold-text">E-mail</p>
                <ul>
                    <li><a href="mailTo:info@promsiz.com.ua" class="link-accent">info@promsiz.com.ua</a></li>
                </ul>
            </li>

        </ul>

    </div>

    <div class="col-md-5 col-sm-6 col-xs-12 no-padding">
        <div class="contacts-form">
            <div class="authorization-form text-center">
                <h2 class="authorization-form__title">Есть вопросы?</h2>

                <form action="#" class="authorization-form__item">
                    <fieldset>
                        <input type="text" id="f-1" class="modal-input" placeholder="Введите ваше имя">
                        <label for="f-1">Ваше имя</label>

                        <input type="text" id="f-2" class="modal-input" placeholder="Введите ваш e-mail">
                        <label for="f-2">Ваш e-mail <mark class="mark-red">*</mark> </label>

                        <textarea id="f-3" class="modal-input" placeholder="Введите текст вопроса"></textarea>
                        <label for="f-3">Сообщение <mark class="mark-red">*</mark> </label>
                    </fieldset>
                    <button class="btn btn-md btn--accent">Отправить</button>
                </form>

            </div>
        </div>
    </div>

</div>

<div id="map" class="contact-map">
    <script>
        function initMap() {
            var image = 'http://front.webvision.in.ua/promSIZ/img/jpeg_files/m-icon.png';
            var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 50.4434022, lng: 30.5202183},
                scrollwheel: false,
                zoom: 13
            });
            var marker = new google.maps.Marker({
                map: map,
                position: map.getCenter(),
                icon: image
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUXKVYkyQErp_WoaAk24K9diLh7ShZu28&callback=initMap"
            async defer></script>
</div>

<?php include_once "parts/footer.php" ?>
</body>
</html>
