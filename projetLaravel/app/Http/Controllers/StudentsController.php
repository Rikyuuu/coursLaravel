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
            $id = request('id');
            dump($id);
            $students = Student::all();

            return view('students', [
                'students' => $students
            ]);
            //dump(Student::where('id', $id)->get());
            //$deleteStudent = Student::where('id', $id)->delete();
    
            //return redirect('/students');
        }

        //test
        public function traitementDelete($id)
        {
            Student::where('id', $id)->delete();

            return 'ok';
        }
}
