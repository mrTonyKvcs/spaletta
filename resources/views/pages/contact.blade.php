@extends('layouts.app')
@section('content')
    <div class="section-map box-middle-container row-18">
        {{--<div class="google-map" data-coords="40.741895,-73.989308" data-skin="gray" data-zoom="12" data-marker-pos-top="30" data-marker-pos="col-md-6-right" data-marker="http://templates.framework-y.com/gourmet/images/marker-map.png"></div>--}}

        <div class="overlaybox overlaybox-side">
            <div class="header-title ken-burn white" data-parallax="scroll" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="../images/pages/contact.jpg">
                <div class="container">
                    <div class="title-base">
                        <hr class="anima" />
                        <h1>Kapcsolat</h1>
                        <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Étlap</a>
                        <a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Asztalfoglalás</a>
                        <a href="{{ route('events.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Rendezvények</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-empty section-item">
        <div class="container content">

            <div class="row">
                <iframe class="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2725.4844358566284!2d19.68788841560659!3d46.91285697914473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4743da1ac3b6008b%3A0x962147940a470b37!2zS2Vjc2tlbcOpdCwgSsOza2FpIHUuIDE1LCA2MDAw!5e0!3m2!1sen!2shu!4v1579996015891!5m2!1sen!2shu" width="100%" height="450" frameborder="0" style="border:0; margin-bottom: 50px;" allowfullscreen=""></iframe>

            </div>
            <div class="row">
                <div class="text-left col-md-8">
                    <div class="text-left title-base text-left-sm">
                        <hr />
                        <h2>Üzenetet</h2>
                        <p style="color: #ffb606;">Küldjön</p>
                    </div>
                    <p>Az alábbi ürlap kitöltésevel közvetlen üzenetet tud küldeni.</p>
                    <hr class="space s" />
                    <form action="{{ route('mail.store', 'Kapcsolat')}}" class="text-center form-box form-ajax" method="post">
                        @csrf
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
                            <div class="col-md-12">
                                <p>Üzenet</p>
                                <textarea id="message" name="message" placeholder="" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-xs btn" type="submit" disabled><i class="im-mail-send"></i>Küldés</button>
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
                <div class="col-md-4">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Napok</th>
                                <th class="text-center">Nyitás</th>
                                <th class="text-center">Zárás</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($hours as $day)
                                <tr>
                                    <th>{{ $day['name'] }}</th>
                                    @if($day['hours']['open'] != null)
                                        <td class="text-center">{{ $day['hours']['open'] }}</td>
                                        <td class="text-center">{{ $day['hours']['close'] }}</td>
                                    @else
                                        <td class="text-center">-</td>
                                        <td class="text-center">-</td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
