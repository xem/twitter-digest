<?php
if(preg_match("{twitter}",$url=preg_replace("{^.*?url=}","",$_SERVER['REQUEST_URI'])))readfile($url);
else die("Bad URL");