<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

use Illuminate\Support\Facades\DB;

class Usercontroller extends Controller
{
    function save(Request $req)
    {
    // {
    //     $member = new Member();
    //     $member->roll = $req->roll;
    //     $member->name = $req->name;
    //     $member->dept = $req->dept;
    //     $member->save();
    //     return redirect('add');

    // $data = Member::all();
    // return view ('list',['members' => $data]);

    // }
    // function delete($roll)
    // {
    //     $data =  Member::where('roll',$roll);
    //     $data->delete();
    //     return redirect('list');

    // }
    
    // function edit($id)
    // {
    //     $data =  Member::find($id);
    //     // $data->delete();
    //     // return redirect('list');
    //     return view('edit',['data'=>$data]);

    // }
    // function update(Request $req)
    // {
    //     $data = Member::find($req->id);
    //     $data->name=$req->name;
    //     $data->roll=$req->roll;
    //     $data->dept=$req->dept;
    //     $data->save();
    //     return redirect('list');
    // // }
    // return DB::table('members')
    // ->join('company','members.id','=','company.id')
    // ->select('members.name','company.cname')
    // // ->get();
    // return "Controller working";
   return Member::find(2)->CompanyData;
}
}