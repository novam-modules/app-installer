<ul class="messenger messenger-fixed messenger-on-top messenger-on-right messenger-theme-flat">
    @if (session('success'))
      <li class="messenger-message-slot messenger-shown messenger-last">
        <div class="messenger-message message alert info message-info alert-info messenger-will-hide-after"><button
                type="button" class="messenger-close" data-dismiss="alert">×</button>
            <div class="messenger-message-inner">{!! session('success') !!}</div>
            <div class="messenger-spinner">
                <span class="messenger-spinner-side messenger-spinner-side-left">
                    <span class="messenger-spinner-fill"></span>
                </span>
                <span class="messenger-spinner-side messenger-spinner-side-right">
                    <span class="messenger-spinner-fill"></span>
                </span>
            </div>
        </div>
    </li>
    @endif

</ul>
