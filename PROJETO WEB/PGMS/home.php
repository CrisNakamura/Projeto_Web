<html>

<head>
    <title>Cardiologia - Clínica Saúde </title>
    <link rel="stylesheet" href="main.css">
</head>

<body>

    <!----- header----->
    <header id="page-header">
        <span id="home"></span>
        <section class="primary">
            <a href="#home"><img class="logo_header" src='Logo.png' alt='logo'></a>
            <div class="list-menu">
                　<nav class="list">
                    <li><a class="header" href="#home">Home</a></li>
                    <li><a class="header" href="../PGMS/exames.php">Tipos de Exame</a></li>
                    <li><a class="header" href="#como_funciona">Como funciona</a></li>
                    <li><a class="header" href="#agende_uma_consulta">Agende uma Consulta</a></li>
                    <li><a class="header" href="../LOGINSYSTEM/login.php"> <img src='icon-user.png' alt='user' width='20' height='20'> Login</a></li>
                    <li><a class="header" href="../LOGINSYSTEM/register.php">Registrar-se</a></li>
                </nav>
            </div>
        </section>
    </header>
    <!----- header----->

    <!----- main Tipos de exame ----->
    <main>
        <img class="image_medico" src="Medico1.jpg" alt='medico'></a>
        <div class="colorbox1"></div>
        <p class="txt_colorbox1"><b>Consultas e Exames</b><br><b>com preços acessíveis,</b></p>
        <p class="txt_colorbox1_2">no dia em que você precisa<br>e sem mensalidade!</p>

        <div    >
            <p id="tipos_de_exame" class="titulo">Tipos de Exame</p>
            <div class="colorbox2">
                <image class="icon" src="icon_hospital-bed.png" alt="icon">
                    <p class="exame">Eletrocardiograma</p>
                    <p class="desc">É um exame simples e consiste em um estudo momentâneo do coração por ativação elétrica.
                        <br><br>É um teste completamente indolor e rápido e não requer nenhuma preparação especial.
                    </p>
                </image>
            </div>
            <div class="colorbox2_1">
                <image class="icon" src="icon_prancheta.png" alt="icon">
                    <p class="exame">Teste Ergométrico</p>
                    <p class="desc">
                        O teste ergométrico permite identificar problemas cardíacos, analisando como o coração do paciente reage ao esforço físico.
                    </p>
            </div>
            <div class="colorbox2_2">
                <image class="icon" src="icon_gotas.png" alt="icon">
                    <p class="exame">Ecodoppler</p>
                    <p class="desc">
                        É um dos principais exames de ultrassonografia com doppler para avaliação do funcionamento de estruturas anatômicas na área do coração.
                        <br><br>Completo e indolor, o teste fornece apoio ao diagnóstico de anomalias e doenças cardiovasculares.
                    </p>
                    <br><br>
                    <a class="link_exame" href="../PGMS/exames.php">Todos os Exames ></a>
            </div>
        </div>
        <div>
            <p id="como_funciona" class="titulo">Como funciona</p>
            <div class="colorbox3">
                <image class="story" src="image_story.png">
                    <ul class="textbox3">
                        <li class="func">Fale conosco através do site ou pelo<br>contato telefônico;</li>
                        <li class="func">Agende sua consulta na data e horário<br>desejado;</li>
                        <li class="func">Faça a consulta com seu médico na <br>clínica ou por chamada de vídeo;</li>
                        <li class="func">Agende seus exames no pós-consulta.</li>
                        <h1 class="func">Viva uma saúde mais inteligente!</h1>
                    </ul>
            </div>
            <div class="flexbox">
                <image class="icon2" src="icon_baloon.png">
                    <image class="icon2" src="icon_calendar.png">
                        <image class="icon2" src="icon_estetoscopio.png">
                            <image class="icon2" src="icon_note.png">
            </div>
        </div>

        <div>
            <p id="agende_uma_consulta" class="agende_uma_consulta">Agende uma Consulta</p>
            <div class="colorbox4">
                <ol class="textbox4">
                    <li class="func2">Crie uma conta ou faça Login;</li>
                    <li class="func2">Selecionar consulta ou exame;</li>
                    <li class="func2">Escolha a data e horário;</li>
                    <li class="func2">Finalizar o agendamento.</li>
                    <h1 class="func2">Se preferir, entre em contato<br>pelo WhatsApp: (11) 3698-5214</h1>
                </ol>
            </div>
            <form action=../LOGINSYSTEM/valida.php method="post">
                <link rel="stylesheet" href="login.css">
                <div class="form_login">
                    <div class="card-top">
                        <h2>Login</h2>
                    </div>
                    <div class="card-group">
                        <label>Usuário</label><br>
                        <input type="text" name="txtusu" placeholder="Digite seu usuário">
                    </div><br><br>
                    <div class="card-group">
                        <label>Senha</label><br>
                        <input type="password" name="txtsenha" placeholder="Digite sua senha">
                    </div><br><br><br><br>
                    <div class="card-group">
                        <button type="submit">Login</button> <br><br>
                    </div>


            </form>
            <form action=../LOGINSYSTEM/register.php>
                <div class="card-group">
                <button class="float-left submit-button" >Cadastrar</button>
                </div>
            </form>
        </div>

        </div>

    </main>
    <!----- main ----->

    <!-----footer----->
    <footer id="footer">

        <section class="primary">
            <a href="#home"><img class="logo_footer" src="Logo.png" alt='logo'></a>
            <article class="art_footer">
                <h>MENU</h>
                <br><br>
                <p><a class="footer" href="#tipos_de_exame">Tipos de Exame</a></p>
                <p><a class="footer" href="#como_funciona">Como funciona</a></p>
                <p><a class="footer" href="#agende_uma_consulta">Agende uma Consulta</a></p>
            </article>

            <article class="art_footer">
                <h>ENDEREÇO</h>
                <br><br>
                <p class="art">Rua Santo Antônio, 16 - Conj. 260</p>
                <p class="art">Bairro Jardins - São Paulo - SP</p>
                <p class="art">CEP 16540-150</p>
                <p class="art">Tel: (11) 3698-5214</p>
                <p class="art">cardiologia@clinicasaude.com</p>
            </article>

            <article class="art_footer">
                <h>HORÁRIO</h>
                <br><br>
                <p class="art">Segunda - Sábado: 07:00 - 19:30</p>
                <p class="art">Domingos e feriados: 07:00 - 16:30</p>
            </article>
        </section>

        <section class="secondary">
            <h>Para receber nossas mais recentes dicas de saúde, assine abaixo:</h>
            <br>
            <form action="#" method="post"><br>
                <label for="form-newsletter__label">Email: </label>
                <input id="email-newsletter" name="email-newsletter" type="email">
                <button type="submit">Enviar</button>
            </form>
        </section>
    </footer>

</body>

</html>