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
						<h4 class="card-title">نموذج قائمة الطعام</h4>
						<p class="card-description">إضافة معلومات عنصر جديد في قائمة الطعام</p>
						<form action="<?php echo e(route('foodmenu.store')); ?>" method="post" enctype="multipart/form-data">
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="productname">الاسم</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
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
									placeholder="أدخل سعر المنتج حتى منزلتين عشريتين"
									pattern="[0-9]+([\.,][0-9]+)?"
									step="0.01"
									required
								/>
							</div>

							<div class="form-group">
								<label>تحميل الصورة</label>
								<div class="input-group col-xs-12">
									<input
										type="file"
										class="form-control file-upload-info"
										placeholder="قم بتحميل صورة المنتج"
										id="productimage"
										name="productimage"
										required
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempproductimage" src="#" alt="صورة المنتج المؤقتة" class="h-auto shadow-sm w-1/2" style="display: none" />
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
								></textarea>
							</div>

							<?php if($isAdmin === true): ?>
							<button type="submit" class="btn btn-primary mr-2">إضافة</button>
							<?php else: ?>
							<button onclick="alert('فقط المدير يمكنه إضافة عناصر لقائمة الطعام')" type="button" class="btn btn-primary mr-2">إضافة</button>
							<?php endif; ?>
							<a href="<?php echo e(route("foodmenu.index")); ?>" class="btn btn-light">إلغاء</a>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		var imgInput = document.getElementById("productimage");
		imgInput.addEventListener('change', (event) => {
			if (event.target.files[0]) {
        var reader = new FileReader();

				var imgTemp = document.getElementById("tempproductimage");
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
<?php /**PATH E:\bussiness\restaurant-site-laravel\resources\views/admin/pages/foodmenu/createfoodmenu.blade.php ENDPATH**/ ?>