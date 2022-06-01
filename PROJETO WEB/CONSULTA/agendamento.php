<?php session_start(); ?>

<html>

<head>
    <title>Exames e Consultas </title>
    <link rel="stylesheet" href="../CONSULTA/style_agendamento.css">
</head>

<body>

    <!----- header----->
    <header id="page-header">
        <span id="home"></span>
        <section class="primary">
            <a href="../PGMS/home.php"><img class="logo_header" src='../PGMS/IMG/Logo.png' alt='logo'></a>
            <div class="list-menu">
                　<nav class="list">
                    <li><a class="header" href="../PGMS/home.php">Home</a></li>
                    <li><a class="header" href="../PGMS/exames.php">Tipos de Exame</a></li>
                    <li><a class="header" href="../PGMS/home.php#como_funciona">Como funciona</a></li>
                    <li><a class="header" href="../PGMS/home.php#agende_uma_consulta">Agende uma Consulta</a></li>
                    <div class="dropdown">
                        <li><a class="header" href="../LOGINSYSTEM/login.php"> <img src='../PGMS/IMG/icon-user.png' alt='user' width='20' height='20'> <?php echo $_SESSION['usuario']; ?> </a></li>
                        <div class="dropdown-content">
                            <a class="header" href="../LOGINSYSTEM/logout.php"><img src='../PGMS/IMG/icon_note.png' alt='user' width='20' height='20'> Consulta</a><br>
                            <a class="header" href="../LOGINSYSTEM/logout.php"><img src='../PGMS/IMG/icon_logout.png' alt='user' width='20' height='20'> Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </section>

    </header>
    <!----- header----->

    <!----- main Tipos de exame ----->
    <main>

        <img class="story" src='../PGMS/IMG/Image_story.png' alt='story'>
        <form action="agendamentoOK.php" method="POST">
            <div class="form_agendamento">
                <div class="card-top">
                    <h2>Agendamento</h2>
                </div>
                <div class="card-group">
                    <label>Nome do paciente</label>
                    <input type="text" name="nome" placeholder="Digite seu nome do paciente.">
                </div>
                <div class="card-group">
                    <label>Data</label>
                    <input type="date" name="data" placeholder="Digite a data.">
                </div>
                <div class="card-group">
                    <label>Horário</label>
                    <input type="time" name="horario">
                </div>
                <div class="card-group">
                    <button type="submit">Agendar</button>
                </div>
        </form>


    </main>
    <!----- main ----->

    <!-----footer----->
    <footer id="footer">

        <section class="primary">
            <a href="../PGMS/home.php"><img class="logo_footer" src="../PGMS/IMG/Logo.png" alt='logo'></a>
            <article class="art_footer">
                <h>MENU</h>
                <br><br>
                <p><a class="footer" href="../PGMS/exames.php">Tipos de Exame</a></p>
                <p><a class="footer" href="../PGMS/home.php">Como funciona</a></p>
                <p><a class="footer" href="../PGMS/home.php">Agende uma Consulta</a></p>
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