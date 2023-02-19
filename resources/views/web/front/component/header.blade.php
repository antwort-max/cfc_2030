<div class="container-fluid">
        <div class="row mt-3">
            <div class="col-sm-2 col-md-2 col-lg-2 col-xl-2">
				<a href="http://www.ferreteriacaupolican.cl/">
                <img class="img-fluid" src="{{ asset('img/logo-caupolican.jpg') }}" alt="Caupolican">
				</a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 text-center mt-2">
                {!! Form::open(['route' => 'web.search', 'method' => 'GET', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                <div class="input-group mb-3">
                        
                        {!! Form::text('search', null, ['class' => 'form-control', 'required' => 'true', ]) !!}

                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="bi bi-search"></i>
                        </button>
                        
                    </form>
                </div>
                </form>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <table>
                        <tr>
                            <td class="text-center text-primary"><i class="bi bi-send"></i></td>
                            <td class="text-center text-primary"><i class="bi bi-cart"></i></td>
                            <td class="text-center text-primary"><a href="{{ route('home') }}"><i class="bi bi-person-fill"></i></a></td>
                            <td class="text-center text-primary"><i class="bi bi-pen-fill"></i></td>
                        </tr>
                        <tr>
                            <td class="text-center text-primary"><small>Seguimiento</small></td>
                            <td class="text-center text-primary"><small>Carro</small></td>
                            <td class="text-center text-primary"><small><a href="{{ route('home') }}"> Ingresar </a> </small></td>
                            <td class="text-center text-primary"><small>Registro</small></td>
                    </table>
                </div>
            </div>
        </div>
    </div>