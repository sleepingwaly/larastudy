<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('site.sitename') }}后台管理</title>
    <meta name="description" content="">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="assets/i/favicon.png">
    <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/amazeui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/assets/css/amazeui.datatables.min.css') }}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/backend.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/wu-admin.css') }}">
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
</head>

<body>
<script src="{{ asset('backend/assets/js/theme.js') }}"></script>
@include('admin.common.tip')

<div id="app" class="am-g tpl-g">
    <!-- 头部 -->
    <header>
        <!-- logo -->
        <div class="am-fl tpl-header-logo">
            <a href="javascript:;"><img src="{{ asset('backend/assets/img/logo.png') }}" alt=""></a>
        </div>
        <!-- 右侧内容 -->
        <div class="tpl-header-fluid">
            <!-- 侧边切换 -->
            <div class="am-fl tpl-header-switch-button am-icon-list">
                <span></span>
            </div>
            <!-- 搜索 -->
            {{--<div class="am-fl tpl-header-search">
                <form class="tpl-header-search-form" action="javascript:;">
                    <button class="tpl-header-search-btn am-icon-search"></button>
                    <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                </form>
            </div>--}}
            <!-- 其它功能-->
            <div class="am-fr tpl-header-navbar">
                <ul>
                    <!-- 欢迎语 -->
                    <li class="am-text-sm tpl-header-navbar-welcome">
                        <a href="javascript:;">欢迎你, <span>{{ Auth::guard('admin')->user()->username }}</span> </a>
                    </li>
{{--

                    <!-- 新邮件 -->
                    <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                        <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                            <i class="am-icon-envelope"></i>
                            <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                        </a>
                        <!-- 弹出列表 -->
                        <ul class="am-dropdown-content tpl-dropdown-content">
                            <li class="tpl-dropdown-menu-messages">
                                <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                    <div class="menu-messages-ico">
                                        <img src="{{ asset('backend/assets/img/user04.png') }}" alt="">
                                    </div>
                                    <div class="menu-messages-time">
                                        3小时前
                                    </div>
                                    <div class="menu-messages-content">
                                        <div class="menu-messages-content-title">
                                            <i class="am-icon-circle-o am-text-success"></i>
                                            <span>夕风色</span>
                                        </div>
                                        <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                        <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                    </div>
                                </a>
                            </li>

                            <li class="tpl-dropdown-menu-messages">
                                <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                    <div class="menu-messages-ico">
                                        <img src="{{ asset('backend/assets/img/user02.png') }}" alt="">
                                    </div>
                                    <div class="menu-messages-time">
                                        5天前
                                    </div>
                                    <div class="menu-messages-content">
                                        <div class="menu-messages-content-title">
                                            <i class="am-icon-circle-o am-text-warning"></i>
                                            <span>禁言小张</span>
                                        </div>
                                        <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                        <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                    </div>
                                </a>
                            </li>
                            <li class="tpl-dropdown-menu-messages">
                                <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                    <i class="am-icon-circle-o"></i> 进入列表…
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- 新提示 -->
                    <li class="am-dropdown" data-am-dropdown>
                        <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                            <i class="am-icon-bell"></i>
                            <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                        </a>

                        <!-- 弹出列表 -->
                        <ul class="am-dropdown-content tpl-dropdown-content">
                            <li class="tpl-dropdown-menu-notifications">
                                <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                    <div class="tpl-dropdown-menu-notifications-title">
                                        <i class="am-icon-line-chart"></i>
                                        <span> 有6笔新的销售订单</span>
                                    </div>
                                    <div class="tpl-dropdown-menu-notifications-time">
                                        12分钟前
                                    </div>
                                </a>
                            </li>
                            <li class="tpl-dropdown-menu-notifications">
                                <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                    <div class="tpl-dropdown-menu-notifications-title">
                                        <i class="am-icon-star"></i>
                                        <span> 有3个来自人事部的消息</span>
                                    </div>
                                    <div class="tpl-dropdown-menu-notifications-time">
                                        30分钟前
                                    </div>
                                </a>
                            </li>
                            <li class="tpl-dropdown-menu-notifications">
                                <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                    <div class="tpl-dropdown-menu-notifications-title">
                                        <i class="am-icon-folder-o"></i>
                                        <span> 上午开会记录存档</span>
                                    </div>
                                    <div class="tpl-dropdown-menu-notifications-time">
                                        1天前
                                    </div>
                                </a>
                            </li>


                            <li class="tpl-dropdown-menu-notifications">
                                <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                    <i class="am-icon-bell"></i> 进入列表…
                                </a>
                            </li>
                        </ul>
                    </li>

--}}
                    <!-- 退出 -->
                    <li class="am-text-sm">
                        @if (Auth::guard('admin')->check())
                            <a href="{{ url('/admin/logout') }}"><span class="am-icon-sign-out"></span> 退出</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>

    </header>
    <!-- 风格切换 -->
    @include('admin.common.changeSkin')
            <!-- 侧边导航栏 -->
    <div class="left-sidebar">
        <!-- 用户信息 -->
        <div class="tpl-sidebar-user-panel">
            <div class="tpl-user-panel-slide-toggleable">
                <div class="tpl-user-panel-profile-picture">
                    <img src="{{ asset(Auth::guard('admin')->user()->avatar) }}" alt="">
                </div>
                <span class="user-panel-logged-in-text">
                  <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
                    {{ Auth::guard('admin')->user()->username }}
                </span>
                <a href="{{ route('admins.edit',['id'=>Auth::guard('admin')->id()]) }}" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
            </div>
        </div>

        <!-- 菜单 -->
        <ul class="sidebar-nav">
            {{--<li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li>--}}
            <li class="sidebar-nav-link">
                <a href="javascript:;" class="sidebar-nav-sub-title active">
                    <i class="am-icon-key sidebar-nav-link-logo"></i> 权限设置
                    <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                </a>
                <ul class="sidebar-nav sidebar-nav-sub">
                    <li class="sidebar-nav-link">
                        <a href="table-list.html">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 角色管理
                        </a>
                    </li>

                    <li class="sidebar-nav-link">
                        <a href="table-list-img.html">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 权限管理
                        </a>
                    </li>
                    <li class="sidebar-nav-link">
                        <a href="{{ route('admins.index') }}" class="sub-active">
                            <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 管理员管理
                        </a>
                    </li>
                </ul>
            </li>
            {{--<li class="sidebar-nav-link">--}}
                {{--<a href="sign-up.html">--}}
                    {{--<i class="am-icon-clone sidebar-nav-link-logo"></i> 注册--}}
                    {{--<span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="sidebar-nav-link">--}}
                {{--<a href="login.html">--}}
                    {{--<i class="am-icon-key sidebar-nav-link-logo"></i> 登录--}}
                {{--</a>--}}
            {{--</li>--}}

        </ul>
    </div>

    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">

        <div class="container-fluid am-cf">
            <div class="row">
                <div class="am-u-sm-12">
                    <div class="am-fl">
                        <div class="page-header-heading">
                            @yield('breadNav')
                        </div>
                    </div>
                    <div class="am-fr">
                        @yield('optBtn')
                    </div>
                </div>
            </div>
        </div>
        <div class="row-content am-cf">
            @section('content')
            @show
        </div>
    </div>
</div>
</div>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{ asset('backend/assets/js/amazeui.min.js') }}"></script>
{{--<script src="{{ asset('backend/assets/js/amazeui.datatables.min.js') }}"></script>--}}
{{--<script src="{{ asset('backend/assets/js/dataTables.responsive.min.js') }}"></script>--}}
<script src="{{ asset('backend/assets/js/app.js') }}"></script>
<script src="{{ asset('backend/js/backend.js') }}"></script>
<script src="{{ asset('backend/js/wu-admin.js') }}"></script>

</body>

</html>