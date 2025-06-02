@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
                {{-- <p class="category"></p> --}}
                <p><a href="{{ route('services.create')}}">Add more services</a></p>
                
            </div>
            <div class="card-header">
                <form class="navbar-form navbar-left navbar-search-form" role="search">
                    {{-- Search key for pagination --}}
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" name="q" value="{{ $search }}" class="form-control" placeholder="Search...">
                    </div>
                </form>
            </div>
            <div class="card-content table-responsive table-full-width">
                <table class="table table-hover">
                    <tr>
                        <th>#</th>
                        <th>Service name</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>Duration (minutes)</th>
                        <th>Price (USD)</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($data as $service)
                        <tr>
                            <td>{{ $service->id }}</td>
                            <td>{{ $service->name }}</td>
                            <td>
                                @if ($service->image)
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="100">
                                @else
                                    NA
                                @endif
                            </td>
                            <td>{{ $service->description }}</td>
                            <td>{{ $service->duration }}</td>
                            <td>{{ $service->price }}</td>
                            <td>
                                <a href="{{ route('services.edit', $service)}}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            @if(session()->get('level') == 1)
                            <td>
                                <form method="post" action="{{ route('services.destroy', $service)}}" class="form-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Del</button>
                                </form>
                            </td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
            <div class="float-left pagination-container">
                <ul class="pagination">
                    {{$data->links()}}
                </ul>
            </div>
        </div>
    </div>
@endsection