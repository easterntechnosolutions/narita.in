<?php
class ControllerExtensionModuleDiscountBlock extends Controller {
	public function index($setting) {
		
		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');
		$ishiservices = array();
		$data['bg_color'] = $setting['bg_color'];
		
		if(isset($setting['service'][$language_id])){
			$ishiservices = $setting['service'][$language_id];
		}

		if(!empty($setting['bgimage'])) {
			if ($this->request->server['HTTPS']) {
				$data['bgimage'] = $this->config->get('config_ssl') . 'image/' . $setting['bgimage'];
			} else {
				$data['bgimage'] = $this->config->get('config_url') . 'image/' . $setting['bgimage'];
			}
		}

		$data['banner1_link'] = $setting['ishi_banner1_link'];

		if(isset($setting['title1'][$language_id])){
			$data['title1'] = $setting['title1'][$language_id];
		}

		if(isset($setting['btntitle1'][$language_id])){
			$data['btntitle1'] = $setting['btntitle1'][$language_id];
		}
		
		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		
		return $this->load->view('extension/module/discountblock', $data);
	}
}