@extends('admin.layout')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Danh Sách Liên Hệ</h1>
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
                            <h3 class="card-title">Danh Sách</h3>
                        </div>
                        <div class="card-body">
                            <table class="table tabl-stripped">
                                <thead>
                                    <th>STT</th>
                                    <th>Id_user</th>
                                    <th>Id_room</th>
                                    <th>Checkin_date</th>
                                    <th>Checkout_date</th>
                                    <th>Số Luọng</th>
                                    <th>Ngày Tạo</th>
                                    <th>Ngày Sửa</th>
                                    <th></th>
                                </thead>
                                <tbody>
                                   @foreach ($list_booking as $index =>$item)
                                        <tr>
                                <td>{{$index + 1}}</td>
                                <td>{{$item->id_user}}</td>
                                <td>{{$item->id_room}}</td>
                                <td>{{$item->checkin_date}}</td>
                                <td>{{$item->checkout_date}}</td>
                                <td>{{$item->quantity}}</td>
                                {{-- <td style="overflow: hidden;text-overflow: ellipsis; width:10%">{{$item->discription}}</td>
                                <td style="overflow: hidden;text-overflow: ellipsis; width:10%">{{$item->features}}</td> --}}
                                <td>{{$item->created_at}}</td>
                                <td>{{$item->updated_at}}</td>
                                
                                <td>
                                    <a href="{{route('booking_delete', ['id' => $item->id])}}"  class="btn btn-sm btn-danger">
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
            {{$list_booking->links()}}
        </div>
        <!-- /.content-wrapper -->
    </div>
</div>
@endsection