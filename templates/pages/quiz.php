<main>
    <div class="quiz">
        <div class="container">
            <?php if (empty($params['winner'])) : ?>
                <h1 class="text-center text-light pt-4">Wybierz jedno zdjęcie</h1>
                <h3 class="text-center text-light mt-2"><?= $params['round'] ?? 0 ?>/16</h3>
                <form method="POST" id="dog-form">
                <div class="row">
                        <div class="col-lg-5">
                            <div class="card shadow-sm m-1 dog-hover">
                                <input type="radio" name="round-dog-img" id="img1"
                                       value="<?= $params['img1']['id'] ?? '' ?>"
                                       class="d-none" onchange="this.form.submit()">
                                <label for="img1">
                                    <img class="dog-image w-100" src="<?= $params['img1']['image'] ?? '' ?>"
                                         width="500"
                                         height="500" alt="Image dog 1">
                                </label>
                                <div class="card-body">
                                    <p class="card-text text-center">Zdjęcie #1</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 p-2">
                            <h1 class="text-center text-light position-relative top-50 start-50 translate-middle">
                                VS</h1>
                        </div>
                        <div class="col-lg-5">
                            <div class="card shadow-sm m-1 mb-5 dog-hover">
                                <input type="radio" name="round-dog-img" id="img2"
                                       value="<?= $params['img2']['id'] ?? '' ?>"
                                       class="d-none" onchange="this.form.submit()">
                                <label for="img2">
                                    <img class="dog-image w-100" src="<?= $params['img2']['image'] ?? '' ?>"
                                         width="500"
                                         height="500" alt="Image dog 2">
                                </label>

                                <div class="card-body">
                                    <p class="card-text text-center">Zdjęcie #2</p>
                                </div>
                            </div>
                        </div>
                </div></form>
            <?php else : ?>
                <h1 class="text-center text-light pt-4">Twój wybór to:</h1>
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-sm m-1 mb-4">
                            <img class="dog-image w-100" src="<?= $params['winner']['image'] ?? '' ?>"
                                 width="500"
                                 height="500" alt="Winner photo!">
                            <div class="card-body">
                                <p class="card-text text-center">Zwyciężca!</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
</main>