<?php

/**
 * Description of PagesController
 *
 * @author emersonsoares
 */
class PagesController extends AppController {

    public $uses = array('Verse', 'Page', 'Post');

    public function index() {
        $this->set('posts', $this->Post->find('all', array(
                    'conditions' => array(
                        'Post.status = ' => 'Active',
                        'Post.featured = ' => 'No'),
                    'order' => 'Post.created DESC',
                    'limit' => 3
                )));

        $this->Set('featuredPosts', $this->Post->find('all', array(
                    'conditions' => array(
                        'Post.status = ' => 'Active',
                        'Post.featured = ' => 'Yes'),
                    'order' => 'Post.created DESC',
                    'limit' => 10
                )));
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

    public function location() {
        $page = $this->Page->read(null, '2');
        $this->set('page', $page);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $page['Page']['title']);
    }

}

?>
