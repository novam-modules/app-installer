<form action="{{ route('install') }}" method="POST" class="form-validate row">
    @csrf
    <fieldset class="col">
        <div class="form-group">
            <a href="#" onclick="$(this).next().prop('disabled', true).parent().next(prop('disabled', true)"></a>
        </div>
        <div class="form-group">
            <input type="text" name="DB[CONNECTION]" id="" class="input-material" value="{{ $db['CONNECTION'] ?? old('DB.CONNECTION') }}" aria-describedby="DB_CONNECTION">
            <label class="label-material" for="DB_CONNECTION">DB_CONNECTION</label>
        </div>
        <div class="form-group">
                <input type="text" name="DB[HOST]" id="" class="input-material" value="{{ $db['HOST'] ?? old('DB.HOST') }}"
                    aria-describedby="DB_HOST">
                <label class="label-material" for="DB_HOST">DB_HOST</label>
        </div>
        <div class="form-group">
                <input type="text" name="DB[DATABASE]" id="" class="input-material" value="{{ $db['DATABASE'] ?? old('DB.DATABASE') }}" aria-describedby="DB_DATABASE">
                <label class="label-material" for="DB_DATABASE">DB_DATABASE</label>
        </div>
        <div class="form-group">
                <input type="text" name="DB[USERNAME]" id="" class="input-material" value="{{ $db['USERNAME'] ?? old('DB.USERNAME') }}" aria-describedby="DB_USERNAME">
                <label class="label-material" for="DB_USERNAME">DB_USERNAME</label>
        </div>
        <div class="form-group">
                <input type="text" name="DB[PASSWORD]" id="" class="input-material" value="{{ $db['PASSWORD'] ?? old('DB.PASSWORD') }}" aria-describedby="DB_PASSWORD">
                <label class="label-material" for="DB_PASSWORD">DB_PASSWORD</label>
        </div>
    </fieldset>
    <fieldset class="col">
        <div class="form-group">
            <input type="text" name="MAIL[DRIVER]" id="" class="input-material" value="{{ $mail['DRIVER'] ?? old('MAIL.DRIVER') }}" aria-describedby="MAIL_DRIVER">
            <label class="label-material" for="MAIL_DRIVER">MAIL_DRIVER</label>
        </div>
        <div class="form-group">
                <input type="text" name="MAIL[HOST]" id="" class="input-material" value="{{ $mail['HOST'] ?? old('MAIL.HOST') }}" aria-describedby="MAIL_HOST">
                <label class="label-material" for="MAIL_HOST">MAIL_HOST</label>
        </div>
        <div class="form-group">
                <input type="text" name="MAIL[PORT]" id="" class="input-material" value="{{ $mail['PORT'] ?? old('MAIL.PORT') }}" aria-describedby="MAIL_PORT">
                <label class="label-material" for="MAIL_PORT">MAIL_PORT</label>
        </div>
        <div class="form-group">
                <input type="text" name="MAIL[USERNAME]" id="MAIL_USERNAME" class="input-material" value="{{ $mail['USERNAME'] ?? old('MAIL.USERNAME') }}" aria-describedby="MAIL_USERNAME">
                <label class="label-material" for="MAIL_USERNAME">MAIL_USERNAME</label>
        </div>
        <div class="form-group">
                <input type="text" name="MAIL[PASSWORD]" id="MAIL_PASSWORD" class="input-material" value="{{ $mail['PASSWORD'] ?? old('MAIL.PASSWORD') }}"
                    aria-describedby="MAIL_PASSWORD">
                <label class="label-material" for="MAIL_PASSWORD">MAIL_PASSWORD</label>
        </div>
        <div class="form-group">
                <input type="text" name="MAIL[ENCRYPTION]" id="" class="input-material" value="{{ $mail['ENCRYPTION'] ?? old('MAIL.ENCRYPTION') }}" aria-describedby="MAIL_ENCRYPTION">
                <label class="label-material" for="MAIL_ENCRYPTION">MAIL_ENCRYPTION</labe
        </div>
    </fieldset>
    <hr class="w-100">
    <div class="col-md-4 offset-md-4">
        <button class="btn btn-primary btn-block" type="submit">Save</button>
    </div>
</form>
