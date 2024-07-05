
<section id="organize" class="organize">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-6 organize-block">
                <?php if( get_field('titulo_organize') ): ?>
                    <h2 class="organize__title"><?php the_field('titulo_organize'); ?></h2>
                <?php endif; ?>
                <?php if( get_field('texto_organize') ): ?>
                    <h4 class="organize__text"><?php the_field('texto_organize'); ?></h4>
                <?php endif; ?>                        
                    <?php 
                    $link = get_field('botao_organize');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn organize__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
                                        </div>
                <div class="col-xs-12 col-lg-6">
                <?php $image = get_field('imagem_organize');
                    echo wp_get_attachment_image($image['id'], 'full' ); ?>
            </div>
        </div>
    </div>
</section>