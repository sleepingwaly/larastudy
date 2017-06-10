@extends('admin.layouts.app')

@section('content')
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">添加管理员</div>
                    <div class="widget-function am-fr">
                        <a href="{{ route('admins.index') }}" class="am-icon-list"></a>
                    </div>
                </div>
                <div class="widget-body am-fr">
                    <form class="am-form tpl-form-line-form" method="post" action="{{ route('admins.store') }}">
                        {{ csrf_field() }}
                        <div class="am-form-group">
                            <label for="username" class="am-u-sm-3 am-form-label">用户名</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="username" value="{{ old('username') }}" name="username" placeholder="请输入用户名">
                                <small>6-20位中英文,数字,下划线</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="phone" class="am-u-sm-3 am-form-label">手机号码</label>
                            <div class="am-u-sm-9">
                                <input type="text" class="tpl-form-input" id="phone" value="{{ old('phone') }}" name="phone" placeholder="请输入手机号码">
                                <small>用于后台登陆</small>
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="password" class="am-u-sm-3 am-form-label">登陆密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" class="am-form-field tpl-form-no-bg" id="password" value="{{ old('password') }}" name="password" placeholder="请输入登陆密码" >
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="repassword" class="am-u-sm-3 am-form-label">确认密码</label>
                            <div class="am-u-sm-9">
                                <input type="password" class="am-form-field tpl-form-no-bg" id="repassword" value="{{ old('repassword') }}" name="repassword" placeholder="请再次输入登陆密码" >
                            </div>
                        </div>

                        {{--<div class="am-form-group">
                            <label for="avatar" class="am-u-sm-3 am-form-label">头像</label>
                            <div class="am-u-sm-9">
                                <div class="am-form-group am-form-file">
                                    <div class="tpl-form-file-img">
                                        <img src="assets/img/a5.png" alt="">
                                    </div>
                                    <button type="button" class="am-btn am-btn-danger am-btn-sm">
                                        <i class="am-icon-cloud-upload"></i> 添加头像图片</button>
                                    <input id="avatar" type="file" multiple="false">
                                </div>

                            </div>
                        </div>--}}

                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection