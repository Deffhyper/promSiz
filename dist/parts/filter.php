<p class="sidebar__title bold-text">Фильтры товаров</p>
<div class="sidebar__filter">
    <form action="#">
        <fieldset class="sidebar-range">

            <p class="sidebar-range__title">Стоимость</p>

            <div class="sidebar-range__val">
                <div class="range-from">
                    <label for="amount-min">От:</label>
                    <input type="text" id="amount-min">
                </div>
                <div class="range-to">
                    <label for="amount-max">До:</label>
                    <input type="text" id="amount-max">
                </div>
            </div>

            <div id="slider-range"></div>

            <div class="sidebar-range__static">
                <span class="min"></span>
                <span class="max"></span>
            </div>

        </fieldset>
        <fieldset class="sidebar-checkboxes">
            <p class="sidebar-range__title">Производитель</p>

            <ul class="sidebar-checkboxes__list">
                <li>
                    <input type="checkbox" id="ch-1" class="custom-checkbox">
                    <label for="ch-1">Mechanix AV</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-2" class="custom-checkbox">
                    <label for="ch-2">Starline</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-3" class="custom-checkbox">
                    <label for="ch-3">Triarma</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-4" class="custom-checkbox">
                    <label for="ch-4">Tegera</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-5" class="custom-checkbox">
                    <label for="ch-5">Mechanix AV</label>
                </li>
            </ul>

        </fieldset>

        <fieldset class="sidebar-checkboxes">
            <p class="sidebar-range__title">Тип перчаток</p>

            <ul class="sidebar-checkboxes__list">
                <li>
                    <input type="checkbox" id="ch-6" class="custom-checkbox">
                    <label for="ch-6">от вибраций</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-7" class="custom-checkbox">
                    <label for="ch-7">от механических воздействий</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-8" class="custom-checkbox">
                    <label for="ch-8">от повышенных температур</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-9" class="custom-checkbox">
                    <label for="ch-9">от пониженных температур</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-10" class="custom-checkbox">
                    <label for="ch-10">от порезов</label>
                </li>
                <li>
                    <input type="checkbox" id="ch-12" class="custom-checkbox">
                    <label for="ch-12">от токсических веществ, кислот и щелочей</label>
                </li>
            </ul>
        </fieldset>

        <fieldset class="sidebar__filter--ctrl">
            <button type="submit" class="btn btn-md btn--accent">Применить</button>
        </fieldset>
        <fieldset class="sidebar__filter--ctrl">
            <button type="reset" class="btn-link">Сбросить фильтры</button>
        </fieldset>

    </form>
</div>