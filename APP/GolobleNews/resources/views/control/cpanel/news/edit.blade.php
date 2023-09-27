@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')
    <div  class="row titleSection mt-30 ">
        <h2>News</h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
    @elseif (Session::has('message'))
    <div class="alert alert-success " role="alert">{{ Session::get('message')}}</div>
    @endif
    @if($news)
    <form action="{{url("cpanel/news/$news->id/update")}}" method="POST" class="shadow rounded px-3 py-2 mb-5 bg-body rounded " enctype="multipart/form-data">
        @csrf
        @method('patch')
        <label for="name" class="form-label fw-bold">Title</label>
        <input type="text" class="form-control mt-2" name="title" value="{{$news->title}}">
        <label for="degree" class="form-label fw-bold mt-3">Content</label>
        <textarea class="form-control mt-2" id="exampleFormControlTextarea1" name="content">
            {{$news->content}}
        </textarea>
        <label for="id_editor" class="form-label fw-bold mt-3">Written By</label>
        <select class="form-select mt-2" name="id_editor">
            @if(count($allEditors)>0)
            @foreach($allEditors as $editor)
                @if($editor->id == $news->id_editor)
                    <option selected="selected" value="{{$editor->id}}">{{$editor->name}}</option>
                @else
                    <option value="{{$editor->id}}">{{$editor->name}}</option>
                @endif
            @endforeach
        @else 
            <option value="">no editor found</option>
        @endif
        </select>
        <label for="id_category" class="form-label fw-bold mt-3">Belong To</label>
        <select class="form-select mt-2" name="id_category">
            @if(count($allCategories)>0)
            @foreach($allCategories as $category)
                @if($category->id == $news->id_category)
                    <option selected="selected" value="{{$category->id}}">{{$category->name}}</option>
                @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endif
            @endforeach
        @else 
            <option value="">no category found</option>
        @endif
        </select>
        <label for="image" class="form-label fw-bold mt-3">Image</label>
        <img src="{{asset("upload/$news->main_image")}}" class="img-thumbnail d-block shadow rounded p-1 my-3" alt="main_image" width="500px" height="300px">
        <input type="file" class="form-control mt-2" name="main_image" />
        <input type="submit" class="btn fw-bold form-control mt-4" name="update" value="Update">
    </form>
    @endif    
@endsection
