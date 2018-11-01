<div class="row">
    <div class="col-md-5">
        <div class="form-group mb-4">
            <label class="form-label">Company</label>
            <input type="text" placeholder="Company" value="{{ $acct->name ?? old('company') }}" class="form-control">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group mb-4">
            <label class="form-label">Username</label>
            <input type="text" placeholder="Username" value="nathan" class="form-control" value="{{ $user->name ?? old('name') }}">
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group mb-4">
            <label class="form-label">Email address</label>
            <input type="email" placeholder="Email" class="form-control" value="{{ $user->email ?? old('email') }}">
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group mb-4">
            <label class="form-label">First Name</label>
            <input type="text" placeholder="First name" class="form-control" value="{{ $user->profile->first_name ?? old('first_name') }}">
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group mb-4">
            <label class="form-label">Last Name</label>
            <input type="text" placeholder="Last Name" class="form-control" value="{{ $user->profile->first_name ?? old('last_name') }}">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group mb-4">
            <label class="form-label">Address</label>
            <input type="text" placeholder="Home Address" class="form-control">
        </div>
    </div>
    <div class="col-sm-6 col-md-4">
        <div class="form-group mb-4">
            <label class="form-label">City</label>
            <input type="text" placeholder="City" class="form-control">
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="form-group mb-4">
            <label class="form-label">ZIP</label>
            <input type="number" placeholder="ZIP" class="form-control">
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group mb-4">
            <label class="form-label">Country</label>
            <select class="form-control custom-select">
                <option value="">UK</option>
                <option value="">US</option>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group mb-0">
            <label class="form-label">About Me</label>
            <textarea rows="5" placeholder="Here can be your description" value="Mike" class="form-control">The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What's happened to me?&quot; he thought. It wasn't a dream.</textarea>
        </div>
    </div>
</div>
