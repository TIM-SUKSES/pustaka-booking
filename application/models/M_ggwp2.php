<?php
class M_ggwp2 extends CI_Model {
    public function sedot_data() {
        return $this->db->get('webpro2')->result_array();
    }
}

?>