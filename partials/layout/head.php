<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="icon" type="image/x-icon" href="<?= IMG_PATH ?>icono.png">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">


    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'space': ['"Space Grotesk"', 'sans-serif'],
                    },
                    colors: {
                        'aloia-orange': '#FD6144',
                        'aloia-red': '#FD3244',
                        'aloia-purple': '#AE3A8D',
                        'aloia-dark': '#161212',
                        'aloia-light-gray': '#CCB6B6',
                        'aloia-white': '#F9F9F9',
                    },
                    backgroundImage: {
                        'gradient-aloia': 'linear-gradient(90deg, #FD6144 0%, #FD3244 50%, #AE3A8D 100%)',
                    },
                    boxShadow: {
                        'parallel': '5px 5px 10px rgba(0, 0, 0, 0.3)',
                    }
                }
            }
        }
    </script>

    <!-- QRcode -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>


    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?= CSS_PATH ?>tailwind-utilities.css">
    <link rel="stylesheet" href="<?= CSS_PATH ?>chatbot.css">

    <!-- LinkedIn Insight Tag -->
    <script type="text/javascript">
        _linkedin_partner_id = "2441842";
        window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
        window._linkedin_data_partner_ids.push(_linkedin_partner_id);
    </script>

    <script type="text/javascript">
        (function (l) {
            if (!l) {
                window.lintrk = function (a, b) { window.lintrk.q.push([a, b]) };
                window.lintrk.q = []
            }
            var s = document.getElementsByTagName("script")[0];
            var b = document.createElement("script");
            b.type = "text/javascript"; b.async = true;
            b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
            s.parentNode.insertBefore(b, s);
        })(window.lintrk);
    </script>

    <noscript>
        <img height="1" width="1" style="display:none;" alt=""
            src="https://px.ads.linkedin.com/collect/?pid=2441842&fmt=gif" />
    </noscript>
    <!-- End LinkedIn Insight Tag -->
</head>

<body class="font-space bg-aloia-white text-aloia-dark">