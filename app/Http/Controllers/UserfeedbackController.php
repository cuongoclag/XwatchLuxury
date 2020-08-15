<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserfeedbackController extends Controller
{
    public function FeedbackAdd(){
        return view('admin/feedback/feedback-add');
    }
    public function FeedbackList()
    {
    //Truy vấn toàn bộ dữ liệu trong bảng Feedback
        $feedback = DB::table('feedback')->get();
        return view('admin/feedback/feedback-list')->with(['feedback' => $feedback]);
    }
    //delete 
	public function delete_Feedback($user)
	{
		$member = DB::table('feedback')
			->where("Customerid", $user)
			->delete();
		return redirect()->action('UserfeedbackController@FeedbackList');
	}
    //process - Form update
    public function update($Customerid){
        $rs = DB::table('feedback')
            -> where('customerid',$Customerid)
            ->first();
            return view('admin/feedback/feedback-edit', ['rs' => $rs]);
    }
  
    public function updateProcess(Request $request, $feedback)
    {
        $Customerid =$request->input('customerid');
        $Title = $request->input('title');
        $Comment = $request->input('comment');
        $rs = DB::table('feedback')
            ->where('customerid', $Customerid)
            ->update(['customerid' => $Customerid,'Title' => $Title, 'Comment' => $Comment]);
        return redirect()->action('UserfeedbackController@FeedbackList');
    }
}
