    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('number','Folio', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('number', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('number', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('user_id','Usuario', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('user_id', $user, null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('date','Fecha llegada', ['class' => '']) !!}
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
                {!! Form::label('number_order','Orden Compra', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::text('number_order', null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('number_order', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('comment','Comentario', ['class' => '']) !!}
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
                {!! Form::label('image','Adjuntar Imagen', ['class' => '']) !!}
            </div>
            <div class="col-8">   
                {!! Form::file('image', null, ['class' => 'form-control', $status_form == 'show' ? 'disabled' : '' ]) !!}
                {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
