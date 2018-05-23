<div class="row">
    <div class="col-md-4 col-sm-4">
    <h4>{{ config('app.name') }}</h4>
    <address>
        <p>Jalan Raya Tlogowaru no 3</p>
        <p>Kedungkandan Malang</p>
        <p>65132</p>
    </address>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Penjualan</h4>
        <p>{{$penjualan->tanggal}}</p>
        <p>ID : {{$penjualan->id}} </p>
        <p>Pegawai : {{$penjualan->pegawai->nama}} </p>
    </div>
    <div class="col-md-4 col-sm-4">
        <h4>Pelanggan</h4>
        <p>{{$penjualan->pelanggan->nama}}</p>
        <p>Alamat : {{$penjualan->pelanggan->alamat}}</p>
        <p>Telp : {{$penjualan->pelanggan->telp}}</p>
        <p>Email :{{$penjualan->pelanggan->email}}</p>
    </div>
</div>
<div class="row">
    <div class="col-md-10 col-sm-10">
    <h3>Detail Penjualan</h3>
    <table class="table table-bordered">
        <tr>
            <th class="col-md-1">No</th>
            <th class="col-md-2">Kode</th>
            <th class="col-md-3">Nama</th>
            <th class="col-md-2">Qty</th>
            <th class="col-md-2">Sub Total</th>
        </tr>
        @foreach ($penjualan->detail_penjualan as $row=>$item)
            <tr>
                <td>{{$row + 1 }}</td>
                <td>{{$item->barang($item->barang_id)->kode}}</td>
                <td>{{$item->barang($item->barang_id)->nama}}</td>
                <td class="text-right">{{$item->qty}}</td>
                <td class="text-right">{{$item->subtotal}}</td>
            </tr>
        @endforeach
        <tr>
            <td colspan="4" class="text-right">Total</td>
            <td class="text-right">{{$penjualan->total}}</td>
        </tr>
    </table>
</div>
</div>