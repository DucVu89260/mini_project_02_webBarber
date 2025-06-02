<?php

namespace App\Http\Controllers;

use App\Models\Service;

use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;

class ServiceController extends Controller
{   

    private $model;

    public function __construct()
    {
        $this->model = new Service();

        $routeName  = request()->route()->getName();

        $arr        = explode('.', $routeName);
        $arr        = array_map('ucfirst', $arr);
        $title      = implode(' - ', $arr);

        View::share('title', $title);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request -> get('q');

        $data = Service::query()
            ->where('name','like','%'.$search.'%')
            ->paginate(5)
            ->appends(['q' => $search]);

        return view('services.index',[
            'data' => $data,
            'search' => $search,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(view: 'services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $services = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath= $request->file('image')->store('services', 'public');
            $services['image'] = $imagePath;
            // Update the service with the image path
        }

        $this->model::create($services);

        return redirect('services');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        return view('services.edit', [
            'service' => $service,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, $serviceId)
    {   

        $services = $request->validated();
        $existingService = $this->model::findOrFail($serviceId);

        if ($request->hasFile('image_new')) {

            $imagePath= $request->file('image_new')->store('serivices', 'public');

            $services['image'] = $imagePath;
           
        } else {
           
            $services['image'] = $existingService->image;
        }


        $this -> model::where('id', $serviceId)->update($services);

        return redirect('services');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {   
        $this -> model::destroy($service->id);

        return redirect('services');
    }
}
