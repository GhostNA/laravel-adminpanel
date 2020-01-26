<?php


namespace App\Http\Controllers;


use App\Role;
use App\Http\Requests\RoleRequest;
use Illuminate\Contracts\View\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RoleController extends Controller
{
    /**
     * Display a listing of the users role
     *
     * @param Role $role
     * @return Factory|View
     */
    public function index()
    {
        return view('pages.role.index', ['roles' => Role::all()]);
    }

    /**
     * Show the form for creating the specified role
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('pages.role.create');
    }

    /**
     * Store a newly created role in storage
     *
     * @param RoleRequest $request
     * @return mixed
     */
    public function store(RoleRequest $request)
    {
        Role::create($request->all());

        return redirect()->route('role.index')->withStatus(__('Role successfully created.'));
    }

    /**
     * Show the form for editing the specified role
     *
     * @param Role $role
     * @return Factory|View
     */
    public function edit(Role $role)
    {
        return view('pages.role.edit', compact('role'));
    }

    /**
     * Delete role
     *
     * @param Role $role
     * @return mixed
     * @throws \Exception
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('role.index')->withStatus(__('Role successfully deleted.'));
    }


}
