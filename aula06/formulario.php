<!-- Página de login -->
<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULÁRIO DE LOGIN</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #01093a, #1f0606);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .box {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(15px);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            border: 3px solid rgba(255,255,255,0.1)
        }

        .title{
            color: white;
            display: block;
        }

        .btn{
            background: linear-gradient(135deg, #04365f, rgb(104, 167, 218));
            border: none;
        }
    </style>
 </head>
 <body>
   <div class="box">
        <h1 class="title">FORMULÁRIO DE LOGIN</h1>
        <div class="container">
            <form action="processa.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email </label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                </div>
            
                <input  class="btn btn-primary" type="submit" value="LOGAR">
                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
            </form>
        </div>
   </div> 
    <?php
        if (isset($_GET['erro'])){
            echo"<script>alert('Email ou senha incorretos!')</script>";
        }
    ?>
 </body>
 </html>