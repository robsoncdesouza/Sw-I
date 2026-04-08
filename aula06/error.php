<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Error Page</title>

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            body {
                height: 100vh;
                background: linear-gradient(135deg, #420202, #1f0606);
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
            }

            .box {
                background: linear-gradient(135deg, rgba(65, 43, 43, 0), rgba(255, 255, 255, 0.1));
                backdrop-filter: blur(15px);
                padding: 40px;
                border-radius: 20px;
                text-align: center;
                box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            }

            .typewriter {
                font-size: 1.5rem;
                border-right: 2px solid white;
                white-space: nowrap;
                overflow: hidden;
                width: 0;
                animation: typing 4s steps(40, end) forwards, blink 0.7s infinite;
            }

            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }

            @keyframes blink {
                50% { border-color: transparent }
            }

            .btn {
                background:  linear-gradient(135deg, rgb(240, 50, 50), rgb(63, 8, 8));
                border: none
            }
        </style>
    </head>
    <body>

        <div class="box">
            <h2 class="mb-4">❌ Erro de Login!</h2>

            <div class="typewriter">
                <p>A senha ou e-mail estão incorretos. Tente novamente!</p>
            </div>
            <a href = "index.html" class="btn btn-primary">Voltar</a>
        </div>

    </body>
</html>