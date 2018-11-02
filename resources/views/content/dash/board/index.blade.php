<section class="dashboard-counts no-padding-bottom">
    <div class="container-fluid">
        <div class="row bg-white has-shadow">
            @include('content.dash.board.snapshot')
        </div>
    </div>
</section>
<!-- Dashboard Header Section    -->
<section class="dashboard-header">
    <div class="container-fluid">
        <div class="row">
            <!-- Statistics -->
            <div class="statistics col-lg-3 col-12">
                @include('content.dash.board.workforce')
            </div>
            <!-- Line Chart            -->
            <div class="chart col-lg-6 col-12">
                @include('content.dash.board.chartview')
            </div>
            <div class="chart col-lg-3 col-12">
                @include('content.dash.board.performance')
            </div>
        </div>
    </div>
</section>
<!-- Projects Section-->
<section class="projects no-padding-top">
    <div class="container-fluid">
        @include('content.dash.board.projects')
    </div>
</section>
<!-- Client Section-->
<section class="client no-padding-top">
    <div class="container-fluid">
        <div class="row">
            <!-- Work Amount  -->
            <div class="col-lg-4">
                @include('content.dash.board.accidents')
            </div>
            <!-- Client Profile -->
            <div class="col-lg-4">
                @include('content.dash.board.featured')
            </div>
            <!-- Total Overdue             -->
            <div class="col-lg-4">
                @include('content.dash.board.sharing')
            </div>
        </div>
    </div>
</section>
