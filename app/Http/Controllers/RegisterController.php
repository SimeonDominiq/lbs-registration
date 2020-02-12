<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Repository\Register\RegisterRepository;

use App\Models\ProgrammeRegistration;

use DB;


class RegisterController extends Controller
{
    private $register;

    public function __construct(RegisterRepository $register)
    {
        $this->register = $register;
    }    

    
    public function index() {
        return view('register');
    }

    public function register(RegisterRequest $request) {

        $time = strtotime($request->date_of_birth);
        $newDateOfBirth = date('Y-m-d',$time);
        $request['date_of_birth'] = $newDateOfBirth;

        $data = $request->all();
        $insert = $this->register->create($data);

        if($insert) {
            $eligibleProg = $this->checkEligibility($request->years_working_experience);
            return view('confirm_reg', compact('insert', 'eligibleProg'));
        }
    }

    public function completeApplication(Request $request, $reg_id) {
        
        $programme_id = $request->programme_id;

        $prog = new ProgrammeRegistration();
        $prog->registration_id = $reg_id;
        $prog->programme_id = $programme_id;

        $save = $prog->save();

        if($save) {
            $url = 'http://portal.lbs.edu.ng?9aebcAppId='.$reg_id.'&programId='.$programme_id;
            return redirect()->away($url);
        }

    }

    private function checkEligibility($years) {
        $programme = DB::select('SELECT * FROM programmes where :years BETWEEN minimum_years AND maximum_years', ['years' => $years]);

        return $programme;
    }

}
