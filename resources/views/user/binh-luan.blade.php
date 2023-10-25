@foreach($comments as $comment)

<div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
    <div class="pb-3 tm-text-gray" style="border: solid;border-width: 1px; border-radius: 10px;">
        <div class="col-xl-10 col-lg-5 col-md-6 col-sm-12 " style="padding-left: 10px;">

            <h5 style=" color: black; display: inline;">{{ $comment->user->ten }}</h5>
            <p style="display: inline;"><?php $day = date_create($comment->thoi_gian);
                                        echo date_format($day, 'H:i - d/m/Y'); ?></p>
            <p>{{ $comment->noi_dung }}</p>

        </div>
    </div>

    <p onclick="show({{$comment['id']}})" style="text-decoration:none; display: inline;">Phản hồi</p>


    <form action="{{ route('user-xoa-binh-luan',['id' => $comment->id]) }}" method="POST" style="display: inline;">
        @csrf
        <input type="hidden" name=bai_dang value="{{ $bai_dang_id }}" />
        @if(Auth::id()==$comment->nguoi_dung_id)
        <button class="tm-text-primary " style="border: none"> Xóa</button>
        @endif
    </form>


    <form method="post" action="{{ route('user-binh-luan') }}" id="{{$comment['id']}}" style="display:none;">
        @csrf
        <div class="form-group">
            <input class="form-control" style="height: 30px; width: 500px;display: inline;border-radius:50px;border: solid;border-width: 1px;" inline;" type=text name=noi_dung />
            <input type=hidden name=bai_dang_id value="{{ $bai_dang_id }}" />
            <input type=hidden name=parent_id value="{{ $comment->id }}" />
            <input style="display: inline; height: 40px;width: 100px;border-radius:10px;" type=submit class="btn btn-warning" value="Trả lời" />
        </div>
    </form>
    <a href="" id="reply"></a>

    @include('user/binh-luan', ['comments' => $comment->replies])

    <script>
        function show(id) {
            var e = document.getElementById(id);
            if (e.style.display == 'none') {
                e.style.display = 'block';
            } else {
                e.style.display = 'none';
            }
        }
    </script>


</div>
@endforeach