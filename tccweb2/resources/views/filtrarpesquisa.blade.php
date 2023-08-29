<!DOCTYPE html>
<html>
    <head>
    <link href="{{('assets/css/stylefiltrar.css')}}" rel="stylesheet">
    <meta charset="UTF-8">
    @vite(['resources/js/pesquisa.js'])
    <title>Pesquisar</title> 
    </head>

<div class="header">
        <nav id="navbar">  
            <ul>
                <img src="{{'assets/img_tcc/logo.svg'}}" alt="img" class="imglogo">
                <div class="navButtom">
                    <li><a class="links" href="index">Seguindo</a></li>
                    <li><a class="links" href="sobre">Explorar</a></li>
                    <li><a class="links" href="pesquisar.html">Pesquisar</a></li>
                </div>

                <div class="navIcon">
                    <img src="{{'assets/img_tcc/perfil.png'}}" alt="img" class="imgperfil">
                    <img src="{{'assets/img_tcc/confg.png'}}" alt="img" class="imgconfg">
                </div>
            </ul>
        </nav>
    </div>

<body class="body">

<div class="espacinho">

    <div class="separador">
        <div class="search-container">
            <input type="text" id="searchInput" placeholder="Pesquisar...">
            <button id="searchButton"><img class="lupa" src="{{'assets/img_tcc/lupa.svg'}}"></img></button>
        </div>

        <div class="filtrar">
            <div class="filtro"><img class="filter" src="{{'assets/img_tcc/filtersearch.svg'}}"></img></div>
            <div class="textfiltro">Filtrar Pesquisa</div>
        </div>
    </div>

<div>
            <div class="center">
                <div class="quad">
                <form>
                    <div class="status">
                        <label for="status">Status de Projeto:</label>
                        <select id="status" name="status">
                            <option value="em-andamento">Em Andamento</option>
                            <option value="concluido">Concluído</option>
                        </select>
</div>
                        
                        <div class="Porcentagem"><p>Porcentagem</p>
                            <label for="porcentagem">Maior que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                            <label for="porcentagem">Menor que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                        </div>
                        
                        <div class="datacon"><p>Data de Conclusão:</p>
                            <label for="porcentagem">Maior que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                            <label for="porcentagem">Menor que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                        </div>
                        
                        <div class="datatt"><p>Data de Atualização:</p>
                            <label for="porcentagem">Maior que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                            <label for="porcentagem">Menor que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                        </div>
                        
                        <div class="dataprev"><p>Previsão de Conclusão:</p>
                            <label for="porcentagem">Maior que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                            <label for="porcentagem">Menor que:</label>
                            <input type="number" id="porcentagem" name="porcentagem" min="0" max="100">
                        </div>

                        <div class="botoesform">
                        <input class="buttons" type="reset" value="LIMPAR FILTROS">
                        <input class="buttons" type="submit" value="CANCELAR" formnovalidate>
                        <input class="buttons" type="submit" value="APLICAR FILTROS">
                        </div>
                </form>
                </div>
                </div>
        <div>

       

    <div class="footer">
                <img src="{{'assets/img_tcc/logoSensei.svg'}}" alt="img" class="imgfooter">

                <div class="botoesfooter">
                <a href="index.blade.php">Home</a>
                <a href="sobre">Sobre nós</a>
                <a href="teladownload">Download</a>
                <p class="emailequipe">sensei.system7@gmail.com</p>
        </div>
  
</body>

</html>
