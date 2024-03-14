<?php
class ControllerExtensionModuleLinkList extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/linklist');
		$this->load->model('ishithemes/linklist');
		$this->load->model('tool/image');
	
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_read_more'] = $this->language->get('text_read_more');
		$data['text_date_added'] = $this->language->get('text_date_added');
		$data['entry_comment'] = $this->language->get('entry_comment');
		
		$language_id = $this->config->get('config_language_id');
		
		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		$data['linklists'] = array();		
		foreach ($this->model_ishithemes_linklist->getLinkListsByModule($setting['module_id']) as $result) {			
						
			 		$data['linklists'][] = array(
				'linklist_id'  => $result['linklist_id'],
				'image' 	  => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']),
				'title'       => html_entity_decode($result['title'], ENT_QUOTES, 'UTF-8'),
				'description'       => html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'),
			); 
		}	
				
		return $this->load->view('extension/module/linklist', $data);
	}
}