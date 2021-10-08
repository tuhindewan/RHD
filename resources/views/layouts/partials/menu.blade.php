<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                <a href="{{ route('home') }}"><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.dashboard') </span>
                </a>
            </li>

            @if (Auth::user()->type == 'admin')
                <li class="nav-item {{ Route::is('type.index') || Route::is('type.create') || Route::is('type.edit') ? 'active' : '' }} ">
                    <a href="{{ route('type.index') }}"><i class="la la-list"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.property_type') </span>
                    </a>
                </li>
            @endif

        </ul>
    </div>
</div>
