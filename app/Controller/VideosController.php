<?php

/**
 * Description of VideosController
 *
 * @author emersonsoares
 */
class VideosController extends AppController {
    
    public $helpers = array('Video');

    public function index() {
        $this->paginate = array(
            'conditions' => array(
                'Video.status' => 'Active',
                'Video.created <= ' => date('Y-m-d H:i:s')
            ),
            'limit' => 5,
            'order' => array('Video.created' => 'DESC')
        );
        $this->set('videos', $this->paginate('Video'));
        $this->set('title_for_layout', 'Projeto Vida Nova | Videos');
    }
    
    public function view($id = null) {
        $this->Video->id = $id;
        if (!$this->Video->exists()) {
            throw new NotFoundException(__('Invalid post'));
        }
        $video = $this->Video->read(null, $id);
        $this->set('video', $video);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $video['Video']['title']);
    }

}

?>
