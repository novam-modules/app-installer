<div class="form-group">
    <input type="text" name="MAIL[DRIVER]" id="" class="input-material" value="{{ $mail['DRIVER'] ?? old('MAIL.DRIVER') }}"
        aria-describedby="MAIL_DRIVER">
    <label class="label-material" for="MAIL_DRIVER">MAIL_DRIVER</label>
</div>
<div class="form-group">
    <input type="text" name="MAIL[HOST]" id="" class="input-material" value="{{ $mail['HOST'] ?? old('MAIL.HOST') }}"
        aria-describedby="MAIL_HOST">
    <label class="label-material" for="MAIL_HOST">MAIL_HOST</label>
</div>
<div class="form-group">
    <input type="text" name="MAIL[PORT]" id="" class="input-material" value="{{ $mail['PORT'] ?? old('MAIL.PORT') }}"
        aria-describedby="MAIL_PORT">
    <label class="label-material" for="MAIL_PORT">MAIL_PORT</label>
</div>
<div class="form-group">
    <input type="text" name="MAIL[USERNAME]" id="MAIL_USERNAME" class="input-material" value="{{ $mail['USERNAME'] ?? old('MAIL.USERNAME') }}"
        aria-describedby="MAIL_USERNAME">
    <label class="label-material" for="MAIL_USERNAME">MAIL_USERNAME</label>
</div>
<div class="form-group">
    <input type="text" name="MAIL[PASSWORD]" id="MAIL_PASSWORD" class="input-material" value="{{ $mail['PASSWORD'] ?? old('MAIL.PASSWORD') }}"
        aria-describedby="MAIL_PASSWORD">
    <label class="label-material" for="MAIL_PASSWORD">MAIL_PASSWORD</label>
</div>
<div class="form-group">
    <input type="text" name="MAIL[ENCRYPTION]" id="" class="input-material" value="{{ $mail['ENCRYPTION'] ?? old('MAIL.ENCRYPTION') }}"
        aria-describedby="MAIL_ENCRYPTION">
    <label class="label-material" for="MAIL_ENCRYPTION">MAIL_ENCRYPTION</label>
</div>
