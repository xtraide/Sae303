<div class="container">
    <form>
        <div class="form-group">
            <label>Civilité</label><br>
            <div class="form-check form-check-inline">
                <?= $form->input('checkbox', "", ['class' => 'form-control w-100', 'id' => 'email']); ?>
                <label class="form-check-label" for="monsieur">Monsieur</label>
            </div>
            <div class="form-check form-check-inline">
                <?= $form->input('checkbox', "", ['class' => 'form-control w-100', 'id' => 'email']); ?>
                <label class="form-check-label" for="madame">Madame</label>
            </div>
        </div>
        <div class="form-group">

            <?= $form->input('text', "Nom", ['class' => 'btn btn-primary d-flex align-items-center m-auto ', 'value' => 'Se connecter']); ?>
        </div>
        <div class="form-group">

            <?= $form->input('text', "Prénom", ['class' => 'btn btn-primary d-flex align-items-center m-auto ', 'value' => 'Se connecter']); ?>
        </div>
        <div class="form-group">

            <?= $form->input('email', "Adresse email", ['class' => 'form-control w-100', 'id' => 'email']); ?>
        </div>
        <div class="form-group">

            <?= $form->input('date', "", ['class' => 'btn btn-primary d-flex align-items-center m-auto ', 'value' => 'Se connecter']); ?>
        </div>
    </form>
</div>
<input type="check">