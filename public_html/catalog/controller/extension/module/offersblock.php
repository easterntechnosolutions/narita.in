<?php
class ControllerExtensionModuleOffersBlock extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/offersblock');
		$this->load->model('ishithemes/offersblock');
		$language_id = $this->config->get('config_language_id');
		
		$data['heading_title'] = $this->language->get('heading_title');
		$data['bg_color'] = $setting['bg_color'];

		$data['banner1_link'] = $setting['ishi_banner1_link'];

		if(isset($setting['btntitle1'][$language_id])){
			$data['btntitle1'] = $setting['btntitle1'][$language_id];
		}

		$data['offers'] = array();		
		foreach ($this->model_ishithemes_offersblock->getOffers() as $result) {			
						
			 		$data['offers'][] = array(
				'offer_id'  => $result['offer_id'],
				'title'       => html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
			); 
		}	
				
		return $this->load->view('extension/module/offersblock', $data);
	}
}