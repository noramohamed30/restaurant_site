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
						<h4 class="card-title">نموذج تعديل الأطباق الخاصة</h4>
						<p class="card-description">تعديل بيانات الطبق الخاص</p>
						<form action="<?php echo e(route('specialdishes.update', $data->id )); ?>" method="post" enctype="multipart/form-data">
							<?php echo method_field('PUT'); ?>
							<?php echo csrf_field(); ?>
							<div class="form-group">
								<label for="spdishesname1edit">الجزء الأول من الاسم</label>
								<input
									type="text"
									class="form-control"
									id="spdishesname1edit"
									name="spdishesname1edit"
									value="<?php echo e($data->namepart1); ?>"
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
									value="<?php echo e($data->namepart2); ?>"
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
									value="<?php echo e($data->price); ?>"
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
										value="<?php echo e($data->img); ?>"
									/>
								</div>
							</div>
							<div class="form-group">
								<img id="tempspdishesimageedit" src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="h-auto shadow-sm w-1/2" />
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
								><?php echo e($data->desc); ?></textarea>
							</div>

							<?php if($isAdmin === true): ?>
							<button type="submit" class="btn btn-primary mr-2">تعديل</button>
							<?php else: ?>
							<button onclick="alert('فقط المدير يمكنه تعديل بيانات الطبق الخاص')" type="button" class="btn btn-primary mr-2">تعديل</button>
							<?php endif; ?>
							<a href="<?php echo e(route('specialdishes.index')); ?>" class="btn btn-light">إلغاء</a>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH E:\bussiness\restaurant-site-laravel\resources\views/admin/pages/spdishes/editspdishes.blade.php ENDPATH**/ ?>