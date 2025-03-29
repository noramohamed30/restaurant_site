<x-admin.index :user="$user" :isAdmin="$isAdmin">
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">نموذج إضافة الأطباق الخاصة</h4>
						<p class="card-description">إضافة بيانات طبق خاص</p>
						<form action="{{ route('specialdishes.store') }}" method="post" enctype="multipart/form-data">
							@csrf
							<div class="form-group">
								<label for="spdishesname1">الجزء الأول من الاسم</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname1"
									name="spdishesname1"
									placeholder="أدخل الجزء الأول من اسم الطبق"
									required
								/>
							</div>

							<div class="form-group">
								<label for="spdishesname2">الجزء الثاني من الاسم</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname2"
									name="spdishesname2"
									placeholder="أدخل الجزء الثاني من اسم الطبق"
									required
								/>
							</div>

							<div class="form-group">
								<label for="spdishesprice">السعر</label>
								<input
									type="number"
									class="form-control"
									id="spdishesprice"
									name="spdishesprice"
									placeholder="أدخل سعر الطبق حتى منزلتين عشريتين"
									pattern="[0-9]+([\.,][0-9]+)?"
									step="0.01"
									repuired
								/>
							</div>

							<div class="form-group">
								<label for="spdishesimage">تحميل الصورة</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="قم بتحميل صورة الطبق"
										id="spdishesimage"
										name="spdishesimage"
										required
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempspdishesimage" src="#" alt="صورة مرفوعة مؤقتاً" class="h-auto shadow-sm w-1/2" style="display: none" />
							</div>

							<div class="form-group">
								<label for="spdishesdesc">الوصف</label>
								<textarea
									class="form-control"
									id="spdishesdesc"
									name="spdishesdesc"
									rows="4"
									required
									placeholder="أدخل وصف الطبق"
								></textarea>
							</div>

							@if ($isAdmin === true)
							<button type="submit" class="btn btn-primary mr-2">إضافة</button>
							@else
							<button onclick="alert('فقط المدير يمكنه إضافة الأطباق الخاصة')" type="button" class="btn btn-primary mr-2">إضافة</button>
							@endif
							<a href="{{ route('specialdishes.index') }}" class="btn btn-light">إلغاء</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var imgInput = document.getElementById("spdishesimage");
		imgInput.addEventListener('change', (event) => {
			if (event.target.files[0]) {
        var reader = new FileReader();

				var imgTemp = document.getElementById("tempspdishesimage");
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
