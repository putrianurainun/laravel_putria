<form method="post" action="{{route('item.update', $editItem->id)}}">
@method('PUT')    
@csrf
<table>
    <tr>
        <td>Nama Item</td>
        <td>:</td>
        <td><input type="text" name="nama_item2" value={{$editItem->nama_item}}></td>
    </tr>
    <tr>
        <td><label>Unit</label></td>
        <td>:</td>
        <td>
        <select name="unit2">
            <option value="Kg">Kg</option>
            <option value="Pcs">Pcs</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>Stok</td>
        <td>:</td>
        <td><input type="text" name="stok2" value={{$editItem->stok}}></td>
    </tr>
    <tr>
        <td>Harga Satuan</td>
        <td>:</td>
        <td><input type="text" name="harga_satuan2" value={{$editItem->harga_satuan}}></td>
    </tr>
    <tr>
        <td>Barang</td>
        <td>:</td>
        <td><input type="file" name="barang2" value={{$editItem->barang}}></td>
    </tr>
    <tr>
        <td>
            <button type="submit">Submit</button>
        </td>
    </tr>
</table>
</form>