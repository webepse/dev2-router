<h2>Contact</h2>
<form action="index.php?action=contact" method="POST">
    <?php
        if(isset($errContact))
        {
            echo "<div class='alert alert-danger'>Une erreur est survenue (code erreur:".$errContact." )</div>";
        }
        if(isset($successContact))
        {
            echo "<div class='alert alert-success'>".$successContact."</div>";
        }

    ?>
    <div class="form-group my-3">
        <label for="nom">Nom: </label>
        <input type="text" name="nom" id="nom" class="form-control">
    </div>
    <div class="form-group my-3">
        <label for="email">Email: </label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="form-group my-3">
        <label for="message">Message: </label>
        <textarea name="message" id="message" class="form-control"></textarea>
    </div>
    <div class="form-group my-3">
        <input type="submit" value="Envoyer" class="btn btn-primary">
    </div>
</form>