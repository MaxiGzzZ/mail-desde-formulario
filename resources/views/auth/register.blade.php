<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    @vite('resources/css/app.css')
</head>

<body class="min-h-screen bg-gray-100 font-sans text-gray-900 antialiased">
    <div class="flex min-h-screen items-center justify-center px-4 py-12">
        <div class="w-full max-w-md">

            @if (session('success'))
                <div class="mb-6 flex items-center gap-3 rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm font-medium text-green-800">
                    <svg class="size-5 shrink-0 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                    </svg>
                    {{ session('success') }}
                </div>
            @endif

            <div class="rounded-2xl bg-white p-8 shadow-xl shadow-gray-200 ring-1 ring-gray-200">
                <div class="mb-8 flex flex-col items-center gap-3 text-center">
                    <div class="flex size-12 items-center justify-center rounded-xl bg-indigo-600 text-white shadow-lg shadow-indigo-200">
                        <svg class="size-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.223-1.415.703l-6.117 10.014a.75.75 0 0 1-.325.302.75.75 0 0 1-.365.066.75.75 0 0 1-.416-.157.75.75 0 0 1-.217-.322l-1.83-5.49a.75.75 0 0 1 .124-.694l3.595-5.878a.75.75 0 0 0 .122-.657l-.334-1.087a.75.75 0 0 1 .126-.622.75.75 0 0 1 .52-.296l5.685-.535a.75.75 0 0 0 .618-.383Z" />
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900">Crear una cuenta</h1>
                        <p class="mt-1 text-sm text-gray-500">Completa tus datos para registrarte</p>
                    </div>
                </div>

                <form action="{{ route('register.store') }}" method="POST" class="flex flex-col gap-5">
                    @csrf

                    <div class="flex flex-col gap-2">
                        <label for="name" class="text-sm font-medium text-gray-700">Nombre completo</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autofocus
                            placeholder="Juan Pérez"
                            class="w-full rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-sm text-gray-900 shadow-sm transition placeholder:text-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 @error('name') border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror">
                        @error('name')
                            <p class="flex items-center gap-1.5 text-sm text-red-600">
                                <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="email" class="text-sm font-medium text-gray-700">Correo electrónico</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required
                            placeholder="tu@correo.com"
                            class="w-full rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-sm text-gray-900 shadow-sm transition placeholder:text-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 @error('email') border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror">
                        @error('email')
                            <p class="flex items-center gap-1.5 text-sm text-red-600">
                                <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="password" class="text-sm font-medium text-gray-700">Contraseña</label>
                        <input type="password" id="password" name="password" required
                            placeholder="Mínimo 8 caracteres"
                            class="w-full rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-sm text-gray-900 shadow-sm transition placeholder:text-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20 @error('password') border-red-400 focus:border-red-500 focus:ring-red-500/20 @enderror">
                        @error('password')
                            <p class="flex items-center gap-1.5 text-sm text-red-600">
                                <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m9-.75a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 3.75h.008v.008H12v-.008Z" />
                                </svg>
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="flex flex-col gap-2">
                        <label for="password_confirmation" class="text-sm font-medium text-gray-700">Confirmar contraseña</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" required
                            placeholder="Repite tu contraseña"
                            class="w-full rounded-lg border border-gray-300 bg-white px-3.5 py-2.5 text-sm text-gray-900 shadow-sm transition placeholder:text-gray-400 focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20">
                    </div>

                    <button type="submit"
                        class="mt-2 w-full rounded-lg bg-indigo-600 px-4 py-2.5 text-sm font-semibold text-white shadow-md shadow-indigo-300 transition hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/40 focus:ring-offset-2 active:bg-indigo-700">
                        Registrarse
                    </button>
                </form>
            </div>

            <p class="mt-6 text-center text-sm text-gray-500">
                ¿Ya tienes una cuenta?
                <a href="#" class="font-semibold text-indigo-600 transition hover:text-indigo-500 hover:underline">Inicia sesión</a>
            </p>
        </div>
    </div>
</body>

</html>
