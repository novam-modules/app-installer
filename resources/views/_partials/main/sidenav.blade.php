<nav class="side-navbar">
    <!-- Sidebar Header-->
    @include('_partials.main.badge')
    <!-- Sidebar Navidation Menus-->
    <span class="heading">Welcome</span>
    <ul class="list-unstyled p-0 m-0 mb-2">
        <li class="active">
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
        <li>
            <a href="#componentsDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-list fa-fw"></i> Inventory

            </a>
            <ul id="componentsDropdown" class="collapse list-unstyled ">
                <li>
                    <a href="components-cards.html">
                        <i class="fa fa-caret-right"></i> Materials
                    </a>
                </li>
                <li>
                    <a href="components-cards.html">
                        <i class="fa fa-caret-right"></i> Fleet
                    </a>
                </li>
                <li>
                    <a href="components-cards.html">
                        <i class="fa fa-caret-right"></i> Equipment
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <span class="heading">Content</span>
<ul class="list-unstyled p-0 m-0 mb-2">
    <li>
        <a href="#formsDropdown" aria-expanded="false" data-toggle="collapse">
            <i class="fa fa-files-o fa-fw"></i> Files

        </a>
        <ul id="formsDropdown" class="collapse list-unstyled ">
            <li>
                <a href="forms.html">Basic forms</a>
            </li>
            <li>
                <a href="forms-advanced.html">Advanced forms</a>
            </li>
            <li>
                <a href="forms-autocomplete.html">Autocomplete</a>
            </li>
            <li>
                <a href="forms-dropzone.html">Files upload</a>
            </li>
            <li>
                <a href="forms-texteditor.html">Text editor</a>
            </li>
            <li>
                <a href="forms-validation.html">Validation</a>
            </li>
        </ul>
    </li>
        <li>
            <a href="#pagesDropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-sitemap fa-fw"></i> Pages

            </a>
            <ul id="pagesDropdown" class="collapse list-unstyled ">
                <li>
                    <a href="pages-contacts.html">Contacts</a>
                </li>
                <li>
                    <a href="login.html">Login page</a>
                </li>
                <li>
                    <a href="pages-profile.html">Profile</a>
                </li>
                <li>
                    <a href="pages-pricing.html">Pricing table</a>
                </li>
            </ul>
        </li>
    </ul>
    <span class="heading">System</span>
    <ul class="list-unstyled p-0 m-0 mb-2">
        <li>
            <a href="#">
                <i class="fa fa-wrench fa-fw"></i>Settings
            </a>
        </li>
        <li>
            <a href="#">
                <i class="fa fa-lock fa-fw"></i>Security
            </a>
        </li>
    </ul>
</nav>
