@extends('layouts.app')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
		
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-lg-12">
				<form method="post" id="create_user">
    			{{csrf_field()}}
            		<div class="panel panel-default">
						<div class="panel-heading">Add User</div>
						<div class="panel-body">
							<div class="col-md-12">
								<div class="form-group">
									<label>Name</label>
									<input type="text" name="name" id="name" class="form-control" placeholder="Name" required="" >
									 <span class="text-danger">{{@$errors->first('name')}}</span>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" required="" >
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" id="pass" class="form-control" placeholder="Email" required="" >
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

