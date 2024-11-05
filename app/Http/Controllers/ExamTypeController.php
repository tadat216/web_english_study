<?php

namespace App\Http\Controllers;
use App\Models\ExamType;
use Illuminate\Http\Request;

class ExamTypeController extends Controller
{
    public function getExamTypesForExamLibrary()
    {
        $examTypes = ExamType::all();
        return view('user.tests-library', compact('examTypes'));
    }

    public function getExamTypesForDashboard() 
    {
        $examTypes = ExamType::all();
        return view('user.dashboard', compact('examTypes'));
    }

    public function getExamTypesForAnalytics()
    {
        $examTypes = ExamType::all(); 
        return view('user.analytics', compact('examTypes'));
    }
}
