<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Education_det extends CI_Controller{
    public function index(){

	$this->load->view('education');
	$this->load->database();

	if($this->input->post('datasubmit'))
	{
	$this->load->model('Education_mod');
	$data = array(
	'sscper' => $this->input->post('sper'),
	'sscboard' => $this->input->post('sssc'),
	'sscyear' => $this->input->post('syear'),
	'hscper' => $this->input->post('hper'),
	'hscboard' => $this->input->post('hhsc'),
	'hscyear' => $this->input->post('hyear'),
	'degreeclass' => $this->input->post('grade'),
	'marktype' => $this->input->post('percentage'),
	'degreeper' => $this->input->post('percen'),
	'university' => $this->input->post('university'),
	'degreename' => $this->input->post('degree'),
	'displine' => $this->input->post('discipline'),
	'degreeyear' => $this->input->post('yearcomple'),
	'degreeclass1' => $this->input->post('grade1'),
	'marktype1' => $this->input->post('percentage'),
	'degreeper1' => $this->input->post('percen1'),
	'university1' => $this->input->post('university1'),
	'degreename1' => $this->input->post('degree1'),
	'displine1' => $this->input->post('discipline1'),
  'degreeyear1' => $this->input->post('yearcomple1')
	);

	$this->Education_mod->edudb($data);
	$data['message'] = 'Data Inserted';
	$this->load->view('education',$data);
	}
	}
}
?>
