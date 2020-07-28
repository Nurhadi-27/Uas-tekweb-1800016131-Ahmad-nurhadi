 <?php
    defined('BASEPATH') or exit('No direct script access allowed');
    class Komik extends BD_Controller
    {
        public function komik_get()
        {
            $data = $this->db->get('komik');
            $this->response($data->result(), 200);
        }
        public function komik_post()
        {
            $data = $this->post();
            $result = $this->db->insert('komik', $data);
            $this->response($result, 200);
        }
        public function komik_put()
        {
            $data = $this->put();
            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $result = $this->db->update('komik', $data);
            $this->response($result, 200);
        }
        public function komik_delete()
        {
            $id = $this->uri->segment(3);
            $this->db->where('id', $id);
            $result = $this->db->delete('komik');
            $this->response($result, 200);
        }
    }
