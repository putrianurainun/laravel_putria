<center><h4>Table Item</h4></center>

<a href="{{route('item.create')}}">Tambah</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama Item</td>
        <td>Unit</td>
        <td>Stok</td>
        <td>Harga Satuan</td>
        <td>Barang</td>
        <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($dataItem as $item)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$item->nama_item}}</td>
        <td>{{$item->unit}}</td>
        <td>{{$item->stok}}</td>
        <td>Rp. {{$item->harga_satuan}}</td>
        <td><img src="{{asset('/storage/' . $item->barang)}}" width="70pc" alt=""></td>
        <td>
            <form method="post" action="{{route('item.destroy', $item->id)}}">
            @method('DELETE')
            @csrf
            <a href="{{route('item.edit', $item->id)}}">Edit</a>
             <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
   
</table>
<a href="{{url('/')}}"></a>
