<form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
    @csrf
<table>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><input type="text" name="nama2"></td>
    </tr>
    <tr>
        <td>Contact</td>
        <td>:</td>
        <td><input type="text" name="contact2"></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><input type="text" name="email2"></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><input type="textarea" name="alamat2"></td>
    </tr>
    <tr>
        <td>Diskon</td>
        <td>:</td>
        <td><input type="text" name="diskon2"></td>
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
        <td><input type="file" name="ktp2"></td>
    </tr>
    <tr>
        <td>
            <button type="submit">Submit</button>
        </td>
    </tr>
</table>
</form>