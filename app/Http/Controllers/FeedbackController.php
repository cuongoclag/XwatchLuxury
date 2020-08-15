<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\feedback;

use Illuminate\Support\Facades\DB;

class FeedbackController extends Controller
{
    public function Feedback(Request $request){
    	DB::table('feedback')->insert([
			'Title'=>$request->title, 
			'Comment'=>$request->comment,
		]); 
			return redirect('admin/feedback/feedback-list');
	}
}
