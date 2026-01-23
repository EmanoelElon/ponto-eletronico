<div class="h-full flex flex-col items-center justify-center">
    <?php if (!auth()) { ?>
        <div class="w-full px-10 py-5 flex flex-row justify-center gap-5 md:justify-end">
            <a class="bg-[#359EFF] px-5 py-2 text-white rounded-md" href="/login">Log In</a>
            <a class="bg-[#359EFF] px-5 py-2 text-white rounded-md" href="/register">Register</a>
        </div>
    <?php } ?>
    <form class="h-full" action="" method="post">
        <div class="hourDate">
            <input class="hour" type="text" name="timer" id="timer" readonly>
            <label class="text-center" id="currentDate"></label>
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