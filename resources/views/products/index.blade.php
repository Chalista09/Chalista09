<!-- resources/views/products/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        @foreach($products as $id => $product)
            <li>
                <a href="{{ route('product.detail', ['id' => $id]) }}">
                    {{ $product['name'] }}
                </a>
                - Harga: Rp{{ number_format($product['price'], 0, ',', '.') }}
            </li>
        @endforeach
    </ul>
</body>
</html>
