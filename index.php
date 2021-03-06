<?php
$data = date("Y-m-d");
$textTop = "<span class='container-new'>";
$textMiddle = "new-card";
$textNew = "<span class='new'>New!</span>";
$textBottom = "</span>";
$data_expira = "2022-06-28"; //Alterar esse quando publicar algo novo
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style/style.css">
        <link rel="shortcut icon" href="media/ICON.png" type="image/x-icon">
        <title>Cursos Fodas</title>
    </head>

    <script>
        window.onscroll = function() {
            myFunction()
        };

        function myFunction() {
            if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 50) {
                document.getElementById("header").className = "tinyHeader";
            } else {
                document.getElementById("header").className = "header";
            }
        }
    </script>

    <body>
        <header class="header" id="header">
            <div class="logo-header"><img src="media/logo.png"></div>
        </header>

        <div class="container c1">
            <div class="tittle">
                <h3>Cursos de Sites</h3>
            </div>
            <div class="cursos sites">
                <div class="container-cursos">
                    <button class="card alura-imercao-dev-2" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/Alura/', '_blank')">
                    <h2>Imersão Dev_ - 2021-2</h2>
                </button>
                    <button class="card alura-imercao-dev-1" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/Alura2/', '_blank')">
                    <h2>Imersão Dev_ - 2021-1</h2>
                </button>
                    <button class="card alura-imercao-react" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/Alura3/', '_blank')">
                    <h2>Imersão React_</h2>
                </button>

                    <?php
                    if ($data_expira >= $data) echo $textTop;
                ?>

                        <button class="card alura-imercao-dados <?php if ($data_expira >= $data) echo $textMiddle; ?>" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/Alura4/', '_blank')">
                        <?php if ($data_expira >= $data) echo $textNew; ?>
                        <h2>Imersão Dados</h2>
                    </button>

                        <?php
                    if ($data_expira >= $data) echo $textBottom;
                ?>

                            <button class="card hashtag" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/Hashtag/', '_blank')">
                    <h2>Hashtag</h2>
                </button>
                            <button class="card nlw-together" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/NextLevel/', '_blank')">
                    <h2>NLW Together</h2>
                </button>
                            <button class="card kenzie" onclick="window.open('http://sentora.bri.ifsp.edu.br/~bi3006026/Kenzie/', '_blank')">
                    <h2>Kenzie</h2>
                </button>
                </div>
            </div>
        </div>

        <div class="container c2">
            <div class="tittle">
                <h3>Cursos no Youtube</h3>
            </div>
            <div class="cursos youtube">
                <div class="container-cursos">
                    <button class="card cpp" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUjczg1qPHavU1vw1IkBcm40', '_blank')">
                    <h2>C++</h2>
                </button>
                    <button class="card csharp" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUglgKTmgfVFEhWWBQCasNGi', '_blank')">
                    <h2>C#</h2>
                </button>
                    <button class="card python" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUhuVgWfy7keQQAy7t1J35TR', '_blank')">
                    <h2>Python</h2>
                </button>
                    <button class="card html" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUgS5ioRmQVBeGHmKBQEyNXQ', '_blank')">
                    <h2>HTML</h2>
                </button>
                    <button class="card html5" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUgluS7H9gyb9HH7g7F2ZWSQ', '_blank')">
                    <h2>HTML 5</h2>
                </button>
                    <button class="card css" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUi47Bnugpk78nqJN6rYvEnV', '_blank')">
                    <h2>CSS</h2>
                </button>
                    <button class="card js" onclick="window.open('https://www.youtube.com/playlist?list=PLx4x_zx8csUj3IbPQ4_X5jis_SkCol3eC', '_blank')">
                    <h2>JavaScript</h2>
                </button>
                    <button class="card react" onclick="window.open('https://youtube.com/playlist?list=PLXik_5Br-zO9YVs9bxi7zoQlKq59VPTX1', '_blank')">
                    <h2>ReactJS</h2>
                </button>
                    <button class="card mysql" onclick="window.open('https://youtube.com/playlist?list=PLHz_AreHm4dkBs-795Dsgvau_ekxg8g1r', '_blank')">
                    <h2>MySQL</h2>
                </button>
                </div>
            </div>
        </div>

        <div class="container c3">
            <div class="tittle">
                <h3>Cursos no Drive</h3>
            </div>
            <div class="cursos drive">
                <div class="container-cursos">
                    <button class="card curso-web" onclick="window.open('https://drive.google.com/drive/folders/1MnYHo1hnfZ9qSEg7NPdvGtBRKQc5E3ax', '_blank')">
                    <h2>Curso Web Moderno Completo com JavaScript 2020 + Projetos</h2>
                </button>
                    <button class="card web-js" onclick="window.open('https://drive.google.com/drive/u/0/folders/1MnYHo1hnfZ9qSEg7NPdvGtBRKQc5E3ax', '_blank')">
                    <h2>Web - JavaScript</h2>
                </button>
                </div>
            </div>
        </div>

        <div class="container c4">
            <div class="tittle">
                <h3>Cursos no MegA</h3>
            </div>
            <div class="cursos mega">
                <div class="container-cursos">
                    <button class="card marketing" onclick="window.open('https://mega.nz/#F!AsZ3zAAK!aAppQXvBxQLI5r2MtCaNkQ', '_blank')">
                    <h2>Marketing</h2>
                </button>
                </div>
            </div>
        </div>

        <div class="container c5">
            <div class="tittle">
                <h3>Cursos coM "CertificAdo"</h3>
            </div>
            <div class="cursos certificado">
                <div class="container-cursos">
                    <button class="card jornada-dev" onclick="window.open('https://jornadadodev.com.br/cursos', '_blank')">
                    <h2>Jornada do Dev</h2>
                </button>
                    <button class="card fundacao-bradesco" onclick="window.open('https://www.ev.org.br/', '_blank')">
                    <h2>Fundação Bradesco</h2>
                </button>
                    <button class="card senai" onclick="window.open('https://ava1.sp.senai.br/', '_blank')">
                    <h2>Senai</h2>
                </button>
                    <button class="card _42sp" onclick="window.open('https://www.42sp.org.br/', '_blank')">
                    <h2>42 São Paulo</h2>
                </button>
                    <button class="card academia" onclick="window.open('https://info.microsoft.com/LA-AI-WBNR-FY20-12Dec-10-AcademIAMicrosoft-SRDEM10339_LP02OnDemandRegistration-ForminBody.html', '_blank')">
                    <h2>AcademIA</h2>
                </button>
                    <button class="card download-cursos" onclick="window.open('https://downloadcursos.top/category/programacao/', '_blank')">
                    <h2>Download Cursos</h2>
                </button>
                    <button class="card santander" onclick="window.open('https://app.becas-santander.com/pt/program/search?category=TECH', '_blank')">
                    <h2>Santander Becas</h2>
                </button>
                </div>
            </div>
        </div>

        <div class="container c5">
            <div class="tittle">
                <h3>AulAs curtAs</h3>
            </div>
            <div class="cursos rapidos">
                <div class="container-cursos">
                    <button class="card criptografia" onclick="window.open('https://youtu.be/CcU5Kc_FN_4', '_blank')">
                    <h2>Criptografia</h2>
                </button>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="social-media">
                <div class="github">
                    <a target="_blank" href="https:/www.github.com/d1ng0ls"><img src="media/github.png" alt="github" title="D1ng0ls - Criador"></a>
                </div>
                <div class="instagram">
                    <a target="_blank" href="https:/www.instagram.com/d1ng0ls"><img src="media/instagram.png" alt="github" title="D1ng0ls - Criador"></a>
                </div>
                <div class="twitter">
                    <a target="_blank" href="https:/www.twitter.com/d1ng0ls"><img src="media/twitter.png" alt="github" title="D1ng0ls - Criador"></a>
                </div>
            </div>
            <div class="facebook-cursos">
                <div class="facebook">
                    <a target="_blank" href="https://m.facebook.com/story.php?story_fbid=227159402537208&id=100057294486806"><img src="media/facebook.png" alt="facebook" title="Post no Facebook com mais de 200 cursos"></a>
                </div>
            </div>
        </footer>
    </body>

    </html>
