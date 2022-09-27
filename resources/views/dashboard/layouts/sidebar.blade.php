<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand"
                                            href="{{url('dashboard/')}}">
                    <div class=""></div>

                    DASHBOARD
                </a></li>
            <li class="nav-item nav-toggle" style="position: absolute;margin-left: 195px"><a
                    class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i
                        class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                        data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class=" @yield('dashboard') "><a href="{{url('/dashboard')}}"><i class="feather icon-home"></i><span
                        class="menu-title" data-i18n="Dashboard">Dashboard</span></a>
            </li>

            <li class=" @yield('user') "><a href="{{url('/users')}}"><i class="fa fa-user-circle"></i><span
                        class="menu-title" data-i18n="Dashboard">Users</span></a>
            </li>
 

           <li class=" @yield('wheels') "><a href="{{url('/wheels')}}"><i class="fa fa-user-circle"></i><span
                       class="menu-title" data-i18n="Dashboard">Wheels</span></a>
           </li>

           <li class=" @yield('purchase_wheels') "><a href="{{url('/purchase_wheels')}}"><i class="fa fa-user-circle"></i><span
                       class="menu-title" data-i18n="Dashboard">Purchased Cogs</span></a>
           </li>

           <li class=" @yield('Withdraw') "><a href="{{url('/withdraw_request')}}"><i class="fa fa-user-circle"></i><span
            class="menu-title" data-i18n="Dashboard">Withdraw</span></a>
            </li>

{{--            <li class=" @yield('plan') "><a href="{{url('/admin/plans')}}"><i class="fa fa-volume-off"></i><span--}}
{{--                        class="menu-title" data-i18n="Dashboard">Plans</span></a>--}}
{{--            </li>--}}

{{--            <li class=" @yield('product') "><a href="{{url('/admin/products')}}"><i class="fa fa-list"></i><span--}}
{{--                        class="menu-title" data-i18n="Dashboard">Products</span></a>--}}
{{--            </li>--}}

{{--            <li class=" @yield('deposit') "><a href="{{url('/admin/deposit')}}"><i class="fa fa-money"></i><span--}}
{{--                        class="menu-title" data-i18n="Dashboard">Deposit</span></a>--}}
{{--            </li>--}}

{{--            <li class=" @yield('withdraw') "><a href="{{url('/admin/withdraw')}}"><i class="fa fa-hand-lizard-o"></i><span--}}
{{--                        class="menu-title" data-i18n="Dashboard">Withdraw</span></a>--}}
{{--            </li>--}}

{{--            <li class=" @yield('setting') "><a href="{{url('/admin/setting')}}"><i class="fa fa-cog"></i><span--}}
{{--                        class="menu-title" data-i18n="Dashboard">Setting</span></a>--}}
{{--            </li>--}}


        </ul>
    </div>
</div>
