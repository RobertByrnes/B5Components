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
    .laquo, .raquo {
        font-size: 25px !important;
        font-style: bold;
    }
</style>

<div class="container-fluid mt-0">
    <div class="row">

        <div class="col-md-5 p-3 bg-light offset-md-1 wiggle-sm">
            <ul class="sortable selectable">
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pop pointer" item-id="">Card 1</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pop pointer" item-id="">Card 2</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pop pointer" item-id="">Card 3</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pop pointer" item-id="">Card 4</li>
                </ul>
                <ul class="list-group shadow-lg item-drop">
                    <li class="list-group-item bg-sand pop pointer" item-id="">Card 5</li>
                </ul>
            </ul>
        </div>

        <div class="col-md-5 p-3 bg-light shadow-lg complete-item">
            <ul class="sorted selectable">
                <ul class="list-group dropped-item">
                    <li class="list-group-item bg-desert shrink-less pointer" item-id="">Card 6</li>
                </ul>
                <ul class="list-group dropped-item">
                    <li class="list-group-item bg-desert shrink-less pointer" item-id="">Card 7</li>
                </ul>
            </ul>
        </div>
    </div>

    <div class="row mt-5">
        <ul class="pagination pagination-lg justify-content-center">
            <li class="page-item">
                <a class="page-link bg-cool" href="#" aria-label="Previous">
                    <span class="laquo text-navy" aria-hidden="true"><<</span>
                </a>
            <li class="page-item">
                <a class="page-link bg-cool" href="#" aria-label="Next">
                    <span class="raquo text-navy" aria-hidden="true">>></span>
                </a>
            </li>
        </ul>
    </div>
</div>

<script>
    $(function() {
        $('.selectable').selectable();
    });

    $('.page-link').on('click', function() {
        let selection = $('.ui-selected').detach();
        if ($(this).children('span').hasClass('raquo')) {
            selection.appendTo('.sorted').removeClass('ui-selected bg-sand').addClass('bg-desert shrink-less');
        } else {
            selection.appendTo('.sortable').removeClass('ui-selected bg-desert shrink-less').addClass('bg-sand pop');
        }
    });
</script>


<?php include('pageconfig/footer.php'); ?>