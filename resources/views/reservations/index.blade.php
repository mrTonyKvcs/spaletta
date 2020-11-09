@extends('layouts.app')

@section('content')
    <div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="../images/pages/reservations.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>Asztalfoglalás</h1>
                <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom fade-bottom" style="position: relative; animation-duration: 1000ms; transition-timing-function: ease; transition-delay: 0ms;" aid="0.6040015320453584">Étlap</a>
            </div>
        </div>
    </div>
    <div class="alert alert-warning alert-block" style="padding: 30px 15px;">
        <div class="container">
            <h4 class="text-center">Kedves vendégeink!</h4>
            <p class="text-center" style="font-size: 16px;">Nov. 2-tól hétfőtől a vendégeink részére is kötelező lesz a maszk viselése éttermünk területén, kivétel ez alól az ételek és italok elfogyasztása közbeni idő az asztalnál. Bejáratnál kérjük használják  a kihelyezett fertőtlenítőt, illetve ha nem hoztak magukkal maszkot a bejáratnál kérjék azt kollegáinktòl.Megértésüket köszönjük.</p>

            <p class="text-center" style="font-size: 16px;"><strong>Továbbra is várjuk kedves vendégeinket a megszokott nyitvatartással és ajánlatokkal.</strong></p>
        </div>
    </div>
    <div class="section-empty">
        <div class="container content">
            <div class="row">
                @include('flash-message')
            </div>
            <div class="row">
                {{-- <div class="col-md-8 col-center"> --}}
                    {{-- <div class="alert alert-warning" role="alert"> --}}
                    {{--     <strong>Az éttermek éjszakája menü (2020.08.13-16) foglalásához alábbi linken jelentkezzenek be: <a href="https://ettermekejszakaja.hu/ --}}
                    {{--     " target="_blank"> Klikeljen ide!</a></strong></div> --}}
                {{-- </div> --}}
                <div class="col-md-8 col-center">
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
                            <div class="text-center col-md-12">
                                <div style="display: flex; justify-content: center;">
                                    {!! NoCaptcha::display() !!}
                                </div>
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
            <hr class="space" />
            <div class="row">
                <div class="text-center col-md-8 col-center">
                    <p>A fenti űrlapot kitöltve tudjuk fogadni asztalfoglalási igényét. Ha foglalással kapcsolatba kérdése merülne fel az alábbi elérhetőségeken tudja a velünk felvenni a kapcsolatot.</p>
                    {{--<hr class="space s">--}}
                    {{--<ul class="list-texts">--}}
                        {{--<li><b>Cím:</b> <a href="https://www.google.com/maps/place/Kecskem%C3%A9t,+J%C3%B3kai+u.+15,+6000/data=!4m2!3m1!1s0x4743da1ac3b6008b:0x962147940a470b37?sa=X&ved=2ahUKEwiRq7WxkqTnAhXnk4sKHdycB7kQ8gEwAHoECAsQAQ" target="_blank">Jókai u. 15, Kecskemét 6000</a></li>--}}
                        {{--<li><b>Telefon:</b> <a href="tel:0676614744">(06 76) 614 744</a></li>--}}
                    {{--</ul>--}}
                    <hr class="space s">
                    <div class="row">
                        <div class="col-md-8 col-center">
                            <h5 class="text-bold">Nyitvatartás</h5>
                            <ul class="list-texts list-texts-justified">
                                <li><b>Hétfő:</b>  <span> Zárva</span></li>
                                <li><b>Kedd - Csütörtök:</b> <span>11:30 - 23:00</span></li>
                                <li><b>Péntek - Szombat:</b> <span>11:30 - 23:00</span></li>
                                <li><b>Vasárnap:</b> <span>11:30 - 16:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="space m">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box icon-box-top-bottom">
                        <div class="icon-box-cell">
                            <i class="text-xl im-speach-bubbles"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Email</label>
                            <p class="text-s">
                                <a href="mailto:hello@spalettakecskemet.hu">hello@spalettakecskemet.hu</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box icon-box-top-bottom">
                        <div class="icon-box-cell">
                            <i class="text-xl im-map-marker"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Cím</label>
                            <p class="text-s">
                                <a href="https://www.google.com/maps/place/Kecskem%C3%A9t,+J%C3%B3kai+u.+15,+6000/data=!4m2!3m1!1s0x4743da1ac3b6008b:0x962147940a470b37?sa=X&ved=2ahUKEwiRq7WxkqTnAhXnk4sKHdycB7kQ8gEwAHoECAsQAQ" target="_blank"> Jókai u. 15, Kecskemét 6000</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="icon-box icon-box-top-bottom">
                        <div class="icon-box-cell">
                            <i class="text-xl im-phone"></i>
                        </div>
                        <div class="icon-box-cell">
                            <label class="text-m">Telefon</label>
                            <p class="text-s">
                                <a href="tel:0676614744">(06 76) 614 744</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
