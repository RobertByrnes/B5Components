<?php include('pageconfig/header.php'); ?>

<header class="cd-header mt-3 mb-0" style="height: 50px;">
    <h1 class="mb-0">Selectable Moveable Cards</h1>
</header>

<style>
    .selectable .ui-selecting {
        background: #FECA40;
    }
    .selectable .ui-selected {
        background: #F39814;
        color: white;
    }
    .pointer {
        cursor: pointer;
    }
</style>

<div class="container-fluid mt-0">
    <div class="row">

        <div class="col-md-5 p-3 bg-light offset-md-1 wiggle-sm">
            <ol class="selectable">
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 1</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 2</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 3</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 4</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 5</li>
                </ul>
            </ol>
        </div>

        <div class="col-md-5 p-3 bg-light shadow-lg complete-item">
            <ul class="selectable">
                <ul class="list-group dropped-item">
                    <li class="list-group-item bg-desert shrink-less pointer" item-id="">Card 6</li>
                </ul>
                <ul class="list-group dropped-item">
                    <li class="list-group-item bg-desert shrink-less pointer" item-id="">Card 7</li>
                </ul>
            </ul>
        </div>
    </div>

    <div class="col-12 d-flex mx-auto mt-2">
        <ul class="pagination clearfix col-md-12">
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                </a>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    $(function() {
        $('.selectable').selectable();
    });
</script>


<?php include('pageconfig/footer.php'); ?>