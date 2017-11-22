<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use DB;

class MemberController extends Controller
{
   public function index(){
       return view('admin.member.addMember');
   }
   public function saveMember(Request $request){
      // return $request->all();
      Member::create($request->all());
      return redirect('member/add')->with('message','Member saved successfully');

   }
   public function manageMember(){
       $members = Member::all();
       return view('admin.member.manageMember',['members'=> $members]);
   }
 public function offlineMember($id){
     $memberById = Member::find($id);
     $memberById->member_status = 0;
     $memberById->save();

     //DB::table('members')->where('id',$id)->update(['member_status' => 0]);
     return redirect('/member/manage')->with('message','Member now offline ');
 }
    public function onlineMember($id){
        // $memberById = Member::find($id);
        //$memberById->member_status = 1;
        //$memberById->save();

      DB::table('members')->where('id',$id)->update(['member_status' => 1]);
        return redirect('/member/manage')->with('message','Member now online');
    }
public function editMember($id)
{
    $memberById = Member::find($id);
    return view('admin.member.editMember',['memberById' => $memberById]);
}
public function updateMember(Request $request){
       $memberId = $request->member_id;
       $member = Member::find($memberId);
       $member->member_name = $request->member_name;
       $member->member_type = $request->member_type;
       $member->member_email = $request->member_email;
       $member->member_phone_number = $request->member_phone_number;
       $member->member_status = $request->member_status;
       $member->save();
    return redirect('/member/edit/'.$memberId)->with('message','Member info updated seccessfully');

}
public function deleteMember(Request $request){

   $member = Member::find($request->member_id);
   $member->delete();
   return redirect('/member/manage')->with('message','member deleted successfully');

}

}
