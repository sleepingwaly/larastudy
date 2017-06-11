@extends('admin.layouts.app')
@section('breadNav')
    <span class="am-icon-key page-header-heading-icon"></span> 权限管理 <small>管理员列表</small>
@endsection
@section('optBtn')
    <a class="am-btn am-btn-secondary" href="{{ route('admins.create') }}" ><span class="am-icon-plus"></span> 添加</a>
@endsection
@section('content')
    <div class="row">
        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head">
                    <div class="widget-title">
                        <wu-show-num :num="[10,20,50]"></wu-show-num>
                    </div>
                    <div class="widget-function">
                        <wu-search-ipt></wu-search-ipt>
                    </div>
                </div>
                <div class="widget-body  widget-body-lg am-fr">

                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>用户名</th>
                            <th>头像</th>
                            <th>手机</th>
                            <th>添加时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td>{{ $admin->username }}</td>
                                <td><img src="{{ $admin->avatar }}" width="80"></td>
                                <td>{{ $admin->phone }}</td>
                                <td>{{ $admin->created_at }}</td>
                                <td>
                                    <div class="tpl-table-black-operation">
                                        <a href="javascript:;">
                                            <i class="am-icon-pencil"></i> 编辑
                                        </a>
                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                            <i class="am-icon-trash"></i> 删除
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="wu-page am-fr">
                    {{ $admins->appends($params)->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection