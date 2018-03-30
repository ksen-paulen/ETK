<?php
    $demoarray = array("acacia", "cerulean", "dominion", "graffito", "juxta", "metropolis", "panacea", "reaction", "stratos", "xenon", "acronym", "chapelco", "enigma", "hadron", "kinetic", "modulus", "paradigm", "reflex", "syndicate", "ximenia", "alerion", "chimera", "entropy", "halcyon", "kirigami", "momentum", "paradox", "requiem", "tachyon", "zephyr", "ambrosia", "citadel", "epsilon", "hexeris", "kraken", "myriad", "photon", "ricochet", "tessellate", "anacron", "clarion", "ethereal", "hybrid", "leviathan", "nebulae", "plethora", "salient", "topaz", "antares", "corvus", "fracture", "interstellar", "lexicon", "nuance", "praxis", "sienna", "vermilion", "audacity", "crystalline", "fresco", "ionosphere", "lumiere", "oculus", "protean", "sirocco", "versla", "callisto", "cygnet", "galatea", "iridescent", "maelstrom", "omnicron", "quantive", "somaxiom", "visage", "camber", "diametric", "gemini", "isotope", "mercado", "osmosis", "radiance", "spectral", "voxel");
    
    $s_serveralias ="";
    $s_subfolder = "demosites/";
    $s_serveradmin = "info@site-corp.ru";
    echo $_SERVER['DOCUMENT_ROOT']."<br>";
    
    foreach ($demoarray as $demosite) {
        $s_servername = $demosite.".site-corp.ru";
        $s_folder = $demosite;
        $file = $_SERVER['DOCUMENT_ROOT']."/sys/sites_avalible/".$demosite."-demo.conf";
        
        $tpl = '<VirtualHost *:80>
ServerName ' . $s_servername . '
' . $s_serveralias . '
ServerAdmin ' . $s_serveradmin . '
DocumentRoot /var/demowww/' . $s_subfolder . $s_folder . '
<Directory />
Options FollowSymLinks
AllowOverride All
</Directory>
<Directory /var/demowww/' . $s_subfolder . $s_folder . '/>
Options Indexes FollowSymLinks MultiViews
AllowOverride All
Order allow,deny
allow from all
</Directory>

ScriptAlias /cgi-bin/ /usr/lib/cgi-bin/
<Directory "/usr/lib/cgi-bin">
AllowOverride None
Options +ExecCGI -MultiViews +SymLinksIfOwnerMatch
Order allow,deny
Allow from all
</Directory>

ErrorLog ${APACHE_LOG_DIR}/error.log

# Possible values include: debug, info, notice, warn, error, crit,
# alert, emerg.
LogLevel warn

CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>';
        
        $fh = fopen($file, "w");
        fwrite($fh, $tpl);
        fclose($fh);
        echo $demosite." OK<br>";
    }
?> 
