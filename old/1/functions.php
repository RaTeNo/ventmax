<?php
register_nav_menus(
  array(
    'primary'=>__('Верхнее Меню'),
    'footer_serv'=>__('Подвал услуги'),
    'footer_napr'=>__('Подвал направления'),
    'footer_stat'=>__('Подвал cтатьи'),
    'footer_about'=>__('Подвал о компании'),
  )
);
add_theme_support('post-thumbnails');
if ( function_exists('add_theme_support') ) {
    add_theme_support('post-thumbnails');
    add_image_size( 'cat_thumb', 460, 460, true );
    add_image_size( 'proj_thumb', 348, 220, true );
    add_image_size( 'cat_thumb_mob', 570, 300, true );
}
function new_excerpt_length($length) {
   return 30;
}
function new_excerpt_more($more) {
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
add_filter('excerpt_length', 'new_excerpt_length');


/*
 * Навигация
*/
function wp_corenavi() {
  global $wp_query;
  $total = isset( $wp_query->max_num_pages ) ? $wp_query->max_num_pages : 1;
  $a['total'] = $total;
  $a['mid_size'] = 8; // сколько ссылок показывать слева и справа от текущей
  $a['end_size'] = 1; // сколько ссылок показывать в начале и в конце
  $a['prev_text'] = '<'; // текст ссылки "Предыдущая страница"
  $a['next_text'] = '>'; // текст ссылки "Следующая страница"
  $a['type'] = 'list';
  
  if ( $total > 1 ) echo '<div class="articles__pagination pagination">';
  echo paginate_links( $a );
  if ( $total > 1 ) echo '</div>';
}

function CPT_init(){
    register_post_type('custcpt', array(
        'labels'            =>  array(
            'name'          =>      __('Проекты'),
            'singular_name' =>      __('projects'),
            'all_items'     =>      __('Проекты'),
            'add_new'       =>      __('Новый Проект'),
            'add_new_item'  =>      __('Новый Проект'),
            'edit_item'     =>      __('Редактировать Проект'),
            'view_item'     =>      __('Смотреть Проект'),
            'search_items'  =>      __('Поиск Проекта'),
            'no_found'      =>      __('No Products Found'),
            'not_found_in_trash' => __('No Products in Trash')
                                ),
        'public'            =>  true,
        'publicly_queryable'=>  true,
        'show_ui'           =>  true, 
        'query_var'         =>  true,
        'show_in_nav_menus' =>  false,
        'capability_type'   =>  'post',
        'hierarchical'      =>  false,
        'rewrite'           =>  array('slug' => 'projects', 'with_front' => true),
        'menu_position'     =>  21,
        'supports'          =>  array('title','editor', 'thumbnail','excerpt','custom-fields'),
        'has_archive'       =>  true
    ));
}
flush_rewrite_rules();

add_action('init', 'CPT_init');


function custcpt_category_taxonomy() {
    $labels = array(
        'name'              => __( 'Категории проектов' ),
        'singular_name'     => __( 'projectscategory' ),
        'search_items'      => __( 'Search Product Categories' ),
        'all_items'         => __( 'All Product Categories' ),
        'parent_item'       => __( 'Parent Product Category' ),
        'parent_item_colon' => __( 'Parent Product Category:' ),
        'edit_item'         => __( 'Edit Product Category' ), 
        'update_item'       => __( 'Update Product Category' ),
        'add_new_item'      => __( 'Добавить новую' ),
        'new_item_name'     => __( 'New Product Category' ),
        'menu_name'         => __( 'Категории Проект' ),
    ); 
    $args = array(
        'labels'            => $labels,
        'public'            =>  true,
        'hierarchical'      =>  true,
        'show_in_nav_menus' =>  true,
        'has_archive'       =>  true,
        'rewrite'           =>  array('slug' => 'projects', 'with_front' => true),
    );
    register_taxonomy( 'custtax', 'custcpt', $args );
}
add_action( 'init', 'custcpt_category_taxonomy');


/*
add_action('wp_ajax_myfilter', 'misha_filter_function'); // wp_ajax_{ACTION HERE} 
add_action('wp_ajax_nopriv_myfilter', 'misha_filter_function');
 
function misha_filter_function(){

	// for taxonomies / categories
	if( $terms = get_terms( array( 
    'taxonomy' => 'custtax', 
    'orderby' => 'name',
    'slug' => '',
    'post_type' => 'post',
	) ) ) :  ?>
<div class="project__wrapper">
	<?php foreach ( $terms as $term ) : ?>
                    <div class="project__card">
                        <?php if ( has_post_thumbnail() ) { ?>
                            <img src="<?php the_post_thumbnail_url('proj_thumb'); ?>" alt="project__img" class="project__img">
                        <?php } ?>
                        <div class="project__describe">
                            <?php the_title(); ?>
                        </div>
                        <div class="project__overlay">
                            <h5 class="project__tittle">
                                <?php the_title(); ?>
                            </h5>
                            <div class="project__square">
                                <?php 
                                  global $wp_query;
                                  $postid = $wp_query->post->ID;
                                  echo get_post_meta($postid, 'price', true);
                                ?>
                            </div>
                            <div class="project__text">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="projects__link">
                                Подробнее <img src="<?php bloginfo('template_directory'); ?>/img/page-projects/Arrow_1.png" alt="arrow">
                            </a>
                        </div>
                    </div>
  <?php 
	endforeach; ?>
</div>
<?php wp_reset_postdata(); endif;
	die();
}
*/
?>