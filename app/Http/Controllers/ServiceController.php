<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;
use Illuminate\Http\Request;

class ServiceController extends Controller
{   
    private Service $model;

    private const PER_PAGE = 5;

    public function __construct()
    {
        $this->model = new Service();
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->get('q');

        $data = $this->model->query()
            ->where('name','like','%'.$search.'%')
            ->paginate(self::PER_PAGE)
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
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $data['image'] = $imagePath;
        }

        $this->model->create($data);

        return redirect('services')->with('success', 'Created successfully');
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
    public function update(UpdateServiceRequest $request, Service $service)
    {   
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('services', 'public');
            $data['image'] = $imagePath;
        }

        $service->update($data);

        return redirect('services')->with('success', 'Updated successfully');
    }
}
