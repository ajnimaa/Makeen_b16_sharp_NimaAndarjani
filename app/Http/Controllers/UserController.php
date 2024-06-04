<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserEditRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Illuminate\Contracts\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function login(Request $request)
    {
        $user = User::select('id', 'phone_number', 'password')
            ->where('phone_number', $request->phone_number)
            ->first();
        if (!$user) {
            return response()->json('user not found');
        }

        if (!Hash::check($request->password, $user->password)) {
            return response()->json('password not corect');
        }

        $token = $user->createToken($request->phone_number)->plainTextToken;

        return response()->json(["token" => $token]);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json('user loggedout');
    }

    public function index(Request $request,$id = null)
    {
        if ($id) {
            $users = User:://with(
                // 'Note:id,note_subject,note_text,user_id',
                // 'Task:id,task_subject,task_description,user_id,team_id,'
            //)
                where('id' , $id)->first();//orderby('id', 'desc');
        } else {
            $users = User:://with(
                // 'Note:id,note_subject,note_text,user_id',
                // 'Task:id,task_subject,task_description,user_id,team_id,'
            //)
                //where('id' , $id)
                orderBy('id', 'desc')->get();
        }
        $fillter = $request->fillter;
        if ($fillter) {
            $user = new User();
            $users = $user->with('orders')->whereHas('orders', function (Builder $query) use ($fillter) {
                $query->where('code', $fillter);
            })->paginate(10);
        }
        return response()->json($users);
    }

    public function store(UserStoreRequest $request)
    {

        $user = User::create($request->merge([
            "password" => Hash::make($request->password)
        ])->toArray());
            $user->assignRole('super_admin');
        return response()->json($user);
    }

    public function edit(UserEditRequest $request, $id)
    {

        $user = User::where('id', $id)->update($request->toArray());
        return response()->json($user);
    }

    public function delete($id)
    {

        $user = User::where('id', $id)->delete();
        return response()->json($user);
    }

    public function register(UserRegisterRequest $request)
    {
        $user = User::create($request->toArray());
        return response()->json($user);
    }

    public function storeprofile(Request $request): string
    {
        $path = $request->file('product image')->store('product images');
        return $path;
    }

}
