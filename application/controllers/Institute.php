<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Institute extends CI_Controller{
public function index(){

$this->load->view('Institute_selection');

$checked = $this->input->post('course');
if(!empty($checked))
	{
		
	if(in_array('iitm',$checked) && in_array('iitd1',$checked) && in_array('iitd2',$checked) && in_array('ism',$checked))
		{
		echo "IITM & IITD & ISM";
		}		
		elseif(in_array('iitm',$checked) && in_array('iitd1',$checked) && in_array('iitd2',$checked))
		{
		echo "IITM & IITD";
		}
		elseif(in_array('iitm',$checked) && in_array('iitd1',$checked))
		{
		echo "IITM & IITD";
		}
		elseif(in_array('iitm',$checked) && in_array('iitd2',$checked))
		{
		echo "IITM & IITD";
		}
				elseif(in_array('iitm',$checked) && in_array('ism',$checked))
				{
				echo "IITM & ISM";
				}
				elseif(in_array('ism',$checked) && in_array('iitd1',$checked) && in_array('iitd2',$checked))
				{
				echo "IITD & ISM";
				}
				elseif(in_array('ism',$checked) && in_array('iitd1',$checked))
				{
				echo "IITD & ISM";
				}				
				elseif(in_array('ism',$checked) && in_array('iitd2',$checked))
				{
				echo "IITD & ISM";
				}
						
						elseif(in_array('iitm',$checked))
						{
						echo "IITM";
						}	
						elseif(in_array('ism',$checked))
						{
						echo "ISM";
						}
						elseif(in_array('iitd1',$checked) && in_array('iitd2',$checked))
						{
						echo "IITD";
						}
						elseif(in_array('iitd1',$checked) || in_array('iitd2',$checked))
						{
						echo "IITD";
						}
	}
}

}


?>
