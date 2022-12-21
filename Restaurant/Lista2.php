<link rel="stylesheet" href="CSS/style.css"/>
<h1>Lista de Cartoes</h1>
</style>
<br>
<br>
<?php 
    $sql = "SELECT * FROM cartao";

    $res = $conn ->query($sql);

    $qtd = $res ->num_rows;

    if($qtd > 0 ){
        print "<table class='table table-hover table-striped table-bordered'>";
        print "<tr>";
        print "<th>#</th>";
        print "<th>Numero</th>";
        print "<th>Validade</th>";
        print "<th>Seguranca</th>";
        print "<th>Ações</th>";
        print "</tr>";
        while($row = $res -> fetch_object()){
            print "<tr>";
            print "<td>" .$row -> id. "</td>";
            print "<td>" .$row -> numero. "</td>";
            print "<td>" .$row -> validade. "</td>";
            print "<td>" .$row -> seguranca. "</td>";
            print "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->id."';\" class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=salvar&acao=excluir&id=".$row->id."';}else{false;}\" class='btn btn-danger'>Excluir</button>
            </td>";
            print "</tr>";
        }
        print "</table>";
    }else{
        print "<p class='alert
        alert-danger'>Não encontrou resultados !</p>";
    }
?>