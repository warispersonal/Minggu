@extends('layouts.app')

@push('style')
    <link rel="stylesheet" href="{{ asset('argon') }}/vendor/data-table/datatables.min.css">
    <style>
        .move {cursor: move;}
    </style>
@endpush

@section('content')
    <div class="header bg-gradient-primary pb-6 pt-4 pt-md-6">
        <div class="container-fluid">
            <div class="header-body">
                <div class="row align-items-center py-4">
                    <div class="col-lg-6 col-7">
                        <h6 class="h2 text-white d-inline-block mb-0">Partner Details</h6>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <li class="breadcrumb-item"><a href="{{ route('star.dashboard') }}"><i
                                            class="fas fa-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Manage Partner Details</a></li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt--7">
        <div class="card  mb-5">
            <!-- Card header -->
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6 ">
                        <h3 class="mb-0">Slider Details</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a data-toggle="modal" data-target="#modal-store-slider" class="btn btn-sm btn-neutral">
                            Add New Slider
                        </a>
                    </div>
                </div>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush w-100" id="adminTable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="budget">Slider Image</th>
                        <th scope="col" class="sort" data-sort="budget">Slider Link</th>
                        <th scope="col" class="sort" data-sort="budget">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="tableslider">
                    @foreach($partner->sliders as $slider)
                        <tr class="odd slider_row move"   data-id="{{ $slider->id }}">
                            <td><img src="{{$slider->slider_image}}" class="promosi-image-details main-details-image"/>
                            </td>
                            <td>{{ \Illuminate\Support\Str::limit($slider->slider_link, 40, $end='...') }}</td>
                            <td>
                                @if($slider->status == "delete")
                                    <a onclick="return confirm('Are you sure you want approve to delete?')"
                                       href="{{route('stars.homepage.sliderApprove',['id'=>$slider->id,'status'=>1])}}"
                                       class="btn btn-sm btn-neutral">
                                        Approve for Delete
                                    </a>
                                    <a onclick="return confirm('Are you sure you want not approve to delete?')"
                                       href="{{route('stars.homepage.sliderApprove',['id'=>$slider->id,'status'=>2])}}"
                                       class="btn btn-sm btn-neutral">
                                        Not Approve not Delete
                                    </a>
                                @endif
                                @if($slider->status == "add")
                                    <a onclick="return confirm('Are you sure you want approve to add?')"
                                       href="{{route('stars.homepage.sliderApprove',['id'=>$slider->id,'status'=>3])}}" class="btn btn-sm btn-neutral">
                                        Approve for Add
                                    </a>
                                    <a  onclick="return confirm('Are you sure you want not approve to add?')"
                                        href="{{route('stars.homepage.sliderApprove',['id'=>$slider->id,'status'=>4])}}" class="btn btn-sm btn-neutral">
                                        Not Approve for Add
                                    </a>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                            class="fas fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{route('stars.homepage.slide.edit',$slider->id)}}">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete?')"
                                           class="dropdown-item"
                                           href="{{route('stars.homepage.slide.delete',$slider->id)}}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
        </div>

        @if($partner->is_promotion == 1)
            <div class="card mt-5 mb-5">
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-6 ">
                            <h3 class="mb-0">Promotion Details</h3>
                        </div>
                        <div class="col-6 text-right">
                            <a data-toggle="modal" data-target="#modal-promotion-image" class="btn btn-sm btn-neutral">
                                Add New Prmotion
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                    <table class="table align-items-center table-flush w-100" id="promotionTable">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col" class="sort" data-sort="budget">Promotion Image</th>
                            <th scope="col" class="sort" data-sort="budget">URL</th>
                            <th scope="col" class="sort" data-sort="budget">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody id="tablepromotion">
                        @foreach($partner->promotions as $slider)
                            <tr class="odd promotion_row move"  data-id="{{ $slider->id }}">
                                <td><img src="{{$slider->promotion_logo}}"
                                         class="promosi-image-details main-details-image"/>
                                </td>
                                <td>{{ \Illuminate\Support\Str::limit($slider->url, 40, $end='...') }}</td>
                                <td>
                                    @if($slider->status == "delete")
                                        <a onclick="return confirm('Are you sure you want approve to delete?')"
                                           href="{{route('stars.homepage.promotionApprove',['id'=>$slider->id,'status'=>1])}}"
                                           class="btn btn-sm btn-neutral">
                                            Approve for Delete
                                        </a>
                                        <a onclick="return confirm('Are you sure you want not approve to delete?')"
                                           href="{{route('stars.homepage.promotionApprove',['id'=>$slider->id,'status'=>2])}}"
                                           class="btn btn-sm btn-neutral">
                                            Not Approve not Delete
                                        </a>
                                    @endif
                                    @if($slider->status == "add")
                                        <a onclick="return confirm('Are you sure you want approve to add?')"
                                           href="{{route('stars.homepage.promotionApprove',['id'=>$slider->id,'status'=>3])}}" class="btn btn-sm btn-neutral">
                                            Approve for Add
                                        </a>
                                        <a  onclick="return confirm('Are you sure you want not approve to add?')"
                                            href="{{route('stars.homepage.promotionApprove',['id'=>$slider->id,'status'=>4])}}" class="btn btn-sm btn-neutral">
                                            Not Approve for Add
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                class="fas fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="{{route('admin.stars.promotion.edit',$slider->id)}}">Edit</a>
                                            <a onclick="return confirm('Are you sure you want to delete?')"
                                               class="dropdown-item"
                                               href="{{route('stars.promotion.delete',$slider->id)}}">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
            </div>
        @endif

        <div class="card mt-5">
            <!-- Card header -->
            <div class="card-header border-0">
                <div class="row">
                    <div class="col-6">
                        <h3 class="mb-0">Link Details</h3>
                    </div>
                    <div class="col-6 text-right">
                        <a data-toggle="modal" data-target="#modal-store-link" class="btn btn-sm btn-neutral"
                           href="http://minggu.test/star/program/add">
                            Add New Link
                        </a>
                    </div>
                </div>

            </div>

            <!-- Light table -->
            <div class="table-responsive">
                <table class="table align-items-center table-flush w-100" id="adminTable">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col" class="sort" data-sort="name">#</th>
                        <th scope="col" class="sort" data-sort="budget">Text</th>
                        <th scope="col" class="sort" data-sort="budget">URL</th>
                        <th scope="col" class="sort" data-sort="budget">Status</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($partner->links as $link)
                        <tr class="odd">
                            <td>{{$loop->index + 1}}</td>
                            <td>{{$link->title}}</td>
                            <td>{{ \Illuminate\Support\Str::limit($link->link, 40, $end='...') }}</td>
                            <td>
                                @if($link->status == "delete")
                                    <a onclick="return confirm('Are you sure you want approve to delete?')"
                                       href="{{route('stars.homepage.linkApprove',['id'=>$link->id,'status'=>1])}}"
                                       class="btn btn-sm btn-neutral">
                                        Approve for Delete
                                    </a>
                                    <a onclick="return confirm('Are you sure you want not approve to delete?')"
                                       href="{{route('stars.homepage.linkApprove',['id'=>$link->id,'status'=>2])}}"
                                       class="btn btn-sm btn-neutral">
                                        Not Approve not Delete
                                    </a>
                                @endif
                                @if($link->status == "add")
                                    <a onclick="return confirm('Are you sure you want approve to add?')"
                                       href="{{route('stars.homepage.linkApprove',['id'=>$link->id,'status'=>3])}}" class="btn btn-sm btn-neutral">
                                        Approve for Add
                                    </a>
                                    <a  onclick="return confirm('Are you sure you want not approve to add?')"
                                        href="{{route('stars.homepage.linkApprove',['id'=>$link->id,'status'=>4])}}" class="btn btn-sm btn-neutral">
                                        Not Approve for Add
                                    </a>
                                @endif
                            </td>
                            <td>
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-icon-only text-light" href="#"
                                       role="button"
                                       data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">
                                        <i class="fas fa-ellipsis-v"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <a class="dropdown-item" href="{{route('stars.link.edit',$link->id)}}">Edit</a>
                                        <a onclick="return confirm('Are you sure you want to delete?')"
                                           class="dropdown-item"
                                           href="{{route('stars.homepage.link.delete',$link->id)}}">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Card footer -->
        </div>

    </div>



    <div class="modal fade" id="modal-store-slider" tabindex="-1" role="dialog" aria-labelledby="modal-form"
         aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent">
                            <div class="text-muted text-center mt-2 mb-2">Add New Slider</div>
                        </div>
                        <div class="card-body px-lg-4 py-lg-4">
                            <form method="post" action="{{route('stars.slide.store')}}" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="partner" value="{{$partner->id}}">
                                <div class="form-group mb-3">
                                    <label>Select Image (577 ?? 200 px)</label>
                                    <div class="input-group input-group-alternative">
                                        <input class="form-control"  onchange="validateUploadImage(this)"  name="slider" type="file" required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <input class="form-control" name="slider_link" placeholder="Slider Link"
                                               type="url" required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" id="admin-store" class="btn btn-primary my-2">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($partner->is_promotion == 1)
        <div class="modal fade" id="modal-promotion-image" tabindex="-1" role="dialog" aria-labelledby="modal-form"
             aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card bg-secondary shadow border-0">
                            <div class="card-header bg-transparent">
                                <div class="text-muted text-center mt-2 mb-2">Add New Promotion Image</div>
                            </div>
                            <div class="card-body px-lg-4 py-lg-4">
                                <form method="post" action="{{route('stars.promotion.store')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="partner" value="{{$partner->id}}">
                                    <div class="form-group mb-3">
                                        <label>Select Image (526 ?? 234 px)</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control"  onchange="validateUploadImage(this)"  name="slider" type="file" required>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label>Promotion URL</label>
                                        <div class="input-group input-group-alternative">
                                            <input class="form-control" name="url" type="url" required>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" id="admin-store" class="btn btn-primary my-2">Create
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <div class="modal fade" id="modal-store-link" tabindex="-1" role="dialog" aria-labelledby="modal-form"
         aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="card bg-secondary shadow border-0">
                        <div class="card-header bg-transparent">
                            <div class="text-muted text-center mt-2 mb-2">Add New Link</div>
                        </div>
                        <div class="card-body px-lg-4 py-lg-4">
                            <form method="post" action="{{route('stars.link.store')}}">
                                @csrf
                                <input type="hidden" name="partner" value="{{$partner->id}}">
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <input class="form-control" name="title" placeholder="Link Title" type="text"
                                               required>
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <input class="form-control" name="link" placeholder="Link URL" type="url"
                                               required>
                                    </div>
                                </div>

                                <div class="form-group mb-3">
                                    <div class="input-group input-group-alternative">
                                        <input class="form-control" name="title_bm" placeholder="Link Title (BM)"
                                               type="text"
                                               required>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button type="submit" id="admin-store" class="btn btn-primary my-2">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footers.auth')

