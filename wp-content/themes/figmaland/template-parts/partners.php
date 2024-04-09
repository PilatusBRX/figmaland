 <?php 
    $parceiros = new WP_Query(array(
    'paged' => get_query_var('paged'),
    'posts_per_page' =>  -1,
    'post_type' => 'parceiro',                            
    'orderby' => 'meta_value_num',
    'order' => 'ASC',                           
  ));?>  
     
   
   <section id="partners" class="partners">
            <div class="container">
                <?php if( get_field('titulo_partners') ): ?>
                    <h2 class="partners__title"><?php the_field('titulo_partners'); ?></h2>
                <?php endif; ?>
                
                <?php if( get_field('texto_partners') ): ?>
                    <h4 class="partners__text"><?php the_field('texto_partners'); ?></h4>
                <?php endif; ?>
                 <!-- Bloco de empresas parceiras-->   
                <div class="flex partners__brands">
                    <?php while($parceiros->have_posts()){
                      $parceiros->the_post();?>
                    <div class="partners__brands--item">                       
                           <h6><?php the_field('titulo_parceiro') ;?></h6>                      
                           <img src="<?php the_field('imagem_parceiro'); ?>" alt="<?php the_field('titulo_parceiro') ;?>"/>                       
                    </div>           
                    <?php } 
                    wp_reset_postdata();
                    ?>        
                </div>
                             
                <?php 
                    $link = get_field('botao_da_secao_partners');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="btn partners__btn" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                    <?php endif; ?>
            </div>
        </section>