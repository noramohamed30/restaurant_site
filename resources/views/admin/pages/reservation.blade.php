<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">جدول بيانات الحجوزات</h4>
					<p class="card-description">
						جدول يحتوي على معلومات الحجوزات
					</p>
					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								@foreach(["الاسم", "رقم الهاتف", "التاريخ", "الوقت", "عدد الأشخاص", "تاريخ الإنشاء"] as $heading)
									<th class="font-bold text-white">{{$heading}}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@if ($isAdmin === false)
							<tr>
								<td>فقط المدير</td>
								<td>يمكنه عرض</td>
								<td>أو تعديل</td>
								<td>معلومات</td>
								<td>الحجوزات</td>
								<td>.</td>
							</tr>
							@else
								@foreach($data as $data)
								<tr>
									<td>{{$data->name}}</td>
									<td>{{$data->phone_number}}</td>
									<td>{{$data->date}}</td>
									<td>{{$data->time}}</td>
									<td>{{$data->person}}</td>
									<td>{{$data->created_at}}</td>
								</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</x-admin.index>
