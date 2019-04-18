<?php
/* Template Name: buffets */
?>

<?php get_header(); ?>

<section id="page-buffet">
    <div class="section-cover" style="background-color: #333; height:100px;">

    </div><!-- / .section-cover -->

    <div class="container" style=" margin: 2rem auto;">

        <div class="card card-formule">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h3>Buffet sans boissons</h3>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('sans_apero'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule">1 Apéritif par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('sans_vin'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule">1/2l de vin par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('sans_soft'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule">Soft à volonter</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('sans_cafe'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule">Thé ou Café</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('sans_digestif'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule">1 digestif par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>
                </div><!-- / .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <h3>Midi</h3>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <h3>Soir</h3>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_lundi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mardi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_mercredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_jeudi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_vendredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_samedi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('sans_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('sans_dimanche_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .col-md-4 col-12 -->
            </div><!-- .row -->
        </div><!-- / .card -->

        <div class="card card-formule">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h3>Buffet avec boissons</h3>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('avec_apero'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule">1 Apéritif par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('avec_vin'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule">1/2l de vin par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('avec_soft'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule">Soft à volonter</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('avec_cafe'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule">Thé ou Café</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('avec_digestif'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule">1 digestif par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>
                </div><!-- / .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <h3>Midi</h3>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_lundi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_mardi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_mercredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_jeudi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_vendredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_samedi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_dimanche_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <h3>Soir</h3>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_lundi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_mardi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_mercredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_jeudi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_vendredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_samedi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('avec_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('avec_dimanche_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .col-md-4 col-12 -->
            </div><!-- .row -->
        </div><!-- / .card -->

        <div class="card card-formule">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h3>Buffet full boissons</h3>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('full_apero'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                            <span class="info-formule">1 Apéritif par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('full_vin'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                            <span class="info-formule">1/2l de vin par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('full_soft'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                            <span class="info-formule">Soft à volonter</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('full_cafe'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                            <span class="info-formule">Thé ou Café</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>

                    <!-- item-drink -->
                    <?php
                    if(checked(1, get_option('full_digestif'), false)){
                        ?>
                        <div class="item-drink">
                            <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                            <span class="info-formule">1 digestif par personne</span>
                        </div><!-- / .item-drink -->
                        <?php
                    }
                    ?>
                </div><!-- / .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <h3>Midi</h3>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_lundi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mardi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mercredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_jeudi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_vendredi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_samedi_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_dimanche_midi'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .col-md-4 col-12 -->
                <div class="col-md-4 col-12">
                    <h3>Soir</h3>
                    <table class="table-tarif">
                        <tbody>
                            <!-- tarif-day : lundi -->
                            <tr class="tarif-day">
                                <td class="jour">Lundi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_lundi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_lundi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mardi -->
                            <tr class="tarif-day">
                                <td class="jour">Mardi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mardi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mardi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : mercredi -->
                            <tr class="tarif-day">
                                <td class="jour">Mercredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_mercredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_mercredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : jeudi -->
                            <tr class="tarif-day">
                                <td class="jour">Jeudi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_jeudi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_jeudi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : vendredi -->
                            <tr class="tarif-day">
                                <td class="jour">Vendredi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_vendredi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_vendredi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : samedi -->
                            <tr class="tarif-day">
                                <td class="jour">Samedi</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_samedi_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_samedi_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->

                            <!-- tarif-day : dimanche -->
                            <tr class="tarif-day">
                                <td class="jour">Dimanche</td>
                                <!-- item-drink -->
                                <?php
                                if(checked(1, get_option('full_dimanche_fermer'), false)){
                                    ?>
                                        <td class="prix"> - </td>
                                    <?php
                                } else {
                                    ?>
                                        <td class="prix"><?php echo get_option('full_dimanche_soir'); ?> €</td>
                                    <?php
                                } ?>
                            </tr><!-- / .tarif-day -->
                        </tbody>
                    </table><!-- / .table-tarif -->
                </div><!-- / .col-md-4 col-12 -->
            </div><!-- .row -->
        </div><!-- / .card -->

    </div><!-- / .container -->

</section><!-- / #page-buffet -->

<?php get_footer(); ?>
