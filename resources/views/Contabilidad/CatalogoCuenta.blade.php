@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <h1>Catalogo de Cuentas</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="Catalogo" class="table">
                    <thead class="thead-info">
                        <tr>
                            <th>Codigo ID</th>
                            <th>Codigo Contable</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Tipo de Cuenta</th>
                            <th>Cuenta Origen</th>
                            <th>Usuario</th>
                            <th class="d-none d-sm-table-cell">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ResulCatalogo as $Catalogo)
                            <tr>
                                <td>{{ $Catalogo['ID_CUENTA'] }}</td>
                                <td>{{ $Catalogo['CODIGO'] }}</td>
                                <td>{{ $Catalogo['NOMBRE'] }}</td>
                                <td>{{ $Catalogo['DESCRIPCION'] }}</td>
                                <td>{{ $Catalogo['TIPO_CUENTA'] }}</td>
                                <td>{{ $Catalogo['NOMBRE_PADRE'] }}</td>
                                <td>{{ $Catalogo['Usuario'] }}</td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="{{ url('/UpdateFormTel/'.$Catalogo['ID_CUENTA']) }}" class="btn btn-info editar-btn">Editar</a>
                                    <form method="POST" action="{{ url('/EliminarCatalogo/'.$Catalogo['ID_CUENTA']) }}" style="display: inline;">
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
            $('#Catalogo').DataTable({
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
