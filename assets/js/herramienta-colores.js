
    document.addEventListener('DOMContentLoaded', function() {
        // Elementos del DOM
        const colorPreview = document.getElementById('colorPreview');
        const colorPicker = document.getElementById('colorPicker');
        const redSlider = document.getElementById('redSlider');
        const greenSlider = document.getElementById('greenSlider');
        const blueSlider = document.getElementById('blueSlider');
        const redInput = document.getElementById('redInput');
        const greenInput = document.getElementById('greenInput');
        const blueInput = document.getElementById('blueInput');
        const hexValue = document.getElementById('hexValue');
        const rgbValue = document.getElementById('rgbValue');
        const hslValue = document.getElementById('hslValue');
        const hsvValue = document.getElementById('hsvValue');
        
        // Elementos del conversor
        const inputFormat = document.getElementById('inputFormat');
        const inputValue = document.getElementById('inputValue');
        const convertBtn = document.getElementById('convertBtn');
        const convertPreview = document.getElementById('convertPreview');
        const convertHex = document.getElementById('convertHex');
        const convertRgb = document.getElementById('convertRgb');
        const convertHsl = document.getElementById('convertHsl');
        const convertHsv = document.getElementById('convertHsv');
        
        // Elementos de la paleta
        const paletteBaseColor = document.getElementById('paletteBaseColor');
        const paletteType = document.getElementById('paletteType');
        const generatePaletteBtn = document.getElementById('generatePaletteBtn');
        const colorPalette = document.getElementById('colorPalette');
        const paletteValues = document.getElementById('paletteValues');
        
        // Tabs
        const tabButtons = document.querySelectorAll('.tab-button');
        const tabContents = document.querySelectorAll('.tab-content');
        
        // Inicializar color
        updateColorFromRGB(253, 97, 68);
        
        // Event listeners para el selector de color
        colorPicker.addEventListener('input', function() {
            const hex = this.value;
            const rgb = hexToRgb(hex);
            updateColorFromRGB(rgb.r, rgb.g, rgb.b);
            updateSliders(rgb.r, rgb.g, rgb.b);
        });
        
        redSlider.addEventListener('input', function() {
            redInput.value = this.value;
            updateColorFromRGB(parseInt(redSlider.value), parseInt(greenSlider.value), parseInt(blueSlider.value));
        });
        
        greenSlider.addEventListener('input', function() {
            greenInput.value = this.value;
            updateColorFromRGB(parseInt(redSlider.value), parseInt(greenSlider.value), parseInt(blueSlider.value));
        });
        
        blueSlider.addEventListener('input', function() {
            blueInput.value = this.value;
            updateColorFromRGB(parseInt(redSlider.value), parseInt(greenSlider.value), parseInt(blueSlider.value));
        });
        
        redInput.addEventListener('input', function() {
            if (this.value > 255) this.value = 255;
            if (this.value < 0) this.value = 0;
            redSlider.value = this.value;
            updateColorFromRGB(parseInt(redSlider.value), parseInt(greenSlider.value), parseInt(blueSlider.value));
        });
        
        greenInput.addEventListener('input', function() {
            if (this.value > 255) this.value = 255;
            if (this.value < 0) this.value = 0;
            greenSlider.value = this.value;
            updateColorFromRGB(parseInt(redSlider.value), parseInt(greenSlider.value), parseInt(blueSlider.value));
        });
        
        blueInput.addEventListener('input', function() {
            if (this.value > 255) this.value = 255;
            if (this.value < 0) this.value = 0;
            blueSlider.value = this.value;
            updateColorFromRGB(parseInt(redSlider.value), parseInt(greenSlider.value), parseInt(blueSlider.value));
        });
        
        // Event listener para el conversor
        convertBtn.addEventListener('click', function() {
            const format = inputFormat.value;
            const value = inputValue.value.trim();
            
            let rgb;
            try {
                switch(format) {
                    case 'hex':
                        rgb = hexToRgb(value);
                        break;
                    case 'rgb':
                        rgb = parseRgb(value);
                        break;
                    case 'hsl':
                        rgb = hslToRgb(parseHsl(value));
                        break;
                    case 'hsv':
                        rgb = hsvToRgb(parseHsv(value));
                        break;
                }
                
                if (!rgb) throw new Error('Formato inválido');
                
                // Actualizar la vista previa y los valores
                const hex = rgbToHex(rgb.r, rgb.g, rgb.b);
                const hsl = rgbToHsl(rgb.r, rgb.g, rgb.b);
                const hsv = rgbToHsv(rgb.r, rgb.g, rgb.b);
                
                convertPreview.style.backgroundColor = hex;
                convertHex.textContent = hex;
                convertHex.parentElement.querySelector('.copy-btn').dataset.value = hex;
                
                const rgbString = `rgb(${rgb.r}, ${rgb.g}, ${rgb.b})`;
                convertRgb.textContent = rgbString;
                convertRgb.parentElement.querySelector('.copy-btn').dataset.value = rgbString;
                
                const hslString = `hsl(${Math.round(hsl.h)}, ${Math.round(hsl.s)}%, ${Math.round(hsl.l)}%)`;
                convertHsl.textContent = hslString;
                convertHsl.parentElement.querySelector('.copy-btn').dataset.value = hslString;
                
                const hsvString = `hsv(${Math.round(hsv.h)}, ${Math.round(hsv.s)}%, ${Math.round(hsv.v)}%)`;
                convertHsv.textContent = hsvString;
                convertHsv.parentElement.querySelector('.copy-btn').dataset.value = hsvString;
            } catch (e) {
                alert('Formato de color inválido. Por favor, verifica el valor ingresado.');
            }
        });
        
        // Event listener para generar paletas
        generatePaletteBtn.addEventListener('click', function() {
            const baseColor = paletteBaseColor.value;
            const type = paletteType.value;
            
            const rgb = hexToRgb(baseColor);
            const hsl = rgbToHsl(rgb.r, rgb.g, rgb.b);
            
            let palette = [];
            
            switch(type) {
                case 'analogous':
                    palette = generateAnalogousPalette(hsl);
                    break;
                case 'monochromatic':
                    palette = generateMonochromaticPalette(hsl);
                    break;
                case 'triadic':
                    palette = generateTriadicPalette(hsl);
                    break;
                case 'complementary':
                    palette = generateComplementaryPalette(hsl);
                    break;
                case 'split':
                    palette = generateSplitComplementaryPalette(hsl);
                    break;
            }
            
            // Mostrar la paleta
            colorPalette.innerHTML = '';
            paletteValues.innerHTML = '';
            
            palette.forEach((color, index) => {
                const rgb = hslToRgb(color);
                const hex = rgbToHex(rgb.r, rgb.g, rgb.b);
                
                // Crear elemento de color
                const colorElement = document.createElement('div');
                colorElement.className = 'palette-color';
                colorElement.style.backgroundColor = hex;
                colorElement.title = hex;
                colorElement.dataset.index = index;
                colorElement.addEventListener('click', function() {
                    // Copiar al portapapeles
                    navigator.clipboard.writeText(hex).then(() => {
                        alert(`Color copiado: ${hex}`);
                    });
                });
                
                colorPalette.appendChild(colorElement);
                
                // Crear elemento de valor
                const valueElement = document.createElement('div');
                valueElement.className = 'color-value';
                valueElement.innerHTML = `
                    <div class="flex items-center">
                        <div class="w-6 h-6 rounded-full mr-2" style="background-color: ${hex}"></div>
                        <span>${hex}</span>
                    </div>
                    <button class="copy-btn" data-value="${hex}" onclick="copyToClipboard(this)">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 5H6a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2v-1M8 5a2 2 0 002 2h2a2 2 0 002-2M8 5a2 2 0 012-2h2a2 2 0 012 2m0 0h2a2 2 0 012 2v3m2 4H10m0 0l3-3m-3 3l3 3" />
                        </svg>
                    </button>
                `;
                
                paletteValues.appendChild(valueElement);
            });
        });
        
        // Cambio de tabs
        tabButtons.forEach(button => {
            button.addEventListener('click', function() {
                const tab = this.dataset.tab;
                
                // Desactivar todos los tabs
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('active'));
                
                // Activar el tab seleccionado
                this.classList.add('active');
                document.getElementById(`${tab}-tab`).classList.add('active');
            });
        });
        
        // Funciones de utilidad
        function updateColorFromRGB(r, g, b) {
            const hex = rgbToHex(r, g, b);
            const hsl = rgbToHsl(r, g, b);
            const hsv = rgbToHsv(r, g, b);
            
            colorPreview.style.backgroundColor = hex;
            colorPicker.value = hex;
            
            hexValue.textContent = hex;
            hexValue.parentElement.querySelector('.copy-btn').dataset.value = hex;
            
            const rgbString = `rgb(${r}, ${g}, ${b})`;
            rgbValue.textContent = rgbString;
            rgbValue.parentElement.querySelector('.copy-btn').dataset.value = rgbString;
            
            const hslString = `hsl(${Math.round(hsl.h)}, ${Math.round(hsl.s)}%, ${Math.round(hsl.l)}%)`;
            hslValue.textContent = hslString;
            hslValue.parentElement.querySelector('.copy-btn').dataset.value = hslString;
            
            const hsvString = `hsv(${Math.round(hsv.h)}, ${Math.round(hsv.s)}%, ${Math.round(hsv.v)}%)`;
            hsvValue.textContent = hsvString;
            hsvValue.parentElement.querySelector('.copy-btn').dataset.value = hsvString;
        }
        
        function updateSliders(r, g, b) {
            redSlider.value = r;
            greenSlider.value = g;
            blueSlider.value = b;
            redInput.value = r;
            greenInput.value = g;
            blueInput.value = b;
        }
        
        // Conversiones de color
        function rgbToHex(r, g, b) {
            return '#' + ((1 << 24) + (r << 16) + (g << 8) + b).toString(16).slice(1).toUpperCase();
        }
        
        function hexToRgb(hex) {
            hex = hex.replace(/^#/, '');
            
            if (hex.length === 3) {
                hex = hex[0] + hex[0] + hex[1] + hex[1] + hex[2] + hex[2];
            }
            
            const r = parseInt(hex.substring(0, 2), 16);
            const g = parseInt(hex.substring(2, 4), 16);
            const b = parseInt(hex.substring(4, 6), 16);
            
            return { r, g, b };
        }
        
        function rgbToHsl(r, g, b) {
            r /= 255;
            g /= 255;
            b /= 255;
            
            const max = Math.max(r, g, b);
            const min = Math.min(r, g, b);
            let h, s, l = (max + min) / 2;
            
            if (max === min) {
                h = s = 0; // achromatic
            } else {
                const d = max - min;
                s = l > 0.5 ? d / (2 - max - min) : d / (max + min);
                
                switch (max) {
                    case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                    case g: h = (b - r) / d + 2; break;
                    case b: h = (r - g) / d + 4; break;
                }
                
                h /= 6;
            }
            
            return { h: h * 360, s: s * 100, l: l * 100 };
        }
        
        function hslToRgb(hsl) {
            const h = hsl.h / 360;
            const s = hsl.s / 100;
            const l = hsl.l / 100;
            
            let r, g, b;
            
            if (s === 0) {
                r = g = b = l; // achromatic
            } else {
                const hue2rgb = (p, q, t) => {
                    if (t < 0) t += 1;
                    if (t > 1) t -= 1;
                    if (t < 1/6) return p + (q - p) * 6 * t;
                    if (t < 1/2) return q;
                    if (t < 2/3) return p + (q - p) * (2/3 - t) * 6;
                    return p;
                };
                
                const q = l < 0.5 ? l * (1 + s) : l + s - l * s;
                const p = 2 * l - q;
                
                r = hue2rgb(p, q, h + 1/3);
                g = hue2rgb(p, q, h);
                b = hue2rgb(p, q, h - 1/3);
            }
            
            return { r: Math.round(r * 255), g: Math.round(g * 255), b: Math.round(b * 255) };
        }
        
        function rgbToHsv(r, g, b) {
            r /= 255;
            g /= 255;
            b /= 255;
            
            const max = Math.max(r, g, b);
            const min = Math.min(r, g, b);
            let h, s, v = max;
            
            const d = max - min;
            s = max === 0 ? 0 : d / max;
            
            if (max === min) {
                h = 0; // achromatic
            } else {
                switch (max) {
                    case r: h = (g - b) / d + (g < b ? 6 : 0); break;
                    case g: h = (b - r) / d + 2; break;
                    case b: h = (r - g) / d + 4; break;
                }
                
                h /= 6;
            }
            
            return { h: h * 360, s: s * 100, v: v * 100 };
        }
        
        function hsvToRgb(hsv) {
            const h = hsv.h / 360;
            const s = hsv.s / 100;
            const v = hsv.v / 100;
            
            let r, g, b;
            
            const i = Math.floor(h * 6);
            const f = h * 6 - i;
            const p = v * (1 - s);
            const q = v * (1 - f * s);
            const t = v * (1 - (1 - f) * s);
            
            switch (i % 6) {
                case 0: r = v; g = t; b = p; break;
                case 1: r = q; g = v; b = p; break;
                case 2: r = p; g = v; b = t; break;
                case 3: r = p; g = q; b = v; break;
                case 4: r = t; g = p; b = v; break;
                case 5: r = v; g = p; b = q; break;
            }
            
            return { r: Math.round(r * 255), g: Math.round(g * 255), b: Math.round(b * 255) };
        }
        
        // Parsers
        function parseRgb(value) {
            const regex = /rgb$$\s*(\d+)\s*,\s*(\d+)\s*,\s*(\d+)\s*$$/i;
            const match = value.match(regex);
            
            if (!match) return null;
            
            return {
                r: parseInt(match[1]),
                g: parseInt(match[2]),
                b: parseInt(match[3])
            };
        }
        
        function parseHsl(value) {
            const regex = /hsl$$\s*(\d+)\s*,\s*(\d+)%\s*,\s*(\d+)%\s*$$/i;
            const match = value.match(regex);
            
            if (!match) return null;
            
            return {
                h: parseInt(match[1]),
                s: parseInt(match[2]),
                l: parseInt(match[3])
            };
        }
        
        function parseHsv(value) {
            const regex = /hsv$$\s*(\d+)\s*,\s*(\d+)%\s*,\s*(\d+)%\s*$$/i;
            const match = value.match(regex);
            
            if (!match) return null;
            
            return {
                h: parseInt(match[1]),
                s: parseInt(match[2]),
                v: parseInt(match[3])
            };
        }
        
        // Generadores de paletas
        function generateAnalogousPalette(hsl) {
            const palette = [];
            const baseHue = hsl.h;
            
            // Añadir 5 colores análogos (30 grados de separación)
            for (let i = -2; i <= 2; i++) {
                let newHue = (baseHue + i * 30) % 360;
                if (newHue < 0) newHue += 360;
                
                palette.push({
                    h: newHue,
                    s: hsl.s,
                    l: hsl.l
                });
            }
            
            return palette;
        }
        
        function generateMonochromaticPalette(hsl) {
            const palette = [];
            
            // Añadir 5 variaciones de luminosidad
            for (let i = 0; i < 5; i++) {
                palette.push({
                    h: hsl.h,
                    s: hsl.s,
                    l: Math.max(10, Math.min(90, 20 + i * 15))
                });
            }
            
            return palette;
        }
        
        function generateTriadicPalette(hsl) {
            const palette = [];
            const baseHue = hsl.h;
            
            // Añadir color base
            palette.push({
                h: baseHue,
                s: hsl.s,
                l: hsl.l
            });
            
            // Añadir colores triádicos (120 grados de separación)
            palette.push({
                h: (baseHue + 120) % 360,
                s: hsl.s,
                l: hsl.l
            });
            
            palette.push({
                h: (baseHue + 240) % 360,
                s: hsl.s,
                l: hsl.l
            });
            
            // Añadir variaciones
            palette.push({
                h: baseHue,
                s: hsl.s,
                l: Math.max(20, hsl.l - 20)
            });
            
            palette.push({
                h: (baseHue + 120) % 360,
                s: hsl.s,
                l: Math.min(80, hsl.l + 20)
            });
            
            return palette;
        }
        
        function generateComplementaryPalette(hsl) {
            const palette = [];
            const baseHue = hsl.h;
            const complementaryHue = (baseHue + 180) % 360;
            
            // Añadir color base y variaciones
            palette.push({
                h: baseHue,
                s: hsl.s,
                l: hsl.l
            });
            
            palette.push({
                h: baseHue,
                s: Math.max(30, hsl.s - 20),
                l: Math.min(80, hsl.l + 20)
            });
            
            palette.push({
                h: baseHue,
                s: Math.min(100, hsl.s + 20),
                l: Math.max(20, hsl.l - 20)
            });
            
            // Añadir color complementario y variaciones
            palette.push({
                h: complementaryHue,
                s: hsl.s,
                l: hsl.l
            });
            
            palette.push({
                h: complementaryHue,
                s: Math.min(100, hsl.s + 20),
                l: Math.max(20, hsl.l - 20)
            });
            
            return palette;
        }
        
        function generateSplitComplementaryPalette(hsl) {
            const palette = [];
            const baseHue = hsl.h;
            const complement1 = (baseHue + 150) % 360;
            const complement2 = (baseHue + 210) % 360;
            
            // Añadir color base
            palette.push({
                h: baseHue,
                s: hsl.s,
                l: hsl.l
            });
            
            // Añadir variaciones del color base
            palette.push({
                h: baseHue,
                s: Math.max(30, hsl.s - 20),
                l: Math.min(80, hsl.l + 20)
            });
            
            palette.push({
                h: baseHue,
                s: Math.min(100, hsl.s + 20),
                l: Math.max(20, hsl.l - 20)
            });
            
            // Añadir colores complementarios divididos
            palette.push({
                h: complement1,
                s: hsl.s,
                l: hsl.l
            });
            
            palette.push({
                h: complement2,
                s: hsl.s,
                l: hsl.l
            });
            
            return palette;
        }
    });
    
    // Función para copiar al portapapeles
    function copyToClipboard(button) {
        const value = button.dataset.value;
        navigator.clipboard.writeText(value).then(() => {
            // Feedback visual
            const originalHTML = button.innerHTML;
            button.innerHTML = `
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            `;
            setTimeout(() => {
                button.innerHTML = originalHTML;
            }, 2000);
        }).catch(err => {
            console.error('Error al copiar: ', err);
            alert('No se pudo copiar el valor. Inténtelo de nuevo.');
        });
    }
