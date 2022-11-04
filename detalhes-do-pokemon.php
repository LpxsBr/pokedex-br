<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="details.css">
    <title>Detalhes - Pokedex BR</title>
    <script>
        <?php

        require 'api/pokemon.php';

        $pok_id = isset($_GET['pok_id']) ? $_GET['pok_id'] : '';
        $i = intval($pok_id);

        $id = $pok[$i]->id;
        $name = $pok[$i]->name->english;
        $atk = $pok[$i]->base->Attack;
        $def = $pok[$i]->base->Defense;
        $golp = $mov[$i]->ename;

        $image_id = intval($id);

        $zero = '';
        if ($id < 10) {
            $zero = '00';
        } elseif ($id < 100) {
            $zero = '0';
        }

        $image = strval('https://github.com/fanzeyi/pokemon.json/blob/master/images/' . $zero . $image_id . '.png?raw=true');

        ?>
    </script>
</head>

<body>
    <header class="header">
        <h3 style="color: whitesmoke; text-align:center;">My Pokedex</h3>
    </header>
    <main class="main">
        <section class="avatar">
            <img src="<?= $image ?>" class="poke-img" alt="pokemon-image">
        </section>
        <section class="information">
            <div class="info">
                <div class="data">
                    <h3> Nome: </h3> <?= $name ?>
                </div>
                <div class="data">
                    <h3> Atk: </h3> <?= $atk ?>
                </div>
                <div class="data">
                    <h3> Def: </h3> <?= $def ?>
                </div>
                <div class="data">
                    <h3> Golpe: </h3> <?= $golp ?>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer">
        aqui é o footer
    </footer>

</body>

</html>