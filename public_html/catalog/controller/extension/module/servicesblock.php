<?php
class ControllerExtensionModuleServicesBlock extends Controller {
	public function index($setting) {
		
		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		$ishiservices = array();
		
		
		if(isset($setting['service'][$language_id])){
			$ishiservices = $setting['service'][$language_id];
		}
		
		$column = $setting['column'];
		
		if($column == 1){
			$data['class'] = 'col-xs-12';
		}elseif($column == 2){
			$data['class'] = 'col-sm-6 col-xs-6';
		}elseif($column == 3){
			$data['class'] = 'col-lg-4 col-md-4 col-sm-6 col-xs-6';
		}else{
			$data['class'] = 'col-lg-3 col-md-3 col-sm-6 col-xs-6';
		}
		
		if(!empty($setting['bgimage'])) {
			if ($this->request->server['HTTPS']) {
				$data['bgimage'] = $this->config->get('config_ssl') . 'image/' . $setting['bgimage'];
			} else {
				$data['bgimage'] = $this->config->get('config_url') . 'image/' . $setting['bgimage'];
			}
		}

		$data['scale'] = (isset($setting['scale']) && $setting['scale'] == 1) ? 'scale' : '';

		if(!empty($setting['ishi_banner1_image'])) {
			if ($this->request->server['HTTPS']) {
				$data['banner1_image'] = $this->config->get('config_ssl') . 'image/' . $setting['ishi_banner1_image'];
			} else {
				$data['banner1_image'] = $this->config->get('config_url') . 'image/' . $setting['ishi_banner1_image'];
			}
			$data['banner1_link'] = $setting['ishi_banner1_link'];
		}
		
		foreach ($ishiservices as $ishiservice) {
			if(isset($ishiservice['image'])){
			$serviceiimage = $this->model_tool_image->resize($ishiservice['image'], $setting['width'], $setting['height']);
			}else{
				$serviceiimage = '';
			}
			$data['ishiservices'][] = array(
				'image' => $serviceiimage,
				'title' => $ishiservice['title']
			);
		}
		
		return $this->load->view('extension/module/servicesblock', $data);
	}
}