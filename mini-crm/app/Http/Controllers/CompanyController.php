<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\QueryException;

use App\Models\Companies;


class CompanyController extends Controller
{
    public function Index() {
        return view('companies.Index');
    }

    public function storeCompany(Request $request) {

       // dd($request);
        $data = $this->validateCompanyDetails();
        $message = '';

        try {
            DB::beginTransaction();
            Companies::create($data);
            DB::commit();
            $message = 'The data has been added successfully.';
            
        } catch (Exception $e) {
            dd($e);
        }

        return redirect(route('company.index'))->with('message', $message);


    }

    private function validateCompanyDetails() {
        return request()->validate([
            'company_name' => ['required', 'min:4', 'max:50'],
            'email' => ['required', 'min:11', 'max:50'],
        ]);
    }
}
