<?php
    $pageTitle = "My Projects";
    $pageHeader = "Software & Video Projects";
?>
<html>
    <head>
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
        <a href="index.php">Home</a> | 
        <a href="projects.php">Projects</a> | 
        <a href="contact.php">Contact</a>
        <br><br>

        <hr>

        <h1><?php echo $pageHeader; ?></h1>
        
        <table width="100%" cellpadding="10">
            <tr>
                <td width="60%" valign="top">
                    <p>This page showcases my recent work.</p>
                    <br>
                    <p>Here you will find my early programming assignments in C++, as well as my video editing projects using tools like DaVinci Resolve and CapCut</p>
                </td>
                <td width="40%" align="center" valign="top">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdVxJGZOIBOVKPhJPuooo4Nl0cWQrrx4YQvVnBY0IzF381DdfABST3Byg&s=10" alt="Code" width="300">
                </td>
            </tr>
        </table>

        <hr>
        
    </body>
</html>