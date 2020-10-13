<div class="row">
    <?php
    foreach ($x as $key => $value) { ?>


        <div class="container-fluid">
            <h2 class="text-center p-5 mt-5"><a href="/<?php echo $value['art_alias']; ?>"><?php echo $value['art_names']; ?></a></h2>
            <div class="container-fluid">
                <div class="col">
                    <div class="text-sm-left subcontent" style="font-size: 16pt;">
                        <?php echo html_entity_decode($value['art_subcontent'], ENT_HTML5); ?>
                    </div>
                    <div class="row">
                        <div class="boot col-5 text-center p-0 mt-3 ">
                            <div class="bootbg"></div><a href="/<?php echo $value['art_alias']; ?>">Подробнее...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }; ?>
</div>