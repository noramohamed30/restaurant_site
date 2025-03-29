<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">نموذج إضافة شهادة العملاء</h4>
						<p class="card-description">إضافة بيانات شهادة العميل</p>
						<form action="{{ route('testimonial.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="reviewname">الاسم</label>
								<input
									type="text"
									class="form-control"
									id="reviewname"
									name="reviewname"
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
										id="reviewimage"
										name="reviewimage"
										required
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempreviewimage" src="#" alt="صورة مرفوعة مؤقتًا" class="h-auto shadow-sm w-1/2" style="display: none" />
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
								></textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">إضافة</button>
							@else
							<button onclick="alert('فقط المدير يمكنه إضافة شهادة العملاء')" type="button" class="btn btn-primary mr-2">إضافة</button>
							@endif
							<a href="{{ route("testimonial.index") }}" class="btn btn-light">إلغاء</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var imgInput = document.getElementById("reviewimage");
		imgInput.addEventListener('change', (event) => {
			if (event.target.files[0]) {
        var reader = new FileReader();

				var imgTemp = document.getElementById("tempreviewimage");
        reader.onload = function (e) {
        	imgTemp.setAttribute("src", e.target.result);
        }

        reader.readAsDataURL(event.target.files[0]);

        if (imgTemp.style.display === "inline") {
			    imgTemp.style.display = "block";
			  } else {
			    imgTemp.style.display = "inline";
			  }
	    }
		});

	</script>
</x-admin.index>
