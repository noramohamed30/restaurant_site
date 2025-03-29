<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<div class="row">
			<div class="col-md-6 grid-margin stretch-card">
				<div class="card">
					<div class="card-body">
						<h4 class="card-title">نموذج إضافة شهادة العملاء</h4>
						<p class="card-description">إضافة بيانات شهادة العميل</p>
						<form action="<?php echo e(route('testimonial.store')); ?>" method="post" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
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

							<?php if($isAdmin === true): ?>
							<button type="submit" class="btn btn-primary mr-2">إضافة</button>
							<?php else: ?>
							<button onclick="alert('فقط المدير يمكنه إضافة شهادة العملاء')" type="button" class="btn btn-primary mr-2">إضافة</button>
							<?php endif; ?>
							<a href="<?php echo e(route("testimonial.index")); ?>" class="btn btn-light">إلغاء</a>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH E:\bussiness\restaurant-site-laravel\resources\views/admin/pages/review/createreview.blade.php ENDPATH**/ ?>