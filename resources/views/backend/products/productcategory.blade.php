@extends('layouts.adminlist')
	@section('contents')
		<!--page-wrapper-->
		<div class="page-wrapper">
			<!--page-content-wrapper-->
			<div class="page-content-wrapper">
				<div class="page-content">
					<!--breadcrumb-->
					<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
						<div class="breadcrumb-title pr-3">Products</div>
						<div class="pl-3">
							<nav aria-label="breadcrumb">
								<ol class="breadcrumb mb-0 p-0">
									<li class="breadcrumb-item"><a href="javascript:;"><i class='bx bx-home-alt'></i></a>
									</li>
									<li class="breadcrumb-item active" aria-current="page">Product Category</li>
								</ol>
							</nav>
						</div>
						<div class="ml-auto">
							<div class="btn-group">
								<a href="{{ url('/create-pcategory') }}" class="btn btn-primary">Add Category</a>
							</div>
						</div>
					</div>
					<!--end breadcrumb-->
					<div class="card">
						<div class="card-body">

@if(Session('message'))
<div class="card-title p-3 mb-2 bg-success text-white radius-15">{{ Session('message') }}</div>
<hr/>
@endif

								
							<div class="table-responsive">
								<table id="example" class="table table-striped table-bordered" style="width:100%">
									<thead>
										<tr>
											<th>Sl No</th>
											<th>Category Name</th>
											<th>Products</th>
											<th>Status</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
@php($count=1)
	@foreach($productcategories as $key => $value)																				
	<tr>
		<td>{{$count}}</td>
		<td>{{$value->pcategoryname}}</td>
		<td>43</td>
		<td>{{ $value->pcategorystatus==1 ? 'Yes':'No' }}</td>
		<td name="bstable-actions"><div class="btn-group pull-right">
		@if($value->pcategorystatus==1)
		<a href="{{ route('inactive-pcategory', $value->pcategoryid) }}" class="btn btn-sm btn-default">
		<span class="fa fa-window-close"> </span>
		</a>
		@else
		<a href="{{ route('active-pcategory', $value->pcategoryid) }}" class="btn btn-sm btn-default">
		<span class="fa fa-check-circle"> </span>
		</a>	
		@endif
		<a href="{{ route('edit-pcategory', $value->pcategoryid) }}" class="btn btn-sm btn-default">
		<span class="fa fa-edit"> </span>
		</a>
		<a href="{{ route('delete-pcategory', $value->pcategoryid) }}" class="btn btn-sm btn-default">
		<span class="fa fa-trash"> </span>
		</a>
		</div>
		</td>
	</tr>
	@php($count++)
@endforeach
										
									</tfoot>
								</table>
							</div>
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