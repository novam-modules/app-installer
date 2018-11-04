<div class="form-group pt-2">
    <button class="btn btn-primary btn-block" type="submit">Use Our Settings</button>
</div>
<div class="form-group">
    <input type="text" name="DB[CONNECTION]" id="" class="input-material" value="{{ $db['CONNECTION'] ?? old('DB.CONNECTION') }}"
        aria-describedby="DB_CONNECTION">
    <label class="label-material" for="DB_CONNECTION">DB_CONNECTION</label>
</div>
<div class="form-group">
    <input type="text" name="DB[HOST]" id="" class="input-material" value="{{ $db['HOST'] ?? old('DB.HOST') }}"
        aria-describedby="DB_HOST">
    <label class="label-material" for="DB_HOST">DB_HOST</label>
</div>
<div class="form-group">
    <input type="text" name="DB[DATABASE]" id="" class="input-material" value="{{ $db['DATABASE'] ?? old('DB.DATABASE') }}"
        aria-describedby="DB_DATABASE">
    <label class="label-material" for="DB_DATABASE">DB_DATABASE</label>
</div>
<div class="form-group">
    <input type="text" name="DB[USERNAME]" id="" class="input-material" value="{{ $db['USERNAME'] ?? old('DB.USERNAME') }}"
        aria-describedby="DB_USERNAME">
    <label class="label-material" for="DB_USERNAME">DB_USERNAME</label>
</div>
<div class="form-group">
    <input type="text" name="DB[PASSWORD]" id="" class="input-material" value="{{ $db['PASSWORD'] ?? old('DB.PASSWORD') }}"
        aria-describedby="DB_PASSWORD">
    <label class="label-material" for="DB_PASSWORD">DB_PASSWORD</label>
</div>
