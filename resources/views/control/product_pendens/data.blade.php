    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('date','Fecha', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::date('date', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('client','Cliente', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('client', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('client', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('product','Producto', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('product', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('product', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('comment','Comentarios', ['class' => '']) !!}
            </div>
            <div class="col-8">   
                {!! Form::textarea('comment', null, ['name'=> 'comment', 'class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('status','Estatus Documento', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::select('status', ['PENDIENTE' => 'PENDIENTE', 'CERRADO' => 'CERRADO'], null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

