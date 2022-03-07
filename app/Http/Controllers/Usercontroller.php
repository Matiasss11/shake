<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $users = User::all()->sortByDesc('created_at')->values();

            return DataTables::of($users)
                ->addColumn('actions', 'users.action')
                ->rawColumns(['actions'])
                ->editColumn('active', function ($query){
                    return $query->active == true ? 'Esta activo' : 'Inactivo';
                })
                ->editColumn('status', function ($query){
                   return $query->status == 1 ? 'Habilitado' : 'Inhabilitado';
                })
                ->make(true);
        }

        return view('users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->user = $request->get('user');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->role = json_encode($request->get('role'));
        $user->active = true;
        $user->status = 1;
        $user->save();
        return Redirect::to('users')->with('notice', 'El usuario ha sido creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit',compact('user'));
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
        $user = User::findOrFail($id);
        $user->user = $request->get('user');
        $user->email = $request->get('email');
        if ($request->get('password')!==null) {
            $user->password = bcrypt($request->get('password'));
        }
        if ($request->get('role')) {
            $user->role = json_encode($request->get('role'));
        }
        
        $user->update();
        $nombre = $user->user;
        return Redirect::to('users')->with('notice', "El usuario $nombre ha sido modificado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) 
    {
        $user=User::findOrFail($id);
        $nombre=$user->user;
        $user->delete();
        return Redirect::to('users')->with('notice', "El user $nombre ha sido dado de baja correctamente");
    }
}
