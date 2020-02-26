@extends('layouts.app')

@section('content')
    <div class="header-title ken-burn-center white" data-parallax="scroll" data-bleed="0" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="../images/pages/drinks.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Itallap</h1>
                <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Étlap</a>
                <a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Asztalfoglalás</a>
                <a href="{{ route('events.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Rendezvények</a>
            </div>
        </div>
    </div>
    <div class="section-bg-image parallax-window" data-bleed="0" data-natural-height="2500" data-natural-width="1920" data-parallax="scroll" data-image-src="" style="background: #fff;">
        <div class="container content">
            <div class="row">
                <div class="col-md-10 col-center">
                    @foreach($drinks as $category)
                    <div class="title-base">
                        <hr />
                        <h2>{{ $category->name }}</h2>
                        <p style="color:#ffb606;">Spaletta</p>
                    </div>
                    <hr class="space m" />
                    <div class="row">
                        @foreach($category->items as $item)
                        <div class="col-md-6">
                            <div class="list-items">
                                <div class="list-item list-item-img">
                                    <div class="row">
                                        <div class="col-md-9">
                                            <h3>{{ $item->name }} <small class="text-uppercase">{{ $item->cocktail_name }}</small></h3>
                                            <p>{{ $item->comment }}</p>
                                        </div>
                                        <div class="col-md-3">
                                            @if ($item->less_price != null) <span>{{ $item->less_price }} Ft</span>@endif
                                            <span>{{ $item->price }} Ft</span>
                                            @if ($item->expensive_price != null) <span>{{ $item->expensive_price }} Ft</span>@endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{--<div class="col-md-6">--}}
                            {{--<div class="list-items">--}}
                                {{--<div class="list-item list-item-img">--}}
                                    {{--<div class="row">--}}
                                        {{--<div class="col-md-9">--}}
                                            {{--<h3>Steamed king crab</h3>--}}
                                            {{--<p>--}}
                                            {{--Duis aute irure dolo irure dolor in reprehenderit in voluptate velito esse cillume.--}}
                                            {{--</p>--}}
                                        {{--</div>--}}
                                        {{--<div class="col-md-3">--}}
                                            {{--<span>9$</span>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>
                    <hr class="space m" />
                    <hr class="d" />
                    @endforeach
                </div>
            </div>
        </div>

    </div>
@endsection
