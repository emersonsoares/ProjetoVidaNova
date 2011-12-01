<?php

/**
 * Description of CalendarsController
 *
 * @author emersonsoares
 */
class CalendarsController extends AppController {
    
    public function index() {
        $months = $this->Calendar->find('all', array(
            'fields' => array('MONTH(Calendar.date) as month'),
            'conditions' => array('YEAR(Calendar.date) = ' => date('Y')),
            'group' => array('MONTH(Calendar.date)'),
            'order' => array('Calendar.date DESC')
                ));

        foreach ($months as $key => $value) {
            $dataCalendar[$value[0]['month']] = $this->Calendar->find('all', array(
                'conditions' => array(
                    'MONTH(Calendar.date)' => $value[0]['month'],
                    'YEAR(Calendar.date) =' => date('Y'))
                    ));
        }

        $this->set('title_for_layout', 'Projeto Vida Nova | Agenda');
        $this->set('dataCalendar', $dataCalendar);
    }

}

?>
