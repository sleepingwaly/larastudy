<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->input('keyword','');
        $num = $request->input('num', 20);
//        ->where('phone','like','%'.$keyword.'%')
//        ->orWhere('username','like','%'.$keyword.'%')
        $admins = Admin::orderBy('id','desc')
            ->where(function($query) use($keyword){
                if($keyword){
                    $query->where('phone','like','%'.$keyword.'%')
                        ->orWhere('username','like','%'.$keyword.'%');
                }
            })->paginate($num);
        $params = [
            'keyword'=>$keyword,
            'num'=>$num
        ];
        return view('admin.admins.index', compact('admins','params'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'bail|required|unique:admins|min:2|max:30',
            'phone' => 'bail|required|unique:admins|regex:/^1(\d){10}$/',
            'password' => 'bail|required|same:repassword|min:6'
        ], [
            'required' => ':attribute 不能为空',
            'unique' => ':attribute已存在',
            'min' => ':attribute最少:min个字符',
            'max' => ':attribute最长:max个字符',
            'regex' => ':attribute格式不正确',
            'same' => '两次:attribute输入不一致',
        ], [
            'username' => '用户名',
            'phone' => '手机号码',
            'password' => '密码'
        ]);

        $user = new Admin;
        $user->username = $request->input('username');
        $user->phone = $request->input('phone');
        $user->password = Hash::make($request->input('password'));

        if($request->hasFile('avatar')){
            $path = './Uploads/'.date('Ymd');
            $ext = $request->file('avatar')->extension();
            $filename = time().rand(10000,99999).'.'.$ext;
            $request->file('avatar')->move($path, $filename);
            $user->avatar = trim($path.'/'.$filename,'.');
        }
        if($user->save()){
            return redirect()->route('admins.index')->with('message', '添加成功');
        }else{
            return back()->with('message','添加失败');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Http\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Http\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Http\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Http\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
