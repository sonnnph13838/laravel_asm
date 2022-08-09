@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Phòng</h1>
                </div><!-- /.col -->
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class=""></li>
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
                            <h3 class="card-title">Danh Sách phòng</h3>
                        </div>
                        <div class="card-body">
                            <table class="table tabl-stripped">
                                <thead>
                                    <th>STT</th>
                                    <th>Tên Phòng</th>
                                    <th>Ảnh chính</th>
                                    <th>Ảnh phụ</th>
                                    <th>Mô Tả</th>
                                    <th>Nội dung</th>
                                    <!-- <th>Trạng Thái</th> -->
                                    <th>
                                        <a href="{{route('blog_add')}}" class="btn btn-sm btn-success">Tạo mới</a>
                                    </th>
                                </thead>
                                <tbody>
                                    @foreach ($list_blog as $index =>$item)
                                    <tr>
                                        <td>{{$index + 1}}</td>
                                        <td>{{$item->title}}</td>
                                        <td><img id="mat_truoc_preview"src="{{ $item->image1?''.Storage::url($item->image1):'http://placehold.it/100x100' }}"alt="your image"style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive"/></td>
                                        <td>
                                        <img id="mat_truoc_preview"src="{{ $item->image2?''.Storage::url($item->image2):'http://placehold.it/100x100' }}"alt="your image"style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive"/>
                                <img id="mat_truoc_preview"src="{{ $item->image3?''.Storage::url($item->image3):'http://placehold.it/100x100' }}"alt="your image"style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-responsive"/>
                                        </td>
                                        <td>{{$item->discription}}</td>
                                        <td>{{$item->content}}</td>
                                        <td style="width: 10%;">
                                            <a href="{{route('blog_detail', ['id' => $item->id])}}" class="btn btn-sm btn-info">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <a href="" class="btn btn-sm btn-danger">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <div class="col d-flex justify-content-center">
            {{$list_blog->links()}}
        </div>
        <!-- /.content-wrapper -->
    </div>
</div>
@endsection