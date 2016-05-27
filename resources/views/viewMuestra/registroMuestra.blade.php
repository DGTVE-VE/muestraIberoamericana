<!--Registro de Convocatoria-->
<div class="divider text-center" id="registro">
    <h1>Registro</h1>
</div>
<br><br>
<div class="container">

  <form method="POST" action="{{url('save')}}" accept-charset="UTF-8" enctype="multipart/form-data">
          
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {!! BootForm::open() !!}
    {!! BootForm::text('institucion', 'Nombre de la Institución') !!}
    {!! BootForm::text('pais', 'País') !!}
    {!! BootForm::text('direccion', 'Domicilio de la Institución') !!}
    {!! BootForm::text('representante', 'Representante (Nombre)') !!}
    {!! BootForm::text('cargo', 'Representante (Cargo)') !!}
    {!! BootForm::number('tel', 'Teléfono') !!}

    {!! BootForm::email('correo', 'Correo electrónico') !!}

    {!! BootForm::text('produccion', 'Nombre de la producción') !!}
    {!! BootForm::text('productor', 'Nombre del productor') !!}
    {!! BootForm::select('tematica', 'Línea Temática', ['Seleccione una linea temática', $tematica] ) !!}

    {!! BootForm::textarea('sinopsis', 'Breve sinopsis') !!}

    {!! BootForm::file('file', 'Medio para enviar el archivo') !!}

    {!! BootForm::submit ( 'Enviar' ) !!}
    {!! BootForm::close() !!}

</form>

</div>
<!--Fin Registro de convocatoria--->
