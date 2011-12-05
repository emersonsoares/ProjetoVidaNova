<?php

/**
 * Description of CustomPagesController
 *
 * @author emersonsoares
 */
class CustomPagesController extends AppController {

    public $uses = array('Verse', 'CustomPage', 'Post');

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
        $about = $this->CustomPage->read(null, '1');
        $this->set('about', $about['CustomPage']['alternative_content']);
    }

    public function location() {
        $customPage = $this->CustomPage->read(null, '2');
        $this->set('customPage', $customPage);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $customPage['CustomPage']['title']);
    }

    public function view($id = null) {
        $this->CustomPage->id = $id;
        if (!$this->CustomPage->exists()) {
            throw new NotFoundException(__('Invalid Custom Page'));
        }
        $customPage = $this->CustomPage->read(null, $id);
        $this->set('customPage', $customPage);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $customPage['CustomPage']['title']);
    }

}

?>
