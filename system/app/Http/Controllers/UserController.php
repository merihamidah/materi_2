<?php 

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use App\Http\Requests\UserStoreRequest;


class UserController extends Controller {
    function index(){
        //relationship existence 
        //user yang memiliki produk
        //$data['list_user'] = User::has('produk')->get();
        //user yang memiliki produk lebih dari sama dengan 2
        //$data['list_user'] = User::has('produk' , '>=' , '2')->get();
        $data['list_user'] = User::withCount('produk')->get();
       return view('user.index', $data);
    }
    function create(){
        return view('user.create');
    }
    
    function store(UserStoreRequest $request ){
        /* validate manual
        $validated = request()->validate([
            'nama' => ['required'],
            'username' => ['required'],
            'email' => ['required']
        ]);*/
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();

        $userDetail = new UserDetail;
        $userDetail->id_user = $user->id;
        $userDetail->no_handphone = request('no_handphone');
        $userDetail->save();
        
        return redirect('admin/user')->with('success','Data Berhasil Ditambahkan');
    }
    function show(User $user){
        //show data user yang login
        //yang tiak login tidak akan ditampilkan
        $loggedUser = request()->user();
        if($loggedUser->id != $user->id) return abort(403);//abort dilakukan unutuk mengamankan data dari user yang tidak berhak 

         $data['user'] = $user;
        return view('user.show',$data);
    }
    function edit(User $user){
         $data['user'] = $user;
        return view('user.edit',$data);
    }
    function update(User $user){
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
       if(request('password')) $user->password = bcrypt(request('password'));
        $user->save();
        
        
        return redirect('admin/user')->with('success','Data Berhasil Diedit');
    }
    function destroy(User $user){
        $user->delete();
         return redirect('admin/user')->with('danger', 'Data berhasil dihapus');
    }
    
     function filter(){
            $nama = request('nama');
            $username = request('username');
            $email = request('email');
            $data['list_user'] = User::where('nama','like', "%$nama%")->where('username', 'like', "%$username%")->where('email', 'like', "%$email%")->get();
            $data['nama'] = $nama;
            $data['username'] = $username;
            $data['email'] = $email;

        return view('user.index', $data);
    }
}

