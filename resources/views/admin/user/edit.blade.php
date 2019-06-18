@extends('admin.index')
 @section('content')

<section class="content">
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">Update Pengguna</h3>
	</div>
       <form method="post" action="{{route('user.update', $user->id)}}" enctype="multipart/form-data">
        @csrf
       <div class="box-body">
        <div class="form-group">
          <label for="kode">nama</label>
          <input type="text" class="form-control" name="nama" id="nama" value="{{$user->name}}" placeholder="">
        </div>
        <div class="form-group">
          <label for="nama">email</label>
          <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}" placeholder="">
        </div>
        <div class="form-group">
          <label for="suplier">new password</label>
          <input type="text" class="form-control" name="password" id="password" placeholder="">
        </div>
        <div class="form-group">
	      <label for="exampleFormControlSelect1">Hak akses</label>
	      <select class="form-control form-control-lg" id="akses" name="akses">
	        @foreach($role as $row)
	        <option value="{{$row->id}}"
	        	@if($row->id == $user->role_id)
	        		selected
	        	@endif
	        >{{$row->role}}</option>
	        @endforeach
      		</select>
        </div>

          <div class="box-footer">
	        <button type="submit" class="btn btn-primary mr-2">Submit</button>
	        <button href="{{ route('user.index') }}" class="btn btn-danger">Cancel</button>
   		 </div>
   		</div>
	    </form>
	  </div>	  
	  </section>	 
@endsection
