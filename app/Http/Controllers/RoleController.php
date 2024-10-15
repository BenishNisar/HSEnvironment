<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class RoleController extends Controller
{
    function index()
    {
        $Roles = DB::select('select * from role');
        return view("Dashboard.admin.role.index", compact("Roles"));
    }

    function add()
    {
        return view("Dashboard.admin.role.add");
    }

    function store(Request $req)
    {
        $req->validate([
            'role_name' => 'required|min:3'
        ]);
        DB::insert('insert into role (role_name) values (?)', [$req->role_name]);
        return redirect()->route('dashboard.admin.role.index');

    }

    function edit($id)
    {
        $role = DB::select('select * from role where id = ?', [$id]);
        if (empty($role)) {
            return redirect()->route('dashboard.admin.role.index')->with('error', 'Role not found');
        }
        // Access the first element of the array
        $role = $role[0];
        return view("Dashboard.admin.role.edit", compact('role'));
    }


    function update(Request $request, $id)
    {
        $request->validate([
            'role_name' => 'required|string|max:255',
        ]);

        DB::update('update role set role_name = ?, updated_at = ? where id = ?', [$request->role_name, now(), $id]);

        return redirect()->route('dashboard.admin.role.index')->with('success', 'Role updated successfully.');
    }



    function delete($id)
    {
        DB::delete('delete from role where id = ?', [$id]);
        return redirect('dashboard/admin/role');
    }
}
