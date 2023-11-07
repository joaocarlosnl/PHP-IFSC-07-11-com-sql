<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Banco de dados com PHP </title> 
  <link rel="stylesheet" href="formata-banco.css">
</head> 

<body>
  <h1> Fundamentos de Banco de Dados em aplicações web - listaL5 - exercício 7 </h1>

  <form action="exerc7.php" method="post">
   <fieldset>
    <legend> Dados cadastrais dos cursos </legend>

    <label class="alinha"> Nome do curso: </label>
    <input type="text" name="nome-curso" > <br>

    <label class="alinha"> Código do curso: </label>
    <input type="text" name="codigo"> <br>

    <button name="cadastrar-curso"> Cadastrar curso </button>
   </fieldset>

   <fieldset>
    <legend> Dados cadastrais dos alunos </legend>

    <label class="alinha"> Nome do aluno: </label>
    <input type="text" name="nome-aluno"> <br>

    <label class="alinha"> Matrícula do aluno: </label>
    <input type="text" name="matricula-aluno"> <br>

    <label class="alinha"> Numero de creditos semanais: </label>
    <input type="number" name="numero-creditos"> <br>

    <label class="alinha"> Código do curso: </label>
    <input type="text" name="codigo-curso"> <br>

    <button name="cadastrar-aluno"> Cadastrar aluno </button>
   </fieldset>

   <fieldset>
    <legend> Pesquisa por curso (relação de alunos) </legend>
    <label class="alinha"> Nome do Curso: </label>
    <input type="text" name="pesquisa-nome-curso"> <br>
    <button name="listar-alunos"> Mostrar lista de alunos </button>
   </fieldset>   
  </form> 
  
  <?php
   require "./includes/dados-conexao.inc.php";
   require "./includes/conectar.inc.php";
   require "./includes/criar-banco.inc.php";
   require "./includes/abrir-banco.inc.php";
   require "./includes/definir-charset.inc.php";
   require "./includes/criar-tabela.inc.php";  

   if(isset($_POST['cadastrar-aluno']))
    {
    require "./includes/cadastrar-aluno.inc.php";
    }

   if(isset($_POST['cadastrar-curso']))
    {
    require "./includes/cadastrar-curso.inc.php";
    }

   if(isset($_POST['listar-alunos']))
    {
    require "./includes/listar-alunos.inc.php";
    }
   require "./includes/desconectar.inc.php";
  ?>
</body> 
</html> 