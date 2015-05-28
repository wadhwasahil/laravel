<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

//use Illuminate\Http\Request;
use \App\student;
use Request;
class StudentController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$arr=student::all();
		return view("Student_Display")->with('arr',$arr);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("Add_Student");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$arr=Request::all();
		unset($arr['_token']);
		$arr['year']=date("Y");
		student::create($arr);
		$temp=student::all();
		return view("Student_Display")->with('arr',$temp);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$arr=student::find($id);
		$id=$arr['id'];
		return view('Edit_Student',compact('arr','id'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function delete($id)
	{
		$user=student::find($id);
		$user->delete();
		return redirect('/');
	}
	public function newupdate($id)
	{
		$arr=Request::all();
		unset($arr['_token']);
		$arr['year']=date("Y");
		$user=student::find($id);
		//dd($user);
		$user['name']=$arr['name'];
		$user['address']=$arr['address'];
		$user['gender']=$arr['gender'];
		$user['year']=$arr['year'];
		$user['activities']=$arr['activities'];
		$user->save();	
		$user=student::find($id);
		$temp=student::all();
		return redirect('/');
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
