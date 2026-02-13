<?php
use Classes\TemplateHierarchy\LoopSingle\LoopSingle;
get_header();
setPostViews(get_the_ID());
$loop_single = new LoopSingle();
//contabiliza visualizações de noticias
 /*echo getPostViews(get_the_ID());*/
get_footer();
?>
