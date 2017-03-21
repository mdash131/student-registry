<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Students;
use DB;
class StudentsController extends Controller
{
    public function showstudentform(Request $request)
   {
        $name = $request->name;
        $studentNum = $request->studentNum;
        $course = $request->course;
        $age = $request->age;
        $address = $request->address;
        $guardian = $request->guardian;
        $guardianNum = $request->guardianNum;

 
        $formholder = Students::all();

        return view('studentformcomplete', compact('formholder'), [
            'name' => $name,
            'studentNum' => $studentNum,
            'course' => $course,
            'age' => $age,
            'address' => $address,
            'guardian' => $guardian,
            'guardianNum' => $guardianNum
        ]);   
    }

    public function addnewStd(Request $request)
   {
   		return view('studentform');
   }
	
    public function insertstudentform(Request $request)
    {
    	$name = $request->name;
    	$studentNum = $request->studentNum;
    	$course = $request->course;
    	$age = $request->age;
    	$address = $request->address;
    	$guardian = $request->guardian;
    	$guardianNum = $request->guardianNum;

    	$member = new Students;
    	$member->name = $name;
    	$member->studentNum = $studentNum;
    	$member->course = $course;
    	$member->age = $age;
    	$member->address = $address;
    	$member->guardian = $guardian;
    	$member->guardianNum = $guardianNum;
    	$member->save();

    	$formholder = Students::all();

    	return view('studentformcomplete', compact('formholder'), [
    		'name' => $name,
    		'studentNum' => $studentNum,
    		'course' => $course,
    		'age' => $age,
    		'address' => $address,
    		'guardian' => $guardian,
    		'guardianNum' => $guardianNum
    	]);
    }

    public function showstudentform2edit(Request $request)
    {

        $id = $request->id;
        $name = $request->name;
        $studentNum = $request->studentNum;
        $course = $request->course;
        $age = $request->age;
        $address = $request->address;
        $guardian = $request->guardian;
        $guardianNum = $request->guardianNum;


       $formholder = DB::select('select * from students where id = ?',[$id]);
        return view('editstudentform', compact('formholder'), [

            'name' => $name,
            'studentNum' => $studentNum,
            'course' => $course,
            'age' => $age,
            'address' => $address,
            'guardian' => $guardian,
            'guardianNum' => $guardianNum
        ]);
    }

    public function updatestudentform(Request $request,$id)
    {
        $name = $request->name;
        $studentNum = $request->studentNum;
        $course = $request->course;
        $age = $request->age;
        $address = $request->address;
        $guardian = $request->guardian;
        $guardianNum = $request->guardianNum;

        DB::update('update students set name = ? where id = ?',[$name,$id]);
        DB::update('update students set studentNum = ? where id = ?',[$studentNum,$id]);
        DB::update('update students set course = ? where id = ?',[$course,$id]);
        DB::update('update students set age = ? where id = ?',[$age,$id]);
        DB::update('update students set address = ? where id = ?',[$address,$id]);
        DB::update('update students set guardian = ? where id = ?',[$guardian,$id]);
        DB::update('update students set guardianNum = ? where id = ?',[$guardianNum,$id]);
        
 
        $formholder = Students::all();

        return view('studentformcomplete', compact('formholder'), [
            'name' => $name,
            'studentNum' => $studentNum,
            'course' => $course,
            'age' => $age,
            'address' => $address,
            'guardian' => $guardian,
            'guardianNum' => $guardianNum
        ]);     }

    public function deletestudentform(Request $request,$id)
    {


        $id = Students::find( $id );
        $id ->delete();

        $name = $request->name;
        $studentNum = $request->studentNum;
        $course = $request->course;
        $age = $request->age;
        $address = $request->address;
        $guardian = $request->guardian;
        $guardianNum = $request->guardianNum;

 
        $formholder = Students::all();

        return view('studentformcomplete', compact('formholder'), [
            'name' => $name,
            'studentNum' => $studentNum,
            'course' => $course,
            'age' => $age,
            'address' => $address,
            'guardian' => $guardian,
            'guardianNum' => $guardianNum
        ]); 
    }

    


}
