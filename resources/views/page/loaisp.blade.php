@extends('master')
@section('content')
</div> <!-- #header -->
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Sản phẩm {{ $tensp->name }}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{ route('trang-chu') }}">Trang chủ</a> / <span>Sản phẩm</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                            @foreach ($dssanpham as $item)
                             <li><a href="{{ route('loaisanpham',$item['id']) }}">{{ $item['name'] }}</a></li>
                                
                            @endforeach
                       
                        
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>Sản phẩm theo loại</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">tìm thấy sản phẩm {{count($loaisanpham) }} </p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach ($loaisanpham as $item)

                             <div class="col-sm-4">
                                <div class="single-item">
                                    <div class="single-item-header">
                                        <a href="product.html">
                                            <img src="{{ URL::to('source/image/product/')}}/{{ $item->image }}" alt="" style="height: 250px;width: 250px;"></a>
                                    </div>

                                    <div class="single-item-body">
                                        <p class="single-item-title">{{ $item['name'] }}</p>
                                        <p class="single-item-price" style="font-size: 18px">
                                         @if ($item['promotion_price']==0)

                                        <span>{{ $item['unit_price'] }}</span>
                                        @else
                                        <strike> {{ number_format($item['unit_price']) }} đồng</strike>
                                        <span>{{ number_format($item['unit_price']) }} đồng</span>

                                        @endif

                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                            @endforeach


                        </div>
                        <div class="row">{{ $loaisanpham->links() }}</div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Sản phẩm khác</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Tìm thấy sản phẩm {{ count($sanphamkhac) }}</p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach ($sanphamkhac as $sp)
                            <div class="col-sm-4">
                                    <div class="single-item">
                                        <div class="single-item-header">
                                            <a href="product.html">
                                                <img src="{{ URL::to('source/image/product/')}}/{{ $sp->image }}" alt="" style="width: 250px;height: 250px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title">{{ $sp['name'] }}</p>
                                            <p class="single-item-price" style="font-size: 18px">
                                                 @if ($sp['promotion_price']==0)

                                                <span>{{ $sp['unit_price'] }}</span>
                                                @else
                                                <strike> {{ number_format($sp['unit_price']) }} đồng</strike>
                                                <span>{{ number_format($sp['unit_price']) }} đồng</span>

                                                @endif
                                               
                                            </p>
                                        </div>
                                        <div class="single-item-caption">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach



                        </div>
                          <div class="row">{{ $sanphamkhac->links() }}</div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection
