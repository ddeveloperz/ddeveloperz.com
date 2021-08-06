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
        $project_name = "brpaper";
        $prev_project_name = "delicate-gem";
        $next_project_name = "angelinos-coffee";
        $project_url = "http://brpaper.com";
        $bg_color = "#0078bf";
         $project_color = "background: $bg_color;";

        $project_overview = "Push yourself because, no one else is going to do it for you.";
        $project_type = "Study Portal";
        $project_services ='<ul>
            <li>Branding</li>
            <li>Front &amp; Back-end Development</li>
            <li>Back-office Design</li>
        </ul>';
        $project_description = ' <h5>Exam preparatory.</h5>
        <p>Brpaper is founded by a small team of engineers in 2011, who had the dream of digitalizing study material for University students. Started from Punjab Technical University, Regular course, they aims to add all universities of India. Their goal is to make Brpaper a biggest Indian study portal.</p>';
        ?>
    </head>
    <?php
    include_once(BASE_PATH."includes/single-portfolio.php");
    ?>
</html>
