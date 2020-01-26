<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateRequest;
use App\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $users = $model->all();
        return view('pages.user.index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified user
     *
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        $roles = DB::table('roles')->get();
        return view('pages.user.edit', compact(['user', 'roles']));
    }


    /**
     * Show the form for creating the specified user
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('pages.user.create', ['roles' => DB::table('roles')->get()]);
    }

    /**
     * Store a newly created user in storage
     *
     * @param UserRequest $request
     * @param User $user
     * @return mixed
     */
    public function store(UserRequest $request, User $user)
    {
        $user->create($request->merge(['password' => Hash::make($request->get('password'))])->all());

        return redirect()->route('user.index')->withStatus(__('User successfully created.'));
    }

    /**
     * Update the specified user in storage
     *
     * @param \App\Http\Requests\UpdateRequest $request
     * @param \App\User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $hasPassword = $request->get('password');

        $user->update(
            $request->merge(['password' => Hash::make($request->get('password'))])
                ->except([$hasPassword ? '' : 'password']
                )
        );

        return redirect()->route('user.edit', $user)->withStatus(__('User successfully updated.'));
    }

    /**
     * Delete user
     *
     * @param User $user
     * @return mixed
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->withStatus(__('User successfully deleted.'));
    }

    /**
     * Get the phone record associated with the user.
     */
    public function role()
    {
        return $this->hasOne('App\Role', 'role_id', 'id');
    }
}
