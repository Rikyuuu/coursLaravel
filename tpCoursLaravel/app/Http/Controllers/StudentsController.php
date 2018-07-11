<?php

namespace App\Http\Controllers;

use App\Student;
//use AppBundle\Entity\Student;

class StudentsController extends Controller
{
    public function ajout()
    {
        return view('ajoutStudent');
    }

    public function traitementAjout()
    {
        request()->validate([
            'firstname' => ['required'],
            'lastname' => ['required'],
        ]);

        $student = Student::create([
            'firstname' => request('firstname'),
            'lastname' => request('lastname'),
        ]);
    
        return redirect('students');
    }

    public function afficher()
    {
        $students = Student::all();

        return view('students', [
            'students' => $students
        ]);
    }

    // test
    public function traitementDelete()
    {
        $id = 4;
        dump(Student::where('id', $id)->get());
        //$deleteStudent = Student::where('id', $id)->delete();

        //return redirect('/students');
        return 'ok';
    }
}
