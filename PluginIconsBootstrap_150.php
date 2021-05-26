<?php
class PluginIconsBootstrap_150{
  public function widget_svg($data){
    $data = new PluginWfArray($data);
    $attribute = new PluginWfArray($data->get('data/attribute'));
    $attribute->set('src', '/plugin/icons/bootstrap_150/'.$data->get('data/name').'.svg');
    wfDocument::renderElement(array(wfDocument::createHtmlElement('img', null, $attribute->get())));
  }
  public function widget_list(){
    $scan_dir = wfFilesystem::getScandir(wfGlobals::getWebDir().'/plugin/icons/bootstrap_150');
    $data = array();
    foreach($scan_dir as $v){
      $src = '/plugin/icons/bootstrap_150/'.$v;
      $data[] = array('img' => '<img src="'.$src.'">', 'name' => $v);
    }
    $element = new PluginWfYml(__DIR__.'/element/'.__FUNCTION__.'.yml');
    $element->setByTag(array('data' => $data));
    wfDocument::renderElement($element);
  }
}
