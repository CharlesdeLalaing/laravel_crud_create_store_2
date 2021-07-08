<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index() {
        $students = Student::all();
        $girls = DB::table('students')->where('genre', '=', 'femme')->get();
        $guys = DB::table('students')->where('genre', '=', 'homme')->get();
        return view('welcome', compact('students', 'girls', 'guys'));
    }
    public function store(Request $request){
        $store = new Student;
        $store->nom = $request->nom;
        $store->genre = $request->genre;
        $store->email = $request->email;
        $store->age = $request->age;
        $store->save();
        return redirect('/home');
    }
}
