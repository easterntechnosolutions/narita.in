<?php
class ControllerExtensionModuleFiveBannerBlock extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/fivebannerblock');

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('fivebannerblock', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->cache->delete('product');

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}	

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/fivebannerblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/fivebannerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/fivebannerblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/fivebannerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		$data['user_token'] = $this->session->data['user_token'];
	
		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = 'Five Banner Block';
		}

		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($module_info['title'])) {
			$data['title'] = $module_info['title'];
		} else {
			$data['title'] = array();
		}

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info) && isset($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = 0;
		}

		if (isset($this->request->post['ishi_banner1_title'])) {
			$data['ishi_banner1_title'] = $this->request->post['ishi_banner1_title'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner1_title'] = $module_info['ishi_banner1_title'];
		} else {
			$data['ishi_banner1_title'] = '';
		}

		if (isset($this->request->post['ishi_banner1_btn'])) {
			$data['ishi_banner1_btn'] = $this->request->post['ishi_banner1_btn'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner1_btn'] = $module_info['ishi_banner1_btn'];
		} else {
			$data['ishi_banner1_btn'] = '';
		}

		if (isset($this->request->post['ishi_banner2_title'])) {
			$data['ishi_banner2_title'] = $this->request->post['ishi_banner2_title'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner2_title'] = $module_info['ishi_banner2_title'];
		} else {
			$data['ishi_banner2_title'] = '';
		}

		if (isset($this->request->post['ishi_banner3_title'])) {
			$data['ishi_banner3_title'] = $this->request->post['ishi_banner3_title'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner3_title'] = $module_info['ishi_banner3_title'];
		} else {
			$data['ishi_banner3_title'] = '';
		}

		if (isset($this->request->post['ishi_banner4_title'])) {
			$data['ishi_banner4_title'] = $this->request->post['ishi_banner4_title'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner4_title'] = $module_info['ishi_banner4_title'];
		} else {
			$data['ishi_banner4_title'] = '';
		}

		if (isset($this->request->post['ishi_banner5_title'])) {
			$data['ishi_banner5_title'] = $this->request->post['ishi_banner5_title'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner5_title'] = $module_info['ishi_banner5_title'];
		} else {
			$data['ishi_banner5_title'] = '';
		}

		if (isset($this->request->post['category1'])) {
			$data['category1'] = $this->request->post['category1'];
		} elseif (!empty($module_info)) {
			$data['category1'] = $module_info['category1'];
		} else {
			$data['category1'] = '';
		}

		if (isset($this->request->post['category_label1'])) {
			$data['category_label1'] = $this->request->post['category_label1'];
		} elseif (!empty($module_info)) {
			$data['category_label1'] = $module_info['category_label1'];
		} else {
			$data['category_label1'] = '';
		}

		if (isset($this->request->post['category2'])) {
			$data['category2'] = $this->request->post['category2'];
		} elseif (!empty($module_info)) {
			$data['category2'] = $module_info['category2'];
		} else {
			$data['category2'] = '';
		}

		if (isset($this->request->post['category_label2'])) {
			$data['category_label2'] = $this->request->post['category_label2'];
		} elseif (!empty($module_info)) {
			$data['category_label2'] = $module_info['category_label2'];
		} else {
			$data['category_label2'] = '';
		}

		if (isset($this->request->post['category3'])) {
			$data['category3'] = $this->request->post['category3'];
		} elseif (!empty($module_info)) {
			$data['category3'] = $module_info['category3'];
		} else {
			$data['category3'] = '';
		}

		if (isset($this->request->post['category_label3'])) {
			$data['category_label3'] = $this->request->post['category_label3'];
		} elseif (!empty($module_info)) {
			$data['category_label3'] = $module_info['category_label3'];
		} else {
			$data['category_label3'] = '';
		}

		if (isset($this->request->post['category4'])) {
			$data['category4'] = $this->request->post['category4'];
		} elseif (!empty($module_info)) {
			$data['category4'] = $module_info['category4'];
		} else {
			$data['category4'] = '';
		}

		if (isset($this->request->post['category_label4'])) {
			$data['category_label4'] = $this->request->post['category_label4'];
		} elseif (!empty($module_info)) {
			$data['category_label4'] = $module_info['category_label4'];
		} else {
			$data['category_label4'] = '';
		}

		if (isset($this->request->post['category5'])) {
			$data['category5'] = $this->request->post['category5'];
		} elseif (!empty($module_info)) {
			$data['category5'] = $module_info['category5'];
		} else {
			$data['category5'] = '';
		}

		if (isset($this->request->post['category_label5'])) {
			$data['category_label5'] = $this->request->post['category_label5'];
		} elseif (!empty($module_info)) {
			$data['category_label5'] = $module_info['category_label5'];
		} else {
			$data['category_label5'] = '';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['ishi_banner1_image'])) {
			$data['ishi_banner1_image'] = $this->request->post['ishi_banner1_image'];
		} elseif (!empty($module_info)) {
			
			$data['ishi_banner1_image'] = $module_info['ishi_banner1_image'];
		} else {
			$data['ishi_banner1_image'] = 'no_image.png';
		}

		if (isset($this->request->post['ishi_banner1_image']) && is_file(DIR_IMAGE . $this->request->post['ishi_banner1_image'])) {
			$data['ishi_banner1_thumb'] = $this->model_tool_image->resize($this->request->post['ishi_banner1_image'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['ishi_banner1_image'])) {
			$data['ishi_banner1_thumb'] = $this->model_tool_image->resize($module_info['ishi_banner1_image'], 100, 100);
		} else {
			$data['ishi_banner1_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['ishi_banner2_image'])) {
			$data['ishi_banner2_image'] = $this->request->post['ishi_banner2_image'];
		} elseif (!empty($module_info)) {
			
			$data['ishi_banner2_image'] = $module_info['ishi_banner2_image'];
		} else {
			$data['ishi_banner2_image'] = 'no_image.png';
		}

		if (isset($this->request->post['ishi_banner2_image']) && is_file(DIR_IMAGE . $this->request->post['ishi_banner2_image'])) {
			$data['ishi_banner2_thumb'] = $this->model_tool_image->resize($this->request->post['ishi_banner2_image'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['ishi_banner2_image'])) {
			$data['ishi_banner2_thumb'] = $this->model_tool_image->resize($module_info['ishi_banner2_image'], 100, 100);
		} else {
			$data['ishi_banner2_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['ishi_banner3_image'])) {
			$data['ishi_banner3_image'] = $this->request->post['ishi_banner3_image'];
		} elseif (!empty($module_info)) {
			
			$data['ishi_banner3_image'] = $module_info['ishi_banner3_image'];
		} else {
			$data['ishi_banner3_image'] = 'no_image.png';
		}

		if (isset($this->request->post['ishi_banner3_image']) && is_file(DIR_IMAGE . $this->request->post['ishi_banner3_image'])) {
			$data['ishi_banner3_thumb'] = $this->model_tool_image->resize($this->request->post['ishi_banner3_image'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['ishi_banner3_image'])) {
			$data['ishi_banner3_thumb'] = $this->model_tool_image->resize($module_info['ishi_banner3_image'], 100, 100);
		} else {
			$data['ishi_banner3_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		if (isset($this->request->post['ishi_banner4_image'])) {
			$data['ishi_banner4_image'] = $this->request->post['ishi_banner4_image'];
		} elseif (!empty($module_info)) {
			
			$data['ishi_banner4_image'] = $module_info['ishi_banner4_image'];
		} else {
			$data['ishi_banner4_image'] = 'no_image.png';
		}

		if (isset($this->request->post['ishi_banner4_image']) && is_file(DIR_IMAGE . $this->request->post['ishi_banner4_image'])) {
			$data['ishi_banner4_thumb'] = $this->model_tool_image->resize($this->request->post['ishi_banner4_image'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['ishi_banner4_image'])) {
			$data['ishi_banner4_thumb'] = $this->model_tool_image->resize($module_info['ishi_banner4_image'], 100, 100);
		} else {
			$data['ishi_banner4_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		
		if (isset($this->request->post['ishi_banner5_image'])) {
			$data['ishi_banner5_image'] = $this->request->post['ishi_banner5_image'];
		} elseif (!empty($module_info)) {
			
			$data['ishi_banner5_image'] = $module_info['ishi_banner5_image'];
		} else {
			$data['ishi_banner5_image'] = 'no_image.png';
		}

		if (isset($this->request->post['ishi_banner5_image']) && is_file(DIR_IMAGE . $this->request->post['ishi_banner5_image'])) {
			$data['ishi_banner5_thumb'] = $this->model_tool_image->resize($this->request->post['ishi_banner5_image'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['ishi_banner5_image'])) {
			$data['ishi_banner5_thumb'] = $this->model_tool_image->resize($module_info['ishi_banner5_image'], 100, 100);
		} else {
			$data['ishi_banner5_thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);


		$data['entry_banner'] = $this->language->get('entry_banner');

		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/fivebannerblock', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/fivebannerblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
}