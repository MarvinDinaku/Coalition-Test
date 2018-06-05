@extends('app')

@section('content')
    <div class="container-fluid">


        <div class="row">
            {!! Form::open( ['url'=>'products', 'method'=>'POST' , 'id' => 'addForm', 'class'=> 'col-sm-2']) !!}

            @include('product.form')

            {!! Form::close() !!}
        </div>

        @include('product.table')

    </div>

@endsection