<?php
/* Template Name: buffets */
?>

<?php get_header(); ?>

<!-- START : section-buffetpage_cover -->
<?php
// SI buffetpage_cover_hidden EST COCHE
// => Alors il n'y a pas de section

if(checked(1, get_option('buffetpage_cover_hidden'), false)){
    ?>
    <?php
} else {
    // SINON
    // => Afficher la section
    ?>
    <section id="home-section-buffet" class="bg-section">

        <?php
        // SI buffetpage_cover_affiche_img EST COCHE
        // => Alors on affiche l'image en background

        if(checked(1, get_option('buffetpage_cover_affiche_img'), false)){
            ?>
            <div class="img-cover">
                <img src="<?php echo get_option('buffetpage_cover_bg_img'); ?>" alt="">
            </div><!-- .img-buffet -->
            <?php
        }
        ?>
        <div class="container">
            <h1><?php echo get_option('buffetpage_cover_titre'); ?></h1>
            <p><?php echo get_option('buffetpage_cover_texte'); ?></p>
        </div><!-- / .container -->
    </section><!-- / #home-section-buffet .bg-buffet-->
    <?php
}
?>

<!-- START : section-buffetpage_message -->
<?php
// SI buffetpage_cover_hidden EST COCHE
// => Alors il n'y a pas de section

if(checked(1, get_option('buffetpage_message_hidden'), false)){
    ?>
    <?php
} else {
    // SINON
    // => Afficher la section
    ?>
    <section id="message-buffet" class="container section-message">
        <div class="row">
            <?php
            // SI buffetpage_msg_affiche_avatar EST COCHE
            // => Alors on affiche l'avatar

            if(checked(1, get_option('buffetpage_msg_affiche_avatar'), false)){
                ?>
                <div class="col-md-6 col-12">
                    <img src="<?php echo get_option('buffetpage_msg_img_avatar'); ?>" alt="" class="msg-avatar" />
                </div><!-- .col-md-6 .col-12 -->
                <?php
            }
            ?>
            <div class="col-md-6 col-12">
                <h2><?php echo get_option('buffetpage_message_titre'); ?></h2>
                <ul>
                    <li>
                        <?php echo(get_option('buffetpage_msg_element_entrefroide')); ?>
                        <span class="info-element-buffet">entrées froides</span>
                    </li>
                    <li>
                        <?php echo(get_option('buffetpage_msg_element_potage')); ?>
                        <span class="info-element-buffet">potages</span>
                    </li>
                    <li>
                        <?php echo(get_option('buffetpage_msg_element_entrechaude')); ?>
                        <span class="info-element-buffet">entrées chaude</span>
                    </li>
                    <li>
                        <?php echo(get_option('buffetpage_msg_element_plats')); ?>
                        <span>
                            sortes de plats <br/>
                            (viandes, volailles, légumes, etc...)
                        </span class="info-element-buffet">
                    </li>
                </ul>

                <?php
                // SI buffetpage_msn_button_img EST COCHE
                // => Alors renvois à la section-tarif-buffet

                if(checked(1, get_option('buffetpage_msn_button'), false)){
                    ?>
                    <div class="btn">
                        <a href="#section-tarif-buffet">
                            Tarif buffet
                        </a>
                    </div>
                    <?php
                }
                ?>

            </div><!-- / .col-md-6 col-12 -->
        </div><!-- / .row -->
    </section><!-- / #home-section-buffet .bg-buffet-->
    <?php
}
?>

<!-- START : section-description-buffet -->
<?php
// SI buffetpage_desc_hidden EST COCHE
// => Alors il n'y a pas de section

if(checked(1, get_option('buffetpage_desc_hidden'), false)) {
    ?><?php
} else {
    // SINON
    // => Afficher la section
    ?>

    <section id="section-description-buffet" class="container">
        <h2>Description Buffet</h2>
        <div class="row">
            <div class="col-md-6 col-12 box-left">
                <p class="description-buffet">
                    <?php echo get_option('buffetpage_desc_txt_content'); ?>
                </p>
            </div>
            <div class="col-md-6 col-12 box-right">
                <div class="row">
                    <div class="col-12 img-buffet">
                        <img src="<?php echo get_option('buffetpage_desc_img_uno'); ?>" alt="Buffet">
                    </div>
                    <div class="col-12 img-buffet">
                        <img src="<?php echo get_option('buffetpage_desc_img_due'); ?>" alt="Buffet">
                    </div>
                    <div class="col-12 img-buffet">
                        <img src="<?php echo get_option('buffetpage_desc_img_tre'); ?>" alt="Buffet">
                    </div>
                    <div class="col-12 img-buffet">
                        <img src="<?php echo get_option('buffetpage_desc_img_quattro'); ?>" alt="Buffet">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php
}
?>


<?php // echo get_option('buffetpage_tarif_affiche_avatar');?>