@endsection

@push('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
   
 <script type="text/javascript">
      $(function () {

        $( "#tableslider" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer1();
          }
        });

        function sendOrderToServer1() {
          var row = [];
          var token = $('meta[name="csrf-token"]').attr('content');
          $('tr.slider_row').each(function(index,element) {
            row.push({
              id: $(this).attr('data-id'),
              order_no: index+1
            });
          });

          $.ajax({
            type: "POST", 
            dataType: "json", 
            url: "{{ route('star.homepage.slider.reorder') }}",
                data: {
              row: row,
              _token: token
            },
            success: function(response) {
               
            }
          });
        }
      });
    </script>
    
    
 <script type="text/javascript">
      $(function () {

        $( "#tablepromotion" ).sortable({
          items: "tr",
          cursor: 'move',
          opacity: 0.6,
          update: function() {
              sendOrderToServer();
          }
        });

        function sendOrderToServer() {
          var row = [];
          var token = $('meta[name="csrf-token"]').attr('content');
          $('tr.promotion_row').each(function(index,element) {
            row.push({
              id: $(this).attr('data-id'),
              order_no: index+1
            });
          });

          $.ajax({
            type: "POST", 
            dataType: "json", 
            url: "{{ route('star.homepage.promotion.reorder') }}",
                data: {
              row: row,
              _token: token
            },
            success: function(response) {
               
            }
          });
        }
      });
    </script>
@endpush
