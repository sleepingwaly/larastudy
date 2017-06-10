@extends('admin.layouts.app')

@section('content')
    <div class="row">

        <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
            <div class="widget am-cf">
                <div class="widget-head am-cf">
                    <div class="widget-title am-fl">管理员列表</div>
                    <div class="widget-function am-fr">
                        <a href="{{ route('admins.create') }}" class="am-icon-plus"></a>
                    </div>
                </div>
                <div class="widget-body  widget-body-lg am-fr">

                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black " id="example-r">
                        <thead>
                        <tr>
                            <th>文章标题</th>
                            <th>作者</th>
                            <th>时间</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="gradeX">
                            <td>Amaze UI 模式窗口</td>
                            <td>张鹏飞</td>
                            <td>2016-09-26</td>
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
                        <tr class="even gradeC">
                            <td>有适配微信小程序的计划吗</td>
                            <td>天纵之人</td>
                            <td>2016-09-26</td>
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
                        <tr class="gradeX">
                            <td>请问有没有amazeui 分享插件</td>
                            <td>王宽师</td>
                            <td>2016-09-26</td>
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
                        <tr class="even gradeC">
                            <td>关于input输入框的问题</td>
                            <td>着迷</td>
                            <td>2016-09-26</td>
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
                        <tr class="even gradeC">
                            <td>有没有发现官网上的下载包不好用</td>
                            <td>醉里挑灯看键</td>
                            <td>2016-09-26</td>
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

                        <tr class="even gradeC">
                            <td>我建议WEB版本文件引入问题</td>
                            <td>罢了</td>
                            <td>2016-09-26</td>
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
                        <!-- more data -->
                        </tbody>
                    </table>

                </div>
            </div>
        </div>




    </div>
    @endsection