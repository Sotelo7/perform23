<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>Login</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Bootstrap 5.2.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Styles -->
    <style>
        /* Tu estilo personalizado aquí */
    </style>
</head>
<body>

    <section class="d-flex flex-wrap justify-content-center align-items-center min-vh-100">
        <div class="col-lg-4 px-4 py-5 mt-5"> <!-- Agregamos mt-5 para mover el contenido hacia arriba -->
            <div class="text-center">
                <img src="https://utp.performlead.com/assets/admin/images/logo-performlead.svg" alt="PerformLead Logo" class="w-50 mx-auto" />
            </div>

        <form action="{{ route('login') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label sr-only">Email</label>
                <div class="input-group">
                    <input
                        type="email"
                        class="form-control rounded-lg border border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        id="email"
                        name="email"
                        placeholder="Ingresa email"
                    />
                    <span class="input-group-text">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"
                            />
                        </svg>
                    </span>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label sr-only">Contraseña</label>
                <div class="input-group">
                    <input
                        type="password"
                        class="form-control rounded-lg border border-gray-200 p-4 pe-12 text-sm shadow-sm"
                        id="password"
                        name="password"
                        placeholder="Ingresa password"
                    />
                    <span class="input-group-text">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="h-4 w-4 text-gray-400"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"
                            />
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"
                            />
                        </svg>
                    </span>
                </div>
            </div>
            
            <form method="POST" action="{{ route('home') }}">
                @csrf
            <button
                type="submit"
                class="btn btn-primary btn-block rounded-lg py-3 text-sm font-medium"
            >
                Ingresa
            </button>
        </form>
    </div>

    <div class="col-lg-8">
        <img
            alt="Welcome"
            src="https://utp.performlead.com/assets/admin/images/slid_01.png"
            class="img-fluid"
        />
    </div>
</section>


        
    
    
       
</html>