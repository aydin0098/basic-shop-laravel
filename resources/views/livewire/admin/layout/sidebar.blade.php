<div class="sidebar-wrapper sidebar-theme">

    <nav id="sidebar">

        <div class="navbar-nav theme-brand flex-row  text-center">
            <div class="nav-logo">
                <div class="nav-item theme-logo">
                    <a href="./index.html">
                        <img src="/admin/src/assets/img/logo.svg" class="navbar-logo" alt="logo">
                    </a>
                </div>
                <div class="nav-item theme-text">
                    <a href="./index.html" class="nav-link"> پنل مدیریت </a>
                </div>
            </div>
            <div class="nav-item sidebar-toggle">
                <div class="btn-toggle sidebarCollapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevrons-left"><polyline points="11 17 6 12 11 7"></polyline><polyline points="18 17 13 12 18 7"></polyline></svg>
                </div>
            </div>
        </div>
        <div class="shadow-bottom"></div>
        <ul class="list-unstyled menu-categories" id="accordionExample">
            <li class="menu active">
                <a href="#dashboard" data-bs-toggle="collapse" aria-expanded="true" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        <span>داشبورد</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled show" id="dashboard" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./index.html"> Analytics </a>
                    </li>
                    <li class="active">
                        <a href="./index2.html"> Sales </a>
                    </li>
                </ul>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>APPLICATIONS</span></div>
            </li>
            <li class="menu">
                <a href="{{route('admin.category.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>دسته بندی ها</span>
                    </div>
                </a>
            </li>

            <li class="menu menu-heading">
                <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg><span>USER INTERFACE</span></div>
            </li>

            <li class="menu">
                <a href="#components" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-box"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                        <span>محصولات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="components" data-bs-parent="#accordionExample">
                    <li>
                        <a href="{{route('admin.product.index')}}"> لیست محصولات </a>
                    </li>
                    <li>
                        <a href="{{route('admin.product.create')}}"> محصول جدید  </a>
                    </li>

                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>سفارشات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./element-alerts.html"> Alerts </a>
                    </li>
                    <li>
                        <a href="./element-avatar.html"> Avatar </a>
                    </li>
                    <li>
                        <a href="./element-badges.html"> Badges </a>
                    </li>
                    <li>
                        <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                    </li>
                    <li>
                        <a href="./element-buttons.html"> Buttons </a>
                    </li>
                    <li>
                        <a href="./element-buttons-group.html"> Button Groups </a>
                    </li>
                    <li>
                        <a href="./element-color-library.html"> Color Library </a>
                    </li>
                    <li>
                        <a href="./element-dropdown.html"> Dropdown </a>
                    </li>
                    <li>
                        <a href="./element-infobox.html"> Infobox </a>
                    </li>
                    <li>
                        <a href="./element-loader.html"> Loader </a>
                    </li>
                    <li>
                        <a href="./element-pagination.html"> Pagination </a>
                    </li>
                    <li>
                        <a href="./element-popovers.html"> Popovers </a>
                    </li>
                    <li>
                        <a href="./element-progressbar.html"> Progress Bar </a>
                    </li>
                    <li>
                        <a href="./element-search.html"> Search </a>
                    </li>
                    <li>
                        <a href="./element-tooltips.html"> Tooltips </a>
                    </li>
                    <li>
                        <a href="./element-treeview.html"> Treeview </a>
                    </li>
                    <li>
                        <a href="./element-typography.html"> Typography </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>کاربران</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./element-alerts.html"> Alerts </a>
                    </li>
                    <li>
                        <a href="./element-avatar.html"> Avatar </a>
                    </li>
                    <li>
                        <a href="./element-badges.html"> Badges </a>
                    </li>
                    <li>
                        <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                    </li>
                    <li>
                        <a href="./element-buttons.html"> Buttons </a>
                    </li>
                    <li>
                        <a href="./element-buttons-group.html"> Button Groups </a>
                    </li>
                    <li>
                        <a href="./element-color-library.html"> Color Library </a>
                    </li>
                    <li>
                        <a href="./element-dropdown.html"> Dropdown </a>
                    </li>
                    <li>
                        <a href="./element-infobox.html"> Infobox </a>
                    </li>
                    <li>
                        <a href="./element-loader.html"> Loader </a>
                    </li>
                    <li>
                        <a href="./element-pagination.html"> Pagination </a>
                    </li>
                    <li>
                        <a href="./element-popovers.html"> Popovers </a>
                    </li>
                    <li>
                        <a href="./element-progressbar.html"> Progress Bar </a>
                    </li>
                    <li>
                        <a href="./element-search.html"> Search </a>
                    </li>
                    <li>
                        <a href="./element-tooltips.html"> Tooltips </a>
                    </li>
                    <li>
                        <a href="./element-treeview.html"> Treeview </a>
                    </li>
                    <li>
                        <a href="./element-typography.html"> Typography </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>تراکنش ها</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./element-alerts.html"> Alerts </a>
                    </li>
                    <li>
                        <a href="./element-avatar.html"> Avatar </a>
                    </li>
                    <li>
                        <a href="./element-badges.html"> Badges </a>
                    </li>
                    <li>
                        <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                    </li>
                    <li>
                        <a href="./element-buttons.html"> Buttons </a>
                    </li>
                    <li>
                        <a href="./element-buttons-group.html"> Button Groups </a>
                    </li>
                    <li>
                        <a href="./element-color-library.html"> Color Library </a>
                    </li>
                    <li>
                        <a href="./element-dropdown.html"> Dropdown </a>
                    </li>
                    <li>
                        <a href="./element-infobox.html"> Infobox </a>
                    </li>
                    <li>
                        <a href="./element-loader.html"> Loader </a>
                    </li>
                    <li>
                        <a href="./element-pagination.html"> Pagination </a>
                    </li>
                    <li>
                        <a href="./element-popovers.html"> Popovers </a>
                    </li>
                    <li>
                        <a href="./element-progressbar.html"> Progress Bar </a>
                    </li>
                    <li>
                        <a href="./element-search.html"> Search </a>
                    </li>
                    <li>
                        <a href="./element-tooltips.html"> Tooltips </a>
                    </li>
                    <li>
                        <a href="./element-treeview.html"> Treeview </a>
                    </li>
                    <li>
                        <a href="./element-typography.html"> Typography </a>
                    </li>
                </ul>
            </li>

            <li class="menu">
                <a href="{{route('admin.country.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>کشور ها</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('admin.state.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>استان ها</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="{{route('admin.city.index')}}" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                        <span>شهر ها</span>
                    </div>
                </a>
            </li>

            <li class="menu">
                <a href="#elements" data-bs-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-zap"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon></svg>
                        <span>تنظیمات</span>
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </a>
                <ul class="collapse submenu list-unstyled" id="elements" data-bs-parent="#accordionExample">
                    <li>
                        <a href="./element-alerts.html"> Alerts </a>
                    </li>
                    <li>
                        <a href="./element-avatar.html"> Avatar </a>
                    </li>
                    <li>
                        <a href="./element-badges.html"> Badges </a>
                    </li>
                    <li>
                        <a href="./element-breadcrumbs.html"> Breadcrumbs </a>
                    </li>
                    <li>
                        <a href="./element-buttons.html"> Buttons </a>
                    </li>
                    <li>
                        <a href="./element-buttons-group.html"> Button Groups </a>
                    </li>
                    <li>
                        <a href="./element-color-library.html"> Color Library </a>
                    </li>
                    <li>
                        <a href="./element-dropdown.html"> Dropdown </a>
                    </li>
                    <li>
                        <a href="./element-infobox.html"> Infobox </a>
                    </li>
                    <li>
                        <a href="./element-loader.html"> Loader </a>
                    </li>
                    <li>
                        <a href="./element-pagination.html"> Pagination </a>
                    </li>
                    <li>
                        <a href="./element-popovers.html"> Popovers </a>
                    </li>
                    <li>
                        <a href="./element-progressbar.html"> Progress Bar </a>
                    </li>
                    <li>
                        <a href="./element-search.html"> Search </a>
                    </li>
                    <li>
                        <a href="./element-tooltips.html"> Tooltips </a>
                    </li>
                    <li>
                        <a href="./element-treeview.html"> Treeview </a>
                    </li>
                    <li>
                        <a href="./element-typography.html"> Typography </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

</div>
