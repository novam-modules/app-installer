<nav class="side-navbar">
    <!-- Sidebar Header-->
    @include('_partials.main.brand')
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Welcome</span>
    <ul class="list-unstyled p-0 m-0 mb-2">
        <li class="{{ request()->is('admin/dashboard')?'active': '' }}">
            <a href="/admin/dashboard">
                <i class="fa fa-dashboard fa-fw"></i> Dashboard
            </a>
        </li>
        <li>
            <a href="/my/dashboard">
                <i class="fa fa-th fa-fw"></i> My Portal
            </a>
        </li>
    </ul>
    <span class="heading">Business</span>
    <ul class="list-unstyled p-0 m-0 mb-2">
        @can('do-projects')
        <li>
            <a href="#projects" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-flask fa-fw"></i> Projects
            </a>
            <ul id="projects" class="collapse list-unstyled ">
                <li>
                    <a href="{{  route('projects.create') }}">
                    <i class="fa fa-caret-right"></i> Recent
                </a>
                </li>
                <li>
                    <a href="{{  route('projects.index') }}">
                        <i class="fa fa-caret-right"></i> View All
                    </a>
                </li>
                <li>
                    <a href="{{  route('projects.create') }}">
                        <i class="fa fa-caret-right"></i> Add New
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('do-reports')
        <li>
            <a href="#chartsDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-bar-chart fa-fw"></i> Reports

            </a>
            <ul id="chartsDropdown" class="collapse list-unstyled ">
                <li>
                    <a href="charts.html">
                        <i class="fa fa-caret-right"></i> Payroll
                    </a>
                </li>
                <li>
                    <a href="charts-gauge-sparkline.html">
                        <i class="fa fa-caret-right"></i> Labor
                    </a>
                </li>
                <li>
                    <a href="charts-gauge-sparkline.html">
                        <i class="fa fa-caret-right"></i> Materials
                    </a>
                </li>
                <li>
                    <a href="charts-gauge-sparkline.html">
                        <i class="fa fa-caret-right"></i> Efficiency
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('do-inventory')
        <li{!! request()->is("*inventory*")? ' class="active"': '' !!}>
            <a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-list fa-fw"></i> Inventory

            </a>
            <ul id="componentsDropdown" class="collapse list-unstyled ">
                <li>
                    <a href="{{ route('inventory.show', ['materials']) }}">
                        <i class="fa fa-caret-right"></i> Materials
                    </a>
                </li>
                <li>
                    <a href="{{ route('inventory.show', ['fleet']) }}">
                        <i class="fa fa-caret-right"></i> Fleet
                    </a>
                </li>
                <li>
                    <a href="{{ route('inventory.show', ['equipment']) }}">
                        <i class="fa fa-caret-right"></i> Equipment
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can('do-operations')
        <li>
            <a href="#operations" aria-expanded="false" data-toggle="collapse">
                 <i class="fa fa-sort-amount-asc" aria-hidden="true"></i> Operation

            </a>
            <ul id="operations" class="collapse list-unstyled ">
                <li>
                    <a href="{{ route('calendar.index') }}">
                        <i class="fa fa-caret-right"></i> Calendar
                    </a>
                </li>
                <li>
                    <a href="{{ route('business.show', ['travel']) }}">
                        <i class="fa fa-caret-right"></i> Travel
                    </a>
                </li>
                <li>
                    <a href="{{ route('business.show',['shop-hours']) }}">
                        <i class="fa fa-caret-right"></i> Shop Hours
                    </a>
                </li>
            </ul>
        </li>
    @endcan
        <li{!! request()->is("*personnel*")? ' class="active"': "" !!}>
            <a href="#personnel" aria-expanded="false" data-toggle="collapse">
                 <i class="fa fa-users" aria-hidden="true"></i> Personnel
            </a>
            <ul id="personnel" class="collapse list-unstyled ">
                <li{!! request()->is("*personnel")? ' class="active"': "" !!}>
                    <a href="{{ route('personnel.index') }}">
                        <i class="fa fa-caret-right"></i> Summary
                    </a>
                </li>
                <li{!! request()->is("*personnel/*")? ' class="active"': "" !!}>
                    <a href="{{ route('personnel.show', ['id' => 'employees']) }}">
                        <i class="fa fa-caret-right"></i> Employees
                    </a>
                </li>
            </ul>
        </li>
    </ul>

@can('do-documedia')
    <span class="heading">Content</span>
<ul class="list-unstyled p-0 m-0 mb-2">
    <li class="{{ request()->is("*documedia*")? 'active': '' }}">
        <a href="#formsDropdown" aria-expanded="false" data-toggle="collapse">
            <i class="fa fa-files-o fa-fw"></i> Files
        </a>
        <ul id="formsDropdown" class="collapse list-unstyled ">
            <li>
                <a href="{{ route('documedia.index') }}"> Records </a>
            </li>
            <li>
                <a href="{{ route('documedia.show', 'files') }}"> Storage </a>
            </li>
            <li>
                <a href="{{ route('documedia.create') }}"> Upload </a>
            </li>
        </ul>
    </li>
        <li>
            <a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-sitemap fa-fw"></i> Pages

            </a>
            <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li>
                    <a href="/pagpes/home">
                        <i class="fa fa-caret-right"></i> Home
                    </a>
                </li>
                <li>
                    <a href="/pages/about">
                        <i class="fa fa-caret-right"></i> About
                    </a>
                </li>
                <li>
                    <a href="/pages/features">
                        <i class="fa fa-caret-right"></i> Features
                    </a>
                </li>
                <li>
                    <a href="/pages/pricing">
                        <i class="fa fa-caret-right"></i> Pricing
                    </a>
                </li>
                <li>
                    <a href="/blog/posts">
                        <i class="fa fa-caret-right"></i> Blog
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#formsDropDown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-file fa-fw"></i> Forms

            </a>
            <ul id="formsDropDown" class="collapse list-unstyled ">
                <li>
                    <a href="">List All</a>
                </li>
                <li>
                    <a href="">Builder</a>
                </li>
                <li>
                    <a href="">Viewer</a>
                </li>
            </ul>
        </li>

    </ul>
    @endcan
    @can('view-dashboard')
    <span class="heading">System</span>
    <ul class="list-unstyled p-0 m-0 mb-2">
        @can('access-system')
        <li class="{{ request()->is('*account*')?'active': '' }}">
            <a href="{{ user_route('account') }}">
                <i class="fa fa-lock fa-fw"></i> Accounts
            </a>
        </li>
        @endcan
        <li class="{{ request()->is('*settings*')?'active': '' }}">
            <a href="{{ user_route('settings') }}">
                <i class="fa fa-wrench fa-fw"></i> Settings
            </a>
        </li>
        <li class="{{ request()->is('*security*')?'active': '' }}">
            <a href="#">
                <i class="fa fa-lock fa-fw"></i> Security
            </a>
        </li>
    </ul>
    @endcan
</nav>
