@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
                {{-- <p class="category"></p> --}}
                <a href="{{ route('stylists.create')}}">Add more stylists</a>
            </div>
            <div class="card-content table-responsive table-full-width">
                <form action="{{ route('stylists.store')}}" method="post">
                    <table class="table table-hover">
                        @csrf
                        <tr>
                            <td>Full name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Phone number</td>
                            <td><input type="text" name="phone"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <input type="radio" name="gender" value="0" checked>Male 
                                <input type="radio" name="gender" value="1">Female
                            </td>
                        </tr>
                        <tr>
                            <td>Birth date</td>
                            <td><input type="date" name="birth_date" value="1997-07-16"></td>
                        </tr>
                        <tr>
                            <td>Province</td>
                            <td><input type="text" name="address_province"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit">Add</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection