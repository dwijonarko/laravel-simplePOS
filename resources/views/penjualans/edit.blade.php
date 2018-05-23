@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Penjualan
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($penjualan, ['route' => ['penjualans.update', $penjualan->id], 'method' => 'patch']) !!}

                        @include('penjualans.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection