<?php
class Plugin_gist extends Plugin {

  var $meta = array(
    'name'       => 'Gist',
    'version'    => '0.9',
    'author'     => 'Jack McDade',
    'author_url' => 'http://jackmcdade.com'
  );

  static public function __callStatic($method, $args) {
    return "<script src=\"http://gist.github.com/{$method}.js\"></script>";
  }

}