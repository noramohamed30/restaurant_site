<?php if (isset($component)) { $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Admin\Index::class, ['user' => $user,'isAdmin' => $isAdmin]); ?>
<?php $component->withName('admin.index'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
	<div class="content-wrapper">
		<a href="<?php echo e(route('testimonial.create')); ?>" class="btn btn-primary mx-2">إضافة شهادة عميل</a>
	</div>

	<div class="content-wrapper">
		<div class="col-lg-12 grid-margin stretch-card">
			<div class="card">
				<div class="card-body">
					<h4 class="card-title">جدول بيانات شهادات العملاء</h4>
					<p class="card-description">
						جدول يحتوي على معلومات شهادات العملاء
					</p>

					<?php if(session()->has('msg')): ?>
					<p class="alert alert-info"><?php echo e(session()->get('msg')); ?></p>
					<?php endif; ?>

					<table class="table table-hover overflow-auto block">
						<thead>
							<tr class="bg-slate-800">
								<?php $__currentLoopData = ["الصورة", "الاسم", "التخصص", "التقييم", "الوصف", "تاريخ الإضافة", "", ""]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $heading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<th class="font-bold text-white"><?php echo e($heading); ?></th>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td class="w-32">
									<img src="<?php echo e($data->img); ?>" alt="<?php echo e($data->name); ?>" class="!w-full !h-auto !rounded-none">
								</td>
								<td><?php echo e($data->name); ?></td>
								<td><?php echo e($data->bio); ?></td>
								<td><?php echo e($data->rating); ?></td>
								<td class="max-w-[190px] min-w-[190px] !leading-normal !whitespace-normal break-words"><?php echo e($data->review); ?></td>
								<td><?php echo e($data->created_at); ?></td>
								<td>
									<a
										href="<?php echo e(route('testimonial.edit', $data->id)); ?>"
										class="badge badge-primary cursor-pointer"
										>تعديل</a
									>
								</td>
								<td>
									<?php if($isAdmin === true): ?>
									<form method="POST" action="<?php echo e(route('testimonial.destroy', $data->id)); ?>">
						        <?php echo method_field('DELETE'); ?>
										<?php echo csrf_field(); ?>
					        	<button
					        		type="submit"
					        		class="badge badge-danger cursor-pointer"
					        		onclick="return confirmDeleteReview(<?php echo e($data->id); ?> , '<?php echo e($data->name); ?>');"
					        		>حذف</button>
								  </form>
									<?php else: ?>
									<button
										onclick="alert('فقط المدير يمكنه حذف شهادة العميل')"
										class="badge badge-danger cursor-pointer"
										>حذف</button>
									<?php endif; ?>
								</td>
							</tr>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816)): ?>
<?php $component = $__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816; ?>
<?php unset($__componentOriginalbd7cadf8083432147e94672f9bc99dff36f0e816); ?>
<?php endif; ?>
<?php /**PATH E:\bussiness\restaurant-site-laravel\resources\views/admin/pages/review/review.blade.php ENDPATH**/ ?>