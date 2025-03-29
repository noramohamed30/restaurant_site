<div class="row quick-action-toolbar">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-header d-block d-md-flex">
          <h5 class="mb-0">إجراءات سريعة</h5>
        </div>
        <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="أزرار الإجراءات السريعة">
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a class="btn px-0" href="<?php echo e(route('foodmenu.create')); ?>"> <i class="fa-solid fa-bowl-rice mr-2"></i> إضافة عنصر لقائمة الطعام</a>
          </div>
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a class="btn px-0" href="<?php echo e(route('reservation.index')); ?>"><i class="fa-solid fa-table mr-2"></i> عرض الحجوزات</a>
          </div>
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a class="btn px-0" href="<?php echo e(route('specialdishes.create')); ?>"><i class="fa-solid fa-bell-concierge mr-2"></i> إضافة طبق خاص</a>
          </div>
          <div class="col-sm-6 col-md-3 p-3 text-center btn-wrapper">
            <a class="btn px-0" href="<?php echo e(route('testimonial.create')); ?>"><i class="fa-solid fa-star-half-stroke mr-2"></i> إدخال رأي عميل</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php /**PATH E:\bussiness\restaurant-site-laravel\resources\views/admin/pages/home/quickaction.blade.php ENDPATH**/ ?>