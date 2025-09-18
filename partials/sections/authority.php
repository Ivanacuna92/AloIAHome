<section class="py-16 bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl font-bold mb-10 animate-slide-up">Aloia a los Resultados</h2>
            <blockquote class="text-2xl font-medium mb-8 animate-slide-up animate-delay-100">
                "Reducimos errores críticos en un 38% y devolvemos hasta un 70% de tiempo productivo a tu equipo en
                menos de un trimestre."
                <footer class="text-base mt-4 font-normal">Resultados verificados por nuestros clientes — solicita casos
                    de estudio detallados</footer>
            </blockquote>

            <!-- Logo Cloud en Dos Filas Centradas con Animaciones Secuenciales -->
            <div class="mb-8 animate-fade-in animate-delay-200">
                <!-- Primera fila -->
                <div class="flex flex-wrap justify-center mb-4">
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="0">
                        <img src="<?= IMG_PATH ?>/clients/user-ale.png" alt="Cliente ALE"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="1">
                        <img src="<?= IMG_PATH ?>/clients/user-cmg.png" alt="Cliente CMG"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="2">
                        <img src="<?= IMG_PATH ?>/clients/user-xm.png" alt="Cliente XM"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="3">
                        <img src="<?= IMG_PATH ?>/clients/user-eac.png" alt="Cliente EAC"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                </div>

                <!-- Segunda fila -->
                <div class="flex flex-wrap justify-center">
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="4">
                        <img src="<?= IMG_PATH ?>/clients/user-carvang.png" alt="Cliente Carvang"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="5">
                        <img src="<?= IMG_PATH ?>/clients/user-seton.png" alt="Cliente Seton"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                    <div class="animated-logo flex items-center justify-center p-3 mx-3 transition-all duration-300 hover:scale-110"
                        data-index="6">
                        <img src="<?= IMG_PATH ?>/clients/user-muuk.png" alt="Cliente Muuk"
                            class="h-12 brightness-0 invert transition-all duration-500">
                    </div>
                </div>
            </div>

            <!-- Rating testimonial -->
            <div class="flex flex-col items-center animate-fade-in animate-delay-300">
                <div class="flex mb-1">
                    <?php for ($i = 0; $i < 7; $i++): ?>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-300" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    <?php endfor; ?>
                </div>
                <div class="flex flex-col items-center">
                    <span class="font-bold text-lg">4.9/5 índice de recomendación</span>
                    <span class="text-sm opacity-80">24 Módulos aplicados en lo que va de 2025 + los Asistentes IA</span>
                </div>
            </div>
        </div>
    </div>
</section>