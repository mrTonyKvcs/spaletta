@extends('layouts.app')

@section('title') Étlap @endsection

@section('meta_data')
    <meta name="description" content="A Spaletta Étterem a kialakult helyzet miatt kiszállításos étlappal, és itallappal jelentkezik. Várjuk megrendelésüket, házhoz visszük a Spaletta ízeket!">
    <meta property="og:description" content="A Spaletta Étterem a kialakult helyzet miatt kiszállításos étlappal, és itallappal jelentkezik. Várjuk megrendelésüket, házhoz visszük a Spaletta ízeket!">
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
        <div class="container text-center content">
            <img class="img-fluid" src="/images/{{ $menus }}.jpg" alt="{{ $title }}">
        </div>
    </div>
@endsection
