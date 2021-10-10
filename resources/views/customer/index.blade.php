<center><h4>Table Customer</h4></center>

<a href="{{route('customer.create')}}">Tambah</a>
<table border="1">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Contact</td>
        <td>Email</td>
        <td>Alamat</td>
        <td>Diskon</td>
        <td>Tipe Diskon</td>
        <td>KTP</td>
        <td>Aksi</td>
    </tr>
    @php $no = 1; @endphp
    @foreach($dataCustomer as $customer)
    <tr>
        <td>{{$no++}}</td>
        <td>{{$customer->nama}}</td>
        <td>{{$customer->contact}}</td>
        <td>{{$customer->email}}</td>
        <td>{{$customer->alamat}}</td>
        <td>{{$customer->diskon}}</td>
        <td>{{$customer->tipe_diskon}}</td>
        <td>{{$customer->ktp}}</td>
        <td>
            <form method="post" action="{{route('customer.destroy', $customer->id_customer)}}">
            @method('DELETE')
            @csrf
            <a href="{{route('customer.edit', $customer->id_customer)}}">Edit</a>
             <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
   
</table>
<a href="{{url('/')}}"></a>
