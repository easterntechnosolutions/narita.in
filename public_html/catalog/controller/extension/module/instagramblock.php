<?php
class ControllerExtensionModuleInstagramBlock extends Controller {
	public function index($setting) {

		$this->load->language('extension/module/instagramblock');

		$data['username'] = $setting['username'];
		$data['userid'] = $setting['userid'];
		$data['accesstoken'] = $setting['accesstoken'];
		$data['sortby'] = $setting['sortby'];

		$language_id = $this->config->get('config_language_id');
		if(isset($setting['title'][$language_id])){
			$data['title'] = $setting['title'][$language_id];
		}
		return $this->load->view('extension/module/instagramblock', $data);
	}
}