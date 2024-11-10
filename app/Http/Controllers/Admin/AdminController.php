<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::latest()->get();
        return view('admin.admins.index', with([
            'admins' => $admins, 
        ]));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.admins.create', [
            // 'roles' => $roles,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'user_name' => 'required',
        //     'name' => 'required',
        //     'email' => 'required|email|unique:admins,email',
        //     'certificate' => 'nullable|integer',
        //     'password' => 'required|min:6|confirmed',
        //     'password_confirmation' => 'required',
        //     'role' => 'required'
        // ]);

        // // $data = $request->only([
        // //     'user_name',
        // //     'name',
        // //     'email',
        // //     'certificate',
        // //     'password',
        // //     'password_confirmation',
        // //     'role',
        // // ]);
        // // dd($data);

        // try {
        //     DB::beginTransaction();

        //     // Logic for saving admin data
        //     $createAdmin = Admin::create([
        //         'username' => $request->user_name,
        //         'name' => $request->name,
        //         'email' => $request->email,
        //         'password' => Hash::make($request->password) // Ensure the password is hashed properly
        //     ]);

        //     if (!$createAdmin) {
        //         DB::rollBack();
        //         return back()->with('error', 'Something went wrong while saving user data');
        //     }

        //     $admin = Admin::findOrFail($createAdmin->id);

        //     // Set initial roles to zero
        //     $admin->is_admin = 0;
        //     $admin->is_mod = 0;
        //     $admin->is_staff = 0;

        //     // Assign roles based on the certificate value
        //     switch ($request->input('certificate')) {
        //         case 3:
        //             $admin->is_admin = 1;
        //             break;
        //         default:
        //             $admin->is_staff = 1;
        //             break;
        //     }
        //     $admin->save();
            
        //     $roles = $request->get('role');
        //     // $admin->assignRole($roles); 
        //     $admin->roles()->detach(); // Detach existing roles
        //     foreach ($roles as $roleName) {
        //         $role = Role::where('name', $roleName)->firstOrFail();
        //         $admin->roles()->attach($role->id);
        //     }


        //     DB::commit();
        //     return redirect()->route('administrators.index')->with('message', 'Admin Created Successfully.');
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     return back()->with('error', 'An error occurred: ' . $th->getMessage());
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $admin = Admin::where('id', $id)->first();
        // // // dd($admins);

        // // $permissions = Permission::get();
        // // $permissions = $admins->getAllPermissions();
        // // $admin = $admins->hasAnyPermission($permissions);
        // $admin = $admin->hasRole('Super Super Admin');

        // dd($admin);

        // return view('admin.admins.administrators.show')->with([
        //     // 'admins' => $admins
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
        // $admin =  Admin::whereId($id)->first();
        // $roleroles = $admin->getRoleNames()->toArray();
        // $roleroles = $admin->getRoleNames()->pluck('name')->toArray();
        // dd($roleroles);
        // $roles = Role::get();

        // if (!$admin) {
        //     return back()->with('error', 'admins Not Found');
        // }

        // return view('admin.admins.administrators.edit')->with([
        //     // 'admin' => $admin,
        //     // 'roles' => $roles,
        //     // 'roleroles' => $roleroles
        // ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // $admin = Admin::findOrFail($id);

        // $request->validate([
        //     'user_name' => '',
        //     'name' => '',
        //     'email' => 'email|unique:admins,email,' . $admin->id,
        //     'pcertificate' => 'nullable|integer',
        //     'password' => 'nullable|min:6|confirmed',
        //     'password_confirmation' => 'nullable|same:password',
        //     'role' => ''
        // ]);

        // // $data = $request->only([
        // //     'user_name',
        // //     'name',
        // //     'email',
        // //     'pcertificate',
        // //     'password',
        // //     'password_confirmation',
        // //     'role',
        // // ]);
        // // dd($data);

        // try {
        //     DB::beginTransaction();

        //     if ($admin) {
        //         if ($request->password) {
        //             $hashedPassword = Hash::make($request->password);
        //             $admin->password = $hashedPassword;
        //         }
        //         if ($request->username) {
        //             $username = $request->username;
        //             $admin->username = $username;
        //         }
        //         if ($request->name) {
        //             $name = $request->name;
        //             $admin->name = $name;
        //         }
        //         if ($request->email) {
        //             $email = $request->email;
        //             $admin->email = $email;
        //         }
        //         $admin->save();
        //     }
            
        //     $admin->is_admin = 0;
        //     $admin->is_mod = 0;
        //     $admin->is_staff = 0;

        //     // Assign roles based on the pcertificate value
        //     switch ($request->input('pcertificate')) {
        //         case 3:
        //             $admin->is_admin = 1;
        //             break;
        //         default:
        //             $admin->is_staff = 1;
        //             break;
        //     }
        //     $admin->save();
            

        //     $roles = $request->get('role');
        //     // $admin->assignRole($roles); // this is currently not functioning
        //     $admin->roles()->detach();
        //     foreach ($roles as $roleName) {
        //         $role = Role::where('name', $roleName)->firstOrFail();
        //         $admin->roles()->attach($role->id);
        //     }


        //     DB::commit();
        //     return redirect()->route('administrators.index')->with('message', 'Admin Created Successfully.');
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     return back()->with('error', 'An error occurred: ' . $th->getMessage());
        // }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // try {
        //     DB::beginTransaction();

        //     $deleteAdmin = Admin::whereId($id)->delete();

        //     if (!$deleteAdmin) {
        //         DB::rollBack();
        //         return back()->with('error', 'There is an error while deleting user.');
        //     }

        //     DB::commit();
        //     return redirect()->route('administrators.index')->with('message', 'User Deleted successfully.');
        // } catch (\Throwable $th) {
        //     DB::rollBack();
        //     throw $th;
        // }
    }
}
