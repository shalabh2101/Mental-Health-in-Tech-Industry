<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function viewEmployeeProfile($employee_id)
    {

        $employee = Employee::where(['id' => $employee_id])->first();
        $employee_interests = ['Rock', 'Latino', 'Comedy', 'Romantic', 'Fantasy/Fairy tales', 'Animated', 'Mathematics', 'Internet', 'Economy Management', 'Shopping', 'Fun with friends', 'Pets', 'Dangerous dogs', 'Thinking ahead', 'Decision making', 'Self-criticism', 'Mood swings', 'Achievements', 'Getting angry', 'Happiness in life', 'Finances'];

        $list1 = ['Rock', 'Latino', 'Comedy', 'Romantic', 'Fantasy/Fairy tales', 'Animated', 'Mathematics', 'Internet', 'Economy Management', 'Shopping', 'Fun with friends', 'Pets', 'Dangerous dogs', 'Thinking ahead', 'Decision making', 'Self-criticism', 'Mood swings', 'Achievements', 'Getting angry', 'Happiness in life', 'Finances'];
        $list2 = ['Rock', 'Latino', 'Comedy', 'Romantic', 'Fantasy/Fairy tales', 'Animated', 'Mathematics', 'Internet', 'Economy Management', 'Shopping', 'Fun with friends', 'Pets', 'Dangerous dogs', 'Thinking ahead', 'Decision making', 'Self-criticism', 'Mood swings', 'Achievements', 'Getting angry', 'Happiness in life', 'Finances'];
        $list3 = ['Rock', 'Latino', 'Comedy', 'Romantic', 'Fantasy/Fairy tales', 'Animated', 'Mathematics', 'Internet', 'Economy Management', 'Shopping', 'Fun with friends', 'Pets', 'Dangerous dogs', 'Thinking ahead', 'Decision making', 'Self-criticism', 'Mood swings', 'Achievements', 'Getting angry', 'Happiness in life', 'Finances'];

        return view('employees.employee_recommendation',
            ['employee_interests' => $employee_interests,
              'employee' => $employee,
              'list1' => $list1,
                'list2' => $list2,
                'list3' => $list3,
                'sidenav' => 'employee_suggestion'
            ]);
    }
}