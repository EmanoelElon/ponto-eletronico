<div class="content">
    <div>
        <div id="timer"></div>
        <p>data de hoje</p>
        <div class="circle">
            <img src="https://img.icons8.com/?size=100&id=100036&format=png&color=ffffff" alt="">
            <span>REGISTRAR PONTO</span>
        </div>
    </div>

    <!-- <form action="" method="post">
        <input type="text" name="timer" id="timer">
    </form> -->
</div>

<script>
    function atualizarRelogio() {
        const agora = new Date();
        let horas = agora.getHours().toString().padStart(2, '0');
        let minutos = agora.getMinutes().toString().padStart(2, '0');
        let segundos = agora.getSeconds().toString().padStart(2, '0');

        // document.getElementById('timer').textContent =
        //     `${horas}:${minutos}:${segundos}`;

            document.getElementById('timer').value =
            `${horas}:${minutos}:${segundos}`;
    }

    // Atualiza a cada 1 segundo
    setInterval(atualizarRelogio, 1000);

    // Atualiza imediatamente ao carregar
    atualizarRelogio();
</script>
