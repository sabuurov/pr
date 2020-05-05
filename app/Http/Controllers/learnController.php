<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\learnModel;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\DB;

class learnController extends Controller
{
	public function index(){
		return view('welcome');
	}

	public function registr() {
    	return view('reg');
	}

	public function sign(){
		return view('rs');
	}

	public function wel(){
		return view('welc');
	}

	public function profile() {
    	return view('profile');
	}

	public function edit() {
    	return view('edit');
	}

	public function lesson() {
    	return view('lesson');
	}

	public function top() {
		return view('top');
	}

	public function store(Request $request){

		$result=DB::insert("insert into registration(firstName, lastName, email, password) values(?, ?, ?, ?)", [$request->input('firstName'), $request->input('lastName'), $request->input('email'), $request->input('password')]);
		return view('welc');
	}

	public function test(Request $request){
		if(!empty($_POST)):
			$ques1 = $_POST['ques1'];
			$ques2 = $_POST['ques2'];
			$ques3 = $_POST['ques3'];

			if($ques1=='' or $ques2=='' or $ques3==''){
		    	echo '<p> You did not answer the all questions <a href="/lesson"> <br> Back </a> </p>';
		    }else{
				$result = 0;
				if ($ques1 == 3) {
					$result += 1;
				}
				if ($ques2 == 2) {
					$result += 1;
				}
				if ($ques3 == 1) {
					$result += 1;
				}
				if ($result < 2) {
					echo '<strong> Try again! </strong>';
				} else {
					echo '<strong> Perfect! </strong>';
				}
			}
		else: 
		endif;
	}
}

// 	public function index() {
// 		$learn = learn::all();
// 		return view('welcome', compact('learn'));
// 	}

// 	public function create() {
// 		return view('create');
// 	}

// 	public function store(Request $request) {
// 		$this->validate($request, [
// 			'firstName'=>'required',
// 			'lastName'=>'required',
// 			'email'=>'required',
// 			'password'=>'required'
// 		/]);

// 		$learn = new learn;
// 		$learn->firstName = $request->firstName;
// 		$learn->lastName = $request->lastName;
// 		$learn->email = $request->email;
// 		$learn->password = $request->password;
// 		$learn->save();
// 		return redirect(route('home'))->with('successMSG', 'Learner Successfully Registrated!');
// 	}

// 	public function edit($id) {
// 		$learn = learn::find($id);
// 		return view('edit', compact('learn'));
// 	}

// 	public function update(Request $req, $id) {
// 		$this->validate($req, [
// 			'firstName'=>'required',
// 			'lastName'=>'required',
// 			'email'=>'required',
// 			'password'=>'required'
// 		]);

// 		$learn = new learn;
// 		$learn->firstName = $request->firstName;
// 		$learn->lastName = $request->lastName;
// 		$learn->email = $request->email;
// 		$learn->password = $request->password;
// 		$learn->save();
// 		return redirect(route('home'))->with('successMSG', 'Learner Successfully Updateded!');			
// 	}

// 	public function delete($id) {
// 		learn::find($id)->delete();
// 		return redirect(route('home'))->with('successMSG', 'Learner Successfully Deleted!')
// 	}