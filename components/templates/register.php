<div class="max-w-lg mx-auto rounded-lg shadow-2xl p-8">
    <h2 class="text-3xl font-bold text-center mb-4">Registrarse</h2>
    <p class="text-center text-gray-600 mb-6">Por favor, completa los siguientes campos para crear tu cuenta:</p>

    <!-- Formulario de registro -->
    <form class="space-y-4">
        <!-- Nombre -->
        <input type="text" placeholder="Nombre" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- Apellido -->
        <input type="text" placeholder="Apellido" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- Correo Electrónico -->
        <input type="email" placeholder="Correo Electrónico" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- Código de país -->
        <input type="text" value="+595" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- Número de celular -->
        <input type="text" placeholder="Número de celular" class="col-span-2 w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- CI o RUC -->
        <input type="text" placeholder="CI o RUC" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- Contraseña -->
        <input type="password" placeholder="Contraseña" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">


        <!-- Confirmar Contraseña -->
        <input type="password" placeholder="Confirmar Contraseña" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-r300 bg-gray-50">

        <!-- Checkbox de términos y condiciones -->
        <div class="flex items-center">
            <input id="terms" type="checkbox" class="w-4 h-4 text-r300 bg-gray-50 border border-gray-300 rounded focus:ring-r300">
            <label for="terms" class="ml-2 text-sm text-gray-600">
                Acepto los
                <a href="/index.php?page=terminos-y-condiciones" class="font-bold">
                    términos y condiciones
                </a>
            </label>
        </div>

        <!-- Botón de registrarse -->
        <button class="w-full bg-r300 text-white py-2 rounded-lg hover:bg-r400 font-bold">Registrarse</button>
    </form>

    <!-- Opciones de registro social -->
    <div class="text-center">
        <p class="text-sm text-gray-600 my-6">O puedes registrarte de forma rápida y sencilla con:</p>
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