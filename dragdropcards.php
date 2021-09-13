<?php include('pageconfig/header.php'); ?>

    <header class="cd-header mt-3 mb-0" style="height: 50px;">
        <h1 class="mb-0">Drag and Droppable Cards</h1>
    </header>

    <style>
        .pointer {
            cursor:pointer;
        }
    </style>

    <div class="container-fluid mt-0">
        <div class="row">

            <div class="col-md-5 p-3 bg-light offset-md-1 wiggle-sm">
                <ul class="list-group shadow-lg sortable item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 1</li>
                </ul>
                <ul class="list-group shadow-lg sortable item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 2</li>
                </ul>
                <ul class="list-group shadow-lg sortable item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 3</li>
                </ul>
                <ul class="list-group shadow-lg sortable item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 4</li>
                </ul>
                <ul class="list-group shadow-lg sortable item-drop">
                    <li class="list-group-item bg-sand pointer" item-id="">Card 5</li>
                </ul>
            </div>

            <div class="col-md-5 p-3 bg-light shadow-lg complete-item">
                <ul class="list-group sortable dropped-item">
                    <li class="list-group-item bg-desert shrink-less pointer" item-id="">Card 6</li>
                </ul>
                <ul class="list-group sortable dropped-item">
                    <li class="list-group-item bg-desert shrink-less pointer" item-id="">Card 7</li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        $(function() {
            $(".item-drop, .dropped-item").sortable({
                connectWith: ".sortable",
                opacity: 0.5,
            }).disableSelection();

            $(".sortable").on("sortupdate", function(event, ui) {
                let sortableItems = [];
                let sortedItems = [];

                $(".item-drop li").each(function(index) {
                    sortableItems[index] = $(this).attr('item-id');
                    $(this).removeClass('bg-desert shrink-less').addClass('bg-sand');
                });

                $(".dropped-item li").each(function(index) {
                    sortedItems[index] = $(this).attr('item-id');
                    $(this).removeClass('bg-sand').addClass('bg-desert shrink-less');
                });

                // $.ajax({
                //     url: "{{ route('update.items') }}",
                //     method: 'POST',
                //     headers: {
                //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                //     },
                //     data: {
                //         sortableItems: sortableItems,
                //         sortedItems: sortedItems
                //     },
                //     success: function(data) {
                //         console.log('success');
                //     }
                // });

            });
        });
    </script>

<?php include('pageconfig/footer.php'); ?>