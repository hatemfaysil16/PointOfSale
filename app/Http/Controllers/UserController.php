<?php
namespace App\Http\Controllers;
use App\Actions\Users\StoreUserAction;
use App\Actions\Users\UpdateUserAction;
use App\helpers\HandleImage;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreUserRequest;
use App\Http\Requests\Users\UpdateUserRequest;
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
    public function edit(User $user):View
    {
        return view('users.create',new UsersViewModel($user));
    }
    public function update(UpdateUserRequest $request, User $user)
    {
        app(UpdateUserAction::class)->handle($user,$request->validated());
        return redirect()->route('users.index')->with('success','update user');
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success','success to delete');
    }
}