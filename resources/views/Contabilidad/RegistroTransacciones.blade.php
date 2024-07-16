@extends('adminlte::page')

@section('title', 'Registrar Transacción')

@section('content_header')
    <h1>Registrar Transacción</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4" style="font-family: Arial, sans-serif; color: #333; font-weight: bold; text-transform: uppercase; border-bottom: 2px solid #17cb8f; padding-bottom: 5px; width: 100%;">Partida Original</h5>

                    @if(session('success_original'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success_original') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error_original'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error_original') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form id="form_partida_original" action="{{ route('transacciones.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6 mb-4">
                            <label for="codigo_original" class="form-label">Cuenta</label>
                            <select class="form-select @error('codigo_original') is-invalid @enderror" id="codigo_original" name="codigo_original" required>
                                <option value="">Seleccione una cuenta contable</option>
                                @foreach($datoCatalogo as $Catalogo)
                                    <option value="{{ $Catalogo['codigo'] }}" {{ old('codigo_original') == $Catalogo['codigo'] ? 'selected' : '' }}>
                                        {{ $Catalogo['nombre'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('codigo_original')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fecha_original" class="form-label">Fecha</label>
                            <input type="date" class="form-control @error('fecha_original') is-invalid @enderror" id="fecha_original" name="fecha_original" value="{{ old('fecha_original') }}" required>
                            @error('fecha_original')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descripcion_original" class="form-label">Descripción del Asiento</label>
                            <textarea class="form-control @error('descripcion_original') is-invalid @enderror" id="descripcion_original" name="descripcion_original" required>{{ old('descripcion_original') }}</textarea>
                            @error('descripcion_original')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tipo_movimiento_original" class="form-label">Tipo de Movimiento</label>
                            <select class="form-select @error('tipo_movimiento_original') is-invalid @enderror" id="tipo_movimiento_original" name="tipo_movimiento_original" required>
                                <option value="">Seleccione tipo de movimiento</option>
                                <option value="DEBE" {{ old('tipo_movimiento_original') == 'DEBE' ? 'selected' : '' }}>Debe</option>
                                <option value="HABER" {{ old('tipo_movimiento_original') == 'HABER' ? 'selected' : '' }}>Haber</option>
                            </select>
                            @error('tipo_movimiento_original')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="monto_original" class="form-label">Monto</label>
                            <input type="number" step="0.01" class="form-control @error('monto_original') is-invalid @enderror" id="monto_original" name="monto_original" value="{{ old('monto_original') }}" required>
                            @error('monto_original')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <input type="hidden" name="usuario_id_original" value="{{ Auth::id() }}">
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4" style="font-family: Arial, sans-serif; color: #333; font-weight: bold; text-transform: uppercase; border-bottom: 2px solid #007bff; padding-bottom: 5px; width: 100%;">Contrapartida</h5>


                    @if(session('success_contrapartida'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success_contrapartida') }}
                            <button type="b mb -6utton" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    @if(session('error_contrapartida'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('error_contrapartida') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <form id="form_contrapartida" action="{{ route('transacciones.store') }}" method="POST">
                        @csrf
                        <div class="col-md-6 mb-4">
                            <label for="codigo_contrapartida" class="form-label">Cuenta</label>
                            <select class="form-select @error('codigo_contrapartida') is-invalid @enderror" id="codigo_contrapartida" name="codigo_contrapartida" required>
                                <option value="">Seleccione una cuenta contable</option>
                                @foreach($datoCatalogo as $Catalogo)
                                    <option value="{{ $Catalogo['codigo'] }}" {{ old('codigo_contrapartida') == $Catalogo['codigo'] ? 'selected' : '' }}>
                                        {{ $Catalogo['nombre'] }}
                                    </option>
                                @endforeach
                            </select>
                            @error('codigo_contrapartida')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="fecha_contrapartida" class="form-label">Fecha</label>
                            <input type="date" class="form-control @error('fecha_contrapartida') is-invalid @enderror" id="fecha_contrapartida" name="fecha_contrapartida" value="{{ old('fecha_contrapartida') }}" required>
                            @error('fecha_contrapartida')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="descripcion_contrapartida" class="form-label">Descripción del Asiento</label>
                            <textarea class="form-control @error('descripcion_contrapartida') is-invalid @enderror" id="descripcion_contrapartida" name="descripcion_contrapartida" required>{{ old('descripcion_contrapartida') }}</textarea>
                            @error('descripcion_contrapartida')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tipo_movimiento_contrapartida" class="form-label">Tipo de Movimiento</label>
                            <select class="form-select @error('tipo_movimiento_contrapartida') is-invalid @enderror" id="tipo_movimiento_contrapartida" name="tipo_movimiento_contrapartida" required>
                                <option value="">Seleccione tipo de movimiento</option>
                                <option value="DEBE" {{ old('tipo_movimiento_contrapartida') == 'DEBE' ? 'selected' : '' }}>Debe</option>
                                <option value="HABER" {{ old('tipo_movimiento_contrapartida') == 'HABER' ? 'selected' : '' }}>Haber</option>
                            </select>
                            @error('tipo_movimiento_contrapartida')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="monto_contrapartida" class="form-label">Monto</label>
                            <input type="number" step="0.01" class="form-control @error('monto_contrapartida') is-invalid @enderror" id="monto_contrapartida" name="monto_contrapartida" value="{{ old('monto_contrapartida') }}" required>
                            @error('monto_contrapartida')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <input type="hidden" name="usuario_id_contrapartida" value="{{ Auth::id() }}">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <button id="btn_guardar" class="btn btn-primary">Guardar Transacciones</button>
    </div>
@endsection

@section('css')
    {{-- Estilos adicionales --}}
    <style>
        .monto-verde {
            border-color: #28a745;
            box-shadow: 0 0 0 0.25rem rgba(40, 167, 69, 0.25);
        }

        .monto-azul {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }
    </style>
@stop


@section('js')
    {{-- Scripts adicionales --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Función para resaltar campos faltantes o inválidos
            function resaltarCamposFaltantes(formulario) {
                formulario.find(':input[required]').each(function() {
                    if (!$(this).val()) {
                        $(this).addClass('is-invalid');
                    } else {
                        $(this).removeClass('is-invalid');
                    }
                });
            }

            // Sincronización de la fecha entre formularios
            $('#fecha_original').change(function() {
                $('#fecha_contrapartida').val($(this).val());
            });

            // Automatización del tipo de movimiento y monto entre formularios
            $('#monto_original').on('input', function() {
                $('#monto_contrapartida').val($(this).val());
                $(this).addClass('monto-verde').removeClass('monto-azul');
                $('#monto_contrapartida').addClass('monto-azul').removeClass('monto-verde');
            });

            $('#tipo_movimiento_original').change(function() {
                var tipoMovimiento = $(this).val();
                if (tipoMovimiento === 'DEBE') {
                    $('#tipo_movimiento_contrapartida').val('HABER');
                } else if (tipoMovimiento === 'HABER') {
                    $('#tipo_movimiento_contrapartida').val('DEBE');
                }
            });

            $('#monto_contrapartida').on('input', function() {
                $('#monto_original').val($(this).val());
                $(this).addClass('monto-verde').removeClass('monto-azul');
                $('#monto_original').addClass('monto-azul').removeClass('monto-verde');
            });

            $('#tipo_movimiento_contrapartida').change(function() {
                var tipoMovimiento = $(this).val();
                if (tipoMovimiento === 'DEBE') {
                    $('#tipo_movimiento_original').val('HABER');
                } else if (tipoMovimiento === 'HABER') {
                    $('#tipo_movimiento_original').val('DEBE');
                }
            });

            // Envío del formulario al hacer clic en el botón Guardar
            $('#btn_guardar').click(function() {
                // Validación de cada formulario antes de enviar
                var formPartida = $('#form_partida_original');
                var formContrapartida = $('#form_contrapartida');

                // Resaltar campos faltantes o inválidos antes de enviar
                resaltarCamposFaltantes(formPartida);
                resaltarCamposFaltantes(formContrapartida);

                if (formPartida[0].checkValidity() && formContrapartida[0].checkValidity()) {
                    // Envío de los formularios si son válidos
                    formPartida.submit();
                    formContrapartida.submit();

                    // Mensaje de éxito opcional
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: 'Transacciones registradas correctamente.',
                    });
                } else {
                    // Mostrar mensaje de error si los formularios no son válidos
                    Swal.fire({
                        icon: 'error',
                        title: '¡Error!',
                        text: 'Por favor complete todos los campos correctamente en ambos formularios.',
                    });
                }
            });
        });
    </script>
@stop


