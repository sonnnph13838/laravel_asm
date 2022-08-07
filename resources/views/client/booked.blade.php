@extends('client.layout')
@section('content')
    <div class="section big-55-height over-hide z-bigger">
	
		<div class="parallax parallax-top" >
			<img src="{{asset('img/blogban.jpg')}}" alt="" style="width:100%" height="100%">
		</div>
		<div class="dark-over-pages"></div>
	
		<div class="hero-center-section pages">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 parallax-fade-top">
						<div class="hero-text">Bài Viết</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product"></th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Ngày Tạo</th>
                                <th>Mua Ngay</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_book as $item)
                            <tr>
                                <td>{{$item->checkin_date}}</td>
                                <td>{{$item->checkout_date}}</td>
                            </tr>
                            @endforeach
                                
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection