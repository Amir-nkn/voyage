<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
     <?php wp_head();?>
</head>

<body>
  


    <main class="global">
        <header>
            <div class="entete global">
                <figure class="entete__logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo_tuto.png'); ?>" alt="Logo">
            </a>

                </figure>
                <div class="entete__nav">
                <input type="checkbox" id="menu-toggle" class="menu-toggle">
                <label for="menu-toggle" class="menu-icon">&#9776;</label>
                
                        <?php wp_nav_menu(array(
                            "menu" => "principal",
                            "container" => "nav", 
                            "container_class" =>"entete__menu"
                        ));
                        ?>
                   
                   <form action="<?php echo esc_url(home_url('/')); ?>" method="get" class="recherche">
    <input type="search" name="s" class="recherche__input" placeholder="Rechercher..." value="<?php echo get_search_query(); ?>">
    <button type="submit" class="search-button">🔍</button>
</form>


                   
                </div>
            </div>
        </header>