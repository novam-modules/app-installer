<!-- Page Header-->
<header class="page-header">
    <div class="container-fluid">
        <h2 class="no-margin-bottom">
            Profile
            @can('view-dashboard')
            <a href="/admin/dashboard" class="float-right btn btn-sm btn-default">go to dashboard</a>
            @endcan
        </h2>
    </div>
</header>
<!-- Breadcrumb-->
<div class="breadcrumb-holder container-fluid">
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Profile </li>
    </ul>
</div>
<section>
    <div class="row">
        <div class="col">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs d-none d-md-flex" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="space-tab" data-toggle="tab" href="#space" role="tab" aria-controls="space"
                        aria-selected="true">Work Space
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                        aria-selected="false">My Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                        aria-selected="true">My Payroll
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="benefits-tab" data-toggle="tab" href="#benefits" role="tab" aria-controls="benefits"
                        aria-selected="false">My Benefits
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="docs-tab" data-toggle="tab" href="#docs" role="tab" aria-controls="docs"
                        aria-selected="false">Documents
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="welcome-tab" data-toggle="tab" href="#welcome" role="tab" aria-controls="welcome"
                        aria-selected="false">Employment
                    </a>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" href="#my-profile" data-toggle="collapse">
                        <i class="material-icons">swap_horiz</i>
                    </a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <a class="btn btn-block btn-default d-md-none" href="#space">Work
                    Space
                </a>
                <div class="tab-pane bg-white active" id="space" role="tabpanel" aria-labelledby="space-tab">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-body">
                            @include('content.dash.portal.workspace')
                        </div>
                    </div>
                </div>
                <a class="btn btn-block btn-default d-md-none" href="#home">My
                    Payroll
                </a>
                <div class="tab-pane bg-white" id="home" role="tabpanel" aria-labelledby="home-tab">
                    @include('content.dash.portal.payroll')
                </div>
                <div class="tab-pane bg-white" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <form class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Profile</h3>
                        </div>
                        <div class="card-body">
                            @include('content.dash.portal.profile')
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </div>
                    </form>
                </div>
                <div class="tab-pane bg-white" id="benefits" role="tabpanel" aria-labelledby="benefits-tab">
                    <br>
                    @include('content.dash.portal.benefits')
                </div>
                <div class="tab-pane bg-white" id="docs" role="tabpanel" aria-labelledby="docs-tab">
                    <br>
                    @include('content.dash.portal.documents')
                </div>
                <div class="tab-pane bg-white" id="welcome" role="tabpanel" aria-labelledby="welcome-tab">

                    <br />
                    <div class="card-group">
                        <div class="card">
                            <div class="card-body">
                                @include('content.dash.portal.messages')
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">

                            </div>
                            <div class="card-body">
                                @include('content.dash.portal.onboard')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 collapse show fade" id="my-profile">
            @include('content.dash.portal.employee')
        </div>
    </div>
</section>
