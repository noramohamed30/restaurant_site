<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<a href="{{ route('testimonial.create') }}" class="btn btn-primary mx-2">إضافة شهادة عميل</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">جدول بيانات شهادات العملاء</h4>
					<p class="card-description">
						جدول يحتوي على معلومات شهادات العملاء
					</p>

					@if(session()->has('msg'))
					<p class="alert alert-info">{{ session()->get('msg') }}</p>
					@endif

					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								@foreach(["الصورة", "الاسم", "التخصص", "التقييم", "الوصف", "تاريخ الإضافة", "", ""] as $heading)
									<th class="font-bold text-white">{{$heading}}</th>
								@endforeach
							</tr>
						</thead>
						<tbody>
							@foreach($data as $data)
							<tr>
								<td class="w-32">
									<img src="{{$data->img}}" alt="{{$data->name}}" class="!w-full !h-auto !rounded-none">
								</td>
								<td>{{$data->name}}</td>
								<td>{{$data->bio}}</td>
								<td>{{$data->rating}}</td>
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words">{{$data->review}}</td>
								<td>{{$data->created_at}}</td>
								<td>
									<a
										href="{{ route('testimonial.edit', $data->id) }}"
										class="badge badge-primary cursor-pointer"
										>تعديل</a
									>
								</td>
								<td>
									@if ($isAdmin === true)
									<form method="POST" action="{{ route('testimonial.destroy', $data->id) }}">
						        @method('DELETE')
										@csrf
					        	<button
					        		type="submit"
					        		class="badge badge-danger cursor-pointer"
					        		onclick="return confirmDeleteReview({{ $data->id }} , '{{ $data->name }}');"
					        		>حذف</button>
								  </form>
									@else
									<button
										onclick="alert('فقط المدير يمكنه حذف شهادة العميل')"
										class="badge badge-danger cursor-pointer"
										>حذف</button>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	<script>
  function confirmDeleteReview(id, name) {
      if(!confirm("هل أنت متأكد أنك تريد حذف شهادة العميل، الاسم: " + name + "، المعرف: " + id + "؟"))
      event.preventDefault();
  }
 </script>
</x-admin.index>
