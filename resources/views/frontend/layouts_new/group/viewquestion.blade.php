@extends('frontend.layouts_new.app')
@section('header')
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
            <div class="sidebar-bgcolor" style="height: 900px">
                <div class="sidebar">
                    <div class="container">
                        <div class="page-header" id="banner" style="border-bottom:0px">
                            <div class="row">
                            </div>
                            <div class="row" style="width: 88%;margin-left: 50px">
                                <p class="menu-label">
                                    {{$group->name}}
                                </p>
                                <div class="col-md-3 col-sm-12">
                                    <div class="list-group table-of-contents">
                                        <a class="list-group-item active" href="{{route('index',[$group->id])}}"><i style="color: #ef6733;"
                                                                                                             class="fa fa-globe"
                                                                                                             aria-hidden="true"></i> ពិភាក្សា</a>
                                        <a class="list-group-item " href="{{route('listMembers', $group->id) }}">
                                            <i style="color: #ef6733;" class="fa fa-fire" aria-hidden="true"></i>
                                            សមជិក
                                        </a>
                                        {{--@if(!Auth::guest())--}}
                                            {{--<a class="list-group-item" href="#">--}}
                                                {{--<i style="color: #ef6733;" class="fa fa-users" aria-hidden="true"></i>--}}
                                                {{--Events--}}
                                            {{--</a>--}}
                                            {{--<a class="list-group-item" href="#">--}}
                                                {{--<i style="color: #ef6733;" class="fa fa-lightbulb-o" aria-hidden="true">&nbsp;--}}
                                                {{--</i>Videos--}}
                                            {{--</a>--}}
                                        {{--@endif--}}
                                        {{--<a class="list-group-item" href="#">--}}
                                            {{--<i style="color: #ef6733;" class="fa fa-hand-o-right"--}}
                                               {{--aria-hidden="true"></i>--}}
                                            {{--Photos--}}
                                        {{--</a>--}}
                                        {{--<a class="list-group-item" href="#">--}}
                                            {{--<i style="color: #ef6733;" class="fa fa-certificate" aria-hidden="true"></i>--}}
                                            {{--Files--}}
                                        {{--</a>--}}
                                    </div>
                                    @if(!Auth::guest())
                                        <span>@include('frontend.layouts_new.home_page.left-side')</span>
                                    @endif
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--end side-bar--}}
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
                                                <span>PUBLISHED 6 DAYS AGO BY</span>
                                                <span><a href=""> {{$user->first_name.' '.$user->last_name}}</a></span><br><br>
                                                @if($votequestion != null)
                                                    @if($votequestion->vote == 1)
                                                        <div class="test">
                                                            <a class="like" href="{{route('likequestiongroup',[$group->id, $question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" style="color: red"></i><span class="count-likes">{{$question->like}}</span></a>
                                                            <a class="dislike" href="{{route('dislikequestiongroup',[$group->id, $question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true">&nbsp;<span class="count-dislikes">{{$question->dislike}}</span></i><br><br></a>

                                                        </div>
                                                    @else
                                                        <div>
                                                            <a class="like" href="{{route('likequestiongroup',[$group->id, $question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" ></i><span class="count-likes">{{$question->like}}</span></a>
                                                            <a href="{{route('dislikequestiongroup',[$group->id, $question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true" style="color: red">&nbsp;&nbsp;{{$question->dislike}}</i><br><br></a>

                                                        </div>
                                                    @endif
                                                @else
                                                    <div>
                                                        <a class="like" href="{{route('likequestiongroup',[$group->id, $question->id])}}"><i class="fa fa-thumbs-o-up" aria-hidden="true" ></i><span class="count-likes">{{$question->like}}</span></a>
                                                        <a class="unlike" href="{{route('dislikequestiongroup',[$group->id, $question->id])}}"><i class="fa fa-thumbs-o-down" aria-hidden="true" >&nbsp;&nbsp;{{$question->dislike}}</i><br><br></a>

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
                                                                        {{Form::textarea('answer',null,array('class'=>'form-control','placeholder'=>'Type Words','required'))}}
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="row" style="margin-left:60px;margin-top: -20px;">
                                                                    <div class="col-md-offset-6">
                                                                        <button class="btn btn-primary" >ឆ្លេីយតប</button>
                                                                    </div>
                                                                </div>
                                                                {!! Form::close() !!}
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </li>
                                                    @else
                                                        <div class="col-xs-12 col-md-11">
                                                            <a href="{{route('frontend.auth.register')}}">create a forum account to participate in this discussion</a>
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

            if (mySecand == 30) {
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