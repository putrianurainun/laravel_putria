<center><h4>Table Sales</h4></center>

<a href="{{route('sales.create')}}">Tambah</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Customer</td>
        <td>Code Transaksi</td>
        <td>Tanggal Transaksi</td>
        <td>Nama Item</td>
        <td>Quantity</td>
        <td>Total Diskon</td>
        <td>Total Harga</td>
        <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($dataSales as $sales)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$sales->nama}}</td>
        <td>{{$sales->code_transaksi}}</td>
        <td>{{$sales->tanggal_transaksi}}</td>
        <td>{{$sales->nama_item}}</td>
        <td>{{$sales->qty}}</td>
        <td>{{$sales->total_diskon}}</td>
        <td>{{$sales->total_harga}}</td>
        <td>
            <form method="post" action="{{route('sales.destroy', $sales->id_sales)}}">
            @method('DELETE')
            @csrf
            <a href="{{route('sales.edit', $sales->id_sales)}}">Edit</a>
             <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
   
</table>
<a href="{{url('/')}}"></a>
