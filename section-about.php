<!-- Section: About US -->
<section id="features" class="overflow-visible">
    <div class="container pt-0">
        <div class="section-content pt-0">
            <div class="row">
                <div class="col-md-12">
                    <div class="features-health p-30 pb-10 pr-sm-15 pl-xs-15" data-bg-color="#FFF">
                        <h2 class="text-center font-italic"><span><?php echo get_option('section_about_title', 'About Our Salon');?></span></h2>
                        <div class="subtitle-divider-2 text-center divider-about-us"><?php echo get_option('section_about_subtitle', '');?></div>
                        <div class="icon-box left media mt-30">
                            <?php if (have_posts()) : while(have_posts()) : the_post();?>
                                <div class="col-md-6">
                                    <?php the_post_thumbnail();?>
                                    <!--                                        <img class="img-fullwidth" src="http://themes.sumerianparadise.com/demo/html/nailsbeauty/images/about.jpg" alt="">-->
                                </div>
                                <div class="col-md-6 mt-sm-30">
                                    <?php the_content();?>
                                    <!--                                        <p class="text-light-gray">-->
                                    <!--                                            Lorem ipsum dolor sit amet, ludus maluisset his cu, ut prodesset posidonium-->
                                    <!--                                            nam, quo facilisis democritum eloquentiam at. Pri ad ipsum assueverit, cu-->
                                    <!--                                            sea possim concludaturque. No eos aliquid phaedrum, ex viderer salutandi-->
                                    <!--                                            mea. In has prima assum voluptatibus.-->
                                    <!--                                        </p>-->
                                    <!--                                        <p class="text-light-gray mt-20">-->
                                    <!--                                            Vel eros option mediocrem no. In quidam dolorem mei, in ornatus sententiae-->
                                    <!--                                            percipitur has. Cu vim amet singulis, mei saepe ceteros partiendo ex. Eam-->
                                    <!--                                            tation eirmod ei, utamur delectus vis id. Iudico maiestatis mea ut, ne-->
                                    <!--                                            admodum consulatu mea, suas tamquam-->
                                    <!--                                            vis at.-->
                                    <!--                                        </p>-->
                                    <!--                                        <p class="text-light-gray mt-20">-->
                                    <!--                                            Mea graece labitur ad, eripuit explicari concludaturque mel te. Falli-->
                                    <!--                                            patrioque splendide te pri, vim ubique virtute ponderum no.-->
                                    <!--                                        </p>-->
                                    <!--                                        <a class="btn btn-colored btn-white-border-black btn-light-blue-hover hvr-shutter-out-horizontal mt-30"-->
                                    <!--                                           href="javascript:void(0)" data-border="1px solid #CDCDCD"-->
                                    <!--                                           data-mouseover-color="#fff" data-mouseout-color="#000">READ MORE</a>-->
                                </div>
                            <?php endwhile; endif;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>