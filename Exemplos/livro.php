<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
        <?php
            $nome_livro = $_POST["nome"];
            $autor_livro = $_POST["autor"];
            $idioma_livro = $_POST["idioma"];
            //var_dump($_POST["nome"]);
            echo "Nome: $nome_livro ";
            echo "Autor: $autor_livro ";
            echo "Idioma: $idioma_livro ";
        ?>
    </body>
</html>