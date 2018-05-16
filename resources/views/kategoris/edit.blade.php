@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Kategori
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($kategori, ['route' => ['kategoris.update', $kategori->id], 'method' => 'patch']) !!}

                        @include('kategoris.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection