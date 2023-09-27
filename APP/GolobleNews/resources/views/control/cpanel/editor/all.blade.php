@extends('template.cpanel.admin')
@section('pageTitle', "{$pageTitle}")
@section('content')
<div id="content" class="container mt-10" >
    <div  class="row titleSection mt-30 ">
        <h2>Edit Editor</h2>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">{{$errors->first()}}</div>
    @elseif (Session::has('message'))
    <div class="alert alert-success " role="alert">{{ Session::get('message')}}</div>
    @endif
    <table  class="table instructors shadow rounded text-center ">
        <thead class="table text-center rounded">
            <th><i class="fa-solid fa-tag"></i> ID</th>
            <th><i class="fa-solid fa-user"></i> Name</th>
            <th><i class="fa-solid fa-money-check-dollar"></i> Salary</th>
            <th colspan="2" class=""><i class="fa-solid fa-gear"></i> action</th>
        </thead>
        @if(count($allEditors)>0)
        @foreach($allEditors as $editor)
        <tr>
            <td>{{$editor->id}}</td>
            <td>{{$editor->name}}</td>
            <td>{{$editor->salary}}</td>
            <td>
                <form action="{{url("cpanel/editor/$editor->id/delete")}}" method="POST">
                    @csrf
                    @method('delete')
                    <input id="delete-btn" type="submit" name="delete" value="Delete" class="btn btn-danger"/>
                </form>
            </td>
            <td><a href="{{url("cpanel/editor/$editor->id/show")}}"><button id="Edit"  type="button" class="btn btn-success">Edit</button></a></td>
        </tr>
        @endforeach
        @else
            <tr>
                <td colspan="5"><div class="alert alert-warning  " role="alert">No Editor Found</div></td>
            </tr>
        @endif
    </table>
</div>
@endsection
