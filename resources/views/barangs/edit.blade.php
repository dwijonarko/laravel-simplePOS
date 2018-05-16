@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Barang
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($barang, ['route' => ['barangs.update', $barang->id], 'method' => 'patch']) !!}

                        @include('barangs.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection