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
        $project_name = "angelinos-coffee";
        $prev_project_name = "brpaper";
        $next_project_name = "scholl-bikes";
        $bg_color = "#665a53";
        $project_url = "http://angelinos.com";
         $project_color = "background: $bg_color;";
        $project_overview = "Coffee should be black as hell, strong as death and sweet as love.


";
        $project_type = "E-commerce Coffee Manufacturer";
        $project_services ='<ul>
            <li>Website Design</li>
            <li>PSD-HTML Slice</li>

        </ul>';
        $project_description = "<h5>Angelino's promise</h5>
        <p>
            In the short startup's three year existence, thousands have tried Angelino's coffee, compelled by the freshly roasted gourmet coffee, low price point, easy ordering process and free delivery. Customers can setup auto-delivery or create one-time shipments, whichever that suits their needs. Customize shipments are very simple using the easy to use Control Panel available on the users page. Angelino's is also hard at work constantly making improvements, etc.</p>";
        ?>
    </head>
    <?php
    include_once(BASE_PATH."includes/single-portfolio.php");
    ?>
</html>
