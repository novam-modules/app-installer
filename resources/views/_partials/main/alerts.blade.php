<ul class="messenger messenger-fixed messenger-on-top messenger-on-right messenger-theme-flat">
    @if (session('status'))
      @foreach(session('status') as $type => $message)
        <li class="messenger-message-slot messenger-shown messenger-last">
        <div class="messenger-message message alert {{$type}} message-PP$type alert-{{$type}} messenger-will-hide-after"><button
                type="button" class="messenger-close" data-dismiss="alert">×</button>
            <div class="messenger-message-inner">{!! $message !!}</div>
            <div class="messenger-spinner">
                <span class="messenger-spinner-side messenger-spinner-side-left">
                    <span class="messenger-spinner-fill"></span>
                </span>
                <span class="messenger-spinner-side messenger-spinner-side-right">
                    <span class="messenger-spinner-fill"></span>
                </span>
            </div>
        </div>
      @endforeach
    </li>
    @endif

</ul>
