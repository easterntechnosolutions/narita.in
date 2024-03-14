<?php
class ControllerExtensionModuleProductServicesBlock extends Controller {
	public function index($setting) {
		
		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		$ishiservices = array();
		
		
		if(isset($setting['service'][$language_id])){
			$ishiservices = $setting['service'][$language_id];
		}
		
		if(!empty($setting['image'])) {
			if ($this->request->server['HTTPS']) {
				$data['bgimage'] = $this->config->get('config_ssl') . 'image/' . $setting['image'];
			} else {
				$data['bgimage'] = $this->config->get('config_url') . 'image/' . $setting['image'];
			}
		}
		
		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		if(isset($setting['subtitle'][$language_id])){
			$data['subtitle'] = $setting['subtitle'][$language_id];
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
				'title' => $ishiservice['title'],
				'desc' => $ishiservice['desc']
			);
		}
		
		return $this->load->view('extension/module/productservicesblock', $data);
	}
}