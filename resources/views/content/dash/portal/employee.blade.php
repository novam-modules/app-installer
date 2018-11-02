<form class="card">
    <div class="card-header">
        <h3 class="card-title">My Profile</h3>
    </div>
<div class="card-body">
    <div class="media"><span style="background-image: url(https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-7.jpg)"
            class="avatar avatar-xl mr-3"></span>
        <div class="media-body">
            <h4>{{ $user->profile->name ?? 'Full Name' }}</h4>
            <p class="text-muted mb-0">Job Title</p>
            <p class="text-muted mb-0">Department</p>
            <ul class="social-links list-inline mb-0 mt-2">
                <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="Nathan's Facebook"><i class="fa fa-facebook fa-lg"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="@nathan_andrews"><i class="fa fa-twitter fa-lg"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="+420777555987"><i class="fa fa-phone fa-lg"></i></a></li>
                <li class="list-inline-item"><a href="javascript:void(0)" data-toggle="tooltip" data-placement="top"
                        title="" data-original-title="@nathan"><i class="fa fa-skype fa-lg"></i></a></li>
            </ul>
        </div>
    </div>
</div>
<div class="card-body">

</div>
</form>
