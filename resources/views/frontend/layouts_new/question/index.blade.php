@extends('frontend.layouts_new.app')
@section('header')
    <style type="text/css" rel="stylesheet">
        /** resets **/
        html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
            margin: 0;
            padding: 0;
            border: 0;
            font-size: 100%;
            font: inherit;
            vertical-align: baseline;
            outline: none;
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html {
            height: 101%;
        }

        body {
            background: #f0f0f0 url('images/bg.gif');
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #313131;
            font-size: 62.5%;
            line-height: 1;
        }

        ::selection {
            background: #a4dcec;
        }

        ::-moz-selection {
            background: #a4dcec;
        }
        ::-webkit-input-placeholder { /* WebKit browsers */
            color: #ccc;
            font-style: italic;
        }

        :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
            color: #ccc;
            font-style: italic;
        }

        ::-moz-placeholder { /* Mozilla Firefox 19+ */
            color: #ccc;
            font-style: italic;
        }

        :-ms-input-placeholder { /* Internet Explorer 10+ */
            color: #ccc !important;
            font-style: italic;
        }

        br {
            display: block;
            line-height: 2.2em;
        }

        article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
            display: block;
        }

        ol, ul {
            list-style: none;
        }

        input, textarea {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: 100%;
            -ms-text-size-adjust: 100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            outline: none;
        }

        blockquote, q {
            quotes: none;
        }

        blockquote:before, blockquote:after, q:before, q:after {
            content: '';
            content: none;
        }

        strong {
            font-weight: bold;
        }

        table {
            border-collapse: collapse;
            border-spacing: 0;
        }

        img {
            border: 0;
            max-width: 100%;
        }

        #topbar {
            background: #4f4a41;
            padding: 10px 0 10px 0;
            text-align: center;
        }

        #topbar a {
            color: #fff;
            font-size: 1.3em;
            line-height: 1.25em;
            text-decoration: none;
            opacity: 0.5;
            font-weight: bold;
        }

        #topbar a:hover {
            opacity: 1;
        }

        /** typography **/
        h1 {
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
            font-size: 2.5em;
            line-height: 1.5em;
            letter-spacing: -0.05em;
            margin-bottom: 20px;
            padding: .1em 0;
            color: #444;
            position: relative;
            overflow: hidden;
            white-space: nowrap;
            text-align: center;
        }

        h1:before,
        h1:after {
            content: "";
            position: relative;
            display: inline-block;
            width: 50%;
            height: 1px;
            vertical-align: middle;
            background: #f0f0f0;
        }

        h1:before {
            left: -.5em;
            margin: 0 0 0 -50%;
        }

        h1:after {
            left: .5em;
            margin: 0 -50% 0 0;
        }

        h1 > span {
            display: inline-block;
            vertical-align: middle;
            white-space: normal;
        }

        p {
            display: block;
            font-size: 1.35em;
            line-height: 1.5em;
            margin-bottom: 22px;
        }

        a {
            color: #5a9352;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .center {
            display: block;
            text-align: center;
        }

        /** page structure **/
        #w {
            display: block;
            width: 750px;
            margin: 0 auto;
            padding-top: 30px;
        }

        #content {
            display: block;
            width: 100%;
            background: #fff;
            padding: 25px 20px;
            padding-bottom: 35px;
            -webkit-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
            -moz-box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
            box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
        }

        #searchfield {
            display: block;
            width: 100%;
            text-align: center;
            margin-bottom: 35px;
        }

        #searchfield form {
            display: inline-block;
            background: #eeefed;
            padding: 0;
            margin: 0;
            padding: 5px;
            border-radius: 3px;
            margin: 5px 0 0 0;
        }

        #searchfield form .biginput {
            width: 600px;
            height: 40px;
            padding: 0 10px 0 10px;
            background-color: #fff;
            border: 1px solid #c8c8c8;
            border-radius: 3px;
            color: #aeaeae;
            font-weight: normal;
            font-size: 1.5em;
            -webkit-transition: all 0.2s linear;
            -moz-transition: all 0.2s linear;
            transition: all 0.2s linear;
        }

        #searchfield form .biginput:focus {
            color: #858585;
        }

        .flatbtn {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            display: inline-block;
            outline: 0;
            border: 0;
            color: #f3faef;
            text-decoration: none;
            background-color: #6bb642;
            border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
            font-size: 1.2em;
            font-weight: bold;
            padding: 12px 22px 12px 22px;
            line-height: normal;
            text-align: center;
            vertical-align: middle;
            cursor: pointer;
            text-transform: uppercase;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.3);
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
            -moz-box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
            box-shadow: 0 1px 0 rgba(15, 15, 15, 0.3);
        }

        .flatbtn:hover {
            color: #fff;
            background-color: #73c437;
        }

        .flatbtn:active {
            -webkit-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
            box-shadow: inset 0 1px 5px rgba(0, 0, 0, 0.1);
        }

        .autocomplete-suggestions {
            border: 1px solid #999;
            background: #fff;
            cursor: default;
            overflow: auto;
        }

        .autocomplete-suggestion {
            padding: 10px 5px;
            font-size: 1.2em;
            white-space: nowrap;
            overflow: hidden;
        }

        .autocomplete-selected {
            background: #f0f0f0;
        }

        .autocomplete-suggestions strong {
            font-weight: normal;
            color: #3399ff;
        }
    </style>
    <style>
        .blog-content {
            padding-left: 40px;
            /*border-radius: 8px;*/
            border: 1px solid white;
            /*box-shadow: 0px*/
            padding-right: 70px;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="col-md-3" >
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-9">
            <div class="col-md-12">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="blog-content">
                                        <div class="row">
                                            <div class="container-fluid">
                                                <h1>{{$question->title}}</h1>
                                                <span>បោះផ្សាយ 6 ថ្ងៃមកហើយដាេយ</span>
                                                <span><a href=""> {{$user->first_name.' '.$user->last_name}}</a></span><br><br>
                                                @if($votequestion != null)
                                                    @if($votequestion->vote == 1)
                                                        <div class="test">
                                                            <a class="like" href="{{route('likequestion',[$question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: red"></i><span class="count-likes">{{$question->like}}</span></a>
                                                            <a class="dislike" href="{{route('dislikequestion',[$question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true">&nbsp;<span class="count-dislikes">{{$question->dislike}}</span></i><br><br></a>

                                                        </div>
                                                    @else
                                                        <div>
                                                            <a class="like" href="{{route('likequestion',[$question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" ></i><span class="count-likes">{{$question->like}}</span></a>
                                                            <a href="{{route('dislikequestion',[$question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: red">&nbsp;&nbsp;{{$question->dislike}}</i><br><br></a>

                                                        </div>
                                                    @endif
                                                @else
                                                    <div>
                                                        <a class="like" href="{{route('likequestion',[$question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" ></i><span class="count-likes">{{$question->like}}</span></a>
                                                        <a class="unlike" href="{{route('dislikequestion',[$question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true" >&nbsp;&nbsp;{{$question->dislike}}</i><br><br></a>

                                                    </div>
                                                @endif
                                                <div>
                                                    <a rel="nofollow" href="http://www.facebook.com/share.php?u=http://lums.edu.pk/event-detail/lecture-on-citation-management-and-referencing-1133"
                                                       class="fb_share_button" onclick="return fbs_click()" target="_blank"
                                                       style="text-decoration:none;"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                                </div>
                                                <p>{{$question->description}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul class="list-group" id="contact-list">
                                                    @foreach($answer as $answers)
                                                        <li class="list-group-item">
                                                            <div class="col-xs-12 col-md-1">
                                                                <img src="{{asset('img/profile/'.$answers->img_user)}}"
                                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                                     style="width: 50px;height: 50px">
                                                            </div>
                                                            <div class="col-xs-12 col-md-11">
                                                                <a href="" style="color: #00b1b3"><b>{{$answers->name_user}}</b></a><br>

                                                                <p>{{$answers->description}}</p>
                                                                <a href="" style="color: #00b1b3">documentation
                                                                    here.</a><br>
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    @endforeach
                                                    @if(!Auth::guest())
                                                        <li class="list-group-item">
                                                            <div class="col-xs-12 col-md-1">
                                                                <img src="{{asset('img/profile/'.auth()->user()->img)}}"
                                                                     alt="Todd Shelton" class="img-responsive img-circle"
                                                                     style="width: 50px;height: 50px">
                                                            </div>
                                                            <div class="col-xs-12 col-md-11">
                                                                {!! Form::open(['url'=>'answer/'.$question->id]) !!}
                                                                <div class="row">
                                                                    <div class="col-md-8">
                                                                        {{Form::textarea('answer',null,array('class'=>'form-control','placeholder'=>'វាយពាក្យ','required'))}}
                                                    ​​​​                </div>
                                                                </div>
                                                                <br>
                                                                <div class="row">
                                                                    <div class="col-md-offset-1" style="margin-top: -25px; margin-left: 25px;">
                                                                        <button class="btn btn-primary" >ឆ្លើយតប</button>
                                                                    </div>
                                                                </div>
                                                                {!! Form::close() !!}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    @else
                                                        <div class="col-xs-12 col-md-11">
                                                            <a href="{{route('frontend.auth.register')}}">បង្កើតគណនីដើម្បីចូលរួមក្នុងការពិភាក្សានេះ</a>
                                                        </div>
                                                    @endif
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="col-md-12 blog-content">--}}
        {{--<div class="col-md-3 sidebar-bgcolor" style="width: 360px;margin-left: -29px;">--}}
            {{--@include('frontend.layouts_new.side-bar')--}}
        {{--</div>--}}
        {{--<div class="col-md-8" style="margin-top: 0%">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="row">--}}
                    {{--<div class="main-content">--}}
                        {{--<div class="container-fluid">--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                    {{--<div class="blog-content">--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="container-fluid">--}}
                                                {{--<h1>{{$question->title}}</h1>--}}
                                                {{--<span>PUBLISHED 6 DAYS AGO BY</span>--}}
                                                {{--<span><a href=""> {{$user->first_name.' '.$user->last_name}}</a></span><br><br>--}}
                                                {{--@if($votequestion != null)--}}
                                                    {{--@if($votequestion->vote == 1)--}}
                                                        {{--<div class="test">--}}
                                                            {{--<a class="like" href="{{route('likequestion',[$question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: red"></i><span class="count-likes">{{$question->like}}</span></a>--}}
                                                            {{--<a class="dislike" href="{{route('dislikequestion',[$question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true">&nbsp;<span class="count-dislikes">{{$question->dislike}}</span></i><br><br></a>--}}

                                                        {{--</div>--}}
                                                    {{--@else--}}
                                                        {{--<div>--}}
                                                            {{--<a class="like" href="{{route('likequestion',[$question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" ></i><span class="count-likes">{{$question->like}}</span></a>--}}
                                                            {{--<a href="{{route('dislikequestion',[$question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: red">&nbsp;&nbsp;{{$question->dislike}}</i><br><br></a>--}}

                                                        {{--</div>--}}
                                                    {{--@endif--}}
                                                {{--@else--}}
                                                    {{--<div>--}}
                                                        {{--<a class="like" href="{{route('likequestion',[$question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" ></i><span class="count-likes">{{$question->like}}</span></a>--}}
                                                        {{--<a class="unlike" href="{{route('dislikequestion',[$question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true" >&nbsp;&nbsp;{{$question->dislike}}</i><br><br></a>--}}

                                                    {{--</div>--}}
                                                {{--@endif--}}
                                                {{--<p>{{$question->description}}</p>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                                {{--<ul class="list-group" id="contact-list">--}}
                                                    {{--@foreach($answer as $answers)--}}
                                                        {{--<li class="list-group-item">--}}
                                                            {{--<div class="col-xs-12 col-md-1">--}}
                                                                {{--<img src="{{asset('img/profile/'.$answers->img_user)}}"--}}
                                                                     {{--alt="Todd Shelton" class="img-responsive img-circle"--}}
                                                                     {{--style="width: 50px;height: 50px">--}}
                                                            {{--</div>--}}
                                                            {{--<div class="col-xs-12 col-md-11">--}}
                                                                {{--<a href="" style="color: #00b1b3"><b>{{$answers->name_user}}</b></a><br>--}}

                                                                {{--<p>{{$answers->description}}</p>--}}
                                                                {{--<a href="" style="color: #00b1b3">documentation--}}
                                                                    {{--here.</a><br>--}}
                                                            {{--</div>--}}
                                                            {{--<div class="clearfix"></div>--}}
                                                        {{--</li>--}}
                                                    {{--@endforeach--}}
                                                        {{--@if(!Auth::guest())--}}
                                                            {{--<li class="list-group-item">--}}
                                                                {{--<div class="col-xs-12 col-md-1">--}}
                                                                    {{--<img src="{{asset('img/profile/'.auth()->user()->img)}}"--}}
                                                                         {{--alt="Todd Shelton" class="img-responsive img-circle"--}}
                                                                         {{--style="width: 50px;height: 50px">--}}
                                                                {{--</div>--}}
                                                                {{--<div class="col-xs-12 col-md-11">--}}
                                                                    {{--{!! Form::open(['url'=>'answer/'.$question->id]) !!}--}}
                                                                    {{--<div class="row">--}}
                                                                        {{--<div class="col-md-8">--}}
                                                                            {{--<textarea class="form-control" rows="7" name="textarea" id="textarea"></textarea>--}}
                                                                            {{--{{Form::textarea('answer',null,array('class'=>'form-control','placeholder'=>'Type Words','required'))}}--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                    {{--<br>--}}
                                                                    {{--<div class="row">--}}
                                                                        {{--<div class="col-md-offset-6">--}}
                                                                            {{--<button class="btn btn-primary" >post your apply</button>--}}
                                                                            {{--{{Form::submit('Save',['class'=>'btn btn-default'])}}--}}
                                                                        {{--</div>--}}
                                                                    {{--</div>--}}
                                                                    {{--{!! Form::close() !!}--}}
                                                                {{--</div>--}}
                                                                {{--<div class="clearfix"></div>--}}
                                                            {{--</li>--}}
                                                        {{--@else--}}
                                                            {{--<div class="col-xs-12 col-md-11">--}}
                                                                {{--<a href="{{route('frontend.auth.register')}}">create a forum account to participate in this discussion</a>--}}
                                                            {{--</div>--}}
                                                        {{--@endif--}}
                                                {{--</ul>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
    {{--<div>--}}
        {{--{{$count_question->count_views}}--}}
    {{--</div>--}}
@endsection

@section('script')
    <script>
        function fbs_click(){
            u = location.href;
            t = document.title;

            window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');
            return false;
        }
        var mySecand = 0;
        var inter = setInterval(function() {
            mySecand += 1;
            console.log(mySecand);

            if (mySecand == 10) {
                $.ajax({
                    type: 'GET',
                    url: '{{route('increaseview',$question->id)}}',
                    data: {},
                    success: function(){

                    },
                    error: function(){

                    }
                })
                clearInterval(inter);
            }
        }, 1000);
    </script>
@endsection
@section('title'){{$question->title}}@endsection
@section('description'){{$question->description}}@endsection
@section('img'){{asset('img/profile/vitou')}}@endsection