<!-- resources/views/products/detail.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk</title>
</head>
<body>
    <h1>{{ $products['name'] }}</h1>
    <p><strong>Harga:</strong> Rp{{ number_format($products['price'], 0, ',', '.') }}</p>
    <p><strong>Jenis:</strong> {{ $products['jenis'] }}</p>
    <p><strong>Merek:</strong> {{ $products['merek'] }}</p>
    <p><strong>Material:</strong> {{ $products['material'] }}</p>
    <a href="/">← Kembali ke Daftar Produk</a>
</body>
</html>
