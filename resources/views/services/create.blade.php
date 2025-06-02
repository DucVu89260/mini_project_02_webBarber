@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
                {{-- <p class="category"></p> --}}
            </div>
            <div class="card-content table-responsive table-full-width">
                <form action="{{ route('services.store')}}" method="post" enctype="multipart/form-data">
                    <table class="table table-hover">
                        @csrf
                        <tr>
                            <td>Service name</td>
                            <td><input type="text" name="name"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea name="description" class="textarea"></textarea></td>
                        </tr>
                        <tr>
                            <td>Duration (minutes)</td>
                            <td>
                                <input type="text" name="duration">
                            </td>
                        </tr>
                        <tr>
                            <td>Price (1000 VND)</td>
                            <td>
                                <input type="text" name="price">
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                <input type="file" name="image" accept="image/*">
                            </td>
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