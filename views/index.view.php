<div class="content">
    <form action="" method="post">
        <div class="hourDate">
            <input class="hour" type="text" name="timer" id="timer" readonly>
            <label class="" id="currentDate"></label>
        </div>
        <input class="circle" type="submit" value="REGISTRAR PONTO">
    </form>
</div>

<script>
    function atualizarRelogio() {
        const agora = new Date();
        let horas = agora.getHours().toString().padStart(2, '0');
        let minutos = agora.getMinutes().toString().padStart(2, '0');
        let segundos = agora.getSeconds().toString().padStart(2, '0');

        document.getElementById('timer').textContent =
            `${horas}:${minutos}:${segundos}`;

        document.getElementById('timer').value = `${horas}:${minutos}:${segundos}`;
    }

    function currentDate() {
        months = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"];
        days = ["domingo", "segunda-Feira", "terça-feira", "quarta-feira", "quinta-feira", "sexta-feira", "sabado"];


        const today = new Date();

        document.getElementById('currentDate').textContent =
            `${days[today.getDay()]}, ${today.getDate()} de ${months[today.getMonth()]}`;
    }

    // Atualiza a cada 1 segundo
    setInterval(atualizarRelogio, 1000);

    // Atualiza imediatamente ao carregar
    atualizarRelogio();
    currentDate();
</script>
