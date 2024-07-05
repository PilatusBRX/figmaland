 <div class="hero">
      <div class="img-field img-field--desktop">
            <?php $image = get_field( 'imagem_hero' );
            echo wp_get_attachment_image($image['id'], 'full' ); ?>
      </div>
      <div class="img-field img-field--mobile">
            <?php $image = get_field( 'imagem_hero_mobile' );
            echo wp_get_attachment_image($image['id'], 'full' ); ?>
      </div>
        <div class="hero__content">
            <?php if( get_field('titulo_hero') ): ?>
                <h1 class="hero__content--title"><?php the_field('titulo_hero'); ?></h1>
            <?php endif; ?>            
            <?php if( get_field('texto_hero') ): ?>
                <h4 class="hero__content--text"><?php the_field('texto_hero'); ?></h4>
            <?php endif; ?>
          
            <?php 
            $link = get_field('botao_hero');
            if( $link ): 
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn hero__content--btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
                
        </div>
    </div>