<!-- START : section-tarif-buffet -->
<section id="section-tarif-buffet" class="container">
    <h1>Découvrez nos différents tarifs</h1>
    <div class="row">
        <div class="col-md-6 col-12 box-left">
            <p><?php echo get_option('buffetpage_tarif_txt');?></p>
            <p class="catch"><?php echo get_option('buffetpage_tarif_catch');?></p>
        </div><!-- / .col-md-6 .col-12 .box-left -->
        <div class="col-md-6 col-12 box-right">
            <img src="<?php echo get_option('avatar_tarif');?>" alt="sans boissons, avec boissons, full boisson">
        </div><!-- / .col-md-6 .col-12 .box-right -->
    </div><!-- / .row -->

    <div class="row">
        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
                <h3>Sans boissons</h3>
                <div class="card-body">
                    <ul>
                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_apero'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                <span class="info-formule">1 Apéritif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_vin'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                <span class="info-formule">1/2l de vin par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_soft'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                <span class="info-formule">Soft à volonter</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_cafe'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                <span class="info-formule">Thé ou Café</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('sans_digestif'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                <span class="info-formule">1 digestif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- / .card-body -->
            </div><!-- / .card.card-tarif -->

        </div><!-- / .col-md-3.col-12 -->

        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
                <h3>Avec boissons</h3>
                <div class="card-body">
                    <ul>
                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_apero'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                <span class="info-formule">1 Apéritif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_vin'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                <span class="info-formule">1/2l de vin par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_soft'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                <span class="info-formule">Soft à volonter</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_cafe'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                <span class="info-formule">Thé ou Café</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('avec_digestif'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                <span class="info-formule">1 digestif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>
                    </ul>
                </div>

                <div class="btn-tarif">
                    <div class="row">
                        <div class="col-6">
                            <button class="btn btn-left collapsed" type="button" data-toggle="collapse" data-target="#collapseMidiSansBoissons" aria-expanded="false" aria-controls="collapseMidiSansBoissons">
                                Midi
                            </button>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-right collapsed" type="button" data-toggle="collapse" data-target="#collapseSoirAvecBoissons" aria-expanded="false" aria-controls="collapseMidiSansBoissons">
                                Soir
                            </button>
                        </div>
                    </div>
                </div><!-- .btn-tarif -->
            </div><!-- / .card card-tarif -->
        </div><!-- / .col-md-3.col-12.card.card-tarif -->

        <div class="col-md-4 col-12 item-card">
            <div class="card card-tarif">
                <h3>Full boissons</h3>
                <div class="card-body">
                    <ul>
                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_apero'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                <span class="info-formule">1 Apéritif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_vin'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                <span class="info-formule">1/2l de vin par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_soft'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                <span class="info-formule">Soft à volonter</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_cafe'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                <span class="info-formule">Thé ou Café</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>

                        <!-- item-drink -->
                        <?php
                        if(checked(1, get_option('full_digestif'), false)){
                            ?>
                            <li class="item-drink">
                                <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                <span class="info-formule">1 digestif par personne</span>
                            </li><!-- / .item-drink -->
                            <?php
                        }
                        ?>
                    </ul>
                </div><!-- / .card-body -->
            </div><!-- / .card card-tarif -->

        </div><!-- / .col-md-3.col-12 -->

    </div><!-- / .row -->



    <!-- START : collapse-midi-sans-boissons -->
    <div id="collapse-midi-sans-boissons" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="collapseMidiSansBoissons">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet avec boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include -->
                </div>
                <div class="col-3 box-collapse-right">
                    <h2>Tarif du midi</h2>
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
                </div>
            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-midi-sans-boissons -->

    <!-- STAT : collapse-soir-avec-boissons -->
    <div id="collapse-soir-avec-boissons" class="row">
        <div class="col card-collapse">
            <div class="collapse col card-collapse box-collapse" id="collapseSoirAvecBoissons">
                <div class="col-4 box-collapse-left">
                    <h2>Buffet avec boissons</h2>
                    <div class="formul-include">
                        <p>La formule comprend : </p>
                        <ul>
                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_apero'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-apero.png' ?>" class="icon-drink" alt="1 Apéritif par personne">
                                    <span class="info-formule">1 Apéritif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_vin'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-vin.png' ?>" class="icon-drink" alt="1/2l de vin par personne">
                                    <span class="info-formule">1/2l de vin par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_soft'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-soft.png' ?>" class="icon-drink" alt="Soft à volonter">
                                    <span class="info-formule">Soft à volonter</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_cafe'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-cafe.png' ?>" class="icon-drink" alt="Thé ou Café">
                                    <span class="info-formule">Thé ou Café</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>

                            <!-- item-drink -->
                            <?php
                            if(checked(1, get_option('avec_digestif'), false)){
                                ?>
                                <li class="item-drink">
                                    <img src="<?php echo get_template_directory_uri().'/img/icon/icon-digestif.png' ?>" class="icon-drink" alt="1 digestif par personne">
                                    <span class="info-formule">1 digestif par personne</span>
                                </li><!-- / .item-drink -->
                                <?php
                            }
                            ?>
                        </ul>
                    </div><!-- / .formul-include  -->
                </div><!-- / .box-collapse-left -->

                <div class="col-3 box-collapse-right">
                    <h2>Tarif du soir</h2>
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
                </div><!-- / .box-collapse-right -->

            </div><!-- / .collapse .col .card-collapse .box-collapse -->
        </div><!-- / .col .card-collapse -->
    </div><!-- / #collapse-soir-sans-boissons -->


</section><!-- / #section-tarif-buffet -->









<?php get_footer(); ?>
