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
         $bg_color = "#B23941";

        $project_color = "background: $bg_color;";
        $project_name = "scholl-bikes";
        $project_url = "http://schollbikes.com";
$prev_project_name = "angelinos-coffee";
        $next_project_name = "fine-tuxedos";
        $project_overview = "Four wheels move the body, two wheels move the soul.";
        $project_type = "German Bicycle Branding";
        $project_services ='<ul>
            <li>Branding</li>
            <li>Web presence</li>
            <li>Graphics</li>
        </ul>';
        $project_description = ' <h5>Handcrafted Premium Bikes</h5>
        <p>
          Scholl promises to be the best companion ever.It opens up the world of possibilities by being a reliable commuter in all sorts of weather.Explore your fitness and physical capabilities by getting ready for a Scholl ride anywhere, on the road and off it.</p>';
        ?>
    </head>
    <?php
    include_once(BASE_PATH."includes/single-portfolio.php");
    ?>
</html>
