@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Pelanggan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($pelanggan, ['route' => ['pelanggans.update', $pelanggan->id], 'method' => 'patch']) !!}

                        @include('pelanggans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection