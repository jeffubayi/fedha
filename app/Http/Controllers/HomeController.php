<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Auth;
use Illuminate\support\Carbon;
Use App\Models\Income;
Use App\Models\Expense;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $data['incomes'] = Income::where('user_id', Auth::User()->id)->sum('income_amount');
        $data['expenses'] = Expense::where('user_id', Auth::User()->id)->sum('expense_amount');
        $data['balance'] = $data['incomes'] - $data['expenses'];
        $data['latests']= Expense::where('user_id', Auth::user()->id)->latest()->paginate(5);

        return view('pages.dashboard', $data);
    }

    public function summary()
    {
        $incomes = Income::where('user_id', Auth::User()->id)->get()->toArray();
        $expenses = Expense::where('user_id', Auth::User()->id)->get()->toArray();
        foreach ($incomes as $key => $value) {
            $incomes[$key]['type'] = 'income';
        }

        foreach ($expenses as $key => $value) {
            $expenses[$key]['type'] = 'expense';
        }

        $data['results'] = array_merge($incomes, $expenses);
        $data['total_income'] = Income::where('user_id', Auth::User()->id)->sum('income_amount');
        $data['total_expense'] = Expense::where('user_id', Auth::User()->id)->sum('expense_amount');
        $data['balance'] = $data['total_income'] - $data['total_expense'];

        return view('pages.summary', $data);
    }
}
