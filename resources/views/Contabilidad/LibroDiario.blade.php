@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <h1>Libro Diario</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="LibroDiario" class="table table-bordered table-striped">
                    <thead class="thead-info">
                        <tr>
                            <th>Fecha</th>
                            <th>Código</th>
                            <th>Nombre Cuenta</th>
                            <th>Descripción Transacción</th>
                            <th>Debe</th>
                            <th>Haber</th>
                            <th class="d-none d-sm-table-cell">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ResulLibroDiario as $libro)
                            <tr>
                                <td>{{ $libro->fecha }}</td>
                                <td>{{ $libro->codigo_catalogo }}</td>
                                <td>{{ $libro->cuenta_catalogo }}</td>
                                <td>{{ $libro->descripcion_transaccion }}</td>
                                <td class="text-center">
                                    @if ($libro->debe > 0)
                                        <span class="badge bg-success">{{ $libro->debe }}</span>
                                    @else
                                        {{ $libro->debe }}
                                    @endif
                                </td>
                                <td class="text-center">
                                    @if ($libro->haber > 0)
                                        <span class="badge bg-danger">{{ $libro->haber }}</span>
                                    @else
                                        {{ $libro->haber }}
                                    @endif
                                </td>
                                <td class="d-none d-sm-table-cell">
                                    <a href="{{ url('/actualizar/'.$libro->codigo_catalogo) }}" class="btn btn-info editar-btn">Editar</a>
                                    <form method="POST" action="{{ url('/eliminar/'.$libro->codigo_catalogo) }}" style="display: inline;">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger borrar-btn">Eliminar</button>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.4/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    {{-- Scripts adicionales --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.4/js/dataTables.bootstrap5.js"></script>
    <script>
        $(document).ready(function() {
            $('#LibroDiario').DataTable({
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
