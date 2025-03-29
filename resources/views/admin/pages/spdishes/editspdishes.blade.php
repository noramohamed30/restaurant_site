<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">نموذج تعديل الأطباق الخاصة</h4>
						<p class="card-description">تعديل بيانات الطبق الخاص</p>
						<form action="{{ route('specialdishes.update', $data->id ) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="spdishesname1edit">الجزء الأول من الاسم</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname1edit"
									name="spdishesname1edit"
									value="{{ $data->namepart1 }}"
									placeholder="أدخل الجزء الأول من اسم الطبق"
									required
								/>
							</div>

							<div class="form-group">
								<label for="spdishesname2edit">الجزء الثاني من الاسم</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname2edit"
									name="spdishesname2edit"
									value="{{ $data->namepart2 }}"
									placeholder="أدخل الجزء الثاني من اسم الطبق"
									required
								/>
							</div>

							<div class="form-group">
								<label for="spdishespriceedit">السعر</label>
								<input
									type="number"
									class="form-control"
									id="spdishespriceedit"
									name="spdishespriceedit"
									value="{{ $data->price }}"
									placeholder="أدخل سعر الطبق حتى منزلتين عشريتين"
									pattern="[0-9]+([\.,][0-9]+)?"
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label for="spdishesimageedit">تحميل الصورة</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="قم بتحميل صورة الطبق"
										id="spdishesimageedit"
										name="spdishesimageedit"
										value="{{ $data->img }}"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempspdishesimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="spdishesdescedit">الوصف</label>
								<textarea
									class="form-control"
									id="spdishesdescedit"
									name="spdishesdescedit"
									rows="4"
									required
									placeholder="أدخل وصف الطبق"
								>{{ $data->desc }}</textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">تعديل</button>
							@else
							<button onclick="alert('فقط المدير يمكنه تعديل بيانات الطبق الخاص')" type="button" class="btn btn-primary mr-2">تعديل</button>
							@endif
							<a href="{{ route('specialdishes.index') }}" class="btn btn-light">إلغاء</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		spdishesimageedit.onchange = evt => {
		  const [file] = spdishesimageedit.files
		  if (file) {
		    tempspdishesimageedit.src = URL.createObjectURL(file)
		  }
		}
	</script>
</x-admin.index>
