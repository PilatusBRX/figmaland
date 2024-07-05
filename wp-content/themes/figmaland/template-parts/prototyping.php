 <section id="prototyping" class="prototyping">
            <div class="container">
               <div class="row">
                <div class="prototyping__img col-xs-12 col-md-7 d-none d-md-block">
                   <?php if( get_field('imagem_prototyping') ): ?>
                        <img src="<?php the_field('imagem_prototyping'); ?>" alt="<?php the_field('titulo_prototyping'); ?>"/>
                    <?php endif; ?>
                </div>
                <div class="prototyping__subscribe col-xs-12 col-md-5">
                 <?php if( get_field('titulo_prototyping') ): ?>
                    <h3 class="prototyping__subscribe--title"><?php the_field('titulo_prototyping'); ?></h3>
                <?php endif; ?>
                 <?php if( get_field('texto_prototyping') ): ?>
                    <h2 class="prototyping__subscribe--text"><?php the_field('texto_prototyping'); ?></h2>
                 <?php endif; ?>

                    <div class="prototyping__img prototyping__img--mobile  d-block d-md-none">
                         <?php if( get_field('imagem_prototyping') ): ?>
                        <img src="<?php the_field('imagem_prototyping'); ?>" alt="<?php the_field('titulo_prototyping'); ?>"/>
                        <?php endif; ?>
                    </div>                        
                
                    <div class="prototyping__form">
                        <h3 class="prototyping__form--title">Subscribe to our Newsletter</h3>
                        <p class="prototyping__form--text">Available exclusivery on Figmaland</p>
                        <form action="" id="form-marketing">
                            <input type="text" name="name" placeholder="Your Email" class="input-text" />
                            <button class="btn btn-form">Subscribe</button>
                        </form>
                    </div>
                
                </div>
               </div>
            </div>
        </section>