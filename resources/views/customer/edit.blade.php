<form method="post" action="{{route('customer.update', $editCustomer->id_customer)}}">
    @method('PUT')
    @csrf
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama2" value={{$editCustomer->nama}}></td>
    </tr>
    <tr>
        <td>Contact</td>
        <td>:</td>
        <td><input type="text" name="contact2" value={{$editCustomer->contact}}></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email2" value={{$editCustomer->email}}></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="textarea" name="alamat2" value={{$editCustomer->alamat}}></td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:</td>
        <td><input type="text" name="diskon2" value={{$editCustomer->diskon}}></td>
    </tr>
    <tr>
        <td><label>Tipe Diskon</label></td>
        <td>:</td>
        <td>
        <select name="tipe_diskon2">
            <option value="presentase">Presentase</option>
            <option value="fix">Fix</option>
        </select>
        </td>
    </tr>
    <tr>
        <td>KTP</td>
        <td>:</td>
        <td><input type="file" name="ktp2" value={{$editCustomer->ktp}}></td>
    </tr>
    <tr>
        <td>
            <button type="submit">Submit</button>
        </td>
    </tr>
</table>
</form>