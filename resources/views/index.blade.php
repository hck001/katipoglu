<!DOCTYPE html>
<html>
<head>
	<title>Tmall Hesaplama</title>
</head>
<body>
<form method="post" action="{{route('/hesapla')}}">
	{{ csrf_field() }}
ürün Fiyatı : <input type="text" name="fiyat">
<br>
gönder : <input type="submit" name="gönder"></form>
</body>
</html>