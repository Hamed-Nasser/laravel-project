@extends('layouts.app-admin')

@section('content')

@php 
$panelHeading = "Company Registration";
$btnLable = "Save";
@endphp

<div class="content-wrapper">
	<section class="content">
		<form method="post" action="{{ route('store.company') }}">
			@csrf

			@include ('companies.form')
		</form>

<div class="clearfix">&nbsp;</div>
		<div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">All Companies</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
            	<div class="row">
            		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 table-responsive">
            			<table class="table table-bordered table-striped">
            				<thead>
            					<tr>
            						<th>S.No</th>
            						<th>Company Name</th>
            						<th>Email</th>
            						<th>Website</th>
            						<th>Action</th>
            					</tr>
            				</thead>
            				<tbody>
            					

            					
            				</tbody>
            			</table>
            		</div>
            	</div>
            </div>
            </div>

	</section>



</div>
@endsection