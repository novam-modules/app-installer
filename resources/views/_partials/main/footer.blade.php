<footer class="main-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <p>{{ config('app.name') }} &copy; 2017-{{ date('Y') }}</p>
            </div>
            <div class="col-sm-6 text-right">
                <p>v{{ env('APP_VER', '1.0.0') }}</p>
            </div>
        </div>
    </div>
</footer>
