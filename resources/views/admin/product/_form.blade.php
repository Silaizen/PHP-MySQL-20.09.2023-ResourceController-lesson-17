<div class="form-group">
    {!! Form::label('name', 'Product Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('price', 'Product Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('category_id', 'Product Category:') !!}
    {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<div class="form-group mt-3">
    {!! Form::label('image', 'Product Image:') !!}
    {!! Form::file('image', ['class' => 'form-control']) !!}
</div>

<div class="input-group">
    <span class="input-group-btn">
        <a id="lfm" data-input="thumbnail" datapreview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> Choose
        </a>
    </span>
    <input id="thumbnail" class="form-control" type="text" name="filepath">
</div>
<img id="holder" style="margin-top:15px;max-height:100px;"></div>




<div class="form-group mt-3">
    {!! Form::label('description', 'Product Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>





{!! Form::submit('Save product', ['class'=> 'btn btn-primary mt-3']) !!}
