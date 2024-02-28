<?php

require_once './main.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="d-flex flex-column justify-content-center align-items-center vh-100">

        <form method="GET">

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="parking-filter" name="parking-filter"
                    <?= $parking_filter ? 'checked' : '' ?>>
                <label class="form-check-label" for="parking-filter">
                    Con Parcheggio
                </label>
            </div>

            <input type="number" class="form-control" value='<?= $vote_filter ?>' min="1" max="5" id="vote-filter" name='vote-filter'>

            <button class='btn btn-primary'>
                cerca
            </button>

        </form>

        <table class="table w-50 border text-center align-middle">
            <thead>
                <tr class="align-middle">
                    <th class="col-2" scope="col">Nome Hotel</th>
                    <th class="col-2" scope="col">Descrizione</th>
                    <th class="col-2" scope="col">Parcheggio</th>
                    <th class="col-2" scope="col">Voto</th>
                    <th class="col-2" scope="col">Distanza dal centro</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <th scope="row">
                            <?= $hotel['name'] ?>
                        </th>
                        <td>
                            <?= $hotel['description'] ?>
                        </td>
                        <td>
                            <?= $hotel['parking'] ? 'si' : 'no' ?>
                        </td>
                        <td>
                            <?= $hotel['vote'] ?>
                        </td>
                        <td>
                            <?= $hotel['distance_to_center'] ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>