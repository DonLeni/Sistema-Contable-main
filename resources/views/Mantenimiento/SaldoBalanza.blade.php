@extends('adminlte::page')

@section('title', 'Villas Las Acacias')

@section('content_header')
    <h1>Cuentas</h1>

@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="SaldoBalanza" class="table">
                    <thead class="thead-info">
                        <tr>
                            <th>Id</th>
                            <th>Id Catalogo</th>
                            <th>Fecha</th>
                            <th>Saldo Inicial</th>
                            <th>Debito</th>
                            <th>Credito</th>
                            <th>Saldo Final</th>
                            <th class="d-none d-sm-table-cell">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($ResulSaldoBalanza as $SaldoB)
                            <tr>
                                <td>{{ $SaldoB['id_saldo_balanza'] }}</td>
                                <td>{{ $SaldoB['id_catalogo'] }}</td>
                                <td>{{ $SaldoB['fecha_balance'] }}</td>
                                <td>{{ $SaldoB['saldo_inicial'] }}</td>
                                <td>{{ $SaldoB['debitos'] }}</td>
                                <td>{{ $SaldoB['creditos'] }}</td>
                                <td>{{ $SaldoB['saldo_final'] }}</td>

                                <td class="d-none d-sm-table-cell">
                                    <a href="{{ url('/UpdateFormTel/'.$SaldoB['id_saldo_balanza']) }}" class="btn btn-info editar-btn">Editar</a>
                                    <form method="POST" action="{{ url('/EliminarSaldoBalanza/'.$SaldoB['id_saldo_balanza']) }}" style="display: inline;">
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
            $('#SaldoBalanza').DataTable({
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
