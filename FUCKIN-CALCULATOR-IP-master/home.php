<html>
<head>

    <style>
        #botao{
            color: black;
            background-color: cornflowerblue;
            border-radius: 50px;
            height: 30px;
            width: 100px;
            border-color: black;
        }
        #ip{

            border-color: cornflowerblue;
            border-radius: 50px;
            height: 30px;
            width: 200px;
        }
        #mask{
            border-color: cornflowerblue;
            border-radius: 50px;
            height: 30px;
            width: 200px;
        }
        #tudo{

            position: relative;
            background-color: lavender;

        }
        #rodape{
            background-color: cornflowerblue;
        }


    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#botao").click(function () {
                $.get("functions.php", {
                    ip: $("#ip").val(),
                    mask: $("#mask").val()
                }
                ,function (dados) {
                    $("#calculo").html(dados);
                });


            });
        });
    </script>
</head>
<body>
<div id="tudo">

    <center><h1 >Calculadora IP</h1></center>
<div >
<center><form method="get" action="functions.php">
    <input type="text" id="ip" name="ip" placeholder="Digite o IP"><br><br>
    <input type="text" id="mask" name="mask" placeholder="Digite a máscara"><br><br>
    <button id="botao">Calcular</button>
</form></center>

</div>
<div id="principal">

</div>
    <center><div id="rodape">
<p>Desenvolvedores: Athirson A. dos Santos, Carlos E. Rosa e Gabriel Sokacheski</p>
<p>Turma: 3info2</p>

    </div></center>
</div>
</body>

</html>

