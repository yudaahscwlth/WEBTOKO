@extends('layout.list')

@section('title', 'Webtoko Rafles')

@section('content')
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Stok</th>
        </tr>
    </thead>
    <tbody>@foreach ($data as $post)
        <tr>
            <td>{{$post['id']}}</td>
            <td>{{$post['produk']}}</td>
            <td>{{$post['harga']}}</td>
            <td>{{$post['stok']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection