<?php

namespace App\Http\Controllers;

use App\Student;

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

        $student = Student::Create([
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
        public function delete()
        {
            $students = Student::all();

            dump($students);

            return view('students', [
                'students' => $students
            ]);
            //dump(Student::where('id', $id)->get());
            //$deleteStudent = Student::where('id', $id)->delete();
    
            //return redirect('/students');
        }

        //test
        public function traitementDelete()
        {
            //$students = Student::where('id', $id)->delete();
            $students = Student::all();
            
            $deleteStudent = Student::where('id', $students->id)->delete();
            
            return 'ok';
        }
}
