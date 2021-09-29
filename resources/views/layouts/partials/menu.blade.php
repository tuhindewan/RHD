<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">

        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class="nav-item">
                <a href=""><i class="la la-home"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.dashboard') </span>
                </a>
            </li>
            {{-- @cannot('system-analyst')
                <li class="nav-item">
                    <a href="javascript:;"><i class="la la-list"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">@lang('hrm::appraisal.acr')</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item {{ is_active_route('appraisal-request.index') }}">
                            <a class="nav-link" href="{{ route('appraisal-request.index') }}"><i class="la la-list"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::appraisal.request') @lang('labels.list')</span>
                            </a>
                        </li>
                        <li class="nav-item {{ is_active_route('ng-appraisal-request.index') }}">
                            <a class="nav-link" href="{{ route('ng-appraisal-request.index') }}"><i
                                    class="la la-list"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::appraisal.request') @lang('labels.list') (NG)</span>
                            </a>
                        </li>
                        <li class="nav-item {{ is_active_route('appraisal-report.index') }}">
                            <a class="nav-link" href="{{ route('appraisal-report.index') }}"><i class="la la-list"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::appraisal.report') @lang('labels.list')</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endcannot
            @if(auth()->user()->can('system-analyst') || auth()->user()->can('system-super-admin'))
                <li class="nav-item">
                    <a href="javascript:;"><i class="la la-list"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.status_approved') @lang('labels.list')</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item {{ is_active_route('appraisal-request.action-list') }}">
                            <a class="nav-link" href="{{ route('appraisal-request.action-list') }}"><i
                                    class="la la-list"></i>
                                <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.gazetted')  @lang('labels.officer')</span>
                            </a>
                        </li>
                        <li class="nav-item {{ is_active_route('ng-appraisal-request.action-list') }}">
                            <a class="nav-link" href="{{ route('ng-appraisal-request.action-list') }}"><i
                                    class="la la-list"></i>
                                <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.non-gazetted') @lang('labels.officer')</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="javascript:;"><i class="la la-list"></i>
                        <span class="menu-title" data-i18n="nav.dash.main">@lang('hrm::appraisal.report')</span>
                    </a>
                    <ul class="menu-content">
                        <li class="nav-item {{ is_active_route('appraisal-reporting.all-acr-request') }}">
                            <a class="nav-link" href="{{ route('appraisal-reporting.all-acr-request') }}"><i
                                    class="la la-list"></i>
                                <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.individual_acr')</span>
                            </a>
                        </li>
                        <li class="nav-item {{ is_active_route('appraisal-reporting.submitter-non-submitter') }}">
                            <a class="nav-link" href="{{ route('appraisal-reporting.submitter-non-submitter') }}"><i
                                    class="la la-list"></i>
                                <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.submitters')</span>
                            </a>
                        </li>
                    </ul>
                </li>
            @endif --}}
            {{-- <li class="nav-item">
                <a href="javascript:;"><i class="la la-cogs"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">@lang('labels.settings')</span>
                </a>
                <ul class="menu-content">
                    @if(auth()->user()->can('hrm-setting-access') || auth()->user()->can('system-super-admin'))
                        <li class="{{ is_active_match('hrm/employee') }}">
                            <a href="{{ url('hrm/employee') }}">
                                <i class="la la-users"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::employee.menu_name')</span>
                            </a>
                        </li>
                        <li class="{{ is_active_match('hrm/department')}}">
                            <a href="{{ url('hrm/department') }}">
                                <i class="la la-list-alt"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::department.left_menu_title')</span>
                            </a>
                        </li>
                        <li class="{{ is_active_match('hrm/sections')}}">
                            <a href="{{ url('hrm/sections') }}">
                                <i class="la la-list-alt"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::department.section_title')</span>
                            </a>
                        </li>
                        <li class="{{ is_active_match('hrm/designation') }}">
                            <a href="{{ url('hrm/designation') }}">
                                <i class="la la-list-alt"></i>
                                <span class="menu-title"
                                      data-i18n="nav.dash.main">@lang('hrm::designation.left_menu_title')</span>
                            </a>
                        </li>
                    @endif
                    <li class="{{ is_active_match('/change/password') }}">
                        <a href="{{url('/change/password')}}">
                            <i class="la la-key"></i>
                            <span class="menu-title"
                                  data-i18n="nav.dash.main">@lang('labels.change_password')</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/lang/'. get_localization_config()->key)}}">
                            <i class="la la-flag-o"></i><strong>ভাষা {{ get_localization_config()->value }} এ
                                পরিবর্তন</strong>
                        </a>
                    </li> --}}
                    {{-- @can('system-super-admin')

                        <li class="{{ is_active_match('system/user') }}">
                            <a class="menu-item" href="{{'/system/user'}}" data-i18n="nav.users.user_profile"><i
                                    class="la la-users"></i>{{trans('labels.user')}}</a>
                        </li>
                        <li class="{{ is_active_match('system-settings') }}">
                            <a class="menu-item" href="{{route('system-settings.index')}}"
                               data-i18n="nav.users.user_profile">
                                <i class="la la-cogs"></i>{{trans('settings.system_settings')}}</a>
                        </li>

                    @endcan --}}
                </ul>
            </li>
        </ul>
    </div>
</div>
