@extends('layouts.master')

@section('content')
    <div class="col-md-12">
        <div class="card card-plain">
            <div class="card-header">
                <h4 class="card-title">{{ $title }}</h4>
                {{-- <p class="category"></p> --}}
            </div>
            <div class="card-content table-responsive table-full-width">
                <form action="{{ route('services.update', $service)}}" method="post" enctype="multipart/form-data">
                    <table class="table table-hover">
                        @csrf
                        @method('PUT')
                        <tr>
                            <td>Service name</td>
                            <td><input type="text" name="name" value="{{ old('name', $service->name) }}"></td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td><textarea name="description" class="textarea">
                                {{ old('name', $service->description) }}
                            </textarea></td>
                        </tr>
                        <tr>
                            <td>Duration (minutes)</td>
                            <td>
                                <input type="text" name="duration" value="{{ old('name', $service->duration) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Price (1000 VND)</td>
                            <td>
                                <input type="text" name="price" value="{{ old('name', $service->price) }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Keep old Image</td>
                            <td>
                                <img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->name }}" width="100">
                                <input type="hidden" name="image_old" value="{{ $service->image }}">
                            </td>
                        </tr>
                        <tr>
                            <td>Or change Image</td>
                            <td>
                                <input type="file" name="image_new" accept="image/*">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><button type="submit">Update</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection