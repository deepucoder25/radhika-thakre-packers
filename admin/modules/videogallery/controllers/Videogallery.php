<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Videogallery extends MX_Controller
{
    function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username')) { redirect('login'); }
        $this->load->model('videogallery_mdl');
    }

    function index()
    {
        $this->load->view('index');
    }

    private function cleanVideoUrl(string $input): string
    {
        $input = trim($input);

        // If user pasted iframe tag, extract src
        if (preg_match('/src=["\']([^"\']+)["\']/i', $input, $srcMatch)) {
            $input = trim($srcMatch[1]);
        }

        // YouTube Shorts: https://www.youtube.com/shorts/VIDEO_ID
        if (preg_match('/youtube\.com\/shorts\/([a-zA-Z0-9_-]+)/i', $input, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        // YouTube Watch, Share or Embed
        if (preg_match('/(?:youtube\.com\/(?:watch\?.*v=|embed\/)|youtu\.be\/)([a-zA-Z0-9_-]+)/i', $input, $matches)) {
            return 'https://www.youtube.com/embed/' . $matches[1];
        }

        // Vimeo: vimeo.com/VIDEO_ID
        if (preg_match('/vimeo\.com\/(?:channels\/(?:\w+\/)?|groups\/([^\/]*)\/videos\/|album\/(\d+)\/video\/|video\/|)(\d+)/i', $input, $matches)) {
            return 'https://player.vimeo.com/video/' . end($matches);
        }

        return $input;
    }

    function video_upload()
    {
        $rawUrl = trim($_POST['video_url'] ?? '');
        if (empty($rawUrl)) {
            echo "Please enter a valid Video URL.";
            return;
        }

        $data = [];
        $data['title'] = !empty($_POST['title']) ? trim($_POST['title']) : 'Relocation Operation Video';
        $data['video_url'] = $this->cleanVideoUrl($rawUrl);

        if (!empty($_POST['auto_id'])) {
            $where['auto_id'] = $_POST['auto_id'];
            echo $this->videogallery_mdl->update_data($where, $data);
        } else {
            $data['status'] = 1;
            echo $this->videogallery_mdl->add_data($data);
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

        $return = $this->videogallery_mdl->view_data($where, $select);
        $this->output->set_content_type('application/json')->set_output(json_encode($return->result_array()));
    }

    function delete_data()
    {
        if (isset($_GET['id']) && $_GET['id']) {
            $where['auto_id'] = $_GET['id'];
            echo $this->videogallery_mdl->delete_data($where);
        } else {
            echo "Not Deleted";
        }
    }

    function update_status()
    {
        if (isset($_GET['id']) && $_GET['id'] && isset($_GET['status'])) {
            $where['auto_id'] = $_GET['id'];
            $data['status'] = $_GET['status'];
            echo $this->videogallery_mdl->update_data($where, $data);
        } else {
            echo "invalid Request";
        }
    }
}
