<!-- Nik Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nik', 'Nik:') !!}
    {!! Form::text('nik', null, ['class' => 'form-control']) !!}
</div>

<!-- Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama', 'Nama:') !!}
    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat_lahir', 'Tempat Lahir:') !!}
    {!! Form::text('tempat_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Tanggal Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tanggal_lahir', 'Tanggal Lahir:') !!}
    {!! Form::date('tanggal_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telp', 'Telp:') !!}
    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', 'Foto:') !!}
    {!! Form::file('foto') !!}
    @if (isset($pegawai))
            <p><img style="width: 200px" src="{{asset("images/".$pegawai->foto)}}" alt="" class="img img-thumbnail"></p>
    @endif

</div>
<div class="clearfix"></div>

<!-- Agama Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agama_id', 'Agama :') !!}
    {!! Form::select('agama_id',$agama, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('pegawais.index') !!}" class="btn btn-default">Cancel</a>
</div>
