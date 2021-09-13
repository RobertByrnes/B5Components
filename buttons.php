<?php include('pageconfig/header.php'); ?>

    <style>
        /* General button style - No Bootstrap */
        .btn-nbs {
            border: none;
            font-family: 'Lato';
            font-size: inherit;
            color: inherit;
            background: none;
            cursor: pointer;
            padding: 25px 80px;
            display: inline-block;
            margin: 15px 0px;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
            outline: none;
            position: relative;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }
        .btn-nbs:after {
            content: '';
            position: absolute;
            z-index: -1;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
        }
        /* Pseudo elements for icons */
        .btn-nbs:before {
            font-family: 'FontAwesome';
            font-style: normal;
            font-weight: normal;
            font-variant: normal;
            text-transform: none;
            line-height: 1;
            position: relative;
            -webkit-font-smoothing: antialiased;
        }
        /* Icon separator */
        .btn-sep {
            padding: 25px 60px 25px 120px;
        }
        .btn-sep:before {
            background: rgba(0, 0, 0, 0.15);
        }
        /* Button 1 */
        .btn-beach {
            background: #3498db;
            color: #fff;
        }
        .btn-beach:hover {
            background: #2980b9;
        }
        .btn-beach:active {
            background: #2980b9;
        }
        /* Button 2 */
        .btn-grass {
            background: #2ecc71;
            color: #fff;
        }
        .btn-grass:hover {
            background: #27ae60;
        }
        .btn-grass:active {
            background: #27ae60;
        }
        /* Button Poppy */
        .btn-poppy {
            background: #e74c3c;
            color: #fff;
        }
        .btn-poppy:hover {
            background: #c0392b;
        }
        .btn-poppy:active {
            background: #c0392b;
        }
        /* Button Dusk */
        .btn-dusk {
            background: #34495e;
            color: #fff;
        }
        .btn-dusk:hover {
            background: #2c3e50;
        }
        .btn-dusk:active {
            background: #2c3e50;
        }
        /* All Buttons */
        .btn-beach:before,
        .btn-grass:before,
        .btn-poppy:before,
        .btn-dusk:before  {
            position: absolute;
            height: 100%;
            left: 0;
            top: 0;
            line-height: 3;
            font-size: 140%;
            width: 60px;
        }
        .top:active,
        .btn-beach:active,
        .btn-grass:active,
        .btn-poppy:active,
        .btn-dusk:active {
            top: 2px;
        }
        /* Icons */
        .icon-cart:before {
            content: "\f07a";
        }
        .icon-heart:before {
            content: "\f55a";
        }
        .icon-info:before {
            content: "\f05a";
        }
        .icon-send:before {
            content: "\f1d8";
        }
        .fade-in {
            color: #FFF;
            transition: all 0.3s;
            position: relative;
        }
        .fade-in span {
            transition: all 0.3s;
        }
        .fade-in::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
            border-top-width: 1px;
            border-bottom-width: 1px;
            border-top-style: solid;
            border-bottom-style: solid;
            border-top-color: rgba(255, 255, 255, 0.5);
            border-bottom-color: rgba(255, 255, 255, 0.5);
            transform: scale(0.1, 1);
        }
        .fade-in:hover span {
            letter-spacing: 2px;
        }
        .fade-in:hover::before {
            opacity: 1;
            transform: scale(1, 1);
        }
        .fade-in::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            transition: all 0.3s;
            background-color: rgba(255, 255, 255, 0.1);
        }
        .fade-in:hover::after {
            opacity: 0;
            transform: scale(0.1, 1);
        }
        .tunnel {
            color: #FFF;
            transition: all 0.5s;
            position: relative;
        }
        .tunnel::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            background-color: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }
        .tunnel:hover::before {
            opacity: 0;
            transform: scale(0.5, 0.5);
        }
        .tunnel::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
            opacity: 0;
            transition: all 0.3s;
            border: 1px solid rgba(255, 255, 255, 0.5);
            transform: scale(1.2, 1.2);
        }
        .tunnel:hover::after {
            opacity: 1;
            transform: scale(1, 1);
        }
    </style>

    <div class="container">
        <!-- Large Buttons -->
        <div class="row">
            <div class="col-4">
                <button class="btn-nbs btn-mars wiggle-sm w-100">Mars Wiggle</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-beach pop w-100">Beach Pop</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-grass grow-sm w-100">Grass Grow Sm</button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <button class="btn-nbs btn-poppy shrink-sm w-100">Poppy Shrink Sm</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-dusk tunnel w-100">Dusk</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-tangerine fade-in w-100">Tangerine</button>
            </div>
        </div>

        <div class="row">
            <div class="col-4">
                <button class="btn-nbs btn-jade wiggle-sm w-100">Jade Wiggle</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-sapphire pop w-100">Sapphire Pop</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-viridian grow-sm w-100">Viridian Grow Sm</button>
            </div>
        </div>
        
        <div class="row">
            <div class="col-4">
                <button class="btn-nbs btn-crimson w-100">Crimson</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-uranus w-100">Uranus</button>
            </div>

            <div class="col-4">
                <button class="btn-nbs btn-sm fade-in btn-tan w-100">Tan</button>
            </div>
        </div>

    <header class="cd-header mt-3 mb-0" style="height: 50px;">
        <h1 class="mb-0">Colour Tests</h1>
    </header>

    <div class="row">
        <div class="col-4">
            <button class="btn-nbs btn-seville fade-in top w-100">Mars</button>
        </div>

        <div class="col-4">
            <button class="btn-nbs btn-uranus pop fade-in top w-100">Uranus</button>
        </div>

        <div class="col-4">
            <button class="btn-nbs btn-beans fade-in top w-100">Beans</button>
        </div>
    </div>
    
    <div class="row">
        <div class="col-4">
            <button class="btn-nbs btn-jade fade-in top w-100">Jade</button>
        </div>

        <div class="col-4">
            <button class="btn-nbs btn-dusk fade-in top w-100">Dusk</button>
        </div>

        <div class="col-4">
            <button class="btn-nbs btn-sapphire fade-in top w-100">Poppy</button>
        </div>
    </div>
</div>

<?php include('pageconfig/footer.php'); ?>