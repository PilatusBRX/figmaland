    <section id="contact" class="contact">
            <div class="container">
                <?php if( get_field('titulo_contact') ): ?>
                    <h2 class="contact__title"><?php the_field('titulo_contact'); ?></h2>                    
                <?php endif; ?> 
                  <?php if( get_field('titulo_contact') ): ?>               
                    <h4 class="contact__text"><?php the_field('texto_contact'); ?></h4>
                  <?php endif; ?> 

                <ul class="social-links social-links-mobile d-md-none">

                <?php if( get_field('link_do_twitter_contact') ): ?>
                    <li><a href="<?php the_field('link_do_twitter_contact'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue-twitter.png" alt="Twitter"></a></li>
                <?php endif; ?>
                
                 <?php if( get_field('link_do_facebook_contact') ): ?>
                    <li><a href="<?php the_field('link_do_facebook_contact'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue-facebook.png" alt="Facebook"></a></li>
                 <?php endif; ?>

                <?php if( get_field('link_do_linkedin_contact') ): ?> 
                    <li><a href="<?php the_field('link_do_linkedin_contact'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue-linkedin.png" alt="Linkedin"></a></li>
                 <?php endif; ?>
                </ul>
                <div class="contact__area">                   
                    <div class="contact__area--form">
                        <form action="">
                            <?php if( get_field('titulo_do_formulario_contact') ): ?>               
                            <h3><?php the_field('titulo_do_formulario_contact'); ?></h3>
                            <?php endif; ?>                           
                            <input class="text" type="text" placeholder="Your Name">
                            <input class="email" type="email" placeholder="Your Email">
                            <textarea class="textarea" name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                            <button class="btn" type="submit">Send</button>
                        </form>
                    </div>
                    <div class="contact__area--locations">
                        <div class="location-items">

                        <?php if(get_field('icone_da_localizacao_contact') ): ?>
                            <div class="block">                                
                                <img src="<?php the_field('icone_da_localizacao_contact');?>" alt="Localização">
                                <h5><?php the_field('texto_da_localizacao_contact');?></h5>
                            </div>
                         <?php endif; ?>

                         <?php if( get_field('icone_do_telefone_contact') ): ?>
                            <div class="block">
                                <img src="<?php the_field('icone_do_telefone_contact');?>" alt="Telefone">
                                <h5><?php the_field('telefone_contact');?></h5>
                            </div>
                         <?php endif; ?>

                        <?php if( get_field('icone_do_email_contact') ): ?>
                            <div class="block">
                                <img src="<?php the_field('icone_do_email_contact');?>" alt="E-mail">
                                <h5><?php the_field('texto_do_email_contact');?></h5>
                            </div>
                        <?php endif; ?>

                        </div>

                        <?php if(get_field('imagem_do_mapa') ): ?>
                            <div class="map">
                                <a href="<?php the_field('link_do_mapa'); ?>" target="_blank">
                                    <img src="<?php the_field('imagem_do_mapa'); ?>" alt="Mapa">
                                </a>
                            </div>
                        <?php endif; ?>

                        <ul class="social-links social-links-desk">
                            <?php if( get_field('link_do_twitter_contact') ): ?>
                                <li><a href="<?php the_field('link_do_twitter_contact'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue-twitter.png" alt="Twitter"></a></li>
                            <?php endif; ?>
                            
                            <?php if( get_field('link_do_facebook_contact') ): ?>
                                <li><a href="<?php the_field('link_do_facebook_contact'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue-facebook.png" alt="Facebook"></a></li>
                            <?php endif; ?>

                            <?php if( get_field('link_do_linkedin_contact') ): ?> 
                                <li><a href="<?php the_field('link_do_linkedin_contact'); ?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/blue-linkedin.png" alt="Linkedin"></a></li>
                            <?php endif; ?>                     
                                                      
                        </ul>
                    </div>

                </div>
            </div>
        </section>