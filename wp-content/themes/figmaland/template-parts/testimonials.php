 <section id="testimonials" class="testimonials">
    <div class="container">
        <?php if( get_field('titulo_testimonials') ): ?>
            <h2 class="testimonials__title"><?php the_field('titulo_testimonials'); ?></h2>
        <?php endif; ?>     
        <div class="testimonials__slider">
            <?php if( get_field('logo_da_empresa') ): ?>
                <?php $image = get_field( 'logo_da_empresa' );
                echo wp_get_attachment_image($image['id'], 'full' ); ?>
            <?php endif; ?>
            <?php if( get_field('texto_testimonials') ): ?>
            <h4 class="testimonials__slider--text"><?php the_field('texto_testimonials'); ?></h4>
            <?php endif; ?>

            <div class="testimonials__slider--user">
                <?php if( get_field('imagem_do_usuario') ): ?>
                    <img src="<?php the_field('imagem_do_usuario'); ?>" alt="<?php the_field('nome_do_usuario'); ?>"/>
                <?php endif; ?>

                <div class="text-field">
                     <?php if( get_field('nome_do_usuario') ): ?>
                            <h6><?php the_field('nome_do_usuario'); ?></h6>
                    <?php endif; ?>
                     <?php if( get_field('profissao_do_usuario') ): ?>
                            <p><?php the_field('profissao_do_usuario'); ?></p>
                     <?php endif; ?>
                </div>
            </div>            
            <?php 
            $link = get_field('botao_testimonial');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn testimonials__slider--btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>