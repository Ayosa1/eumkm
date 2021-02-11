<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use Auth;
use Carbon\Carbon;

class UserAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function smauiicreate()
    {
        return view('admin.users.smauiicreate'); 
    }

    public function okoccreate()
    {
        return view('admin.users.okoccreate'); 
    }

    public function usercreate()
    {
        return view('admin.users.usercreate'); 
    }
    
    public function indexStaff1()
    {
        $staff1 = DB::table('users')
        ->where('users.level','=','staffuii')
    ->get();

    return view('admin.users.staffsmauii',compact('staff1'));
    }
    

    public function staff1store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'jenis_kelamin'=>'required',
            'email'=> 'required|email|unique:anggota_umkm',
            'domisili'=>'required|min:3',
            'password'=> 'required|min:5'        
        ]);

        $leveluser = 'staffuii';
        User::create([
            'name' => $request->name,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'email' => $request->email,
            'level' => $leveluser,
            'domisili' => $request->domisili,
            'password'=> bcrypt($request->password)
        ]);

        return redirect()->route('smauii');
    }


    public function staff2store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'jenis_kelamin'=>'required',
            'email'=> 'required|email|unique:anggota_umkm',
            'domisili'=>'required|min:3',
            'password'=> 'required|min:5'        
        ]);

        $leveluser = 'staffokeoc';
        User::create([
            'name' => $request->name,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'email' => $request->email,
            'level' => $leveluser,
            'domisili' => $request->domisili,
            'password'=> bcrypt($request->password)
        ]);

        return redirect()->route('okeoc');
    }

    public function userstore(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'jenis_kelamin'=>'required',
            'email'=> 'required|email|unique:anggota_umkm',
            'domisili'=>'required|min:3',
            'password'=> 'required|min:5',  
            'tanggal_lahir'=> 'required'        
        ]);

        $leveluser = 'user';
        User::create([
            'name' => $request->name,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'email' => $request->email,
            'level' => $leveluser,
            'domisili' => $request->domisili,
            'password'=> bcrypt($request->password),
            'tanggal_lahir' => $request->tanggal_lahir,
        ]);

        return redirect()->route('useradmin');
    }

    public function staff1edit($id)
    {
        $staff1edit = DB::table('users')
        ->where('users.id','=',$id)
        ->get();
        return view('admin.users.staff1edit', compact('staff1edit'));
    }

    public function staff2edit($id)
    {
        $staff2edit = DB::table('users')
        ->where('users.id','=',$id)
        ->get();
        return view('admin.users.staff2edit', compact('staff2edit'));
    }

    public function useredit($id)
    {
        $useredit = DB::table('users')
        ->where('users.id','=',$id)
        ->get();
        return view('admin.users.useredit', compact('useredit'));
    }

    public function indexStaff2()
    {
        $staff2 = DB::table('users')
        ->where('users.level','=','staffokeoc')
    ->get();

    return view('admin.users.staffokoc',compact('staff2'));
    }

    public function indexusers()
    {
        $user = DB::table('users')
        ->where('users.level','=','user')
    ->get();

    return view('admin.users.userumkm',compact('user'));
    }

    public function updatestaff1($id,Request $request)
    {

        $this->validate($request, [
            'jenis_kelamin' => 'required',
            'password' => 'confirmed',
        ]);
        $getuser = User::find($id);
        $getuser->name = $request->name;
        $getuser->jenis_kelamin = $request->jenis_kelamin;
        $getuser->email = $request->email;
        $getuser->domisili = $request->domisili;
        if(!empty($request->password))
        {
            $getuser->password = Hash::make($request->password);
        }
        $getuser->update();

        return redirect()->route('smauii');
    }

    public function updatestaff2($id,Request $request)
    {

        $this->validate($request, [
            'jenis_kelamin' => 'required',
            'password' => 'confirmed',
        ]);
        $getuser = User::find($id);
        $getuser->name = $request->name;
        $getuser->jenis_kelamin = $request->jenis_kelamin;
        $getuser->email = $request->email;
        $getuser->domisili = $request->domisili;
        if(!empty($request->password))
        {
            $getuser->password = Hash::make($request->password);
        }
        $getuser->update();

        return redirect()->route('okeoc');
    }

    public function updateuser($id,Request $request)
    {

        $this->validate($request, [
            'jenis_kelamin' => 'required',
            'password' => 'confirmed',
        ]);
        $getuser = User::find($id);
        $getuser->name = $request->name;
        $getuser->jenis_kelamin = $request->jenis_kelamin;
        $getuser->email = $request->email;
        $getuser->domisili = $request->domisili;
        $getuser->tanggal_lahir = $request->tanggal_lahir;
        if(!empty($request->password))
        {
            $getuser->password = Hash::make($request->password);
        }
        $getuser->update();

        return redirect()->route('useradmin');
    }

    public function smauiidelete($id)
    {
        $anggota = User::find($id);
        $anggota->delete();
        return redirect()->route('smauii');
    }

    public function okeocdelete($id)
    {
        $anggota = User::find($id);
        $anggota->delete();
        return redirect()->route('okeoc');
    }

    public function userdelete($id)
    {
        $anggota = User::find($id);
        $anggota->delete();
        return redirect()->route('userumkm');
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
