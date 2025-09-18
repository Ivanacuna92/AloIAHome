<!-- Voicebot Section -->
<section class="py-16 bg-aloia-white animate-fade-in">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-gradient-to-r from-aloia-orange to-aloia-purple text-aloia-white p-6 rounded-xl shadow-parallel">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/3 mb-4 md:mb-0 flex justify-center">
                    <img src="<?= IMG_PATH ?>alex.png" alt="Alex Voicebot"
                        class="h-32 w-32 object-cover rounded-full border-2 border-white">
                </div>
                <div class="md:w-2/3 md:pl-6 text-center md:text-left">
                    <h3 class="text-xl font-medium mb-2">Habla con nuestro Voicebot</h3>
                    <p class="-mb-10">
                        ¿Prefieres usar tu voz? Llama a nuestro <strong>aloia Voicebot</strong> y descubre, en menos de 60 segundos, cómo podemos ayudarte. 
                        <em>(Disponible 24/7).</em>
                    </p>
                                        <!-- Contenedor para el widget de ElevenLabs -->
                    <div class="elevenlabs-container flex justify-center md:justify-start">
                        <elevenlabs-convai
                            agent-id="PgQNwj5EwcVKfRIhTqk9"
                            class="custom-voicebot"
                        ></elevenlabs-convai>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script del widget -->
<script src="https://elevenlabs.io/convai-widget/index.js" async type="text/javascript"></script>

<style>
/* Estilos para el contenedor del widget */
.elevenlabs-container {
    display: flex;
    margin-top: 0.5rem;
}

/* Estilos para el widget de ElevenLabs */
elevenlabs-convai {
    position: relative !important;
    display: block !important;
    bottom: auto !important;
    right: auto !important;
}

/* Ocultar el botón flotante original de ElevenLabs */
elevenlabs-convai.elevenlabs-widget-fab {
    display: none !important;
}

/* Asegurarse de que el widget no tenga posición fija */
elevenlabs-convai::part(fab) {
    position: relative !important;
}

/* Sombra paralela para la tarjeta */
.shadow-parallel {
    box-shadow: 6px 6px 0 rgba(0, 0, 0, 0.1);
}

/* Animación de entrada */
.animate-fade-in {
    animation: fadeIn 0.8s ease-out;
}

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media (max-width: 768px) {
    .shadow-parallel {
        box-shadow: 4px 4px 0 rgba(0, 0, 0, 0.1);
    }
}
</style>



