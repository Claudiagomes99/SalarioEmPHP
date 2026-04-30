<link rel="stylesheet" href="css.css">

<div class="container">
    <h1>Calcular Salário</h1>

    <form method="POST" action="CalcularSalario.php">
        <input type="number" name="horas" placeholder="Horas trabalhadas" required>
        <input type="number" name="valor" placeholder="Valor por hora" required>

        <button type="submit">Calcular</button>
    </form>
</div>