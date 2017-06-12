@extends('admin.layouts.app')
@section('breadNav')
    <span class="am-icon-key page-header-heading-icon"></span> 权限管理 <small>管理员管理</small>
@endsection
@section('optBtn')
    <a class="am-btn am-btn-secondary" href="{{ route('admins.index') }}" ><span class="am-icon-list"></span> 返回列表</a>
@endsection
@section('content')
    <div class="row">
        <div class="am-u-sm-12">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">
                        <div>修改管理员</div>
                    </div>
                </div>
                <div class="widget-body am-fr">
                    <form class="am-form tpl-form-line-form" method="post" enctype="multipart/form-data" action="{{ route('admins.update',['admin'=>$admin]) }}">
                        {{ method_field('put') }}
                        {{ csrf_field() }}
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-form-group">
                                <label for="username" class="am-u-sm-3 am-form-label">用户名</label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="username" value="{{ $admin->username }}" name="username" placeholder="请输入用户名">
                                    <small>6-20位中英文,数字,下划线</small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <label for="phone" class="am-u-sm-3 am-form-label">手机号码</label>
                                <div class="am-u-sm-9">
                                    <input type="text" class="tpl-form-input" id="phone" value="{{ $admin->phone }}" name="phone" placeholder="请输入手机号码">
                                    <small>用于后台登陆</small>
                                </div>
                            </div>
                            <div class="am-form-group">
                                <div class="am-u-sm-9 am-u-sm-push-3">
                                    <button type="submit" class="am-btn am-btn-block am-btn-primary tpl-btn-bg-color-success ">提交</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-form-group">
                                <label for="avatar" class="am-u-sm-3 am-form-label">头像</label>
                                <div class="am-u-sm-9">
                                    <div class="am-form-group am-form-file">
                                        <div id="wu-preview">
                                            @if($admin->avatar)
                                                <img src="{{ asset($admin->avatar) }}" alt="">
                                                @endif
                                        </div>
                                        <img src="{{ asset('/imgs/plus-icon.png') }}" alt="">
                                        <input id="avatar" type="file" name="avatar" onchange="preview(this)" multiple="false">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection