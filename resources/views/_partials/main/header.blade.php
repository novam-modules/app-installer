<header class="header">
    <nav class="navbar">
        <div class="search-box">
            <button class="dismiss">
                <i class="fa fa-times"></i>
            </button>
            <form id="searchForm" action="#" role="search">
                <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
        </div>
        <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a href="/admin" class="navbar-brand d-none d-sm-inline-block">
                        <div class="brand-text d-none d-lg-inline-block">
                            {{ config('app.name') }} <strong>APP</strong>
                        </div>
                        <div class="brand-text d-none d-sm-inline-block d-lg-none">
                            <strong>BD</strong>
                        </div>
                    </a>
                    <a id="toggle-btn" href="#" class="menu-btn active">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </div>
                <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                    <li class="nav-item d-flex align-items-center">
                        <a id="search" href="#">
                            <i class="fa fa-search fa-lg"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="notifications" rel="nofollow" data-target="#" href="#" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" class="nav-link">
                            <i class="fa fa-bell-o fa-lg"></i>
                            <span class="badge bg-red badge-corner">12</span>
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-envelope bg-green"></i>You
                                            have 6 new messages
                                        </div>
                                        <div class="notification-time">
                                            <small>4 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-twitter bg-blue"></i>You
                                            have 2 followers
                                        </div>
                                        <div class="notification-time">
                                            <small>4 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-upload bg-orange"></i>Server
                                            Rebooted
                                        </div>
                                        <div class="notification-time">
                                            <small>4 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item">
                                    <div class="notification">
                                        <div class="notification-content">
                                            <i class="fa fa-twitter bg-blue"></i>You
                                            have 2 followers
                                        </div>
                                        <div class="notification-time">
                                            <small>10 minutes ago</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>view all notifications </strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link">
                            <i class="fa fa-envelope-o fa-lg"></i>
                            <span class="badge bg-orange badge-corner">10</span>
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-1.jpg"
                                            alt="..." class="img-fluid rounded-circle">
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Jason Doe</h3>
                                        <span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-2.jpg"
                                            alt="..." class="img-fluid rounded-circle">
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Frank Williams</h3>
                                        <span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item d-flex">
                                    <div class="msg-profile">
                                        <img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-3.jpg"
                                            alt="..." class="img-fluid rounded-circle">
                                    </div>
                                    <div class="msg-body">
                                        <h3 class="h5">Ashley Wood</h3>
                                        <span>Sent You Message</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a rel="nofollow" href="#" class="dropdown-item all-notifications text-center">
                                    <strong>Read all messages </strong>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="messages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false" class="nav-link">
                            <img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-2.jpg"
                                            alt="..." class="img-fluid rounded-circle" style="max-height:32px">
                        </a>
                        <ul aria-labelledby="notifications" class="dropdown-menu">
                            <li>
                                <a href="#logout" class="dropdown-item  text-center logout">
                                    <img src="https://d19m59y37dris4.cloudfront.net/admin-premium/1-4-4/img/avatar-2.jpg"
                                            alt="..." class="img-fluid rounded-circle" style="max-height:100px">
                                </a>
                            </li>
                            <li>
                                <a href="#logout" class="dropdown-item  text-center logout">
                                    <span class="d-none d-sm-inline">Profile</span>
                                    <i class="fa fa-user-circle"></i>
                                </a>
                                <a href="#logout" class="dropdown-item  text-center logout">
                                    <span class="d-none d-sm-inline">Logout</span>
                                    <i class="fa fa-sign-out"></i>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
