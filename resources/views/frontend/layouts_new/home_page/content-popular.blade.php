@if(!auth::guest())
    <div class="btn-create-question">
        <a href="#">
            <img src="{{asset('/img/profile/'.Auth::user()->img )}}"
                 style="width: 20px;border-radius: 50%;margin-left: 15px;margin-top: 15px;">
        </a>
        <a href="#" class="user-profile-name">
            {{Auth::user()->first_name}} {{Auth::user()->last_name}}
        </a>
        <div class="user-profile-question">
            <a href="#" class="user-profile-name-question" data-toggle="modal" data-target="#questionModal"
               data-whatever="@mdo"><i class="fa fa-file" aria-hidden="true"></i> តេីអ្នកចង់សួរអំពីអ្វី?</a>
            <a href="#" class="user-profile-name-group" data-toggle="modal" data-target="#groupModal"
               data-whatever="@mdo" ><i class="fa fa-users" aria-hidden="true"></i> បង្កើតក្រុម</a>
        </div>
    </div>
    {{--============================--}}
    {{--Question-form--}}
    <div class="modal fade" id="questionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">តើ​សំ​នូ​រ​របស់​អ្នក​គឺ​អ្វី​?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('QuestionCreate')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">ចំណងជើង:</label>
                            <input type="text" class="form-control" id="recipient-name" name="title">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">ពិពណ៌នា:</label>
                            <textarea class="form-control" id="message-text" style="margin-left: -1px;" name="description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">បិទ</button>
                        <button type="submit" class="btn btn-primary">បង្កើត</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{--=========================--}}
    {{--Form-grup--}}
    <div class="modal fade" id="groupModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">បង្កើតក្រុមថ្មី?</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('GroupCreate')}}" method="post">
                    {{csrf_field()}}
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="recipient-name" class="form-control-label">ឈ្មាេះក្រុម</label>
                            <input type="text" class="form-control" id="recipient-name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="form-control-label">ពិពណ៏នា:</label>
                            <textarea class="form-control" id="message-text" style="margin-left: -1px;" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="message-text" class="form-control-label">ជ្រើសរើសភាពឯកជន:</label>
                            <select class="form-control" name="privacy">
                                <option value="public">ជ្រើសរើសភាពឯកជន</option>
                                <option value="private">ជាឯកជន</option>
                            </select>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">បិទ</button>
                        <button type="submit" class="btn btn-primary">បង្កើត</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endif
<div class="question">
    @foreach($questions_this_week as $question_this_week)
        <div class="conversation-list">
            <div class="conversation-list-avatar col-md-2 ">
                <div>
                    <img src="{{asset('/img/profile/'.$question_this_week->img_user)}}"
                         alt="Todd Shelton" class="img-responsive img-circle"
                         style="border: 2px solid #fff;width: 40px;max-width: 100%;;background: #fff!important;margin-top: 25px;margin-left: -15px">
                </div>
            </div>
            <div class="conversation-list-title col-md-8 is-position">
                <h4 class="is-title ">
                    <a href="{{route('indexquestion',[$question_this_week->id])}}">{{$question_this_week->title}}</a>
                </h4>
                <div class="is-posted">
                    <span>
                        <a href="#" class="is-link ">សំនួរ</a>
                        <a href="#" class="is-link-color ">• ២ នាទី</a>
                        @foreach( $users as $user)
                            @if($question_this_week->id_user == $user->id)
                                <a href="#" class="is-link-creator ">{{$user->first_name}} {{$user->last_name}}</a>
                            @endif
                        @endforeach
                    </span>
                </div>
                <div class="description ">
                    {{$question_this_week->description}}
                    <span class="is-muted">...</span>
                </div>
                <div class="conversation-list-answer-count ">
                    {{count(\App\Models\Answer::where('id_question', $question_this_week->id)->get())}}&nbsp;ចម្លើយ
                </div>
                <div class="conversation-list-view-count ">{{$question_this_week->count_view}}&nbsp;មើល
                </div>

            </div>
            <div class="row">
                <hr style="border-color:@default;width: 100% ;margin-left: 15px;margin-top: 115px;">
            </div>
        </div>
    @endforeach
</div>


