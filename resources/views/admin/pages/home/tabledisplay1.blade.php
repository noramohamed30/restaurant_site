<div class="row">
    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex align-items-center mb-4">
            <h4 class="card-title mb-sm-0">الحجوزات</h4>
            <a href="{{ route('testimonial.index') }}" class="text-dark ml-auto mb-3 mb-sm-0">عرض جميع الحجوزات</a>
          </div>
          <div class="table-responsive border rounded p-1">
            <table class="table">
              <thead>
                <tr class="bg-slate-800">
                  @foreach(["الصورة", "المقدمة", "الوصف", "التقييم", "تاريخ الإنشاء"] as $heading)
                    <th class="font-bold text-white">{{$heading}}</th>
                  @endforeach
                </tr>
              </thead>
              <tbody>
                @foreach($testimonial as $data)
                <tr>
                  <td><img class="img-sm rounded-circle m-auto" src="{{$data->img}}" alt="صورة الشخص"></td>
                  <td>
                    <p class="capitalize mb-0">{{$data->name}}</p>
                    <p class="capitalize italic mb-0 py-1 text-slate-400">{{$data->bio}}</p>
                  </td>
                  <td class="max-w-[290px] min-w-[290px] !leading-normal !whitespace-normal break-words">{{$data->review}}</td>
                  <td>{{$data->rating}}</td>
                  <td>{{$data->created_at}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
