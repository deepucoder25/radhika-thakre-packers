<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('gallery_mdl');
    }

    function index()
    {
        $this->load->view('index');
    }

    function image_upload()
    {
        $data = array();
        $data['title'] = isset($_POST['title']) ? trim($_POST['title']) : '';
        $data['album_id'] = 0;
        $data['album_name'] = 'General';
        
        if (!empty($_FILES['image']['name']) && !empty($_FILES['image']['tmp_name'])) {
            $file = $_FILES['image'];
            if ($file['error'] !== UPLOAD_ERR_OK) {
                echo "File upload error code: " . $file['error'];
                return;
            }

            $allowed = ['jpg', 'jpeg', 'png', 'gif', 'webp', 'pdf'];
            $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
            if (!in_array($ext, $allowed)) {
                echo "Invalid image type. Allowed: JPG, PNG, WEBP, GIF";
                return;
            }

            // Target directories in public/assets/uploads/gallery/
            $uploadDir = FCPATH . 'assets/uploads/gallery/';
            $thumbDir  = FCPATH . 'assets/uploads/gallery/thumb/';

            if (!is_dir($uploadDir)) {
                @mkdir($uploadDir, 0777, true);
            }
            if (!is_dir($thumbDir)) {
                @mkdir($thumbDir, 0777, true);
            }

            $rand_number = mt_rand(10, 99);
            $timestamp = time();
            $newFileName = $rand_number . $timestamp . '.' . $ext;

            $destFull  = $uploadDir . $newFileName;
            $destThumb = $thumbDir . $newFileName;

            if (move_uploaded_file($file['tmp_name'], $destFull)) {
                @copy($destFull, $destThumb);
                $data['image'] = $newFileName;
            } else {
                echo "Failed to save uploaded image. Check directory write permissions.";
                return;
            }
        }

        if (!empty($_POST['auto_id'])) {
            $where['auto_id'] = $_POST['auto_id'];
            echo $this->gallery_mdl->update_data($where, $data);
        } else {
            if (empty($data['image'])) {
                echo "Please select an image file to upload.";
                return;
            }
            $data['status'] = 1;
            echo $this->gallery_mdl->add_data($data);
        }
    }
   
    function view_data()
    {
        if (isset($_GET['id']))
            $where['auto_id'] = $_GET['id'];
        else 
            $where = null;
        
        if (isset($_GET['data']))
            $select = $_GET['data'];
        else 
            $select = "*";
	    
        $return = $this->gallery_mdl->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id'])
        {
            $this->db->where('auto_id', $_GET['id']);
            $res = $this->db->get("gallery");
            if ($res) {
                foreach ($res->result() as $row)
                {
                    $img = $row->image ?? '';
                    if ($img) {
                        $p1 = FCPATH . "assets/uploads/gallery/$img";
                        $p2 = FCPATH . "assets/uploads/gallery/thumb/$img";
                        if (file_exists($p1)) @unlink($p1);
                        if (file_exists($p2)) @unlink($p2);
                    }
                }
            }
            $where['auto_id'] = $_GET['id'];
            echo $this->gallery_mdl->delete_data($where);
        } else {
            echo "Not Deleted";
        }
    }

    function update_status()
    {
        if (isset($_GET['id']) && $_GET['id'] && isset($_GET['status']))
        {
            $where['auto_id'] = $_GET['id'];
            $data['status'] = $_GET['status'];
            echo $this->gallery_mdl->update_data($where, $data);
        } else {
            echo "invalid Request";
        }
    }

    function update_album_names($where, $name)
    {
        $data['album_name'] = $name;
        return $this->gallery_mdl->update_data($where, $data);
    }
}
