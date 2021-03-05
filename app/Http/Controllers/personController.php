<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\person;

class personController extends Controller
{
    public function all()
    {
        $persons=person::all();

        return $persons;
    }

    public function show($id)

    {
        $person=person::findOrFail($id);
        return $person;
    }



    public function add(Request $request,person $person)
    {   
        
        
        $this->validation($request);
        
        $person=new person();

        $person->firstname=request('firstname');
        $person->lastname=request('lastname');
        $person->email=request('email');
        $person->phone=request('phone');
        $person->save();
        return $person;
    }

    public function update(Request $request,person $person)
    {   
        $this->validation($request);
        $person->update([
            'firstname'=>request('firstname'),
            'lastname'=>request('lastname'),
            'email'=>request('email'),
            'phone'=>request('phone')
        ]);

        return $person;

    }
        public function delete($id)
        {
            
            $person=person::findOrFail($id);
            
            $person->delete();

             return $person;
        }


        public function validation(Request $request)
        {

            $request->validate([
                'firstname' => 'required',
                'lastname' => 'required',
                'email'=>'required|email',
                'phone'=>['required','regex:/^(6|7)+[0-9]{8}+$/i'], 
            ]);

        }


    }
