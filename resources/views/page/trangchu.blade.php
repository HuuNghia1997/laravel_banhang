@extends('master')
@section('content')
<div class="fullwidthbanner-container">
        <div class="fullwidthbanner">
            <div class="bannercontainer" >
            <div class="banner" >
                    <ul>

                        @foreach ($slide as $value)

                        <li data-transition="boxfade" data-slotamount="20" class="active-revslide" style="width: 100%; height: 100%; overflow: hidden; z-index: 18; visibility: hidden; opacity: 0;">
                                <div class="slotholder" style="width:100%;height:100%;"
                                data-duration="undefined" data-zoomstart="undefined"
                                data-zoomend="undefined" data-rotationstart="undefined"
                                data-rotationend="undefined" data-ease="undefined"
                                data-bgpositionend="undefined" data-bgposition="undefined"
                                data-kenburns="undefined" data-easeme="undefined"
                                data-bgfit="undefined" data-bgfitend="undefined"
                                data-owidth="undefined" data-oheight="undefined">
                                               <div class="tp-bgimg defaultimg"
                                               data-lazyload="undefined"
                                               data-bgfit="cover"
                                               data-bgposition="center center"
                                               data-bgrepeat="no-repeat"
                                               data-lazydone="undefined"
                                               src="source/image/slide/{{ $value['image'] }}"
                                               data-src="source/image/slide/{{ $value['image'] }}"
                                               style="background-color: rgba(0, 0, 0, 0);
                                                background-repeat: no-repeat;
                                                background-image: url('source/image/slide/{{ $value['image'] }}');
                                                background-size: cover;
                                                background-position: center center;
                                                width: 100%; height: 100%; opacity: 1;
                                                visibility: inherit;">
                                               </div>
                                           </div>

                               </li>
                        @endforeach





                        <!-- THE FIRST SLIDE -->


                    </ul>
                </div>
            </div>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
    <!--slider-->

<div class="container">
<div id="content" class="space-top-none">
<div class="main-content">
    <div class="space60">&nbsp;</div>
    <div class="row">
        <div class="col-sm-12">
            <div class="beta-products-list">
                <h4>Sản phẩm mới</h4>
                <div class="beta-products-details">
{{--                     lấy cái biến bên pagecontroller view('page.trangchu',compact('slide','products')) --}}
                    <p class="pull-left">tìm thấy {{count($products)}} </p>
                    <div class="clearfix"></div>
                </div>

                <div class="row">
                    @foreach ($products as $value)
                    <div class="col-sm-3">
                            <div class="single-item">
                                <div class="single-item-header">
                                @if ($value['promotion_price']!=0)
                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                @else

                                @endif



                                <a href="{{ route('chitietsanpham',$value['id']) }}"><img
                                    src="source/image/product/{{$value['image']}}" alt=""
                                     style="height: 250px "></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{ $value['name'] }}</p>
                                    <p class="single-item-price">

                                        @if ($value['promotion_price']==0)

                                        <span>{{ $value['unit_price'] }}</span>
                                        @else
                                        <strike> {{ number_format($value['unit_price']) }} đồng</strike>
                                        <span>{{ number_format($value['unit_price']) }} đồng</span>

                                        @endif

                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{ route('chitietsanpham',$value['id']) }}">chi tiết sản phẩm <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                <div class="row">{{ $products->links()}}</div>
            </div>



 <!-- .beta-products-list -->

            <div class="space50">&nbsp;</div>

            <div class="beta-products-list">
                <h4>Sản phẩm khuyến mãi</h4>
                <div class="beta-products-details">
                    <p class="pull-left">tìm thấy {{ count($sanpham_khuyenmai) }}</p>
                    <div class="clearfix"></div>
                </div>
                <div class="row">
                    @foreach ($sanpham_khuyenmai as $sp)
                    <div class="col-sm-3">
                            <div class="single-item">
                                <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                                <div class="single-item-header">
                                <a href="{{ route('chitietsanpham',$value['id']) }}"><img src="source/image/product/{{$sp['image']}}" alt="" style="height: 250px;"></a>
                                </div>
                                <div class="single-item-body">
                                    <p class="single-item-title">{{ $sp['name'] }}</p>
                                    <p class="single-item-price">
                                        <span class="flash-del" style="font-size: 18px">{{ number_format($value['unit_price']) }} đồng</span>
                                        <span class="flash-sale">{{ number_format($value['promotion_price']) }} đồng</span>
                                    </p>
                                </div>
                                <div class="single-item-caption">
                                    <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                    <a class="beta-btn primary" href="{{ route('chitietsanpham',$value['id']) }}">Details <i class="fa fa-chevron-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

                    @endforeach



                    </div>
                    <div class="row">{{ $sanpham_khuyenmai->links()}}</div>

                </div>
                <div class="space40">&nbsp;</div>

            </div> <!-- .beta-products-list -->
        </div>
    </div> <!-- end section with sidebar and main content -->


</div> <!-- .main-content -->
</div> <!-- #content -->
</div>
@endsection

