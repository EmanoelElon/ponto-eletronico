<div class="content">
    <div>
        <div id="relogio"></div>
        <p>data de hoje</p>
        <div class="circle">
            <img src="https://img.icons8.com/?size=100&id=100036&format=png&color=ffffff" alt="">
            <span>REGISTRAR PONTO</span>
        </div>
    </div>
</div>

<script>
    function atualizarRelogio() {
        const agora = new Date();
        let horas = agora.getHours().toString().padStart(2, '0');
        let minutos = agora.getMinutes().toString().padStart(2, '0');
        let segundos = agora.getSeconds().toString().padStart(2, '0');

        document.getElementById('relogio').textContent =
            `${horas}:${minutos}:${segundos}`;
    }

    // Atualiza a cada 1 segundo
    setInterval(atualizarRelogio, 1000);

    // Atualiza imediatamente ao carregar
    atualizarRelogio();
</script>