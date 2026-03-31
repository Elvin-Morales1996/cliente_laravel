<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="css/estilo.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <h1>Sistema de agregar Clientes</h1>

    <!-- SELECT -->
    <label for="tipo_cliente">Tipo de Cliente:</label>
    <select id="tipo_cliente">
        <option value="">Seleccione</option>
        <option value="1">Consumidor Final</option>
        <option value="2">Empresa</option>
        <option value="3">Extranjero</option>
        <option value="4">Proveedor</option>
    </select>

  <!-- formulario para diferentes clientes -->
    <form id="formCliente">
    @csrf


    <div id="form_consumidor_final" class="hidden">
        <h3>Consumidor Final</h3>
            <label for="tipo_empresa">Tipo de Empresa:</label>
    <select name="tipo_empresa" id="tipo_empresa">
        <option value="">Seleccione una opción</option>
        
        @foreach ($tipos_documento as $fila)
            <option value="{{ $fila->id_tipo_documento }}">
                {{ $fila->tipo_documento }}
            </option>
        @endforeach
       </select><br>
<label for="tipo_cliente">N° de documento:</label>
            <input type="number" name="nro_documento" placeholder="Número de documento"><br>
            <label for="tipo_cliente">Razón social / nombre del cliente:</label>
            <input type="text" name="razon_social" placeholder="Razón social / nombre del cliente"><br>
            <label for="tipo_cliente">Nombre comercial:</label>
            <input type="text" name="nombre_comercial" placeholder="Nombre comercial"><br>
            <label for="tipo_cliente">Correo:</label>
            <input type="email" name="correo" placeholder="Correo electrónico"><br>
            <label for="tipo_cliente">Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección"><br>
    </div>



<div id="form_empresa" class="hidden">
    <h3>Empresa</h3>
    <label for="tipo_empresa">Tipo de Empresa:</label>
    <select name="tipo_empresa" id="tipo_empresa">
        <option value="">Seleccione una opción</option>
        
        @foreach ($tipos_documento as $fila)
            <option value="{{ $fila->id_tipo_documento }}">
                {{ $fila->tipo_documento }}
            </option>
        @endforeach
       </select><br>
         <label for="tipo_cliente">nombre:</label>
            <input type="text" name="nombre" placeholder="Razón Social"><br>
            <label for="tipo_cliente">NRC / IVA:</label>
            <input type="number" name="nrc" placeholder="NRC"><br>
            <label for="tipo_cliente">N° documento:</label>
            <input type="number" name="nrc" placeholder=""><br>
            <label for="tipo_cliente">correo:</label>
            <input type="email" name="correo" placeholder="Correo electrónico"><br>
            <label for="tipo_cliente">telefono:</label>
            <input type="number" name="telefono" placeholder="Número de teléfono"><br>
            <label for="tipo_cliente">descripcion:</label>
            <input type="text" name="descripcion" placeholder="Descripción"><br>
            <label for="tipo_cliente">direccion:</label>
            <input type="text" name="direccion" placeholder="Dirección"><br>
            <label for="tipo_cliente">ciudad:</label>
            <input type="text" name="ciudad" placeholder="Ciudad"><br>
            <label for="">actividad economica</label>
        <select name="tipo_empresa" id="tipo_empresa">
        <option value="">Seleccione una opción</option>
        
        @foreach ($tipos_actividad as $fila)
            <option value="{{ $fila->actividad_economica }}">
                {{ $fila->actividad_economica }}
            </option>
        @endforeach

       </select><br>

  <!--TIPO DE CONTRIBUYENTE-->
            <label for="tipo_cliente">Tipo de Contribuyente:</label>
            <select name="contribuyente" id="contribuyente">
                <option value="">Seleccione una opción</option>
                @foreach ($tipos_contribuyente as $fila)
                    <option value="{{ $fila->tipo_contribuyente }}">
                        {{ $fila->tipo_contribuyente }}
                    </option>
        @endforeach

       </select><br>
                   <label for="tipo_cliente">Tipo de persona:</label>
            <select name="" id="">
                <option value="">Natural</option>
                <option value="">Juridico</option>

            </select><br>
   <!--departamento-->
            <label for="tipo_cliente">Departamento:</label>
            <select name="contribuyente" id="contribuyente">
               <option value="">Seleccione una opción</option>
                @foreach ($tipos_departamento as $fila)
                    <option value="{{ $fila->departamento }}">
                        {{ $fila->departamento }}
                    </option>
        @endforeach
         </select><br>

  

            <label for="tipo_cliente">Municipio:</label>
            <select name="contribuyente" id="contribuyente">
               <option value="">Seleccione una opción</option>
                @foreach ($tipos_municipio as $fila)
                    <option value="{{ $fila->municipio }}">
                        {{ $fila->municipio }}
                    </option>
        @endforeach
         </select><br>

