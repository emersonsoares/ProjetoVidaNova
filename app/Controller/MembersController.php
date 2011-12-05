<?php
/**
 * Description of MembersController
 *
 * @author emersonsoares
 */
class MembersController extends AppController {
    public function index() {
        $this->paginate = array(
            'limit' => 5,
            'order' => array('Member.name' => 'ASC')
        );
        $this->set('members', $this->paginate('Member'));
        $this->set('title_for_layout', 'Projeto Vida Nova | Members');
    }
    
    public function view($id = null) {
        $this->Member->id = $id;
        if (!$this->Member->exists()) {
            throw new NotFoundException(__('Invalid member'));
        }
        $member = $this->Member->read(null, $id);
        $this->set('member', $member);
        $this->set('title_for_layout', 'Projeto Vida Nova | ' . $member['Member']['name']);
    }
}

?>
