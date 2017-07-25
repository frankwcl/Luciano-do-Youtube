<?
    if(have_posts()) : while(have_posts()) : the_posts();
?>
<h1><? the_title(); ?></h1>
<? the_content(); ?>
<?
    endwhile();
    else:
?>
<p>NÃO TEM NADA AQUI SUA D E G R A Ç A !!!<p>
<?
    endif;
?>