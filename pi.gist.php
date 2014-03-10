<?php
class Plugin_gist extends Plugin {

  var $meta = array(
    'name'       => 'Gist',
    'version'    => '0.9.1',
    'author'     => 'Jack McDade',
    'author_url' => 'http://jackmcdade.com'
  );

  static public function __callStatic($method, $args) {
    return "<script src=\"http://gist.github.com/{$method}.js\"></script>";
  }

  public function index() {
  	$id = $this->fetchParam('id', '');
  	$file = $this->fetchParam('file', '');

    return "<script src=\"http://gist.github.com/{$id}.js" . ($file == '' ? '' : '?file=' . $file) . "\"></script>";
  }

}