
    document.addEventListener('DOMContentLoaded', function() {
        const passwordOutput = document.getElementById('passwordOutput');
        const lengthSlider = document.getElementById('lengthSlider');
        const lengthValue = document.getElementById('lengthValue');
        const generateBtn = document.getElementById('generateBtn');
        const copyBtn = document.getElementById('copyBtn');
        const refreshBtn = document.getElementById('refreshBtn');

        const generatePassword = () => {
            const length = lengthSlider.value;
            const hasUpper = document.getElementById('uppercaseCheck').checked;
            const hasLower = document.getElementById('lowercaseCheck').checked;
            const hasNumbers = document.getElementById('numbersCheck').checked;
            const hasSymbols = document.getElementById('symbolsCheck').checked;

            let chars = '';
            if(hasUpper) chars += 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            if(hasLower) chars += 'abcdefghijklmnopqrstuvwxyz';
            if(hasNumbers) chars += '0123456789';
            if(hasSymbols) chars += '!@#$%^&*()_+-=[]{}|;:,.<>?';

            if(!chars) {
                alert('Seleccione al menos un tipo de carácter');
                return;
            }

            let password = '';
            for(let i = 0; i < length; i++) {
                password += chars[Math.floor(Math.random() * chars.length)];
            }

            passwordOutput.textContent = password;
            
            // Verificar que la contraseña cumple con los requisitos seleccionados
            let hasUpperChar = false;
            let hasLowerChar = false;
            let hasNumberChar = false;
            let hasSymbolChar = false;
            
            for(let i = 0; i < password.length; i++) {
                const char = password[i];
                if(/[A-Z]/.test(char)) hasUpperChar = true;
                if(/[a-z]/.test(char)) hasLowerChar = true;
                if(/[0-9]/.test(char)) hasNumberChar = true;
                if(/[^A-Za-z0-9]/.test(char)) hasSymbolChar = true;
            }
            
            // Si falta algún tipo de carácter requerido, regenerar
            if((hasUpper && !hasUpperChar) || 
               (hasLower && !hasLowerChar) || 
               (hasNumbers && !hasNumberChar) || 
               (hasSymbols && !hasSymbolChar)) {
                generatePassword();
            }
        };

        const copyToClipboard = () => {
            const password = passwordOutput.textContent;
            if(password === 'Haga clic en generar') return;
            
            navigator.clipboard.writeText(password).then(() => {
                // Feedback visual
                copyBtn.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                `;
                setTimeout(() => {
                    copyBtn.innerHTML = `
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                    `;
                }, 2000);
            }).catch(err => {
                console.error('Error al copiar: ', err);
                alert('No se pudo copiar la contraseña. Inténtelo de nuevo.');
            });
        };

        lengthSlider.addEventListener('input', (e) => {
            lengthValue.textContent = e.target.value;
        });

        generateBtn.addEventListener('click', generatePassword);
        refreshBtn.addEventListener('click', generatePassword);
        copyBtn.addEventListener('click', copyToClipboard);

        // Generar contraseña inicial
        generatePassword();
    });
