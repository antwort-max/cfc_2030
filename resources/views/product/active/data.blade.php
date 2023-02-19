    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('product_id','Nombre producto', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::select('product_id', $product, null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('product_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('package_id','Empaquetamiento producto', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::select('package_id', $product, null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('package_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('amount','Costo', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('amount', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('active_erp','Activación ERP', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('active_erp', [1 => 'SI', 0 => 'NO'], null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('active_erp', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('active_web','Activación WEB', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('active_web', [1 => 'SI', 0 => 'NO'], null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('active_web', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('active_api','Activación API', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('active_api', [1 => 'SI', 0 => 'NO'], null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('active_api', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>


    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('comment','Comentario', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::textarea('comment', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>
