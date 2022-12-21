<link rel="stylesheet" href="CSS/style.css"/>
<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $reserva = $_POST["reserva"];
            $data = $_POST["data"];

            $cartaoN = $_POST["cartaoN"];
            $cartaoV = $_POST["cartaoV"];
            $cartaoS = $_POST["cartaoS"];

            $sql = "INSERT INTO pessoa (nome,telefone,reserva,data) VALUES ('{$nome}','{$telefone}','{$reserva}','{$data}')";

            $sql2 = "INSERT INTO cartao (numero,validade,seguranca) VALUES ('{ $cartaoN}','{ $cartaoV}','{ $cartaoS}')";

            $res = $conn->query($sql);
            $res2 = $conn->query($sql2);

            if($res==true && $res2==true) 
            {
                print "<script>alert('Cadastro com Sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else
            {
                print "<script>alert('Não foi possível');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
        
        case 'editar':
            $nome = $_POST["nome"];
            $telefone = $_POST["telefone"];
            $reserva = $_POST["reserva"];
            $data = $_POST["data"];

            $cartaoN = $_POST["cartaoN"];
            $cartaoV = $_POST["cartaoV"];
            $cartaoS = $_POST["cartaoS"];

            $sql = "UPDATE pessoa SET nome='{$nome}',telefone='{$telefone}' ,reserva='{$reserva}', data='{$data}' WHERE id=".$_POST["id"];

            $sql2 = "UPDATE cartao SET numero='{$cartaoN}',validade='{$cartaoV}',seguranca='{$cartaoS}' WHERE id=".$_POST["id"];

            $res = $conn->query($sql);

            $res2 = $conn->query($sql2);

            if($res==true && $res2==true)
            {
                print "<script>alert('Edição bem Sucedida');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else
            {
                print "<script>alert('Não foi possível editar');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;

        case 'excluir':
            $sql = "DELETE FROM pessoa WHERE id=".$_REQUEST["id"];

            $sql2 = "DELETE FROM cartao WHERE id=".$_REQUEST["id"];

            $res = $conn->query($sql);

            $res2 = $conn->query($sql2);

            if($res==true && $res2==true)
            {
                print "<script>alert('Exclusão bem Sucedida');</script>";
                print "<script>location.href='?page=listar';</script>";
            }else
            {
                print "<script>alert('Não foi possível excluir');</script>";
                print "<script>location.href='?page=listar';</script>";
            }
            break;
            break;
         
    }
?>