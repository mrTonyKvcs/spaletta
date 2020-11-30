@extends('layouts.app')

@section('title') Étlap @endsection

@section('meta_data')
    <meta property="og:description" content="A Spaletta Étterem a kialakult helyzet miatt kiszállításos étlappal, és itallappal jelentkezik. Várjuk megrendelésüket, házhoz visszük a Spaletta ízeket!">
    <meta name="description" content="A Spaletta Étterem a kialakult helyzet miatt kiszállításos étlappal, és itallappal jelentkezik. Várjuk megrendelésüket, házhoz visszük a Spaletta ízeket!">
    <meta property="og:url" content="https://spalettaetterem.com/kiszallitasos-etlap-itallap"> 
@endsection

@section('content')
    <div class="header-title ken-burn white" data-parallax="scroll" data-bleed="0" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="/images/pages/{{ \Str::slug($title) }}.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>{{ $title }}</h1>
                {{--<a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom fade-bottom" style="position: relative; animation-duration: 1000ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6040015320453584">Asztalfoglalás</a>--}}
            </div>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            @foreach($menus as $category)
                <div class="row" data-anima="@if($loop->index % 2 == 0) fade-right @else fade-left @endif">
                <div class="col-md-12">
                    <div class="text-center title-base">
                        <hr />
                        <h2 style="color: #ffb606;font-weight: 100;">{{ $category['name'] }}</h2>
                    </div>
                    <hr class="space m" />
                    <div class="row">
                        <div class="col-md-12">
                            <div class="list-items">
                                @foreach($category->items as $item)
                                    <div class="list-item">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <h3>{{ $item->name }}</h3>
                                                <p>{{ $item->comment }}</p>
                                            </div>
                                            <div class="col-md-3">
                                                @if ($item->less_price != null)
                                                    <span>{{ $item->less_price }} Ft</span>
                                                @endif
                                                <span>{{ $item->price }} Ft</span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <hr class="space m" />
                </div>
                {{--<div class="col-md-5">--}}
                    {{--<hr class="space m" />--}}
                    {{--<img src="../images/block-11.jpg" class="abs-image hidden-sm" alt="" />--}}
                {{--</div>--}}
            </div>
            <hr class="space" />
            @endforeach
        </div>
    </div>
@endsection
