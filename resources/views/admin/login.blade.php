<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="description" content="后台登陆页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="icon" type="image/png" href="{{asset('backend/assets/i/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('backend/assets/i/app-icon72x72@2x.png')}}">
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/amazeui.min.css')}}" />
    <link rel="stylesheet" href="{{asset('backend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('backend/assets/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('backend/css/wu-admin.css')}}">
    <script src="{{asset('backend/assets/js/jquery.min.js')}}"></script>
</head>
<body data-type="login">
<script src="{{asset('backend/assets/js/theme.js')}}"></script>
<div id="app" class="am-g tpl-g">
    <example></example>
    <wu-search-ipt></wu-search-ipt>
    <!-- 风格切换 -->
    @include('admin.common.changeSkin')
    <div class="tpl-login">
        <div class="tpl-login-content">
            <div class="tpl-login-logo"></div>
            <form class="am-form tpl-form-line-form" method="post" action="{{ route('adminLogin') }}">
                {{csrf_field()}}
                <div class="am-form-group">
                    <input type="text" class="tpl-form-input" name="phone" placeholder="请输入账号" required value="{{old('phone')}}">
                </div>
                <div class="am-form-group">
                    <input type="password" class="tpl-form-input" name="password" placeholder="请输入密码" required>
                </div>
                <div class="am-form-group tpl-login-remember-me">
                    <input id="remember-me" type="checkbox" name="remember" {{ old('remember') ? 'checked':'' }}>
                    <label for="remember-me">记住密码</label>
                </div>
                <div class="am-form-group">
                    <button type="submit" class="am-btn am-btn-primary  am-btn-block tpl-btn-bg-color-success  tpl-login-btn">提交</button>
                </div>
            </form>
        </div>
    </div>
</div>
@include('admin.common.tip')
<script src="{{asset('backend/assets/js/amazeui.min.js')}}"></script>
<script src="{{asset('backend/assets/js/app.js')}}"></script>
</body>
</html>