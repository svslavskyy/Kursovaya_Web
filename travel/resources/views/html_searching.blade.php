<div class="body">
    <div class="why">
        <h4>Пошук турів</h4>
        <div class="why_text">
            <div class="left_small">
                <button type="button" value="Click" onmousedown="viewDiv()" class="left_small_filter">Фільтр</button>
            </div>
            <div class="left">
                <h5>Фільтр</h5>
                @yield('filter_left')
            </div>
            <div class="left" id="left_small">
                <h5>Фільтр</h5>
                @yield('filter_left')
            </div>

            <div class="right">
                @yield('filter_check')
                <div class="right_tour">
                    @yield('tour_content')

                </div>
            </div>
        </div>
    </div>
</div>
