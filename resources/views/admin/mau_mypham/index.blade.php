@extends('layouts.app')

@section('content')
	<div class="card">
		<div class="card-header">Màu mỹ phẩm</div>
		<div class="card-body">
			<p><a class="btn btn-primary" href="{{ url('/admin/mau_mypham/create') }}"><i class="fas fa-plus"></i> Thêm mới</a></p>
			<table class="table table-bordered table-hover table-sm">
				<thead>
					<tr class="text-center">
						<th width="5%">STT</th>
						<th width="35%">Mỹ phẩm</th>
						<th width="20%">Màu mỹ phẩm</th>
						<th width="20%">Mã màu</th>
						<th width="10%">Created at</th>
						<th width="5%">Edit</th>
						<th width="5%">Delete</th>
					</tr>
				</thead>
				<tbody>
					@php $count = 1; @endphp
					@foreach($mau_mypham as $value)
						<tr class="text-center">
							<td>{{ $count++ }}</td>
							<td>{{ $value->tenmypham}}</td>
							<td>{{ $value->mau_mypham }}</td>
							<td>{{ $value->mamau }}</td>
							<td>{{ Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $value->created_at)->format('d/m/Y H:i:s') }}</td>
							<td class="text-center"><a href="{{ url('/admin/mau_mypham/edit/' . $value->id) }}"><i class="fas fa-edit"></i></a></td>
							<td class="text-center"><a href="{{ url('/admin/mau_mypham/delete/' . $value->id) }}" ><i class="fas fa-trash-alt text-danger"></i></a></td>
						</tr>
					@endforeach
					<tr class="text-center">
						<td colspan="7">
							{{$mau_mypham->links()}}
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection