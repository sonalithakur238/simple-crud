@extends('layouts.app')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
		
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<form id="edit_user">
    			{{csrf_field()}}
            		<div class="panel panel-default">
						<div class="panel-heading">Edit User</div>
						<div class="panel-body">
							<div class="col-md-12">
								<div class="form-group">
									<input type="hidden" value="{{$user->id}}" id="user_id">
									<label>Name</label>
									<input type="text" name="name" id="user_name" class="form-control" placeholder="Name" value="{{$user->name}}" required="" >
									 <span class="text-danger">{{@$errors->first('name')}}</span>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="user_email" class="form-control" placeholder="Email" value="{{$user->email}}" required="" >
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Email" value="{{$user->password}}" required="" >
								</div>
							</div>
						</div>
						<div class="text-center ">
							<button type="submit" class="btn btn-primary">Submit </button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
