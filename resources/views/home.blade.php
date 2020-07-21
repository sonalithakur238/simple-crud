@extends('layouts.app')
@section('content')
  <div class="main">
    <div class="row">
  
    </div><!--/.row-->
    
    <div class="row">
      <div class="col-sm-12">
        <div class="col-sm-6">
          <h1 class="page-header">Users</h1>
        </div>
        <div class="col-sm-6 text-right">
          <h1 class="page-header"><a href="/home/create" class="btn btn-sm btn-primary">Add User</a></h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <table class="table table-striped table-bordered table-hover" id="userTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              @foreach($users as $user)
                  <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td class="actions">
                        {{ Form::open(['method' => 'DELETE','class' => 'delete', 'route' => ['home.destroy', $user->id]]) }}
                        <a href="{{route('home.edit',$user->id)}}" class="btn btn-primary btn-xs" title ="Edit">Edit</a>
                        {{ Form::button('Delete', array('type' => 'delete','class' => 'btn btn-danger btn-xs delete','title' =>"Delete")) }}
                        {{ Form::close() }}
                      </td>
                  </tr>
              @endforeach
            </tbody>
        </table>
        {{$users->links()}}
      </div>
    </div>
  </div>
@endsection

