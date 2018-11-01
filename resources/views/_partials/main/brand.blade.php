<div class="sidebar-header text-center p-1 mb-3">
    <div>
        <a href="pages-profile.html">
            <img src="{{ auth()->user()->account->logo ?? '' }}" alt="..." class="img-fluid" style="max-height: 3rem;">
            <h1>{{ auth()->user()->account->name ?? 'Company Name' }}</h1>
        </a>
    </div>
</div>
