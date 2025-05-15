<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <!-- Bootstrap 5 desde CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header bg-info text-white">
                    <h2 class="text-center mb-0">Agregar Comentario</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('comments.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="content" class="form-label">Comentario</label>
                            <textarea name="content" id="content" class="form-control" placeholder="Escribe un comentario" rows="4" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="secure" class="form-label">Modo de Comentario</label>
                            <select name="secure" id="secure" class="form-select">
                                <option value="1">Seguro (Texto Plano)</option>
                                <option value="0">Inseguro (HTML/JS permitido)</option>
                            </select>
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="mt-4">
                <h3>Comentarios</h3>
                @foreach($comments as $comment)
                    <div class="card mb-2">
                        <div class="card-body">
                            {!! $comment->content !!}
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS desde CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
