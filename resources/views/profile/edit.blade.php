<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Mi Perfil</title>
</head>

<body>

    <h1>Mi Perfil</h1>

    <p>
        Nombre:
        {{ $user->name }}
    </p>

    <p>
        Correo:
        {{ $user->email }}
    </p>

    <a href="{{ route('dashboard') }}">
        Volver al Dashboard
    </a>
    <h2>Editar perfil</h2>

    <form method="POST"
        action="{{ route('profile.update') }}">

        @csrf

        @method('PUT')


        <label for="name">
            Nombre
        </label>

        <input
            type="text"
            id="name"
            name="name"
            value="{{ old('name', $user->name) }}"
            required
        >


        <label for="email">
            Correo electrónico
        </label>

        <input
            type="email"
            id="email"
            name="email"
            value="{{ old('email', $user->email) }}"
            required
        >


        <button type="submit">
            Guardar cambios
        </button>

    </form>

</body>

</html>