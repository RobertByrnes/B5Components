<?php include('pageconfig/header.php'); ?>

<style>
    .card-group>.card {
        margin-bottom: 0;
    }
</style>

<header class="cd-header mt-3 mb-0" style="height: 50px;">
    <h1 class="mb-0">Light Cards</h1>
</header>

<div class="container-fluid mt-0">
    <!-- Card Row -->
    <div class="row d-flex px-3">
        <div class="card bg-ocean swing-less-hover">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                b5
            </div>
        </div>
    </div>

    <!-- Card Group 2 -->
    <div class="row d-flex px-1">
        <div class="card-group">
            <div class="card pop bg-fuschia">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    b5
                </div>
            </div>
            <div class="card pop bg-lemon">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    b5
                </div>
            </div>
        </div>
    </div>

    <div class="row d-flex justify-content-center mt-5">
        <button type="button" class="btn btn-spruce col-3 swing-less swing-less-hover tunnel top" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-fuschia text-light">
                        <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-grape tunnel top" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-spruce tunnel top">Understood</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center mt-5">
            <button id="load" type="button" class="btn btn-spruce col-3 swing-less tunnel top">
                Load
            </button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#load').click(function() {
            $(document).find('#wrapper').addClass("overlay");
            return false;
        });
        $('#wrapper').click(function() {
            $('#wrapper').removeClass('overlay');
        });
    });
</script>


<?php include('pageconfig/footer.php'); ?>