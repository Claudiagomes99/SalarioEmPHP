<link rel="stylesheet" href="css.css">

<div class="container">
    <h1>Resultado</h1>

    <?php
        $horas = $_POST['horas'];
        $valor = $_POST['valor'];

        $salario = $horas * $valor;

        echo "<div class='resultado'>Salário: R$ $salario</div>";
    ?>

    <br>
    <a href="index.php">
        <button>Voltar</button>
    </a>
</div>