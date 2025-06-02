<?php

namespace App\Http\Controllers;

use App\Models\Stylist;

use App\Http\Requests\Stylist\StoreRequest;
use App\Http\Requests\Stylist\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class StylistController extends Controller
{
    private Stylist $model;

    public function __construct()
    {
        $this->model = new Stylist();

        $routeName  = request()->route()->getName();

        $arr        = explode('.', $routeName);
        $arr        = array_map('ucfirst', $arr);
        $title      = implode(' - ', $arr);

        View::share('title', $title);
    }


    public function index(Request $request)
    {   
        $search = $request -> get('q');

        $data = $this->model::query()
            ->where('name','like','%'.$search.'%')
            ->paginate(5)
            ->appends(['q' => $search]);

        return view('stylists.index',[
            'data' => $data,
            'search' => $search,
        ]);
    }  

    public function create()
    {
        return view('stylists.create');
    }

    public function store(StoreRequest $request)
    {
        $this->model::create($request->validated());

        return redirect('stylists');

    }

    public function edit(Stylist $stylist)
    {   
        return view('stylists.edit',[
            'each'=> $stylist,
        ]); 
    }
    
    public function update(UpdateRequest $request, Stylist $stylist)
    {   

        $this -> model::query()
        ->where('id', $stylistId)
        ->update( $request->validated());

        return redirect('stylists');
    }

    public function destroy(Stylist $stylist)
    {   
        if(!$stylist->canDelete()){
            return redirect('stylists')->with('error','Stylist cannot be deleted');
        }

        $stylist->delete();

        return redirect('stylists');
    }
}
