@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')

    <div  class="row titleSection mt-30 ">
        <h2>Category</h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
    @elseif (Session::has('message'))
    <div class="alert alert-success " role="alert">{{ Session::get('message') }}</div>
    @endif
    @if($category)
    <form action="{{url("cpanel/category/$category->id/update")}}" method="POST" class="shadow rounded px-3 py-2 mb-5 bg-body rounded ">
        @csrf
        @method('patch')
        <label for="name" class="form-label fw-bold">Name</label>
        <input type="text" class="form-control mt-2" name="name" value="{{$category->name}}">
        <label class="form-label fw-bold mt-3">Managed By</label>
        <select class="form-select mt-2" name="id_manager">
            @if(count($allEditors)>0)
                @foreach($allEditors as $editor)
                    @if($category->id_manager == $editor->id)
                    <option selected="selected" value="{{$editor->id}}">{{$editor->name}}</option>
                    @else
                    <option value="{{$editor->id}}">{{$editor->name}}</option>
                    @endif
                    @endforeach
            @else        
                <option value="">no editor found</option>
            @endif
        </select>
        <input type="submit" class="btn fw-bold form-control mt-4" name="update" value="Update">
    </form>
    @endif
@endsection
