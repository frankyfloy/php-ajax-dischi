<?php
    include __DIR__.'/../database/dati.php';
?>
<main>
    <div class="container">
        <nav >
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text">Genere</label>
                </div>
                <select class="selected">
                    <option value="All">All</option>
                </select>
            </div>
        </nav>

        <ol id="cardList" class="scroll">
            <?php
            foreach ($database as $disk => $value_by_disk) {?>
                <li>
                    <div class="card animate__animated animate__zoomIn animate__slow">
                        <img src="<? echo $database[$disk]['poster'] ?>" class='card-img-top'>
                      <div class="card-body">
                        <h4 class="card-title"><? echo $database[$disk]['title'] ?></h4>
                        <p class="card-text"><small><? echo $database[$disk]['author'] ?></small></p>
                        <p class="card-text"><small><? echo $database[$disk]['year'] ?></small></p>
                      </div>
                    </div>
                </li>
            <?}?>
        </ol>
    </div>
</main>
