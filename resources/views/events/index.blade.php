@extends('layouts.app')

@section('content')
    <div class="section-bg-image parallax-window box-middle-container full-screen-size white ken-burn-center" data-natural-height="1080" data-natural-width="1920" data-parallax="scroll" data-image-src="../images/pages/events-bg.jpg">
        <div class="container content box-middle">
            <div class="row">
                <div class="text-center col-md-8 col-center" style="background-color: rgba(0, 0, 0, 0.5); padding-top: 25px; padding-bottom: 25px;" data-anima="show-scale" data-time="1000">
                    <hr class="space visible-xs" />
                    @if ($events->first() != null)
                    <h1 class="text-m text-bold" style="color: #ffb606; font-weight: 400; text-transform: uppercase">Következő Spaletta rendezvény</h1>
                    <h1 class="text-black" style="font-weight: 300;">{{ $events->first()->title }}</h1>
                    <hr class="space s" />
                    <div class="countdown text-s" data-time="{{ $events->first()->started_at }}" data-utc-offset="-5">
                        <div>
                            <span class="days countdown-values text-l">00</span><br /><span class="countdown-label">Nap</span>
                        </div>
                        <div>
                            <span class="hours countdown-values text-l">00</span><br /><span class="countdown-label">Óra</span>
                        </div>
                        <div>
                            <span class="minutes countdown-values text-l">00</span><br /><span class="countdown-label">Perc</span>
                        </div>
                        <div>
                            <span class="seconds countdown-values text-l">00</span><br /><span class="countdown-label">Másodperc</span>
                        </div>

                        @else
                            <h1 class="text-m text-bold" style="color: #ffb606; font-weight: 400; text-transform: uppercase">Jelenleg nincs Spaletta rendezvény!</h1>
                        @endif
                    </div>
                    <hr class="space l" />
                    @if ($events->first() != null)
                        <a href="{{ route('events.show', $events->first()->slug) }}" class="circle-button btn btn-sm btn-border">Részletek</a>
                    @endif

                    {{--<span class="space"></span>--}}
                </div>
            </div>
        </div>
    </div>

    @if ($events->first() != null)
    <div class="section-empty">
        <div class="container content">
            <div class="title-base">
                <hr />
                <h2>Rendezvények</h2>
                <p style="color: #ffb606;">Spaletta</p>
            </div>
            <hr class="space m" />

            <div class="row" data-anima="fade-bottom" data-timeline="asc" data-timeline-time="200" data-ti>
                @foreach($events as $event)
                    <div class="col-md-4 anima">
                        <div class="advs-box advs-box-top-icon-img">
                            <a class="img-box" href="#">
                                <span><img src="{{ $event->image_path }}" alt="{{ $event->title }}"></span>
                            </a>
                            <div class="advs-box-content">
                                <h3><a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a></h3>
                                <span class="extra-content" style="background: #ffb606;">{{ $event->started_at }}</span>
                                <a href="{{ route('events.show', $event->slug) }}" class="circle-button btn btn-sm btn-border">Részletek</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section-map row-15">
        <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.4844358566284!2d19.68788841560659!3d46.91285697914473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da1ac3b6008b%3A0x962147940a470b37!2zS2Vjc2tlbcOpdCwgSsOza2FpIHUuIDE1LCA2MDAw!5e0!3m2!1sen!2shu!4v1579996015891!5m2!1sen!2shu" width="100%" height="450" frameborder="0" style="border:0; margin-bottom: 50px;" allowfullscreen=""></iframe>
    </div>
    @endif
    {{--<div class="section-empty no-paddings">--}}
        {{--<div class="content">--}}
            {{--<div class="flexslider carousel nav-inner white" data-options="minWidth:120,itemMargin:0,numItems:6,controlNav:true,directionNav:false">--}}
                {{--<ul class="slides">--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-36.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-36.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-31.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-31.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-41.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-41.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-14.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-14.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-1.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-1.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-10.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-10.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li>--}}
                        {{--<a class="img-box lightbox" href="../images/gallery/image-35.jpg" data-lightbox-anima="show-scale">--}}
                            {{--<img src="../images/gallery/image-35.jpg" alt="">--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
