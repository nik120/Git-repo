<html>
<body>
<?php

$navItems = array(
				
                array(
                    "slug"	=> "index.php",
                    "title"	=> "Home"
                ),
            
                array(
                    "slug"	=> "team.php",
                    "title"	=> "Team"
                ),
                
                array(
                    "slug"	=> "menu.php",
                    "title"	=> "Menu"
                ),
                
                array(
                    "slug"	=> "contact.php",
                    "title"	=> "Contact"
                ),
            
            );
            <ul>
            
                foreach ($navItems as $item) {
                    echo "<li><a href=\"$item['slug']\">$item['title']</a></li>";
                }
            
        </ul>
?>
</body>
</html>
