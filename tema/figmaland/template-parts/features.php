       <section id="features" class="features">
            <div class="container">
                <?php if( get_field('titulo__features') ): ?>
                    <h2 class="features__title text-center"><?php the_field('titulo__features'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('texto_features') ): ?>
                    <h4 class="features__text  text-center"><?php the_field('texto_features'); ?></h4>
                <?php endif; ?>  

                <?php if( get_field('link_do_video') ): ?>              
                <div class="video d-block d-md-none">
                    <div class="container">
                        <div class="player">
                           <?php $image = get_field('imagem_de_capa_do_video' );
                            echo wp_get_attachment_image($image['id'], 'full' ); ?>
                            <a href=" <?php the_field('link_do_video'); ?>" data-lity><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png"
                                    alt="Botão de tocar vídeo"></a>
                
                        </div>
                    </div>
                </div>
                <?php endif; ?>  
          
            <div class="flex features__blocks">

             <!-- Bloco 1-->    
            <?php if( have_rows('bloco_1_features') ): ?>
                <?php while( have_rows('bloco_1_features') ): the_row();       
                    $image = get_sub_field('imagem_do_bloco_1_features');
                    $titulo = get_sub_field('titulo_do_bloco_1_features');
                    $texto = get_sub_field('texto_do_bloco_1_features');     

                    ?>
                <div class="features__blocks--item">
                    <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($titulo); ?>"/>
                    <h3><?php echo esc_attr($titulo); ?></h3>
                    <p><?php echo esc_attr($texto); ?></p>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


             <!-- Bloco 2-->    
            <?php if( have_rows('bloco_2_features') ): ?>
                <?php while( have_rows('bloco_2_features') ): the_row();       
                    $image = get_sub_field('imagem_do_bloco_2_features');
                    $titulo = get_sub_field('titulo_do_bloco_2_features');
                    $texto = get_sub_field('texto_do_bloco_2_features');     

                    ?>
                <div class="features__blocks--item">
                    <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($titulo); ?>"/>
                    <h3><?php echo esc_attr($titulo); ?></h3>
                    <p><?php echo esc_attr($texto); ?></p>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


             <!-- Bloco 3-->    
            <?php if( have_rows('bloco_3_features') ): ?>
                <?php while( have_rows('bloco_3_features') ): the_row();       
                    $image = get_sub_field('imagem_do_bloco_3_features');
                    $titulo = get_sub_field('titulo_do_bloco_3_features');
                    $texto = get_sub_field('texto_do_bloco_3_features');     

                    ?>
                <div class="features__blocks--item">
                    <img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($titulo); ?>"/>
                    <h3><?php echo esc_attr($titulo); ?></h3>
                    <p><?php echo esc_attr($texto); ?></p>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>           
                       

                </div>
            </div>
        </section>