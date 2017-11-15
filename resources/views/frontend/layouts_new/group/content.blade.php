@extends('frontend.layouts_new.group.index')
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
        .dropdown-menu>li>a:focus, .dropdown-menu>li>a:hover {
            color: #262626;
            text-decoration: none;
            background-color: #ce1f1f;
        }
    </style>
@endsection
@section('content')
    <div class="col-md-12">
        <div class="col-md-3">
            <div class="sidebar-bgcolor" style="height: 900px">
                {{--Side-bar--}}
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
                                                                               aria-hidden="true"></i> ការពិភាក្សា</a>
                                        <a class="list-group-item" href="{{route('listMembers', $group->id) }}">
                                            <i style="color: #ef6733;" class="fa fa-fire" aria-hidden="true"></i>
                                            សមាជិក
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Backgroup profile--}}
        <div class="col-md-9">
            <div class="col-md-9" style="margin-left: 45px;margin-top: 25px;">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <img class="img-responsive" style=" height: 300px;width: 100%"
                                                 src="{{asset('/img/group/group.jpg')}}">
                                        </div>
                                        <div class="panel-footer">
                                            <div class="btn-group">
                                                @if($usergroup != null)
                                                    <div class="btn-group">
                                                        <a href="{{route('showquestion',[$group->id])}}">
                                                            <button type="button" class="btn btn-default Add-friend">
                                                                <i class="fa fa-rocket" aria-hidden="true">សួរសំនួរ</i>
                                                            </button>
                                                        </a>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">បន្ថែមសមាជិក</a></li>
                                                            <li><a href="#">ប្ដូរឈ្មោះក្រុម</a></li>
                                                        </ul>
                                                    </div>

                                                    @if($usergroup->priority == 1)
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">ចូលរួម
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu" style="margin-left: 115px">
                                                            <li><a href="{{route('deletegroup', [$group->id])}}">លុបក្រុម</a></li>
                                                        </ul>
                                                        <button type="button" class="btn btn-default Add-friend"
                                                                data-toggle="modal" data-target="#myModal" style="background-color: #00acd6"><i class="fa fa-plus" aria-hidden="true" ></i> បន្ថែមសមាជិក
                                                        </button>
                                                    @else
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">ចូលរួម
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{route('leaveGroup', [$group->id])}}">ចាកចេញពីក្រុម</a></li>
                                                        </ul>
                                                    @endif
                                                @else
                                                    @if($notification != null)
                                                        <button type="button" class="btn btn-default dropdown-toggle"
                                                                data-toggle="dropdown">រងចាំ
                                                            <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="{{route('destroynotification', [$group->id])}}">លុបការរងចាំ</a></li>
                                                        </ul>
                                                    @else
                                                        <a href="#">
                                                            <button type="button" class="btn btn-default dropdown-toggle"
                                                                    data-toggle="dropdown" onclick="window.location='{{route('createnotification',[$group->id])}}';">ចូលរួម
                                                            </button>
                                                        </a>
                                                    @endif
                                                @endif

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--Discussion--}}
            <div class="profifle-user-join-group" style="padding: 10px; width: 72%">
                <div class="col-md-12">
                    @foreach($questions as $question)
                            <div class="col-md-3">
                                <img src="{{asset('img/profile/'.$question->img_user)}}"
                                     alt="Todd Shelton" class="img-responsive img-circle"
                                     style="width: 50px;height: 50px">
                            </div>
                            <div class="col-md-9" style="margin-left: 60px;margin-top: -50px;">
                                <a href="{{route('viewquestion', [$group->id, $question->id])}}" style="color: black">{{$question->title}}</a><br>
                                <span><a href="#" style="color: red">Laravel</a> </span>
                                <span><a href="#">១៥ នាទី</a></span>
                                <span>ដាេយ</span>
                                <span><a href="#"> កូនខ្មែរ</a></span>
                            </div>
                            <p class="text-muted" style="margin-left: 540px;margin-top: 5px;font-size: 18px;font-weight: 400">{{count(\App\Models\Answer::where('id_question', $question->id)->get())}}
                                &nbsp;ចម្លើយ</p>
                            <br>
                            <br>
                    @endforeach
                </div>
            </div>

        </div>
    </div>

    {{--Questions & Answers--}}
    {{--Modal--}}

    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                {{ Form::open(['route' => 'addmember', 'class' => 'form-horizontal']) }}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">បន្ថែមសមាជិក</h4>
                </div>
                <div class="modal-body">
                    {{ Form::hidden('id_group', $group->id,['class' => 'form-control',  'required' => 'required', 'autofocus' => 'autofocus']) }}
                    <select class="js-example-templating" name="id_user" style="width: 100%">
                        @foreach($users as $user)
                            <option data-image="{{ $user->img }}" value="{{$user->id}}">{{$user->first_name}}{{$user->last_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">បិទ</button>
                    {{ Form::submit(trans('validation.attributes.frontend.add'), ['class' => 'btn btn-primary']) }}
                </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>




@endsection

@section('script')
    <script type="text/javascript">
        $('select').select2();
        $(document).ready(function() {
            function formatState (state) {
                console.log(state);
                if (!state.id) {
                    return state.text;
                }
                var baseUrl = "{{asset('img/profile')}}";
                var $state = $(
                    '<span><img style="width: 30px; height: 30px;" src="' + baseUrl + '/' + $(state.element).attr('data-image') + '" class="img-flag" /> ' + state.text + '</span>'
                );
                return $state;
            };

            $(".js-example-templating").select2({
                templateResult: formatState
            });
        });
    </script>
@endsection