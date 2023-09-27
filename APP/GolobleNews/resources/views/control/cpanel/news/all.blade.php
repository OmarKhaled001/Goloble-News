@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')
<div id="content" class="container mt-10" >
    <div  class="row titleSection mt-30 ">
        <h2>Edit News</h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
    @elseif (Session::has('message'))
    <div class="alert alert-success " role="alert">{{ Session::get('message')}}</div>
    @endif
    <table  class="table instructors shadow rounded text-center">
        <thead class="table text-center rounded">
            <th><i class="fa-solid fa-tag"></i> ID</th>
            <th><i class="fa-solid fa-quote-right"></i> Title</th>
            <th><i class="fa-solid fa-book-open"></i> Category</th>
            <th><i class="fa-solid fa-image"></i> Image</th>
            <th colspan="2" class=""><i class="fa-solid fa-gear"></i> action</th>
        </thead>
        @if(count($allNews)>0)
        @foreach($allNews as $news)
        <tr class="align-middle">
            <td>{{$news->id}}</td>
            <td>{{$news->title}}</td>
            <td>{{$news->category->name}}</td>
            <td><img src="{{asset("upload/$news->main_image")}}" alt="" width="90px" height="50px"></td>
            <td>
                <form action="{{url("cpanel/news/$news->id/delete")}}" method="POST">
                    @csrf
                    @method('delete')
                    <input id="delete-btn" type="submit" name="delete" value="Delete" class="btn btn-danger"/>
                </form>
            </td>
            <td><a href="{{url("cpanel/news/$news->id/show")}}"><button id="Edit"  type="button" class="btn btn-success">Edit</button></a></td>
        </tr>
        @endforeach
        @else
        <td colspan="5">
            <div class="alert alert-warning  " role="alert">No Editor Found</div>
        </td>
        @endif
        </table>

</div>
@endsection
