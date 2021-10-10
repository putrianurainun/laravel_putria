<form method="post" action="{{route('sales.store')}}">
    @csrf
<table>
    <tr>
        <td><label>Nama</label></td>
        <td>:</td>
        <td>
        <select name="nama2">
            @foreach($dataCust as $cust)
            <option value="{{$cust->id_customer}}">{{$cust->nama}}</option>
            @endforeach
        </select>
        </td>
    </tr>
    <tr>
        <td>Code Transaksi</td>
        <td>:</td>
        <td><input type="text" name="code_transaksi2"></td>
    </tr>
    <tr>
        <td>Tanggal Transaksi</td>
        <td>:</td>
        <td><input type="text" name="tanggal_transaksi2"></td>
    </tr>
    <tr>
        <td><label>Nama Item</label></td>
        <td>:</td>
        <td>
        <select name="nama_item2">
            @foreach($dataItem as $item)
            <option value="{{$item->id}}">{{$item->nama_item}}</option>
            @endforeach
        </select>
        </td>
    </tr>
    <tr>
        <td>Quantity</td>
        <td>:</td>
        <td><input type="text" name="qty2"></td>
    </tr>
    <tr>
        <td>Total Diskon</td>
        <td>:</td>
        <td><input type="text" name="total_diskon2"></td>
    </tr>
    <tr>
        <td>Total Harga</td>
        <td>:</td>
        <td><input type="text" name="total_harga2"></td>
    </tr>
    <tr>
        <td>
            <button type="submit">Submit</button>
        </td>
    </tr>
</table>
</form>