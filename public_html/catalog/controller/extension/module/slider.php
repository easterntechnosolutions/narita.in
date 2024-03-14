<?php
class ControllerExtensionModuleSlider extends Controller {
	public function index($setting) {
		static $module = 0;		
		
		$this->load->model('tool/image');
		$data['ishi_sliderimages'] = array();
		$data['ishi_randomnumer'] = "slider-" . rand();
		$imgs = $setting['ishi_image'];
		
		$data['autoplay'] = (isset($setting['autoplay']) && $setting['autoplay'] == '1') ? 'true' : 'false';
		
		$data['navigation'] = (isset($setting['navigation']) && $setting['navigation'] == '1') ? 'true' : 'false';
		$data['navigation_style'] = $setting['navigation_style'];
		$data['dot'] = (isset($setting['dot']) && $setting['dot'] == '1') ? 'true' : 'false';
		$data['dot_style'] = $setting['dot_style'];
		$language_id = $this->config->get('config_language_id');
		
		if(isset($imgs[$language_id])){
			$results = $imgs[$language_id];
			
			foreach ($results as $result) {

				if (is_file(DIR_IMAGE . $result['image'])) {
					$data['ishi_sliderimages'][] = array(
						'title' => $result['title'],
						'subtitle' => $result['subtitle'],
						'btntext' => $result['btntext'],
						'textcolor' => $result['textcolor'],
						'link'  => $result['link'],
						'textalignment' => $result['textalignment'],
						'textposition' => $result['textposition'],
						'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}
		
		$data['module'] = $module++;

		return $this->load->view('extension/module/slider', $data);
	}
}