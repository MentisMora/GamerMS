<?php
  include("system/dbconnect.php");
  include("system/settings.php");
  include("system/classes/skincontroller.php");
  include("system/filterfilename.php");
  include("system/sys.php");
  include(SkinController::getCurrentSkinPath()."/index.php");
?>