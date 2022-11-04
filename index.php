<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>MyPokedex</title>

    <script>
        <?php
        require 'api/pokemon.php';
        ?>
    </script>
</head>

<body>
    <header class="header">
        <h3 style="color: whitesmoke; text-align:center;">Pokedex Br</h3>
    </header>
    <div class="content">
        <div class="produtos">
            <?php for ($i = 0; $i < intval(count($pok)); $i++) : ?>

                <?php
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

                <div class="prod">
                    <div>
                        <img style="width: 50px; height: 50px;" src=<?= $image ?>>
                    </div>
                    <div>
                        <h2>
                            <?= $name ?>
                        </h2>
                    </div>
                    <div>
                        <form action="detalhes-do-pokemon.php" method="GET">
                            <input class="pok" type="text" name="pok_id" value=<?= $i ?>>
                            <button>Informações</button>
                        </form>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</body>

</html>