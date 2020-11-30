@extends('layouts.app')

@section('title') Galéria @endsection

@section('meta_data')
    <meta property="og:description" content="A galéria betekintés nyújt a Spaletta Étterem világába. A étterem mellett ételekről,italakról,eseményekről,hangulatos teraszunkról és a sörházról is talál képeket.">
    <meta property="og:url" content="https://spalettaetterem.com/galeria"> 
@endsection

@section('content')
    <div class="header-title ken-burn white" data-parallax="scroll" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="/images/pages/gallery.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Galéria</h1>
                <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Étlap</a>
                <a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Asztalfoglalás</a>
                <a href="{{ route('events.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Rendezvények</a>
            </div>
        </div>
    </div>
    <div class="section-empty section-item">
        <div class="container content">
            <div class="maso-list gallery">
                <div class="navbar navbar-inner">
                    <div class="navbar-toggle"><i class="fa fa-bars"></i><span>Menu</span><i class="fa fa-angle-down"></i></div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav over ms-minimal inner maso-filters nav-center">
                            <li class="current-active active"><a data-filter="maso-item">All</a></li>
                            <li><a data-filter="spaletta">A Spaletta</a></li>
                            <li><a data-filter="restaurent">Étterem</a></li>
                            <li><a data-filter="beer">Sörház</a></li>
                            <li><a data-filter="team">Csapatunk</a></li>
                            <li><a data-filter="events">Rendezvények</a></li>
                            <li><a data-filter="cat3">Location</a></li>
                            <li><a class="maso-order" data-sort="asc"><i class="fa fa-arrow-down"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="maso-box row" data-lightbox-anima="show-scale">
                    @foreach($gallery as $item)
                        <div data-sort="{{ $loop->index + 1 }}" class="maso-item col-md-4 {{ $item['category'] }}">
                            <a class="img-box i-bottom-right" href="/images/gallery/{{ $item['name'] }}.jpg">
                                <i class="im-old-camera"></i>
                                <img src="/images/gallery/{{ $item['name'] }}.jpg" @if(isset($item['alt'])) title="{{ $item['alt'] }}" alt="{{ $item['alt'] }}" @endif />
                            </a>
                        </div>

                    @endforeach
                    <div class="clear"></div>
                </div>
                <div class="list-nav">
                    <a href="#" class="circle-button btn-sm btn load-more-maso" data-page-items="12">További képek..<i class="fa fa-arrow-down"></i></a>
                </div>
            </div>
        </div>
    </div>
@endsection
