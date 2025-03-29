<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">نموذج تعديل شهادة العملاء</h4>
						<p class="card-description">تعديل بيانات شهادة العميل</p>
						<form action="{{ route('testimonial.update', $data->id ) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="reviewname">الاسم</label>
								<input
									type="text"
									class="form-control"
									id="reviewname"
									name="reviewname"
									value="{{ $data->name }}"
									placeholder="أدخل اسم العميل"
									required
								/>
							</div>

							<div class="form-group">
								<label for="reviewbio">التخصص أو المسمى الوظيفي</label>
								<input
									type="text"
									class="form-control"
									id="reviewbio"
									name="reviewbio"
									value="{{ $data->bio }}"
									placeholder="أدخل تخصص العميل أو المسمى الوظيفي"
									required
								/>
							</div>

							<div class="form-group">
								<label for="reviewrating">التقييم</label>
								<input
									type="number"
									class="form-control"
									id="reviewrating"
									name="reviewrating"
									value="{{ $data->rating }}"
									placeholder="أدخل تقييم العميل (بحد أقصى منزلتين عشريتين)"
									pattern="[0-9]+([\.,][0-9]+)?"
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label>تحميل الصورة</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="قم بتحميل صورة العميل"
										id="reviewimageupdate"
										name="reviewimage"
										value="{{ $data->img }}"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempreviewimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="reviewtext">مراجعة العميل</label>
								<textarea
									class="form-control"
									id="reviewtext"
									name="reviewtext"
									rows="4"
									required
									placeholder="أدخل مراجعة العميل"
								>{{ $data->review }}</textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">تعديل</button>
							@else
							<button onclick="alert('فقط المدير يمكنه تعديل شهادة العملاء')" type="button" class="btn btn-primary mr-2">تعديل</button>
							@endif
							<a href="{{ route("testimonial.index") }}" class="btn btn-light">إلغاء</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		reviewimageupdate.onchange = evt => {
		  const [file] = reviewimageupdate.files
		  if (file) {
		    tempreviewimageedit.src = URL.createObjectURL(file)
		  }
		}

	</script>
</x-admin.index>
