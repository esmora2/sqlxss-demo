<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Inicio de Sesión</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #0d0d0d;
      font-family: 'Segoe UI', sans-serif;
    }

    .card {
      width: 100%;
      max-width: 420px;
      background-color: #111;
      border: none;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0,255,255,0.3), 0 0 60px rgba(0,255,255,0.1);
    }

    .logo {
      display: block;
      margin: 30px auto 10px auto;
      max-width: 100px;
      filter: drop-shadow(0 0 10px #0ff);
    }

    .card-header {
      background-color: transparent;
      border-bottom: none;
      text-align: center;
    }

    .card-header h3 {
      color: #0ff;
      text-shadow: 0 0 8px #0ff;
    }

    .card-body {
      background-color: #111;
      color: #fff;
      padding: 20px 30px;
    }

    .form-label {
      color: #0ff;
      text-shadow: 0 0 5px #0ff;
    }

    .form-control, .form-select {
      background-color: #222;
      color: #0ff;
      border: 1px solid #0ff;
      box-shadow: 0 0 5px #0ff;
    }

    .form-control::placeholder {
      color: #0ff;
      opacity: 0.6;
    }

    .form-control:focus, .form-select:focus {
      box-shadow: 0 0 10px #0ff;
      border-color: #0ff;
      background-color: #111;
      color: #0ff;
    }

    .form-check-label {
      color: #0ff;
    }

    .btn-primary {
      background-color: #00ffff;
      border: none;
      box-shadow: 0 0 10px #0ff, 0 0 20px #0ff;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #00e6e6;
      box-shadow: 0 0 20px #0ff, 0 0 30px #0ff;
    }
  </style>
</head>
<body>

  <div class="card shadow">
    <div class="card-header">
      <img src="images/iniciar-sesion.png" alt="Logo" class="logo">
      <h3 class="mt-2">Entre a su cuenta</h3>
    </div>
    <div class="card-body">
      <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Correo Electrónico</label>
          <input type="text" name="email" id="email" placeholder="ejemplo@correo.com" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Contraseña</label>
          <input type="password" name="password" id="password" placeholder="Contraseña" class="form-control" required>
        </div>
        <div class="mb-3">
          <label for="method" class="form-label">Método de Autenticación</label>
          <select name="method" id="method" class="form-select">
            <option value="secure">Método Seguro</option>
            <option value="insecure">Método Inseguro</option>
          </select>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" value="" id="remember">
          <label class="form-check-label" for="remember">
            Recordarme
          </label>
        </div>
        <div class="d-grid">
          <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
