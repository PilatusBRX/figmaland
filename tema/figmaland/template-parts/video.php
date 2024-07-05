<?php if( get_field('link_do_video') ): ?>
    <section class="video d-none d-md-block">        
        <div class="container">
            <div class="player">
            <?php $image = get_field( 'imagem_de_capa_do_video' );
            echo wp_get_attachment_image($image['id'], 'full' ); ?>            
            <a href="<?php the_field('link_do_video'); ?>" data-lity><img src="<?php echo get_template_directory_uri(); ?>/assets/img/play.png" alt="Botão de tocar vídeo"></a>
                    
            </div>
        </div>
    </section>
<?php endif; ?>