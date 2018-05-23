@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Penjualan
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('penjualans.show_fields')
                    <a href="{!! route('penjualans.index') !!}" class="btn btn-default">Back</a>
                    <a href="#" class="btn btn-primary"> <i class="fa fa-print"></i> Print</a>
                    <a href="#" class="btn btn-primary"> <i class="fa fa-edit"></i> New</a>
                </div>
            </div>
        </div>
    </div>
@endsection
