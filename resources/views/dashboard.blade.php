<link rel="stylesheet" href="{{ asset('css/test.css') }}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paper Tales: An online bookstore') }}
            <input type="text" class="form-control col-md-4 float-right" name="search" id="search" placeholder="Search...">
        </h2>

    </x-slot>
    <div class = "distance">
    <div class="container">
    <div class="row">
    <div class="col-md-3">
            Your 3D Cover
            <img src="{{asset('image/1.png')}}" class="gridimage">
            $50 <button class="btn btn-primary btn-sm float-right">ADD</button>
        </div>
        <div class="col-md-3">
        Your 3D Cover
            <img src="{{asset('image/1.png')}}" class="gridimage">
            $50<button class="btn btn-primary btn-sm float-right">ADD</button>
        </div>
        <div class="col-md-3">
        Your 3D Cover
            <img src="{{asset('image/1.png')}}" class="gridimage">
            $50 <button class="btn btn-primary btn-sm float-right">ADD</button>
        </div>
        <div class="col-md-3">
        Your 3D Cover
            <img src="{{asset('image/1.png')}}" class="gridimage">
            $50<button class="btn btn-primary btn-sm float-right">ADD</button>
        </div>
        <div class="col-md-3">
        Your 3D Cover
            <img src="{{asset('image/1.png')}}" class="gridimage">
            $50<button class="btn btn-primary btn-sm float-right">ADD</button>
        </div>
        <div class="col-md-3">
        Your 3D Cover
            <img src="{{asset('image/1.png')}}" class="gridimage">
            $50<button class="btn btn-primary btn-sm float-right">ADD</button>
        </div>
    </div>
</div>
</div>
  

</x-app-layout>
