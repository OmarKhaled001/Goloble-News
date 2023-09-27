@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')
    <div id="content" class="container mt-10" >
        <div  class="row titleSection mt-30 ">
            <h2>Add News</h2>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
        @elseif (Session::has('message'))
        <div class="alert alert-success " role="alert">{{ Session::get('message')}}</div>
        @endif
        <form action="{{url("cpanel/news/store")}}" method="POST" class="shadow rounded px-3 py-2 mb-5 bg-body rounded " enctype="multipart/form-data">
            @csrf
            <label for="name" class="form-label fw-bold">Title</label>
            <input type="text" class="form-control mt-2" name="title">
            <label for="degree" class="form-label fw-bold mt-3">Content</label>
            <textarea class="form-control mt-2" id="exampleFormControlTextarea1"  name="content">
            </textarea>
            <label for="id_editor" class="form-label fw-bold mt-3">Written By</label>
            <select class="form-select mt-2" name="id_editor">
            @if(count($allEditors)>0)
                @foreach($allEditors as $editor)
                <option selected="selected" value="{{$editor->id}}">{{$editor->name}}</option>
                @endforeach
            @else
                <option value="">No Editor Found</option>
            @endif
            </select>
            <label for="id_category" class="form-label fw-bold mt-3">Belong To</label>
            <select class="form-select mt-2" name="id_category">
                @if(count($allCategories)>0)
                @foreach($allCategories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
                @else 
                    <option value="">no category found</option>
                @endif
            </select>
            <label for="image" class="form-label fw-bold mt-3">Image</label>
            <input type="file" class="form-control mt-2" name="main_image" />
            <input type="submit" class="btn fw-bold form-control mt-4" name="Add" value="Add">
        </form>
    </div>
@endsection
