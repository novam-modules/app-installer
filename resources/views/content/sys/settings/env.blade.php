<form action="{{ route('install') }}" method="POST">
    @csrf
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="DB_CONNECTION">DB_CONNECTION</label>
        <div class="col-md-8">
            <input type="text" name="DB[CONNECTION]" id="" class="form-control" value="{{ $db['CONNECTION'] ?? old('DB.CONNECTION') }}" aria-describedby="DB_CONNECTION">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="DB_HOST">DB_HOST</label>
        <div class="col-md-8">
            <input type="text" name="DB[HOST]" id="" class="form-control" value="{{ $db['HOST'] ?? old('DB.HOST') }}" aria-describedby="DB_HOST">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="DB_DATABASE">DB_DATABASE</label>
        <div class="col-md-8">
            <input type="text" name="DB[DATABASE]" id="" class="form-control" value="{{ $db['DATABASE'] ?? old('DB.DATABASE') }}" aria-describedby="DB_DATABASE">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="DB_USERNAME">DB_USERNAME</label>
        <div class="col-md-8">
            <input type="text" name="DB[USERNAME]" id="" class="form-control" value="{{ $db['USERNAME'] ?? old('DB.USERNAME') }}" aria-describedby="DB_USERNAME">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="DB_PASSWORD">DB_PASSWORD</label>
        <div class="col-md-8">
            <input type="text" name="DB[PASSWORD]" id="" class="form-control" value="{{ $db['PASSWORD'] ?? old('DB.PASSWORD') }}" aria-describedby="DB_PASSWORD">
        </div>
    </div>
    <hr />
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="MAIL_DRIVER">MAIL_DRIVER</label>
        <div class="col-md-8">
            <input type="text" name="MAIL[DRIVER]" id="" class="form-control" value="{{ $mail['DRIVER'] ?? old('MAIL.DRIVER') }}" aria-describedby="MAIL_DRIVER">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="MAIL_HOST">MAIL_HOST</label>
        <div class="col-md-8">
            <input type="text" name="MAIL[HOST]" id="" class="form-control" value="{{ $mail['HOST'] ?? old('MAIL.HOST') }}" aria-describedby="MAIL_HOST">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="MAIL_PORT">MAIL_PORT</label>
        <div class="col-md-8">
            <input type="text" name="MAIL[PORT]" id="" class="form-control" value="{{ $mail['PORT'] ?? old('MAIL.PORT') }}" aria-describedby="MAIL_PORT">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="MAIL_USERNAME">MAIL_USERNAME</label>
        <div class="col-md-8">
            <input type="text" name="MAIL[USERNAME]" id="" class="form-control" value="{{ $mail['USERNAME'] ?? old('MAIL.USERNAME') }}" aria-describedby="MAIL_USERNAME">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="MAIL_PASSWORD">MAIL_PASSWORD</label>
        <div class="col-md-8">
            <input type="text" name="MAIL[PASSWORD]" id="" class="form-control" value="{{ $mail['PASSWORD'] ?? old('MAIL.PASSWORD') }}" aria-describedby="MAIL_PASSWORD">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-md-4 col-form-label text-md-right" for="MAIL_ENCRYPTION">MAIL_ENCRYPTION</label>
        <div class="col-md-8">
            <input type="text" name="MAIL[ENCRYPTION]" id="" class="form-control" value="{{ $mail['ENCRYPTION'] ?? old('MAIL.ENCRYPTION') }}" aria-describedby="MAIL_ENCRYPTION">
        </div>
    </div>
    <hr />
    <div class="form-group row">
        <div class="col-md-4 offset-md-4">
            <button class="btn btn-primary btn-block" type="submit">Submit</button>
        </div>
    </div>
</form>
