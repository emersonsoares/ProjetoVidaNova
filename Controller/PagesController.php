<?php

/**
 * Description of PagesController
 *
 * @author emersonsoares
 */
class PagesController extends AppController {

    public $uses = array('Verse', 'Page');

    public function index() {
        $this->set('title_for_layout', 'Projeto Vida Nova');
        $this->set('lastVerses', $this->Verse->find('all'));
        $about = $this->Page->read(null, '1');
        $this->set('about', $about['Page']['alternative_content']);
    }

    public function about() {
        $page = $this->Page->read(null, '1');
        $this->set('page', $page);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $page['Page']['title']);
    }

}

?>
