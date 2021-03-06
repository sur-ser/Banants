<?php
/**
 *
 * Created by PhpStorm.
 * User: Arsen
 * Date: 11/6/2015
 * Time: 3:20 PM
 */

use Helpers\Uri;
use Ivliev\Imagefly\Imagefly;

//todo: Надо включить сортировку
?>

<div class="inner_content_wrapper coaches">
    <div class="inner_content team_members_1">
        <div class="team_wrapper coaches clearfix">
            <div class="team_wrapper_body clearfix">
                <div id="item_tabs">
                    <div id="item_tabs_list1">
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Artur_Voskanyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Artur')?> <?=__('Voskanyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Head coach')?></h4>
                            </div>
                        </div>
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Vahe_Gevorgyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Vahe')?> <?=__('Gevorgyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Coach')?></h4>
                            </div>
                        </div>
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Artur_Hovhannisyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Artur')?> <?=__('Hovhannisyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Physical trainer')?></h4>
                            </div>
                        </div>
<!--                        <div class="team_item">-->
<!--                            <div class="team_item_images pictures_wrapper">-->
<!--                                <img class="flag_icon" src="/uploads/images/flags/flag-spain.png" alt="flag" />-->
<!--                                <div class="manager_wrapper">-->
<!--                                    <img src="--><?//=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Xoakin_Garsia.png', 'w140-q52')?><!--" alt="player" />-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="team_item_title">-->
<!--                                <h3>--><?//=__('Xoakin')?><!-- --><?//=__('Garcia Herrera')?><!--</h3>-->
<!--                            </div>-->
<!--                            <div class="team_item_bottom">-->
<!--                                <h4>--><?//=__('Physical trainer')?><!--</h4>-->
<!--                            </div>-->
<!--                        </div>-->
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Vladimir_Vardanyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Vladimir')?> <?=__('Vardanyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Goalkeeper coach')?></h4>
                            </div>
                        </div>
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Karen_Stepanyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Karen')?> <?=__('Stepanyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Doctor')?></h4>
                            </div>
                        </div>
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Arsen_Hambaryan.png', 'w140-q52')?>" alt="coach1" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Arsen')?> <?=__('Hambaryan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Doctor')?></h4>
                            </div>
                        </div>
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Hovhannes_Gevorgyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Hovhannes')?> <?=__('Gevorgyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Massage therapist')?></h4>
                            </div>
                        </div>
                        <div class="team_item">
                            <div class="team_item_images pictures_wrapper">
                                <img class="flag_icon" src="/uploads/images/flags/flag-armenia.jpg" alt="flag" />
                                <div class="manager_wrapper">
                                    <img src="<?=Imagefly::imagePath('/uploads/images/Coaches/banants_2/Vilyam_gevorgyan.png', 'w140-q52')?>" alt="player" />
                                </div>
                            </div>
                            <div class="team_item_title">
                                <h3><?=__('Vilyam')?> <?=__('Gevorgyan')?></h3>
                            </div>
                            <div class="team_item_bottom">
                                <h4><?=__('Administrator')?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>