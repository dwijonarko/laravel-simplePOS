<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $pegawai->id !!}</p>
</div>

<!-- Nik Field -->
<div class="form-group">
    {!! Form::label('nik', 'Nik:') !!}
    <p>{!! $pegawai->nik !!}</p>
</div>

<!-- Nama Field -->
<div class="form-group">
    {!! Form::label('nama', 'Nama:') !!}
    <p>{!! $pegawai->nama !!}</p>
</div>

<!-- Tempat Lahir Field -->
<div class="form-group">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    <p>{!! $pegawai->tempat_lahir !!}</p>
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    <p>{!! $pegawai->tanggal_lahir !!}</p>
</div>

<!-- Alamat Field -->
<div class="form-group">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{!! $pegawai->alamat !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $pegawai->email !!}</p>
</div>

<!-- Telp Field -->
<div class="form-group">
    {!! Form::label('telp', 'Telp:') !!}
    <p>{!! $pegawai->telp !!}</p>
</div>

<!-- Foto Field -->
<div class="form-group">
    {!! Form::label('foto', 'Foto:') !!}
    <p><img style="width: 200px" src="{{asset("images/".$pegawai->foto)}}" alt="" class="img img-thumbnail"></p>
</div>

<!-- Agama Id Field -->
<div class="form-group">
    {!! Form::label('agama_id', 'Agama:') !!}
    <p>{!! $pegawai->agama->nama !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $pegawai->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $pegawai->updated_at !!}</p>
</div>

