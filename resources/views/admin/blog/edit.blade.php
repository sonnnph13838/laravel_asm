@extends('admin.layout')
@section('content')
<!-- Main content -->
<section class="content appTuyenSinh">
    <link rel="stylesheet" href="{{ asset('default/bower_components/select2/dist/css/select2.min.css')}} ">
    <style>
        .select2-container--default .select2-selection--single,
        .select2-selection .select2-selection--single {
            padding: 3px 0px;
            height: 30px;
        }

        .select2-container {
            margin-top: -5px;
        }

        option {
            white-space: nowrap;
        }

        .select2-container--default .select2-selection--single {
            background-color: #fff;
            border: 1px solid #aaa;
            border-radius: 0px;
        }

        .select2-container--default .select2-selection--multiple .select2-selection__choice {
            color: #216992;
        }

        .select2-container--default .select2-selection--multiple {
            margin-top: 10px;
            border-radius: 0;
        }

        .select2-container--default .select2-results__group {
            background-color: #eeeeee;
        }
    </style>



    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Cập Nhật Blog</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-12">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Cập Nhật Blog</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{route("blog_update",['id'=>request()->route('id')])}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-6 offset-3">
                                        <div class="form-group">
                                            <label for="">Title<span class="text-danger">(*)</span></label>
                                            <input type="text" name="title" class="form-control" id="title" value="{{$objItem->title}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="">Mô tả<span class="text-danger">(*)</span></label>
                                            <input type="text" name="discription" class="form-control" id="discription" value="{{$objItem->discription}}">
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label class="col-md-3 col-sm-4 control-label">Ảnh chính <span class="text-danger">(*)</span></label>
                                            <div class="col-md-9 col-sm-8">
                                                <div class="row">
                                                    <div class="col-xs-6">
                                                        <img id="mat_truoc_preview1" src="{{ $objItem->image1?''.Storage::url($objItem->image1):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
                                                        <input type="file" name="image1" accept="image/*" class="form-control-file @error('image1') is-invalid @enderror" id="cmt_truoc1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <label class="col-md-3 col-sm-4 control-label">Ảnh Phụ<span class="text-danger"></span></label>
                                        <br>
                                        <div class="container text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-sm-4 control-label">1<span class="text-danger"></span></label>
                                                        <div class="col-md-9 col-sm-8">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    @if($objItem->image2 > 0)
                                                                    <img id="mat_truoc_preview2" src="{{ $objItem->image2?''.Storage::url($objItem->image2):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
                                                                    @else
                                                                    <img id="mat_truoc_preview2" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                                    @endif
                                                                    <input type="file" name="image2" accept="image/*" class="form-control-file @error('image2') is-invalid @enderror" id="cmt_truoc2">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-sm-4 control-label">2<span class="text-danger"></span></label>
                                                        <div class="col-md-9 col-sm-8">
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    @if($objItem->image3 > 0)
                                                                    <img id="mat_truoc_preview3" src="{{ $objItem->image3?''.Storage::url($objItem->image3):'http://placehold.it/100x100' }}" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive" />
                                                                    @else
                                                                    <img id="mat_truoc_preview3" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                                                    @endif
                                                                    <input type="file" name="image3" accept="image/*" class="form-control-file @error('image3') is-invalid @enderror" id="cmt_truoc3">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="form-group">
                                            <label for="">Nội dung<span class="text-danger">(*)</span></label>
                                            <input type="text" name="content" class="form-control" id="content" value="{{$objItem->content}}">
                                        </div>
                                        <br>
                                        <?php //Hiển thị thông báo thành công
                                        ?>
                                        @if ( Session::has('success') )
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <strong>{{ Session::get('success') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        @endif
                                        <?php //Hiển thị thông báo lỗi
                                        ?>
                                        @if ( Session::has('error') )
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <strong>{{ Session::get('error') }}</strong>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        @endif
                                        @if ($errors->any())
                                        <div class="alert alert-danger alert-dismissible" role="alert">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>
                                        @endif
                                        <br>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" id="show_menu" name="status" value="1" type="checkbox">
                                                <label class="form-check-label" for="show_menu">Hiển thị menu</label>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="">
                                            <a href="" class="btn btn-sm btn-danger">Hủy</a>
                                            &nbsp;
                                            <input type="submit" class="btn btn-sm btn-primary" value="Lưu">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
                </div>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
        </div>
    </div>
    <!-- Phần nội dung riêng của action  -->
    {{-- <form class="form-horizontal " action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ten_de_thi" class="col-md-3 col-sm-4 control-label">Tên người dùng <span class="text-danger">(*)</span></label>

                            <div class="col-md-9 col-sm-8">
                                <input type="text" name="name" id="name" class="form-control" value="@isset($request['name']){{ $request['name'] }}@endisset">
    <span id="mes_sdt"></span>
    </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-md-3 col-sm-4 control-label">status <span class="text-danger">(*)</span></label>
        <div class="col-md-9 col-sm-8">
            <input type="text" name="status" id="email" class="form-control" value="@isset($request['status']){{ $request['status'] }}@endisset">
            <span id="mes_sdt"></span>
        </div>
    </div>
    </div>
    </div>
    </div>
    <!-- /.box-body -->
    <div class="text-center">
        <button type="submit" class="btn btn-primary"> Save</button>
        <a href="" class="btn btn-default">Cancel</a>
    </div>
    <!-- /.box-footer -->
    </form> --}}




</section>

@endsection
@section('script')
<script src="{{ asset('default/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('default/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script>
    $(function() {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $(selector).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc1").change(function() {
            readURL(this, '#mat_truoc_preview1');
        });
    });
</script>
<script>
    $(function() {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $(selector).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc2").change(function() {
            readURL(this, '#mat_truoc_preview2');
        });
    });
</script>
<script>
    $(function() {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();
                reader.onload = function(e) {
                    $(selector).attr('src', e.target.result);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc3").change(function() {
            readURL(this, '#mat_truoc_preview3');
        });
    });
</script>

@endsection