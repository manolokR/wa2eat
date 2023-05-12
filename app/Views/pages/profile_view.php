<style>
    .profile-container {
        max-width: 500px;
        margin: auto;
    }
    .profile-photo {
        max-width: 200px;
        display: block;
        margin: 10px 0;
    }
    .save-btn-container {
        margin-top: 20px;
    }
</style>


<main id="main" class="main">
    <section class="section dashboard">
        <?php 
            $session = session(); 
            $user = $session->get('user');
        ?>

        <div class="container profile-container">
            <div class="card">
                <div class="card-header">
                    Editar usuario
                </div>
                <div class="card-body">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= $user->email ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="username">Nombre de usuario</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user->username ?>">
                        </div>
                        <div class="form-group">
                            <label for="photo">Foto de perfil</label>
                            <?php if ($user->photo): ?>
                                <img src="data:image/jpeg;base64,<?= base64_encode($user->photo) ?>" alt="User photo" class="profile-photo" />
                            <?php endif; ?>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                        <div class="text-center save-btn-container">
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main><!-- End #main -->
