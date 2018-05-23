<!-- Tanggal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    {!! Form::date('tanggal', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
</div>

<!-- Pelanggan Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pelanggan_id', 'Pelanggan:') !!}
    {!! Form::select('pelanggan_id', $pelanggan, null, ['class' => 'form-control']) !!}
</div>

<!-- Pegawai Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pegawai_id', 'Pegawai:') !!}
    {!! Form::select('pegawai_id', $pegawai, null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::text('total', null, ['class' => 'form-control','id'=>'total','readonly']) !!}
</div>


<div class="form-group col-md-12">
<h4>Barang</h4>
<div class="row" >
    <div class="col-md-3">
        {!! Form::select('barang_id', $barang, null, ['class' => 'form-control select-barang','placeholder'=>'Pilih Barang']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::text('_harga', null, ['class' => 'form-control','id'=>'harga','readonly','placeholder'=>'Harga']) !!}
        {!! Form::hidden('_kode', null, ['class' => 'form-control','id'=>'kode','readonly','placeholder'=>'Harga']) !!}
        {!! Form::hidden('_nama', null, ['class' => 'form-control','id'=>'nama','readonly','placeholder'=>'Harga']) !!}
        {!! Form::hidden('_subtotal', null, ['class' => 'form-control','id'=>'subtotal','readonly','placeholder'=>'Harga']) !!}
    </div>
    <div class="col-md-3">
        {!! Form::text('_qty', null, ['class' => 'form-control','id'=>'qty','placeholder'=>'Jumlah','autocomplete'=>'off']) !!}
    </div>
    <div class="col-md-3">
        <button class="btn btn-sm btn-info" id="btn-tambah">Tambah</button>
    </div>
</div>
</div>

<div class="form-group col-md-12">
    <h4>Daftar Penjualan</h4>
    <div class="row" style="border-bottom: 1px solid #eeeeee;margin-bottom: 15px;padding-bottom: 5px;">
        <div class="col-md-1">No</div>
        <div class="col-md-2">Kode</div>
        <div class="col-md-3">Nama</div>
        <div class="col-md-2">Harga</div>
        <div class="col-md-2">Qty</div>
        <div class="col-md-2">Subtotal</div>
    </div>
    <div id="daftar-penjualan">

    </div>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('penjualans.index') !!}" class="btn btn-default">Cancel</a>
</div>
