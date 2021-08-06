<!DOCTYPE HTML>
<html>
    <head>

        <?php
        include_once("../../init.php");
        $pagetitle = "Ddeveloperz: Our Portfolio";
        $description = "Your Meta Description";
        $keywords = "Your Keywords";
        include_once(BASE_PATH."includes/dependencies.php");
        ?>
        <?php

        $project_name = "delicate-gem";
        $project_url = "http://delicategem.com";
        $bg_color = "#6493CE";
$prev_project_name = "fine-tuxedos";
        $next_project_name = "brpaper";
        $project_color = "background: $bg_color;";

        $project_overview = "A diamond is just a piece of charcoal that handled stress exceptionally well.";
        $project_type = "E-commerce Jewelery store";
        $project_services ='<ul>
            <li>Adaptive Website Design</li>
            <li>PSD-HTML Slicing</li>
        </ul>';
        $project_description = ' <h5>Find The Perfect Setting</h5>
        <p>
          Delicate Gem carries a wide variety of gorgeous diamonds and gemstones, and will walk you every step required to ensure you receive the ring of your dreams. We stock only the highest quality products, and will provide you with a ring that is sure to shine</p>';
        ?>
    </head>
    <?php
    include_once(BASE_PATH."includes/single-portfolio.php");
    ?>
</html>
