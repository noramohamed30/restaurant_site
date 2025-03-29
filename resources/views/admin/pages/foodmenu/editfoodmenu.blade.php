<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">نموذج تعديل قائمة الطعام</h4>
						<p class="card-description">تعديل معلومات عنصر في قائمة الطعام</p>
						<form action="{{ route('foodmenu.update', $data->id ) }}" method="post" enctype="multipart/form-data">
							@method('PUT')
							@csrf
							<div class="form-group">
								<label for="productname">الاسم</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									value="{{ $data->name }}"
									placeholder="أدخل اسم المنتج"
									required
								/>
							</div>

							<div class="form-group">
								<label for="productprice">السعر</label>
								<input
									type="number"
									class="form-control"
									id="productprice"
									name="productprice"
									value="{{ $data->price }}"
									placeholder="أدخل سعر المنتج حتى منزلتين عشريتين"
									pattern="[0-9]+([\.,][0-9]+)?"
									step="0.01"
									required
								/>
							</div>

							<div class="form-group">
								<label>تحديث الصورة</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="قم بتحميل صورة المنتج"
										id="productimageupdate"
										name="productimage"
										value="{{ $data->img }}"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempproductimageedit" src="{{ $data->img }}" alt="{{ $data->name }}" class="h-auto shadow-sm w-1/2" />
							</div>

							<div class="form-group">
								<label for="productdescription">الوصف</label>
								<textarea
									class="form-control"
									id="productdescription"
									name="productdescription"
									rows="4"
									required
									placeholder="أدخل وصف المنتج"
								>{{ $data->desc }}</textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">تعديل</button>
							@else
							<button onclick="alert('فقط المدير يمكنه تعديل قائمة الطعام')" type="button" class="btn btn-primary mr-2">تعديل</button>
							@endif
							<a href="{{ route("foodmenu.index") }}" class="btn btn-light">إلغاء</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		productimageupdate.onchange = evt => {
		  const [file] = productimageupdate.files
		  if (file) {
		    tempproductimageedit.src = URL.createObjectURL(file)
		  }
		}
	</script>
</x-admin.index>
