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
         $bg_color = "#13205e";

        $project_color = "background: $bg_color;";
        $project_name = "fine-tuxedos";
        $project_url = "http://finetuxedos.com";
$prev_project_name = "scholl-bikes";
        $next_project_name = "delicate-gem";
        $project_overview = "Being a true gentleman never goes out of fashion.";
        $project_type = "Mens apparel e-commerce store";
        $project_services ='<ul>

            <li>Website Design</li>
            <li>PSD-HTML slice</li>
        </ul>';
        $project_description = ' <h5>Total commitment to customer satisfaction</h5>
        <p>
          Fine Tuxedos sells tuxedos and men’s formal wear accessories. Fine Tuxedos offers all the best and most popular brands like Calvin Klein, Ralph Lauren and Joseph Abboud. Fine Tuxedos offers a variety of tuxedo styles so there is sure to be the perfect one for everyone and for every occasion.</p>';
        ?>
    </head>
    <?php
    include_once(BASE_PATH."includes/single-portfolio.php");
    ?>
</html>
