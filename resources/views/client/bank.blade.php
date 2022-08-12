@extends('client.layout')
@section('content')
<!-- Primary Page Layout
	================================================== -->

<div class="section big-55-height over-hide z-bigger">

    <div class="parallax parallax-top" style="background-image: url('https://ivang-design.com/thalia/img/explore.jpg')">

    </div>
    <div class="dark-over-pages"></div>

    <div class="hero-center-section pages">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 parallax-fade-top">
                    <div class="hero-text">Thanh Toán</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section padding-top padding-bottom-smaller z-bigger background-grey">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="subtitle with-line text-center mb-4">Thông tin</div>
                <h3 class="text-center padding-bottom-small">Thanh toán</h3>
            </div>
            <div class="section clearfix"></div>
        </div>
    </div>
</div>
<div class="container text-center">
    <div class="row">
        <div class="col">
            M phải chuyển bố m trước bố m trc 99% bố m mới cho m đặt OK
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label class="col-md-3 col-sm-4 control-label">Chuyển khoản đê</label>
                    <div class="col-md-9 col-sm-8">
                        <div class="row">
                            <div class="col-xs-6">
                                <img id="image" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                                <input type="file" name="image" accept="image/*" class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-danger"><a href="">Cancel</a></button>
                <button class="btn btn-secondary" type="submit">Next</button>
            </form>
        </div>
    </div>
</div>
<div class="section padding-bottom-smaller z-bigger background-grey over-hide">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="project-nav-wrap">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="section background-dark over-hide">
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-1.jpg" alt="">
                        <div class="services-text-over">spa salon</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-sm-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-2.jpg" alt="">
                        <div class="services-text-over">restaurant</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-3.jpg" alt="">
                        <div class="services-text-over">pool</div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-lg-3 pt-4 pt-lg-0">
                <a href="services.html">
                    <div class="img-wrap services-wrap">
                        <img src="img/ser-4.jpg" alt="">
                        <div class="services-text-over">activities</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
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
        $("#cmt_truoc").change(function() {
            readURL(this, '#image');
        });

    });
</script>
@endsection