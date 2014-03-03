<?PHP
class sys{
  function includeContent(){
    include(filterfilename("../content/articles/".$_GET['include']));
  }
}
?>