</div>

<!--extranjero-->

    <div id="form_extranjero" class="hidden">
        <h3>Extranjero</h3>
    <select name="tipo_empresa" id="tipo_empresa">
        <option value="">Seleccione una opción</option>
        
        @foreach ($tipos_documento as $fila)
            <option value="{{ $fila->id_tipo_documento }}">
                {{ $fila->tipo_documento }}
            </option>
        @endforeach
       </select><br>
<label for="nro_documento">N° documento:</label>
            <input type="number" name="nro_documento" placeholder="Número de documento"><br>
            <label for="razon_social">Razón social / nombre del cliente:</label>
            <input type="text" name="razon_social" placeholder="Razón social / nombre del cliente"><br>
            <label for="nombre_comercial">Nombre comercial:</label>
            <input type="text" name="nombre_comercial" placeholder="Nombre comercial"><br>
            <label for="telefono">Teléfono:</label>
            <input type="number" name="telefono" placeholder="Número de teléfono"><br>
            <label for="correo">Correo:</label>
            <input type="email" name="correo" placeholder="Correo electrónico"><br>
<label for="pais">País:</label>
            <select name="pais" id="pais">
    
                <option value="">Seleccione una opción</option>
                
                    <option value="El salvador">El salvador </option>
                    <option value="Guatemala">Guatemala </option>


            </select><br>
            <label for="descripcion">Descripción adicional:</label>
            <input type="text" name="descripcion" placeholder="Descripción adicional"><br>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección"><br>
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" placeholder="Ciudad"><br>
    </div>

<!--proveedor-->
<div id="form_proveedor" class="hidden">
        <h3>Proveedor</h3>
        <label for="documento">Documento:</label>
    <select name="tipo_empresa" id="tipo_empresa">
        <option value="">Seleccione una opción</option>
        
        @foreach ($tipos_documento as $fila)
            <option value="{{ $fila->id_tipo_documento }}">
                {{ $fila->tipo_documento }}
            </option>
        @endforeach
       </select><br>
        <label for="nro_documento">N° de documento:</label>
        <input type="number" name="nro_documento" placeholder="Número de documento"><br>
        <label for="razon_social">Razón social / nombre del cliente:</label>
        <input type="text" name="razon_social" placeholder="Razón social / nombre del cliente"><br>
        <label for="telefono">Teléfono:</label>
        <input type="number" name="telefono" placeholder="Número de teléfono"><br>
        <label for="correo">Correo:</label>
        <input type="email" name="correo" placeholder="Correo electrónico"><br>
   <!--departamento-->
            <label for="tipo_cliente">Departamento:</label>
            <select name="contribuyente" id="contribuyente">
               <option value="">Seleccione una opción</option>
                @foreach ($tipos_departamento as $fila)
                    <option value="{{ $fila->departamento }}">
                        {{ $fila->departamento }}
                    </option>
        @endforeach
         </select><br>

  

            <label for="tipo_cliente">Municipio:</label>
            <select name="contribuyente" id="contribuyente">
               <option value="">Seleccione una opción</option>
                @foreach ($tipos_municipio as $fila)
                    <option value="{{ $fila->municipio }}">
                        {{ $fila->municipio }}
                    </option>
        @endforeach
         </select><br>
<label for="descripcion">Descripción adicional:</label>
            <input type="text" name="descripcion" placeholder="Descripción adicional"><br>
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" placeholder="Dirección"><br>
            <label for="ciudad">Ciudad:</label>
            <input type="text" name="ciudad" placeholder="Ciudad"><br>

    </div>
    <input type="hidden" name="tipo_cliente" id="tipo_cliente_hidden">

    <button type="submit">Guardar</button>
</form>

<hr>

<table border="1">
<tr>
    <th>Nombre</th>
    <th>NRC</th>
    <th>Correo</th>
</tr>

@foreach($clientes as $c)
<tr>

    <td>{{ $c->nombre }}</td>
    <td>{{ $c->nrc }}</td>
    <td>{{ $c->dui_nit }}</td>
</tr>
@endforeach

</table>

<script>


$('#tipo_cliente').change(function(){
    let tipo = $(this).val();

    $('.hidden').hide();

    if(tipo == 1){
        $('#form_consumidor_final').show();
    }


    if(tipo == 2){
        $('#form_empresa').show();
    }

        if(tipo == 3){
        $('#form_extranjero').show();
    }

    if(tipo == 4){
        $('#form_proveedor').show();
    }

    $('#tipo_cliente_hidden').val(tipo);
});



$('#formCliente').submit(function(e){
    e.preventDefault();

    $.ajax({
        url: "/guardar-cliente",
        method: "POST",
        data: $(this).serialize(),
        success: function(){
            alert("Guardado");
            location.reload();
        }
    });
});

</script>

</body>
</html>