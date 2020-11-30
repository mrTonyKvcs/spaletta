@extends('layouts.app')

@section('title') Rólunk @endsection

@section('meta_data')
    <meta property="og:description" content="Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött...">
    <meta property="og:url" content="https://spalettaetterem.com/rolunk"> 
@endsection

@section('content')
    <div class="header-title ken-burn white" data-parallax="scroll" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="../images/pages/about-new.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Rólunk</h1>
                <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Étlap</a>
                <a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Asztalfoglalás</a>
                <a href="{{ route('events.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Rendezvények</a>
            </div>
        </div>
    </div>
    <div class="section-empty no-padding-bottom">
            <div class="container content">
                <div class="row">
                    <div class="col-md-8" style="padding-bottom: 25px;">
                        <hr class="space s" />
                        <div class="text-left title-base">
                            <hr />
                            <h2>Történetünk</h2>
                            <p style="color: #ffb606;">Spaletta</p>
                        </div>
                        <p>Fura hullámokat vet az élet. Soha nem gondoltam volna, hogy éttermet fogunk vezetni. Eddig az élet teljesen más területén dolgoztunk, dolgozunk és bár gyermekkorom nyarait régi vendéglátós család szülöttjeként hol fagylaltosfiúként, hol pultosként töltöttem-közben leendő feleségem palacsintát sütött egy lakókocsiban a vágyott Adidas cipőért- nem is álmodtunk efféle karrierről.</p>
                        <p>Aztán lett egy élethelyzet. Csendestársként döntenünk kellett. És úgy éreztük , ahhoz nagyobb bátorság kell, hogy a helyet végérvényesen elengedjünk, mint ahhoz, hogy kipróbáljuk magunkat. És hála Istennek nem voltunk elég bátrak.</p>
                        <p>Most ezeket a pillanatokat éljük és őszintén mondom élvezzük.
                        Kérdezték, milyen éttermet szeretnénk. Én azt mondtam és gondoltam, elsősorban olyat, ahova büszkén teszem be a lábam. Ahol a vendégeken kívül a dolgozók is mosolyognak. Ahol jól érezzük magunkat és hétről-hétre ismerős, visszatérő arcokkal, családokkal találkozunk. Ahol mindenki megtalálja a kedvére valót, akár szomjas, akár éhes. <br> Mert apánk is hitte…</p>
                        <hr class="space s" />
                        {{--<img src="../images/sign-2.png" alt="" />--}}
                    </div>
                    <div class="col-md-4">
                        <img src="../images/pages/about-image.jpg" style="border: 1px solid #ffb606;" alt="spaletta-tabla" title="etterem" />
                        <img src="../images/pages/about-image2.png" style="border: 1px solid #ffb606; margin-top: 20px;" alt="etterem" title="etterem" />
                    </div>
                </div>
            </div>
        </div>
        <div class="section-empty">
            <div class="container content">
                <div class="row d-flex align-items-center">
                    <div class="col-md-1 text-center-sm">
                        <hr class="space xs hidden-sm" />
                        <img src="../images/clock.gif" style="border-radius: 50px;" alt="" />
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
        <div class="section-empty">
            <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.4844358566284!2d19.68788841560659!3d46.91285697914473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da1ac3b6008b%3A0x962147940a470b37!2zS2Vjc2tlbcOpdCwgSsOza2FpIHUuIDE1LCA2MDAw!5e0!3m2!1sen!2shu!4v1579996015891!5m2!1sen!2shu" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
@endsection
