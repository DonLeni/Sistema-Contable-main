@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')

@stop

@section('content')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO PAGO RESIDENTE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.css">

</head>
<body>
  <h1 style="text-align: center;" class="mt-3">Pago de residentes</h1>

         <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#Nuevo">Nuevo</button>
    <div class="table-responsive">
    <table  id="pagoresidentes" class="table table-striped" style="width:100%" >
        <thead>
            <tr>
                <th>ID PAGO RESIDENTE</th>
                <th>ID CUENTA POR COBRAR</th>
                <th>ID RESIDENTE</th>
                <th>ID USUARIO</th>
                <th>FECHA</th>
                <th>MONTO</th>
                <th>METODO DE PAGO</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >001</td>
                <td>100</td>
                <td>094</td>
                <td>001</td>
                <td>31-12-2022</td>
                <td>3490</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>002</td>
                <td>110</td>
                <td>093</td>
                <td>001</td>
                <td>1-12-2022</td>
                <td>7490</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td>003</td>
                <td>120</td>
                <td>092</td>
                <td>001</td>
                <td>31-2-2022</td>
                <td>9067</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td>001</td>
                <td>102</td>
                <td>091</td>
                <td>001</td>
                <td>3-12-2022</td>
                <td>8766</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td>004</td>
                <td>110</td>
                <td>090</td>
                <td>001</td>
                <td>8-12-2023</td>
                <td>3211</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            </tr>
            <tr>
                <td >001</td>
                <td>700</td>
                <td>089</td>
                <td>001</td>
                <td>28-11-2022</td>
                <td>7655</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>005</td>
                <td>100</td>
                <td>088</td>
                <td>001</td>
                <td>1-10-2022</td>
                <td>3232</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>006</td>
                <td>020</td>
                <td>087</td>
                <td>001</td>
                <td>31-9-2022</td>
                <td>7000</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>007</td>
                <td>010</td>
                <td>086</td>
                <td>001</td>
                <td>11-8-2022</td>
                <td>4500</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>008</td>
                <td>130</td>
                <td>085</td>
                <td>001</td>
                <td>30-9-2023</td>
                <td>5500</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>009</td>
                <td>300</td>
                <td>084</td>
                <td>001</td>
                <td>17-7-2024</td>
                <td>5600</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
            <tr>
                <td>010</td>
                <td>190</td>
                <td>083</td>
                <td>001</td>
                <td>10-10-2022</td>
                <td>9000</td>
                <td >EFECTIVO</td>
                <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Editar">Editar</button>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Borrar">Borrar</button>
                </td>
            </tr>
          </tbody>
            <tfoot>
                <tr>
                    <th>ID PAGO RESIDENTE</th>
                    <th>ID CUENTA POR COBRAR</th>
                    <th>ID RESIDENTE</th>
                    <th>ID USUARIO</th>
                    <th>FECHA</th>
                    <th>MONTO</th>
                    <th>METODO DE PAGO</th>
                    <th>Acciones</th>
                </tr>
        </tfoot>
        </table> 
</div>


<div class="modal fade" id="Nuevo" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title" id="staticBackdropLabel">CREGISTRO DE PAGO</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <label for="idPagoResidente" class="form-label">ID PAGO RESIDENTE:</label>
            <input type="text" id="idPagoResidente" name="idPagoResidente" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="idCuentaPorCobrar" class="form-label">ID CUENTA POR COBRAR:</label>
            <input type="text" id="idCuentaPorCobrar" name="idCuentaPorCobrar" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="idResidente" class="form-label">ID RESIDENTE:</label>
            <input type="text" id="idResidente" name="idResidente" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="idUsuario" class="form-label">ID USUARIO:</label>
            <input type="text" id="idUsuario" name="idUsuario" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="fecha" class="form-label">FECHA:</label>
            <input type="date" id="fecha" name="fecha" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="monto" class="form-label">MONTO:</label>
            <input type="text" id="monto" name="monto" class="form-control" required>
          </div>
  
          <div class="mb-3">
            <label for="metodoPago" class="form-label">METODO DE PAGO:</label>
            <input type="text" id="metodoPago" name="metodoPago" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-success" data-bs-dismiss="modal">Guardar</button>
        </div>
      </div>
    </div>
  </div>
  

<div class="modal fade" id="Editar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header bg-primary text-white">
    <h5 class="modal-title" id="staticBackdropLabel">EDITAR REGISTRO</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    <div class="mb-3">
      <label for="idPagoResidente" class="form-label">ID PAGO RESIDENTE:</label>
      <input type="text" id="idPagoResidente" name="idPagoResidente" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="idCuentaPorCobrar" class="form-label">ID CUENTA POR COBRAR:</label>
      <input type="text" id="idCuentaPorCobrar" name="idCuentaPorCobrar" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="idResidente" class="form-label">ID RESIDENTE:</label>
      <input type="text" id="idResidente" name="idResidente" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="idUsuario" class="form-label">ID USUARIO:</label>
      <input type="text" id="idUsuario" name="idUsuario" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="fecha" class="form-label">FECHA:</label>
      <input type="date" id="fecha" name="fecha" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="monto" class="form-label">MONTO:</label>
      <input type="text" id="monto" name="monto" class="form-control" required>
    </div>

    <div class="mb-3">
      <label for="metodoPago" class="form-label">METODO DE PAGO:</label>
      <input type="text" id="metodoPago" name="metodoPago" class="form-control" required>
    </div>
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
  </div>
</div>
</div>
</div>


    <!-- Modal Borrar -->
<div class="modal fade" id="Borrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header bg-danger text-white">
      <h5 class="modal-title" id="staticBackdropLabel">BORRAR REGISTRO</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      <div class="mb-2">
        <label class=" col-form-label">Esta seguro de borrar el registro</label>
      </div>
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
      <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Borrar</button>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
  </div>
  <div class="modal-body">
    ...
  </div>
  <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
  </div>
</div>
</div>
</div>

</body>   


@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    <link rel="stylesheet" href="/css/admin_custom.css"> 
    <style>
    .container-fluid {
        padding-top: 5px;
        margin-top: 10px; /* Margen superior de 10px */
        margin-bottom: 15px; /* Margen inferior de 10px */
        margin-left: 30px; /* Margen izquierdo de 20px */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.7);
        border-radius: 20px;
        padding-bottom: 10px;
    }
        
         table {
            text-align: left;
            border-collapse: collapse;
        
           }
           
           td,th {
            text-align: left;
            border: 0.1px solid rgb(214, 211, 211);
           }
           </style>

@stop

@section('js')
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>
    <script> 
        let table1 = new DataTable ('#pagoresidentes',{
            language: {
            lengthMenu: "Mostrar _MENU_ registros por página",
            zeroRecords: "Ningún objeto encontrado",
            info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
            infoEmpty: "Ningún objeto encontrado",
            infoFiltered: "(filtrados desde _MAX_ registros totales)",
            search: "Buscar:",
            loadingRecords: "Cargando...",
    }
    });
    </script>
@stop