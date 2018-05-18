<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $penjualan->id !!}</p>
</div>

<!-- Tanggal Field -->
<div class="form-group">
    {!! Form::label('tanggal', 'Tanggal:') !!}
    <p>{!! $penjualan->tanggal !!}</p>
</div>

<!-- Pelanggan Id Field -->
<div class="form-group">
    {!! Form::label('pelanggan_id', 'Pelanggan Id:') !!}
    <p>{!! $penjualan->pelanggan_id !!}</p>
</div>

<!-- Pegawai Id Field -->
<div class="form-group">
    {!! Form::label('pegawai_id', 'Pegawai Id:') !!}
    <p>{!! $penjualan->pegawai_id !!}</p>
</div>

<!-- Total Field -->
<div class="form-group">
    {!! Form::label('total', 'Total:') !!}
    <p>{!! $penjualan->total !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $penjualan->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $penjualan->updated_at !!}</p>
</div>

