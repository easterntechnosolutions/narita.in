<?php
class ControllerExtensionModuleCareerBlock extends Controller {
	public function index($setting) {

		$this->load->model('tool/image');
		$language_id = $this->config->get('config_language_id');

		$langauage=$this->config->get('config_language_id');
		
		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		if(isset($setting['subtitle'][$language_id])){
			$data['subtitle'] = $setting['subtitle'][$language_id];
		}

		if(!empty($setting['banner1'])) {
			if ($this->request->server['HTTPS']) {
				$data['banner1'] = $this->config->get('config_ssl') . 'image/' . $setting['banner1'];
			} else {
				$data['banner1'] = $this->config->get('config_url') . 'image/' . $setting['banner1'];
			}
		}

		if (isset($setting['module_description'])) {

			$data['html'] = html_entity_decode($setting['module_description'][$langauage]['description'], ENT_QUOTES, 'UTF-8');

		}
		
		$data['bgcolor'] = $setting['bgcolor'];
		$ishitestimonials = array();
		
		if(isset($setting['ishitestimonial'][$language_id])){
			$ishitestimonials = $setting['ishitestimonial'][$language_id];
		}
		$data['random_id'] = 'ishitesimonial-' . rand();
		$data['ishitestimonials'] = array();
		foreach ($ishitestimonials as $ishitestimonial) {
			$data['ishitestimonials'][] = array(
				'username'  => $ishitestimonial['username'],
				'description' => html_entity_decode($ishitestimonial['description'], ENT_QUOTES, 'UTF-8'),
			);
		}

		return $this->load->view('extension/module/careerblock', $data);
	}

}