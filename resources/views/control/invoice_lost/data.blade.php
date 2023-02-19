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
                {!! Form::label('type','Tipo de Documento', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::select('type', ['BLV' => 'BOLETA', 'FCC' => 'FACTURA'], null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('type', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('number','Folio', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('number', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('client','Rut de Cliente', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::text('client', null, ['class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('client', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('seller','Nombre Vendedor', ['class' => '']) !!}
            </div>
            <div class="col-8">   
                {!! Form::text('seller', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('seller', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('local','Local de Venta', ['class' => '']) !!}
            </div>
            <div class="col-8">   
                {!! Form::text('local', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('local', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('comment','Comentarios', ['class' => '']) !!}
            </div>
            <div class="col-8">   
                {!! Form::textarea('comment', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
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
                {!! Form::select('status', ['PERDIDO' => 'PERDIDO', 'ENCONTRADO' => 'ENCONTRADO'], null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

