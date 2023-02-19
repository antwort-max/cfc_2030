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
                {!! Form::label('area_id','Area de Archivos', ['class' => '']) !!}
            </div>
            <div class="col-8"> 
                {!! Form::select('area_id', $area, null, ['class' => 'form-control', 'required' => 'true',  $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('area_id', '<p class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="row">
            <div class="col-4">
                {!! Form::label('file','Archivo Físico', ['class' => '']) !!}
            </div>
            <div class="col-8">
                {!! Form::text('file', null, ['class' => 'form-control', 'required' => 'true', $status_form == 'show' ? 'disabled' : '']) !!}
                {!! $errors->first('file', '<p class="help-block">:message</p>') !!}
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