<?php

/**
 * Posts Controller
 *
 */
class PostsController extends AppController {

    public function index() {
        $this->paginate = array(
            'conditions' => array(
                'Post.status' => 'Active',
                'Post.created <= ' => date('Y-m-d H:i:s')
            ),
            'limit' => 5,
            'order' => array('Post.created' => 'DESC')
        );
        $this->set('posts', $this->paginate('Post'));
        $this->set('title_for_layout', 'Projeto Vida Nova | Noticias');
    }

    public function view($id = null) {
        $this->Post->id = $id;
        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid post'));
        }
        $post = $this->Post->read(null, $id);
        $this->set('post', $post);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $post['Post']['title']);
    }

}

?>
