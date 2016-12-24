<?php

namespace App\Http\Controllers;

use App\Casemain;
use App\Client;
use App\Casetype;
use App\Caseevent;
use App\Casestatus;
use Illuminate\Http\Request;
use App\Http\Requests\CasesRequest;
use DB;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CasesController extends Controller
{
    #Show all cases
	public function index(){
        $cases = Casemain::with(['client', 'status', 'casetype'])->get();
        return view('cases.index', compact('cases'));
	}

    #/cases/create create a new case
	public function create(){
		$casetypes = Casetype::lists('type', 'id');
		return view('cases.create', compact('casetypes'));
	}

	#/cases/store saving new case
	public function store(CasesRequest $request){
        Casemain::create($request->all());
    	return redirect('cases');

    }

    public function getClientsInfo(){
		$clients = DB::table('clients')
               ->select(DB::raw('CONCAT_WS(" ",`secondname`,`firstname`,`thirdname`) as `label`,id as value'))
               ->get();	
		return json_encode($clients);    	
    }

    
    #/cases/case id
    public function edit($id){
            $casetypes = Casetype::lists('type', 'id');
            $casestatuses = Casestatus::lists('status', 'id');
            $case = Casemain::with(['client', 'status', 'casetype'])->find($id);
            return view('cases.edit', compact('case', 'casetypes', 'casestatuses'));   
    }

    #cases update method
    public function update($id, CasesRequest $request){
        $case = Casemain::findOrFail($id);
        $case->update($request->all());
        return redirect('cases');
    }

    public function destroy(CasesRequest $request){
        $ids = $request->ids;
        Casemain::destroy($ids);
        return redirect('cases');
    }

}
