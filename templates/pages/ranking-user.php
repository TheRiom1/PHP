<main>
    <div class="ranking">
        <div class="container pb-3">
            <h1 class="text-center text-light py-4">Twój ranking zdjęć psów</h1>
            <?php foreach ($params['rankingData'] ?? [] as $key => $value): ?>
                <div class="row my-2 glass-effect">
                    <div class="col-lg-1 text-center my-auto">
                        <h1 class="text-light">
                            <?= $key + 1 ."." ?>
                        </h1>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-center align-items-center">
                        <div class="ranking-img dog-image m-3" style="background-image: url(<?="{$value['image']}" ?>);">
                        </div>
                    </div>
                    <div class="col-lg-6 p-2 my-auto">
                    <h4 class="text-light mx-2">Procent wygranych:</h4>
                        <div class="progress m-2">
                            <div class="progress-bar bg-success" role="progressbar"
                                style="width: <?="{$value['precent_winning']}" ?>%;"
                                aria-valuenow="<?="{$value['precent_winning']}" ?>" aria-valuemin="0" aria-valuemax="100">
                                <?="{$value['precent_winning']}%" ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1 d-flex justify-content-center align-items-center">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
</main>