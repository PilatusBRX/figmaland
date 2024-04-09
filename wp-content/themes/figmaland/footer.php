<footer>
    <div class="container">
      <div class="row column">
        <div class="col-xs-12 col-lg-2 column__pages">
            <h3 class="col-md column__pages--title">Páginas</h3>
           <?php
                wp_nav_menu( array(
                'theme_location' => 'bloco-1',
                'container' => 'nav',
                'container_class' => ''
                ) );
                ?>
           
        </div>
        <div class="col-xs-12 col-lg-2 column__pages">
            <h3 class="column__pages--title">Autores</h3>
             <?php
                wp_nav_menu( array(
                'theme_location' => 'bloco-2',
                'container' => 'nav',
                'container_class' => ''
                ) );
                ?>
            
        </div>
        <div class="col-xs-12 col-lg-2 column__pages">
            <h3 class="col-md column__pages--title">Páginas</h3>
            <?php
                
                wp_nav_menu( array(
                'theme_location' => 'bloco-3',
                'container' => 'nav',
                'container_class' => ''
                ) );
                ?>           
        </div>      
        
        <div class="col-xs-12 col-lg-4  column__pages">        
           <?php if ( is_active_sidebar( 'footer_widget' ) ) : ?>
                <?php dynamic_sidebar( 'footer_widget' ); ?>
            <?php endif; ?>            
                      
        </div>
      </div>
    </div>
   </footer>

<?php wp_footer(); ?>

</body>
</html>
