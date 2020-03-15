@extends('layouts.app')

@section('content')
    <div class="header-title ken-burn-center white" data-parallax="scroll" data-position="top" data-natural-width="1920" data-natural-height="850" data-image-src="/images/pages/reservations.jpg">
        <div class="container">
            <div class="title-base">
                <hr class="anima" />
                <h1>{{ $event->title }}</h1>
                <a href="{{ route('pages.menu') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Étlap</a>
                <a href="{{ route('reservations.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Asztalfoglalás</a>
                <a href="{{ route('events.index') }}" class="btn btn-border btn-sm anima anima-fade-bottom">Rendezvények</a>
            </div>
        </div>
    </div>
    <div class="bg-white section-two-blocks blocks-right">
        <div class="row">
            <div class="col-md-6 section-bg" style="display: flex; align-items: center; justify-content: center;">
                <div class="content">
                    <img class="img-fluid" src="{{ $event->image_path }}" alt="{{ $event->title }}"/>
                </div>
            </div>
            <div class="col-md-6 section-bg">
                <div class="content">
                    <hr class="space s" />
                    <div class="tag-row">
                        <span><i class="fa fa-calendar" style="font-size: 16px;"></i> <a href="#" style="font-size: 16px;">{{ $event->started_at }}</a></span>
                        @if ($event->finished_at != null)
                            <span><i class="fa fa-calendar" style="font-size: 16px;"></i> <a href="#" style="font-size: 16px;">{{ $event->finished_at }}</a></span>
                        @endif
                    </div>
                    <hr class="space m" />
                    <p>{!! $event->content !!}</p>
                    <hr class="space s" />
                    <div class="btn-group social-group">
                        <a target="_blank" href="https://www.facebook.com/spalettaetterem/" data-social="share-facebook" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook text-s circle"></i></a>
                        <a target="_blank" href="https://www.instagram.com/spalettaetterem/" data-social="share-twitter" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram text-s circle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="section-bg-color">--}}
            {{--<div class="container content">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12">--}}
                        {{--<div class="form-box">--}}
                            {{--<h4 class="text-m">Leave a comment</h4>--}}
                            {{--<hr class="space m" />--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<p>Name</p>--}}
                                    {{--<input type="text" class="form-control" placeholder="">--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<p>Email</p>--}}
                                    {{--<input type="text" class="form-control" placeholder="">--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<hr class="space xs" />--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<p>Website</p>--}}
                                    {{--<input type="text" class="form-control" placeholder="">--}}
                                    {{--<hr class="space xs" />--}}
                                    {{--<p>Messagge</p>--}}
                                    {{--<textarea name="messagge" class="form-control"></textarea>--}}
                                    {{--<hr class="space s" />--}}
                                    {{--<button class="btn btn-xs" type="button">Send comment</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
@endsection
