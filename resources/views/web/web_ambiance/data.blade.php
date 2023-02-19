    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('name','Nombre', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('comment','Comentario', ['class' => '']) !!}
            </div>
            <div class="col-8">    
                {!! Form::textarea('comment', null, ['name' => 'comment', 'class' => 'form-control',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('comment', '<p class="help-block">:message</p>') !!}
            </div>
         </div> 
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('status','Activo pagina web', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('status', [1 => 'SI', 0 => 'NO'], null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
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
