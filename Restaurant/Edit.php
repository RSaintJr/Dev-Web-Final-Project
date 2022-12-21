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
    <input type="hidden" name="id" value="<?php print $row->id; ?>"> 
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
    <div >
            <p>Informação do Cartão de Crédito</p>
                <label>Número do Cartão</label>
                <input type="number" name="cartaoN" placeholder="0000 0000 0000 0000" required>
                <br>
                <br>
                <label>Validade do Cartão</label>
                <input type="date" name="cartaoV" required>
                <br>
                <br>
                <label>Código de Segurança</label>
                <input type="number" name="cartaoS" required placeholder="CVC">
                <br>
                <br>
        </div>
    <div class="mb-3">
        <label>Data</label>
        <input type="date" name="data" class="form-control" required>
    </div>
    <div class="mb-3">
    <button type="submit" name="submit" id="submit" class="btn btn-primary">Enviar</button>       
    </div>
</form>