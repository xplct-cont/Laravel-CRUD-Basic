<?php

namespace App\Http\Controllers;
use PDF;
use Illuminate\Http\Request;
use App\Models\Student;
use DB;

class CrudController extends Controller
{
    public function index(){

        $crud = DB::table('students')->where('created_at' , '!=', null)->get();
        return view ('Crud.index', compact('crud'));
    }

    public function create(){
        return view('Crud.create');
    }

    public function store(Request $request){
        $crud = new Student();
        $crud->lname = $request->input('lname');
        $crud->fname = $request->input('fname');
        $crud->course = $request->input('course');
        $crud->year = $request->input('year');
       

        $crud->save();


        return redirect('/')->with('status', 'New Student Added Successfully!');
    }

    public function destroy($id){
        $crud = Student::find($id);
        $crud->delete();
        return redirect()->back()->with('status', 'Student Removed Successfully!');
   }

   public function edit($id){
    $crud = Student::find($id);

    return view('Crud.edit', compact('crud'));
   }

   public function update(Request $request, $id){
    $crud = Student::find($id);
    $crud->lname = $request->input('lname');
    $crud->fname = $request->input('fname');
    $crud->course = $request->input('course');
    $crud->year = $request->input('year');

   
    $crud->update();
    return redirect("/")->with('status', 'Student Updated Successfully!');

 }
}
