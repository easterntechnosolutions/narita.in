<?php
class ControllerExtensionModuleBannerBlock extends Controller {
	public function index($setting) {
		
		static $module = 0;
		$this->load->model('tool/image');
		
		$language_id = $this->config->get('config_language_id');
		$data['banners'] = array();
		$banners = $setting['ishibanner'];
		$data['column'] = $setting['column'];
		$column = $setting['column'];
		$data['ishi_randomnumer'] = "bannerblock-" . rand();
		
		if($column == 1){
			$data['column_class'] = 'col-md-12 col-sm-12 col-xs-12';
		}elseif($column == 2){
			$data['column_class'] = 'col-md-6 col-sm-6 col-xs-12';
		}elseif($column == 3){
			$data['column_class'] = 'col-md-4 col-sm-6 col-xs-12';
		}elseif($column == 4){
			$data['column_class'] = 'col-lg-3 col-md-6 col-sm-6 col-xs-12';
		}
		
		$data['scale'] = (isset($setting['scale']) && $setting['scale'] == 1) ? 'scale' : '';

		$lang = $this->config->get('config_language_id');
		
		if(!empty($banners)){

			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {
					$data['banners'][] = array(
						'link'  => $banner['link'],
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/bannerblock', $data);
	}
}