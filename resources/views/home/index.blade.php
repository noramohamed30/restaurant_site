<!DOCTYPE html>
<html lang="en">
<head>
    @include("home.partials.head")
</head>
<body>
    @include("home.partials.preloader")
    {{-- @if(session()->has('success'))
    <script>
        Swal.fire({
            title: "حجز ناجح!",
            text: "{{ session('success') }}",
            icon: "success",
            confirmButtonText: "حسنًا"
        });
    </script>
@endif --}}


    @include("home.partials.header", ['navdata' => $navdata])
    @include("home.partials.banner", ['bannerImg' => 'assets/images/banner-bg.jpg'])
    @include("home.partials.welcome")
    @include("home.partials.food", ['fooddata' => $fooddata, 'foodBg' => 'assets/images/food-bg.png'])

    @include("home.partials.testimonial", ['testimonialdata' => $testimonialdata, 'quoteImg' => 'assets/images/quote.png'])
    @include("home.partials.deshes", ['dishesdata' => $dishesdata])


    @include("home.partials.table", ['tableBg' => 'assets/images/table-bg.jpg'])
    @include("home.partials.footer")

    @include("home.partials.script")
</body>
</html>
