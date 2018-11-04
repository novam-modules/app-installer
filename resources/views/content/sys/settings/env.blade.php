<form action="{{ route('install') }}" method="POST" class="form-validate row">
    @csrf
    <fieldset class="col">
        @include('content.sys.settings.db')
    </fieldset>
    <fieldset class="col">
        @include('content.sys.settings.mail')
    </fieldset>
    <hr class="w-100">
    <div class="col-md-4 offset-md-4">
        <button class="btn btn-primary btn-block" type="submit">Save</button>
    </div>
</form>
