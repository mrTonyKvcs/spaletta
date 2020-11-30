<header class="bg-transparent fixed-top menu-transparent scroll-change wide-area" data-menu-anima="fade-in">
    <div class="navbar navbar-default mega-menu-fullwidth navbar-fixed-top" role="navigation">
        <div class="navbar navbar-main">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="{{ route('pages.index') }}">
                        <img class="logo-default scroll-hide" src="../images//logo/logo.png" alt="logo" title="logo" />
                        <img class="logo-default scroll-show" src="../images/logo/logo.png" alt="logo" title="logo"/>
                        <img class="logo-retina" src="../images/logo/logo.png" alt="logo" title="logo"/>
                    </a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        @foreach($navbar as $element)
                            @if($element['dropdown'] != null)
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">{{ $element['name']}} <span class="caret"></span></a>
                                    <ul class="dropdown-menu multi-level">
                                        @foreach($element['dropdown'] as $item)
                                            <li>
                                                <a href="{{ route($item['link']) }}">{{ $item['name']}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>

                            @else
                                <li><a href="@if($element['link'] != '') {{ route($element['link'])}} @else {{$element['link']}} @endif">{{ $element['name']}}</a></li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="nav navbar-nav navbar-right">
                        <li>
                            
                            <a target="_blank" href="#" data-social="share-facebook" style="font-size: 18px;"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a target="_blank" href="#" data-social="share-instagram" style="font-size: 18px;"><i class="fa fa-instagram"></i></a>
                        </li>
                        {{--<ul class="nav navbar-nav lan-menu">--}}
                            {{--<li class="dropdown">--}}
                                {{--<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"><img src="../images/en.png" alt="" />En<span class="caret"></span></a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a href="#"><img src="../images/it.png" alt="" />IT</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
