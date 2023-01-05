<section class="container-fluid form-container d-flex justify-content-center align-items-center flex-column pt-lg-2">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
            <div class="col-12 col-xl-8 glass-effect p-3 p-lg-4">
                <h4>Rejestracja</h4>
                <form method="POST">
                    <div class="text-danger"></div>
                    <div class="mb-3 form-group">
                        <label for="userName" class="form-label">Nazwa użytkownika</label>
                        <input type="text" name="userName" class="form-control"
                               value="<?= $params['userName'] ?? '' ?>"
                               placeholder="Podaj nazwę użytkownika">

                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputEmail1" class="form-label">Podaj adres email</label>
                        <input type="text" class="form-control" name="email" value="<?= $params['email'] ?? '' ?>"
                               placeholder="Podaj email">

                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputPassword1" class="form-label">Hasło</label>
                        <input type="password" name="createPassword" class="form-control" id="exampleInputPassword1"
                               value="" placeholder="Podaj hasło">
                    </div>
                    <div class="mb-3 form-group">
                        <label for="exampleInputPassword1" class="form-label">Powtórz hasło</label>
                        <input type="password" name="confirmPassword" class="form-control"
                               id="exampleInputPassword1" value=""
                               placeholder="Potwierdź hasło">
                    </div>
                    <!--                        <div class="mb-4 form-group">-->
                    <!--                            <label for="avatar" class="form-label">Zdjęcie profilowe</label>-->
                    <!--                            <input type="file" name="avatar" id="avatar">-->
                    <!--                        </div>-->

                    <div class="justify-content-center form-group">
                        <button type="submit" class="form-outline col-12 btn btn-primary">Zarejestruj się</button>
                        <div class="col-12 text-center mt-1">
                            <small>Masz już konto? <a href="/login">Zaloguj się</a></small>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row w-100 d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-5 mt-1">
                <img src="../images/dog-background.png" class="w-100" alt="Dog login form">
            </div>
        </div>
</section>