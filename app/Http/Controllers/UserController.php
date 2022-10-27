<?php
namespace App\Http\Controllers;
use App\Actions\Users\StoreUserAction;
use App\helpers\HandleImage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreUserRequest;
use App\Models\User;
use App\ViewModels\Typesofweight\TypesofweightViewModel;
use App\ViewModels\UsersView\UsersViewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use HandleImage;

public function index(Request $request)
{
$data = User::Search();
return view('users.index',compact('data'))->with('i', ($request->input('page', 1) - 1) * 5);
}


public function create():View
{
    return view('users.create',new UsersViewModel());
}
public function store(StoreUserRequest $request)
{
    app(StoreUserAction::class)->handle($request->validated());
    return redirect()->route('users.index')->with('success','success add User');
}


public function show($id)
{
$user = User::find($id);
return view('users.show',compact('user'));
}

public function edit($id)
{
$user = User::find($id);
$roles = Role::pluck('name','name')->all();
$userRole = $user->roles->pluck('name','name')->all();
return view('users.edit',compact('user','roles','userRole'));
}
/**
* Update the specified resource in storage.
*
* @param  \Illuminate\Http\Request  $request
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function update(Request $request, $id)
{
$this->validate($request, [
'name' => 'required',
'email' => 'required|email|unique:users,email,'.$id,
'password' => 'same:confirm-password',
'roles' => 'required',
'image'=>'mimes:jpg,jpeg,png',
]);
$input = $request->all();
if(!empty($input['password'])){
$input['password'] = Hash::make($input['password']);
}else{
$input = array_except($input,array('password'));
}
$user = User::find($id);
$user->update($input);
DB::table('model_has_roles')->where('model_id',$id)->delete();
$user->assignRole($request->input('roles'));
$this->UpdateImage($request,$user,'profile');
return redirect()->route('users.index')
->with('success','تم تحديث معلومات المستخدم بنجاح');
}
/**
* Remove the specified resource from storage.
*
* @param  int  $id
* @return \Illuminate\Http\Response
*/
public function destroy(Request $request)
{
User::find($request->user_id)->delete();
return redirect()->route('users.index')->with('success','تم حذف المستخدم بنجاح');
}
}