<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	@foreach ($sanpham as $item)
	<a href=""><a href="product.html"><img src="{{ URL::to('source/image/product/')}}/{{ $item->image }}" alt=""></a></a>
    @endforeach

</body>
</html>
