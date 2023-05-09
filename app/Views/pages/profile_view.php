<main id="main" class="main">
    <section class="section dashboard">
        <?php $session = session(); ?>
        <div style="display: flex; flex-direction: row; align-items: center;">
            <?php if ($session->has('user') && !is_null($session->get('user')->photo)): ?>
                <img src="data:image/jpeg;base64,<?= base64_encode($session->get('user')->photo) ?>" alt="Profile"
                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
            <?php else: ?>
                <img src="<?= base_url("imagenes/profile.png") ?>"
                    style="width: 100px; height: 100px; object-fit: cover; border-radius: 50%;">
            <?php endif; ?>
            <div style="display: flex; flex-direction: column; margin-left: 20px;">
                <span style="font-size: 18px; font-weight: bold;">Nombre de usuario:</span>
                <span style="font-size: 16px;">
                    <?= $session->get('user')->username ?>
                </span>
                <span style="font-size: 18px; font-weight: bold;">Correo:</span>
                <span style="font-size: 16px;">
                    <?= $session->get('user')->email ?>
                </span>
            </div>
        </div>

        <a href="#" id="cambiar-foto-btn" class="btn btn-primary">Cambiar foto de perfil</a>

        <div class="modal fade" id="cambiar-foto-modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cambiar foto de perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="cambiar-foto-form" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="foto">Selecciona una foto:</label>
                                <input type="file" class="form-control-file" id="foto" name="foto">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary" id="guardar-foto-btn">Guardar</button>
                    </div>
                </div>
            </div>
        </div>


    </section>
</main><!-- End #main -->

<script>
    $(document).ready(function () {
        $('#cambiar-foto-btn').click(function () {
            $('#cambiar-foto-modal').modal('show');
        });
    });

    

</script>

<script>
    $(document).ready(function() {
        $('#guardar-foto-btn').click(function() {
            var formData = new FormData($('#cambiar-foto-form')[0]);
            $.ajax({
                url: '/cambiarFoto',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    window.location.href = '/perfil';
                }
            });
        });
    });
</script>
