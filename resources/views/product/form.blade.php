

<div class="form-group col-sm-10">
    {!! Form::label('productname', 'Product Name: ') !!}
    {!! Form::text('pname', null, ['class' => 'form-control',
                        'required' => 'required']) !!}
</div>

<div class="form-group col-sm-8">
    {!! Form::label('quantityStock', 'Quantity in Stock: ') !!}
    {!! Form::text('quantityStock', null, ['class'=>'form-control',
                                    'required'=>'required' ]) !!}
</div>

<div  class="form-group col-sm-8">
    {!! Form::label('price', 'Item Price: ') !!}
    {!! Form::text('price', null, ['class'=>'form-control',
                                    'required'=>'required' ]) !!}
</div>

<div class="form-group col-sm-2">
</div>

<div class="form-group col-sm-8">
    {!! Form::button( 'Create Product', ['class'=>' btn btn-success', 'id' => 'addButton'] ) !!}

    <?php $genId = MD5(uniqid()); ?>
    {!! Form::hidden('_id', $genId )  !!}
</div>
