<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">

        <a class="navbar-brand" href="./"><span class="logo-left">MSJ</span><span class="logo-middle">|</span><span class="logo-right">Construction Ltd.</span></a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <?php
                    $m=0;
                    foreach($data as $value){
                        echo "\t\t\t\t<li class=\"nav-item\">\n";
                            echo "\t\t\t\t\t<a class=\"nav-link\" id=\"m_".$m."\" href=\"#".str_replace(" ", "_", $value)."\">".ucwords($value)."</a>\n";
                        echo "\t\t\t\t</li>\n";
                        $m++;
                    }
                ?>
            </ul>
        </div>

    </div>
</nav>