@extends('layouts.app')

@section('content')
    <div class="section-bg-video grunge-border">
        <div class="bg-overlay transparent-dark"></div>
        <div class="videobox">
            <video autoplay loop muted poster="../images/video-1-poster.jpg">
                <source src="/videos/spaletta-video.mp4" type="video/mp4">
            </video>
        </div>
        <div class="container text-center content overlay-content white" data-anima="fade-top" data-timeline="asc" data-time="1000" style="padding-top: 150px; padding-bottom: 150px;">
            <hr class="space" />
            <hr class="space" />
            <h3 class="text-uppercase anima" style="color: #ffb606;">Spaletta Kecskemét</h3>
            <h4 class="text-xl text-bold anima" style="text-transform:uppercase;font-weight: 100;">Étterem és Sörház</h4>
            <hr class="space xs" />
            <p class="anima">
                Kecskemét, Jókai u. 15, 6000
            </p>
            <hr class="space s" />
            <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom" style="margin-top: 10px;">Étlap</a>
            <a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom" style="margin-top: 10px;">Asztalfoglalás</a>
            <a href="{{ route('events.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom" style="margin-top: 10px;">Rendezvények</a>
            <hr class="space" />
            <hr class="space" />
        </div>
    </div>

    @include('partials.sections._weekly-menu')

    {{--<div class="overflow-visible section-bg-color">--}}
        {{--<div class="container content">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3">--}}
                    {{--<div class="text-left title-base">--}}
                        {{--<hr />--}}
                        {{--<h2>Book a table</h2>--}}
                        {{--<p>A table only for you</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-9">--}}
                    {{--<script type='text/javascript' src='http://www.opentable.com/widget/reservation/loader?rid=347401&domain=com&type=standard&theme=wide&lang=en&overlay=false&iframe=false'></script>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    <div class="section-empty home-services">
        <div class="container content">
            <div class="row">
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-full-content">
                        <div class="img-box">
                            <img src="../images/pages/home-menu.jpg" alt="" />
                        </div>
                        <a href="{{ route('pages.menu') }}" class="caption-bg img-box">
                            <div class="caption">
                                <div class="inner">
                                    <h2>Étlap</h2>
                                    {{--<p class="sub"> An explosion of flavours </p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-full-content">
                        <div class="img-box">
                            <img src="../images/pages/drinks2.png" alt="" />
                        </div>
                        <a href="{{ route('pages.drinks') }}" class="caption-bg img-box">
                            <div class="caption">
                                <div class="inner">
                                    <h2>Itallap</h2>
                                    {{--<p class="sub"> An explosion of flavours </p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-full-content">
                        <div class="img-box">
                            <img src="../images/pages/home-reservations.jpg" alt="" />
                        </div>
                        <a href="{{ route('reservations.index') }}" class="caption-bg img-box">
                            <div class="caption">
                                <div class="inner">
                                    <h2>Asztalfoglalás</h2>
                                    {{--<p class="sub"> An explosion of flavours </p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="img-box adv-img adv-img-full-content">
                        <div class="img-box">
                            <img src="../images/pages/events.jpg" alt="" />
                        </div>
                        <a href="{{ route('events.index') }}" class="caption-bg img-box">
                            <div class="caption">
                                <div class="inner">
                                    <h2>RENDEZVÉNYEK</h2>
                                    {{--<p class="sub"> An explosion of flavours </p>--}}
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if ($events->isNotEmpty())
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
                        <a class="" href="{{ route('events.show', $event->slug) }}">
                            <div class="col-md-4 anima">
                                <div class="advs-box advs-box-top-icon-img">
                                    <a class="img-box" href="{{ route('events.show', $event->slug) }}">
                                        <span><img src="{{ $event->image_path }}" alt=""></span>
                                    </a>
                                    <div class="advs-box-content">
                                        <h3><a href="{{ route('events.show', $event->slug) }}">{{ $event->title }}</a></h3>
                                        <span class="extra-content" style="background: #ffb606;">{{ $event->started_at }}</span>
                                        <a href="{{ route('events.show', $event->slug) }}" class="btn btn-border btn-sm anima anima-fade-bottom" style="margin-top: 10px;">Részletek</a>

                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    @else

        <div class="section-empty">
            <div class="container content">
                <div class="title-base">
                    <hr />
                    <h2>ASZTALFOGLALÁS</h2>
                    <p style="color: #ffb606;">Spaletta</p>
                </div>
                <hr class="space m" />

                <div class="row">
                <div class="col-md-8 col-center">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('mail.store', 'Asztalfoglalás')}}" class="text-center form-box form-ajax" method="post">
                        @csrf
                        <div class="col-md-6">
                            <p>Dátum</p>
                            <input name="checkin" id="checkin" type="text" data-toggle="datepicker" class="form-control form-value" placeholder="" required>
                        </div>
                        <div class="col-md-6">
                            <p>Időpont</p>
                            <input id="time" name="time" placeholder="" type="time" class="form-control form-value" required>
                        </div>
                        <hr class="space s" />
                        <div class="row">
                            <div class="col-md-6">
                                <p>Teljes név</p>
                                <input id="name" name="name" placeholder="" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-6">
                                <p>Telefonszám</p>
                                <input id="phone" name="phone" placeholder="" type="text" class="form-control form-value">
                            </div>
                            <div class="col-md-6">
                                <p>Vendégek</p>
                                <div class="form-group">
                                    <select name="persons" class="form-control" id="exampleFormControlSelect1" style="font-size: 16px;">
                                        @for($i=0; $i < 20; $i++)
                                            <option>{{ $i + 1 }} Vendég</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr class="space xs" />
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space s" />
                                <button class="anima-button circle-button btn-sm btn" type="submit"><i class="im-envelope"></i>Asztalfoglalás</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    @endif

    <div class="home-about">
        <div class="container content">
            <div class="row">
                <div class="col-md-6">
                    <img src="../images/pages/our-chefs.jpg" style="border: 1px solid #ffb606;" alt="" />
                </div>
                <div class="col-md-6">
                    <div class="content about-card-bg">
                        <div class="text-left title-base">
                            <hr />
                            <h2 class="" style="color: #484848;">Bemutatkozunk</h2>
                            <p class="text-gold" style="font-size: 16px; color: #ffb606">Rólunk</p>
                        </div>
                        <p class="" style="color: #484848;">
                            Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.
                        </p>
                        <hr class="space s" />
                        <a href="#" class="btn btn-sm btn-border">Tovább</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section-empty">
        <div class="container content">
            <div class="row d-flex align-items-center">
                <div class="col-md-1 text-center-sm">
                    <hr class="space xs hidden-sm" />
                    <img src="../images/clock.gif" alt="" />
                </div>
                <div class="col-md-2 col-sm-12 text-center-sm">
                    <hr class="space xs hidden-sm" />
                    <div class="text-left title-base text-center-sm">
                        <hr />
                        <h2 class="text-center">Nyitva tartás</h2>
                    </div>
                </div>
                <div class="col-md-9 col-sm-12 text-center-sm">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Napok</th>
                                @foreach($hours as $day)
                                    <th class="text-center">{{ $day['name']}}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="text-center">Óra</th>
                                @foreach($hours as $day)
                                    @if ($day['hours'] != null)
                                        <td class="text-center"><strong>
                                                {{ $day['hours']['open'] }}
                                                -
                                                {{ $day['hours']['close'] }}
                                            </strong></td>
                                    @else
                                        <td class="text-center"><strong>-</strong></td>
                                    @endif
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
