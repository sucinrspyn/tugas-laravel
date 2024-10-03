<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Produk</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f7f7f7;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            color: salmon;
            font-size: 2.5em;
            margin-top: 20px;
            text-shadow: 1px 1px #ddd;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
            width: 80%;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 2px solid #ddd;
            padding: 15px;
            text-align: center;
            font-size: 1.2em;
        }

        th {
            background-color: salmon;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: rgb(248, 172, 163); /* Warna saat hover */
        }

        button {
            background-color: salmon;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.3s;
        }

        button:hover {
            background-color: rgb(220, 70, 70);
            transform: translateY(-2px);
        }

        form {
            display: inline-block;
        }

        /* Pagination styling */
        .pagination {
            margin: 20px auto;
            display: flex;
            justify-content: center;
            list-style-type: none;
            padding: 0;
        }

        .pagination li {
            margin: 0 5px;
        }

        .pagination a {
            color: salmon;
            padding: 8px 12px;
            border-radius: 5px;
            border: 2px solid salmon;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .pagination a:hover {
            background-color: salmon;
            color: white;
        }
    </style>
</head>
<body>

    <h2>🌸 Daftar Produk 🌸</h2>

    <table>
        <thead>
            <tr>
                <th>No</th> <!-- Kolom No -->
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Product as $index => $productItem) <!-- Menambahkan $index untuk nomor -->
                <tr>
                    <th scope="row">{{ $index + $Product->firstitem() }}</th>
                    <td>{{ $productItem->nama }}</td>
                    <td>{{ $productItem->harga }}</td>
                    <td>{{ $productItem->stok }}</td>
                    <td>{{ $productItem->deskripsi }}</td>
                    <td>
                        <form action="/product/{{ $productItem->id }}/edit" method="GET">
                            <button type="submit">Edit</button>
                        </form>
                        <form action="/product/{{ $productItem->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="pagination">
        {{ $Product->links() }} <!-- Memastikan $Product tetap digunakan di sini untuk pagination -->
    </div>

</body>
</html>
