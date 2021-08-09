@extends('layouts.adminform')
	@section('contents')
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Product Category</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Update Category</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<a href="{{ url('/product-category') }}" class="btn btn-primary">Products Category</a>
							</div>
						</div>
					</div>
					<div class="card radius-15">
						<div class="card-body">
@if(Session('message'))
<div class="card-title p-3 mb-2 bg-success text-white radius-15">{{ Session('message') }}</div>
<hr/>
@endif

							<form method="post" action="{{ url('/updatepcategory') }}" name="addpcategory">
								{{csrf_field()}}
								@include('includes/errors')
								@foreach($productcategory as $singleVar1)
								<div class="form-row">
									<div class="col-md-6 mb-3">
										<label for="pcategoryname">Category Name</label>
										<input type="text" name="pcategoryname" class="form-control" id="pcategoryname" value="{{$singleVar1->pcategoryname}}" required>
									</div>
								</div>
								<input type="hidden" name="pcategoryid" class="form-control" id="pcategoryid" value="{{$singleVar1->pcategoryid}}">
								@endforeach
								<input class="btn btn-primary" type="submit" value="Update">
							</form>
						</div>
					</div>
				</div>
			</div>
			<!--end page-content-wrapper-->
		</div>
		<!--end page-wrapper-->
		<!--start overlay-->
		<div class="overlay toggle-btn-mobile"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
@endsection	