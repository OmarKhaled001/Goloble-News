@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')

    <div  class="row titleSection mt-30 ">
        <h2>Add Editor</h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
    @elseif (Session::has('message'))
    <div class="alert alert-success " role="alert">{{ Session::get('message')}}</div>
    @endif
    <form action="{{url("cpanel/editor/store")}}" method="POST" class="shadow rounded px-3 py-2 mb-5 bg-body rounded" >
        @csrf
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" class="form-control mt-2" name="name">
        <label for="degree" class="form-label fw-bold  mt-3">Salary</label>
        <input type="text" class="form-control mt-2" name="salary">
        <input type="submit" class="btn fw-bold form-control mt-4" name="Add" value="Add">
    </form>
@endsection
