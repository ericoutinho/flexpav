<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage flexpav
 * @since flexpav 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>Flex Pav - Asfalto frio de alta tecnologia e qualidade</title>
    <meta name="title" content="Flex Pav - Asfalto frio de alta tecnologia e qualidade">
    <meta name="description" content="Conheça o sistema de pavimentação com foco na sustentabilidade, economia e durabilidade que já está presente em todo o território nacional.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://flexpav.com.br">
    <meta property="og:title" content="Flex Pav - Asfalto frio de alta tecnologia e qualidade">
    <meta property="og:description" content="Conheça o sistema de pavimentação com foco na sustentabilidade, economia e durabilidade que já está presente em todo o território nacional.">
    <meta property="og:image" content="<?= get_template_directory_uri(); ?>/assets/flexpav-meta-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://flexpav.com.br">
    <meta property="twitter:title" content="Flex Pav - Asfalto frio de alta tecnologia e qualidade">
    <meta property="twitter:description" content="Conheça o sistema de pavimentação com foco na sustentabilidade, economia e durabilidade que já está presente em todo o território nacional.">
    <meta property="twitter:image" content="<?= get_template_directory_uri(); ?>/assets/flexpav-meta-image.jpg">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/site.webmanifest">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/styles/main.css">
    <script src="<?= get_template_directory_uri(); ?>/scripts/main.js" defer></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>