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
						<h4 class="card-title">نموذج تعديل قائمة الطعام</h4>
						<p class="card-description">تعديل معلومات عنصر في قائمة الطعام</p>
						<form action="<?php echo e(route('foodmenu.update', $data->id )); ?>" method="post" enctype="multipart/form-data">
							<?php echo method_field('PUT'); ?>
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="productname">الاسم</label>
								<input
									type="text"
									class="form-control"
									id="productname"
									name="productname"
									value="<?php echo e($data->name); ?>"
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
									value="<?php echo e($data->price); ?>"
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
										value="<?php echo e($data->img); ?>"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempproductimageedit" src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="h-auto shadow-sm w-1/2" />
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
								><?php echo e($data->desc); ?></textarea>
							</div>

							<?php if($isAdmin === true): ?>
							<button type="submit" class="btn btn-primary mr-2">تعديل</button>
							<?php else: ?>
							<button onclick="alert('فقط المدير يمكنه تعديل قائمة الطعام')" type="button" class="btn btn-primary mr-2">تعديل</button>
							<?php endif; ?>
							<a href="<?php echo e(route("foodmenu.index")); ?>" class="btn btn-light">إلغاء</a>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH E:\bussiness\restaurant-site-laravel\resources\views/admin/pages/foodmenu/editfoodmenu.blade.php ENDPATH**/ ?>