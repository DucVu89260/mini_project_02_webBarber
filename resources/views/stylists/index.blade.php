@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
                {{-- <p class="category"></p> --}}
                <p><a href="{{ route('stylists.create')}}">Add more stylists</a></p>
                
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
                        <th>Full name</th>
                        <th>Phone number</th>
                        <th>Gender</th>
                        <th>Province</th>
                        <th>Age</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($data as $stylist)
                        <tr>
                            <td>{{ $stylist->id }}</td>
                            <td>{{ $stylist->name }}</td>
                            <td>{{ $stylist->phone }}</td>
                            <td>{{ $stylist->gender }}</td>
                            <td>{{ $stylist->address_province }}</td>
                            <td>{{ $stylist->getBirthYearAttribute() }}</td>
                            <td>
                                <a href="{{ route('stylists.edit', $stylist)}}">
                                    <button class="btn btn-primary">Edit</button>
                                </a>
                            </td>
                            <td>
                                <form method="post" action="{{ route('stylists.destroy', $stylist)}}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">Del</button>
                                </form>
                            </td>
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