@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title">{{ _lang('Product List') }}</span>
				<a class="btn btn-primary btn-xs ml-auto" href="{{ url('admin/gift/create') }}">{{ _lang('Add New Gift Bundle') }}</a>
			</div>
			<div class="card-body">
				<table id="products_table" class="table table-bordered">
					<thead>
					    <tr>
							<th>{{ _lang('Thumbnail') }}</th>
							<th>{{ _lang('Name') }}</th>
							<th>{{ _lang('Price') }}</th>
							<th>{{ _lang('Status') }}</th>
							<th>{{ _lang('Created') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js-script')
<script src="{{ asset('public/backend/assets/js/datatables/gift.js') }}"></script>
@endsection
