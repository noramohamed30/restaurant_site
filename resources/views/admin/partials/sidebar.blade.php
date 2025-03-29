<!-- جزء الشريط الجانبي يبدأ -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item nav-profile">
        <a class="nav-link" href="{{ route('admin.index') }}">
          @if ($user !== null)
          <div class="profile-image">
            @if ($user->img)
            <img
              class="img-xs rounded-circle ml-2 cursor-pointer"
              src="{{ $user->img }}"
              alt="صورة الملف الشخصي"
            />
            @else
            <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
            @endif
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{ $user->name }}</p>
            @if ($isAdmin === true)
              <p class="designation">مدير النظام</p>
            @else
              <p class="designation">مستخدم عادي</p>
            @endif
          </div>
          @else
          <i class="fa-solid fa-user pr-2 rounded-circle text-4xl text-black-50 text-white-50"></i>
          <div class="text-wrapper">
            <p class="profile-name">مستخدم زائر</p>
            <p class="designation">زائر</p>
          </div>
          @endif
        </a>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">الجداول</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">
          <span class="menu-title">المستخدمون</span>
          <i class="fa-solid fa-users menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('foodmenu.index')}}">
          <span class="menu-title">قائمة الطعام</span>
          <i class="fa-solid fa-bowl-rice menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('reservation.index')}}">
          <span class="menu-title">الحجوزات</span>
          <i class="fa-solid fa-table menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('specialdishes.index')}}">
          <span class="menu-title">الأطباق الخاصة</span>
          <i class="fa-solid fa-bell-concierge menu-icon"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('testimonial.index')}}">
          <span class="menu-title">آراء العملاء</span>
          <i class="fa-solid fa-star-half-stroke menu-icon"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- جزء الشريط الجانبي ينتهي -->
