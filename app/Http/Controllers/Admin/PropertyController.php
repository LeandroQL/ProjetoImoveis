<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Address;
use App\Detail;
use App\Property;

class PropertyController extends Controller
{
    public static function getAll( Request $request){
   
    $properties = DB::table('properties') 
    				->join('details', 'properties.id', '=', 'details.property_id') 
    				->join('addresses', 'properties.id', '=', 'addresses.property_id') 
    				->select('properties.*', 'details.*', 'addresses.*')
    				->get();
   return view('admin.home.list', ['properties' => $properties]);
   return json_encode($properties);
    }

    public function store(Request $request){
   		$property = new Property();
   		$detail = new Detail();
   		$address = new Address();

   		if (Auth::check()){ //verifica se tem usuario logado
    		$usuario_id = Auth::user()->id;
    	}
		$requestAll = (object) $request->all();

        	$property->user_id = $usuario_id;       	
        	$property->title = $requestAll->title;
        	$property->type  = $requestAll->type;
        	$property->save();

        	$detail ->property_id = $property->id;
        	$address->property_id = $property->id;

        	$address->zip 		 = $requestAll->zip;
        	$address->city 		 = $requestAll->city;
        	$address->state 	 = $requestAll->state;
        	$address->district   = $requestAll->district;
        	$address->number 	 = $requestAll->number;
        	$address->complement = $requestAll->complement;
        	$address->save();

        	$detail->price 		 = $requestAll->price;
        	$detail->area 		 = $requestAll->area;
        	$detail->dorms 		 = $requestAll->dorms;
        	$detail->suite 		 = $requestAll->suite;
        	$detail->bathrooms   = $requestAll->bathrooms;
        	$detail->rooms 		 = $requestAll->rooms;
        	$detail->garage 	 = $requestAll->garage;
        	$detail->description = $requestAll->description;
        	$detail->save();
        	return view('admin.home.homepage');
    }

    public function update(Request $request){
        $property = new Property();
   		$detail = new Detail();
   		$address = new Address();

        if (Auth::check()){ //verifica se tem usuario logado
            $usuario_id = Auth::user()->id;
        }

        $requestAll = (object) $request->all();


        if ($property->user_id != $usuario_id) {
            return view('admin.home.erro');
        }

        $property = $property->find($requestAll->id);
        $detail = $detail->where('property_id', $requestAll->id)->first();
        $address = $address->where('property_id', $requestAll->id)->first();
    	$property->title = $requestAll->title;
    	$property->type = $requestAll->type;
    	$property->save();

    	$detail->property_id = $property->id;
    	$address->property_id = $property->id;

    	$address->zip 		 = $requestAll->zip;
    	$address->city 		 = $requestAll->city;
    	$address->state 	 = $requestAll->state;
    	$address->district   = $requestAll->district;
    	$address->number 	 = $requestAll->number;
    	$address->complement = $requestAll->complement;
    	$address->save();

    	$detail->price 		 = $requestAll->price;
    	$detail->area 		 = $requestAll->area;
    	$detail->dorms 		 = $requestAll->dorms;
    	$detail->suite 		 = $requestAll->suite;
    	$detail->bathrooms   = $requestAll->bathrooms;
    	$detail->rooms 		 = $requestAll->rooms;
    	$detail->garage 	 = $requestAll->garage;
    	$detail->description = $requestAll->description;
        	$detail->save();       
    }
    public function delete(Request $request){
    	$requestAll = (object) $request->all();
        if (Auth::check()){ //verifica se tem usuario logado
            $usuario_id = Auth::user()->id;
        }

    	$property = new Property();
   		$detail = new Detail();
   		$address = new Address();
        if ($property->user_id != $usuario_id) {
            return view('admin.home.erro');
        }
        $detail = $detail->where('property_id', $requestAll->id)->first()->delete();
        $address = $address->where('property_id', $requestAll->id)->first()->delete();
    	$property = $property->find($requestAll->id)->delete();

    	return view('admin.home.homepage');


    }
    public function get(Request $request){

    	$requestAll = (object) $request->all();
        $properties = DB::table('properties')
                    ->join('details', 'properties.id', '=', 'details.property_id')
                    ->join('addresses', 'properties.id', '=', 'addresses.property_id') 
                    ->select('properties.*', 'details.*', 'addresses.*') 
                    ->where('details.property_id', $requestAll->id)->first();
                    return view('admin.home.search', ['properties' => $properties]); 
                    return json_encode($properties);
    }
    public function cadastro(){
    	return view('admin.property.property_register');
    }
    public function atualizar(){
        return view('admin.property.property_edit');
    }
}
