@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <h1>Tipo de Cuentas</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="detalletransaccion" class="table">
                    <thead class="thead-info">
                        <tr>
                            <th>ID</th>
                            <th>ID contable</th>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                            <th>Movimiento</th>
                            <th>Monto</th>
                            <th>Creacion</th>
                            <th>Actualizacion</th>
                            <th class="d-none d-sm-table-cell">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ResulDetalleTransaccion as $detalletransaccion)
                            <tr>
                                <td>{{ $detalletransaccion['id_detalle'] }}</td>
                                <td>{{ $detalletransaccion['id_catalogo'] }}</td>
                                <td>{{ $detalletransaccion['fecha'] }}</td>
                                <td>{{ $detalletransaccion['descripcion'] }}</td>
                                <td>{{ $detalletransaccion['tipo_movimiento'] }}</td>
                                <td>{{ $detalletransaccion['monto'] }}</td>
                                <td>{{ $detalletransaccion['created_at'] }}</td>
                                <td>{{ $detalletransaccion['updated_at'] }}</td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="{{ url('/UpdateFormTel/'.$detalletransaccion['id_detalle']) }}" class="btn btn-info editar-btn">Editar</a>
                                    <form method="POST" action="{{ url('/Eliminardetalletransaccion/'.$detalletransaccion['id_detalle']) }}" style="display: inline;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger borrar-btn">Borrar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('css')
    {{-- Estilos adicionales --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    {{-- Scripts adicionales --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            $('#detalletransaccion').DataTable({
                language: {
                    lengthMenu: "Mostrar _MENU_ registros por página",
                    zeroRecords: "Ningún objeto encontrado",
                    info: "Mostrando de _START_ a _END_ de un total de _TOTAL_ registros",
                    infoEmpty: "Ningún objeto encontrado",
                    infoFiltered: "(filtrados desde _MAX_ registros totales)",
                    search: "Buscar:",
                    loadingRecords: "Cargando..."
                }
            });
        });

        // Toastr
        var toastr = toastr || {};
        @if(session('success'))
            toastr.success('{{ session('success') }}');
        @endif

        @if(session('error'))
            toastr.error('{{ session('error') }}');
        @endif
    </script>
@stop
