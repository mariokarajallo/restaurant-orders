<div id="loginModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden z-50">
    <div class="bg-white rounded-2xl shadow-lg p-8 w-[600px] relative">

        <!-- Botón de cerrar -->
        <button id="closeModal" class="absolute top-3 right-3 text-gray-500 hover:text-gray-700">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Título -->
        <h2 class="text-3xl font-bold text-center mb-4 pt-4">Iniciar Sesión</h2>
        <p class="text-center text-gray-600">Inicia sesión en tu cuenta para acceder a todo lo que tenemos para ti.</p>
        <p class="text-center text-gray-600 mb-6">¿No tienes una cuenta aún? <span id="openRegisterModal" class="font-bold text-r300 hover:text-r400 cursor-pointer">¡Regístrate ahora!</span></p>


        <!-- Formulario de iniciar sesión -->
        <form class="space-y-4">
            <!-- Campo de correo -->
            <div class="relative">
                <input type="email" placeholder="Correo Electrónico" class="w-full px-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <circle cx="12" cy="7" r="4" />
                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                    </svg>
                </div>
            </div>

            <!-- Campo de contraseña -->
            <div class="relative">
                <input type="password" placeholder="Contraseña" class="w-full px-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-500" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" />
                        <rect x="5" y="11" width="14" height="10" rx="2" />
                        <circle cx="12" cy="16" r="1" />
                        <path d="M8 11v-4a4 4 0 0 1 8 0v4" />
                    </svg>
                </div>
            </div>

            <a href="#" class="text-sm text-gray-600 block text-center hover:text-r300">¿Olvidaste tu contraseña?</a>

            <!-- Botón de iniciar sesión -->
            <button class="w-full bg-r300 text-white py-2 rounded-lg hover:bg-r400 font-bold">Iniciar</button>

        </form>

        <!-- Divider -->
        <div class="relative my-6 flex items-center">
            <div class="flex-grow border-t border-gray-300"></div>
            <span class="flex-shrink mx-4 text-gray-500">o inicia con</span>
            <div class="flex-grow border-t border-gray-300"></div>
        </div>

        <!-- Botones de login social -->
        <div class="space-y-4">
            <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50">
                <img src="/public/assets/icons/google-icon-logo.svg" alt="Google" class="h-5 w-5 mr-2">
                <span class="text-gray-700">Inicia con Google</span>
            </button>

            <button class="w-full flex items-center justify-center px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50">
                <img src="/public/assets/icons/facebook-icon-logo.svg" alt="Facebook" class="h-5 w-5 mr-2">
                <span class="text-gray-700">Inicia con Facebook</span>
            </button>
        </div>
    </div>
</div>