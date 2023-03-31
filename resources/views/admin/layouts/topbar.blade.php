<!-- BEGIN: Header-->
<nav
    class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
    <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav d-xl-none">
                <li class="nav-item">
                    <a class="nav-link menu-toggle" href="#">
                        <i class="ficon" data-feather="menu"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav bookmark-icons">
                <li class="nav-item d-none d-lg-block">
                    <a class="nav-link" href="#" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="Click to clear cache (Automatically resets in 10 minutes)">
                        <i class="ficon spin-hover" data-feather="refresh-cw"></i>
                    </a>
                </li>

                <li class="nav-item d-none d-lg-block">
                    {{-- @php
                        $trashedDataCount = getTrashedDataCount();
                    @endphp --}}

                    {{-- <a class="nav-link" href="javascript:void(0)" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Restore deleted data">
                        <i class="ficon {{ $trashedDataCount > 0 ? 'bounce text-danger' : '' }} "
                            data-feather="trash"></i>
                        <span
                            class="badge rounded-pill {{ $trashedDataCount > 0 ? 'bg-danger' : 'bg-primary' }} badge-up cart-item-count">{{ $trashedDataCount }}</span>
                    </a> --}}
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block"><a class="nav-link bookmark-star">
                    <i class="ficon text-warning"
                            data-feather="star"></i></a>
                    <div class="bookmark-input search-input">
                        <div class="bookmark-input-icon"><i data-feather="search"></i></div>
                        <input class="form-control input" type="text" placeholder="Bookmark" tabindex="0"
                            data-search="search">
                        <ul class="search-list search-list-bookmark"></ul>
                    </div>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="nav-item d-none d-lg-block">
                <a class="nav-link" href="{{url('/')}}" >
                <i class="ficon text-warning" data-feather="home"></i></a>
                  
                        
                </li>
            </ul>
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
            
            <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon"
                        data-feather="moon"></i></a></li>
            <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon"
                        data-feather="search"></i></a>
                <div class="search-input">
                    <div class="search-input-icon"><i data-feather="search"></i></div>
                    <input class="form-control input" type="text" placeholder="Explore Vuexy..." tabindex="-1"
                        data-search="search">
                    <div class="search-input-close"><i data-feather="x"></i></div>
                    <ul class="search-list search-list-main"></ul>
                </div>
            </li>
            <li class="nav-item dropdown dropdown-user">
              <a class="nav-link dropdown-toggle dropdown-user-link"
                    id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="user-nav d-sm-flex d-none"><span
                            class="user-name fw-bolder">{{-- auth()->user()->name --}}</span></div><span class="avatar"><img class="round"
                            src="{{asset('admin')}}/app-assets/images/portrait/small/avatar-s-11.jpg" alt="avatar"
                            height="40" width="40"><span class="avatar-status-online"></span></span>
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                    <a class="dropdown-item" href="{{route('Logout')}}">
                        <i class="me-50" data-feather="power"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<!-- END: Header-->
