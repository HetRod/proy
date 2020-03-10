<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\User;

class Page extends Model
{

    // protected $table = 'post';

    // protected $primaryKey = '';


    // protected $fillable = [
    //     'username',
    //     'password',
    //     '...'
    // ];
    

    public static function getuserData($id=null){
        $value = User::all();
        // Forma del Tutorial incluyendo metodos de query builder
        // $value=DB::table('users')->orderBy('id', 'asc')->get(); 
        return $value;
   
    }

    public static function insertData($data){

        $user = new User;
        $user->username = $data['username'];
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();
        $idaux = User::where('email', $data['email'])->first(); 
        return $idaux['id'];
        

        // Forma del Tutorial incluyendo metodos de query builder
        // $value=DB::table('users')->where('username', $data['username'])->get();
        // if($value->count() == 0){
        //     $insertid = DB::table('users')->insertGetId($data);
        //     return $insertid;
        // }else{
        //     return 0;
        // }

    }

    public static function updateData($id,$data){
        $user = User::find($id);
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->save();
        
        // Forma del Tutorial incluyendo metodos de query builder
        //DB::table('users')->where('id', $id)->update($data);
    }

    public static function deleteData($id=0){
        User::destroy($id);
        // Forma del Tutorial incluyendo metodos de query builder
        //DB::table('users')->where('id', '=', $id)->delete();
    }
   
}
