<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\alert;
use function Laravel\Prompts\form;

class RoleController extends Controller
{

    public function store(Request $request)
    {
        // Validate input
        $validatedData = $request->validate([
            'name' => 'required|unique:roles|max:255',
            [
                'name.required' => 'Tên role là bắt buộc.',
                'name.unique' => 'Tên role đã tồn tại.',
                'name.max' => 'Tên role không được vượt quá 255 ký tự.',
            ]
        ]);

        // Save role to database
        DB::table('roles')->insert([
            'name' => $validatedData['name'],
            'guard_name' => 'web',
            'created_at' => now("Asia/Ho_Chi_Minh"),
            'updated_at' => now("Asia/Ho_Chi_Minh"),
        ]);

        return redirect()->route('roles.create')->with('status', 'Role created successfully!');
    }
    public function edit_get($id=null)
    {
        // Tìm role bằng ID, nếu không tìm thấy sẽ trả về lỗi 404
        if($id == null){
            return redirect()->route("roles.index")->with('alert', 'The role ID cannot be null.');;}
        $role = DB::table('roles')->find($id);

        if (!$role) {
            return redirect()->route("roles.index")->with('alert', 'The role you\'re trying to edit does not exist.');;
        }

        // Trả về view với dữ liệu role
        return view('admin.role.edit', ['role' => $role]);
    }
    public function edit_post(Request $request)
    {   
        
        // Validate input
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required|unique:roles|max:255',
            [
                'name.required' => 'Tên role là bắt buộc.',
                'name.max' => 'Tên role không được vượt quá 255 ký tự.',
            ]
        ]);
        $oldName = DB::table('roles')
        ->where('id', $validatedData['id'])
        ->value('name');

    if ($validatedData['name'] == $oldName) {
        // If the new name is the same as the old name, don't display a message
        return redirect()->route('roles.index')->with('status', 'Role updated successfully!');
    }
        // Save role to database
        DB::table('roles')
            ->where('id', $validatedData['id'])
            ->update([
                'name' => $validatedData['name'],
                'updated_at' => now("Asia/Ho_Chi_Minh"),
            ]);

        return redirect()->route('roles.index', ['id' => $validatedData['id']])->with('status', 'Role updated successfully!');
    }
}