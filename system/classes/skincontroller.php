<?PHP
class SkinController{

  function getCurrentSkinId(){
    return getSetting("selectedskin");
  }

  function getCurrentSkinName(){
    global $dbpraefix;
    $res = mysql_query("SELECT name FROM ".$dbpraefix."skins 
                        WHERE id = '".SkinController::getCurrentSkinId()."'");
    if($row = mysql_fetch_row($res)){
      return $row[0];
    }
    else{
      return "default";
    }
  }

  function getCurrentSkinPath(){
    return "system/skins/".SkinController::getCurrentSkinName();
  }
}
?>