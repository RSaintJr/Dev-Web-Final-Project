<link rel="stylesheet" href="CSS/style.css"/>
<script src="script/script.js"></script>
<h1>Nova Reserva</h1>
<br>
<body>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Nome</label>
        <input type="text" name="nome" id="nome" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Telefone</label>
        <input type="number" name="telefone" id="telefone" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Reserva</label>
        <br><br>
        <input type="radio" name="reserva" id="reserva" value="mesa para dois" required>Mesa para Dois
        <br>
        <input type="radio" name="reserva" id="reserva" value="mesa para quatro" required>Mesa para Quatro
        <br>
        <input type="radio" name="reserva" id="reserva" value="mesa para seis" required>Mesa para Seis
        <br>
        <input type="radio" name="reserva" id="reserva" value="mesa para oito" required>Mesa para Oito
    </div>
    <p>Informação do Cartão de Crédito</p>
    <div class="mb-3">
        <label>Número do Cartão</label>
        <input type="number" name="numero" id="numero" placeholder="0000 0000 0000 0000" class="form-control" required>
    </div>
    <br>
    <div class="mb-3">
        <label>Validade do Cartão</label>
        <input type="date" name="validade" id="validade" class="form-control" required>
    </div>
    <br>
    <div class="mb-3">
        <label>Código de Segurança</label>
        <input type="number" name="seguranca" id="seguranca" class="form-control" placeholder="CVC" required >
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
</body>