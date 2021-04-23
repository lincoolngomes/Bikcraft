<?php $portfolio = get_page_by_title( 'portfolio'); ?>


<ul class="portfolio_lista">

<?php if(have_rows('item_portfolio', $portfolio)): while(have_rows('item_portfolio', $portfolio)) : the_row(); ?>
        <li class="grid-8"><img src="<?php the_sub_field('portfolio_imagem1', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao1', $portfolio); ?>"></li>
        <li class="grid-8"><img src="<?php the_sub_field('portfolio_imagem2', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao2', $portfolio); ?>"></li>
        <li class="grid-16"><img src="<?php the_sub_field('portfolio_imagem3', $portfolio); ?>" alt="<?php the_sub_field('portfolio_imagem_descricao3', $portfolio); ?>"></li>

 <?php endwhile; else : endif; ?>
</ul>
             
<?php if(!is_page('portfolio')) { ?>
<div class="call-to-action">
        <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
        <div><a href="/portfolio" class="btn">Portfólio</a></div>
      </div>
<?php } ?>