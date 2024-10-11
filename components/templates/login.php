<div class="max-w-lg mx-auto bg-white rounded-lg shadow-2xl p-8">
    <h2 class="text-3xl font-bold text-center mb-4">Iniciar Sesión</h2>
    <p class="text-center text-gray-600 mb-6">Inicia sesión en tu cuenta para acceder a todo lo que tenemos para ti.</p>
    <p class="text-center text-gray-600 mb-6">¿No tienes una cuenta aún? <span class="font-bold text-r300 hover:text-r400 cursor-pointer">
        <a href="/index.php?page=registro">¡Regístrate ahora!</a></span></p>

    <form class="space-y-4">
        <!-- Campos de correo y contraseña -->
        <div class="relative">
            <input type="email" placeholder="Correo Electrónico" class="w-full px-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
            <!-- Icono de usuario -->
        </div>

        <div class="relative">
            <input type="password" placeholder="Contraseña" class="w-full px-8 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">
            <!-- Icono de contraseña -->
        </div>

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