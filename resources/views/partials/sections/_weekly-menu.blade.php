<div class="section-empty">
    <div class="container content">
        <div class="title-base">
            <hr />
            <h1>{{ $weeklyMenu['title'] }} <br><small>1800 Ft</small></h1>
            <p style="color: #ffb606;">{{ $weeklyMenu['sub_title'] }}</p>
        </div>
        <hr class="space s" />
        <div class="row">
            @foreach($weeklyMenu['menu'] as $menu)
                <div class="col-md-6" style="">
                    <div class="text-left title-base">
                        <hr>
                        <h3 class="text-center">{{ $menu['name'] }}</h3>
                    </div>
                    <div class="list-items" style="margin-bottom: 25px;">
                        @foreach($menu['items'] as $item)
                            <div class="list-item" style="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center">{{ $item }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            <div class="col-md-12" style="margin-bottom: 20px;"><hr></div>
            <div class="col-md-6" style="">
                <div class="text-left title-base">
                    <hr>
                    <div class="list-items" style="margin-bottom: 25px;">
                        @foreach($weeklyMenu['saturday-menu']['items'] as $item)
                            <div class="list-item" style="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center">{{ $item }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <h3 class="text-center">{{ $weeklyMenu['saturday-menu']['name'] }} <br><small>2300 Ft</small></h3>
                </div>
            </div>
            <div class="col-md-6" style="">
                <div class="text-left title-base">
                    <hr>
                    <div class="list-items" style="margin-bottom: 25px;">
                        @foreach($weeklyMenu['sunday-menu']['items'] as $item)
                            <div class="list-item" style="">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 class="text-center">{{ $item }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <h3 class="text-center">{{ $weeklyMenu['sunday-menu']['name'] }} <br><small>2300 Ft</small></h3>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('pages.menu') }}" class="btn btn-sm">Étlap</a>
            {{--<a href="{{ route('pages.menu') }}" class="btn btn-sm">Étlap</a>--}}
        </div>
    </div>
</div>
