<link rel="stylesheet" href="CSS/style.css"/>
<script src="script/script.js"></script>
<h1>Editar Reserva</h1>
<?php 
    $sql = "SELECT * FROM pessoa WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<br>
<br>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Reserva</label>
        <br><br>
        <input type="radio" name="reserva" value="mesa para dois" required>Mesa para Dois
        <br>
        <input type="radio" name="reserva" value="mesa para quatro" required>Mesa para Quatro
        <br>
        <input type="radio" name="reserva" value="mesa para seis" required>Mesa para Seis
        <br>
        <input type="radio" name="reserva" value="mesa para oito" required>Mesa para Oito
    </div>
    <p>Informação do Cartão de Crédito</p>
            <div class="mb-3">
                <label>Número do Cartão</label>
                <input type="number" name="numero" id="cartaoN" placeholder="0000 0000 0000 0000" class="form-control" required>
            </div>
            <br>
            <div class="mb-3">
                <label>Validade do Cartão</label>
                <input type="date" name="validade" id="cartaoV" class="form-control" required>
            </div>
            <br>
            <div class="mb-3">
                <label>Código de Segurança</label>
                <input type="number" name="seguranca" id="cartaoS" class="form-control" required placeholder="CVC">
            </div>
            <br>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data" class="form-control" required>
    </div>
    <div class="mb-3">
    <button type="submit" name="submit" id="submit" class="btn btn-primary">Enviar</button>       
    </div>
</form>