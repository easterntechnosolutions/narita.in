<?php
class ControllerExtensionModuleFranchiseenquiryBlock extends Controller {
	private $error = array(); 
	
	public function index() {   
	
		$this->load->language('extension/module/franchiseenquiryblock');

		$this->document->setTitle($this->language->get('heading_title1'));
		
		$this->load->model('setting/setting');
		$this->load->model('setting/module');
		$this->load->model('jacklb/franchiseenquiryblock');
		
		$this->model_jacklb_franchiseenquiryblock->check_db();
		$this->document->addScript('view/javascript/newsletter/jquery-ui.js');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
	
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('franchiseenquiryblock', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}
			
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}
				
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_newsletter'] = $this->language->get('text_newsletter');
		$data['text_customer_all'] = $this->language->get('text_customer_all');	
		$data['text_customer'] = $this->language->get('text_customer');	
		$data['text_customer_group'] = $this->language->get('text_customer_group');
		$data['text_affiliate_all'] = $this->language->get('text_affiliate_all');	
		$data['text_affiliate'] = $this->language->get('text_affiliate');	
		$data['text_product'] = $this->language->get('text_product');	
		$data['text_lbnewsletter'] = $this->language->get('text_lbnewsletter');	
		$data['text_sendall'] = $this->language->get('text_sendall');	
		$data['text_mail_success'] = $this->language->get('text_mail_success');	
		$data['text_info'] = $this->language->get('text_info');	
				
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_list'] = $this->language->get('tab_list');
		$data['tab_mail'] = $this->language->get('tab_mail');
		
		$data['entry_admin'] = $this->language->get('entry_admin');
		$data['entry_layout'] = $this->language->get('entry_layout');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_unsubscribe'] = $this->language->get('entry_unsubscribe');
		$data['entry_thickbox'] = $this->language->get('entry_thickbox');
		$data['entry_registered'] = $this->language->get('entry_registered');	
		$data['entry_mail'] = $this->language->get('entry_mail');
		$data['entry_options'] = $this->language->get('entry_options');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_to'] = $this->language->get('entry_to');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');
		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_affiliate'] = $this->language->get('entry_affiliate');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_limit'] = $this->language->get('entry_limit');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_name'] = $this->language->get('entry_name');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_add_module'] = $this->language->get('button_add_module');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_delete'] = $this->language->get('button_delete');
		
		//Errors
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}


		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);			
		}

  		//Breadcrumb
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);			
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info['name'])) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['banner1'])) {
			$data['banner1'] = $this->request->post['banner1'];
		} elseif (!empty($module_info)) {
			
			$data['banner1'] = $module_info['banner1'];
		} else {
			$data['banner1'] = 'no_image.png';
		}

		if (isset($this->request->post['banner1']) && is_file(DIR_IMAGE . $this->request->post['banner1'])) {
			$data['banner1thumb'] = $this->model_tool_image->resize($this->request->post['banner1'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['banner1'])) {
			$data['banner1thumb'] = $this->model_tool_image->resize($module_info['banner1'], 100, 100);
		} else {
			$data['banner1thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		
		$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['heading'])) {
			$data['heading'] = $this->request->post['heading'];
		} elseif (!empty($module_info['heading'])) {
			$data['heading'] = $module_info['heading'];
		} else {
			$data['heading'] = array();
		}

		if (isset($this->request->post['subtitle'])) {
			$data['subtitle'] = $this->request->post['subtitle'];
		} elseif (!empty($module_info['subtitle'])) {
			$data['subtitle'] = $module_info['subtitle'];
		} else {
			$data['subtitle'] = array();
		}

		if (isset($this->request->post['note'])) {
			$data['note'] = $this->request->post['note'];
		} elseif (!empty($module_info['note'])) {
			$data['note'] = $module_info['note'];
		} else {
			$data['note'] = array();
		}
	
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		//Get User List
		
		$user_total = $this->model_jacklb_franchiseenquiryblock->getTotalUsers();
		
		if (isset($this->request->get['page'])) {
			
			$page = $this->request->get['page'];
			
		} else {
			
			$page = 1;
			
		}
		
		$data['page_nav'] = ($page-1) * $this->config->get('config_limit_admin');
		
		$url = '';
		
		if (isset($this->request->get['module_id'])) {
			$url .= '&module_id=' . $this->request->get['module_id'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data['pages'] = array(
			'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'           => $this->config->get('config_limit_admin')
		);
		
		$results = $this->model_jacklb_franchiseenquiryblock->getList($data);
		
		$data['users'] = array();
		
		foreach ($results as $result) {
		 
		 	$action = array();
			
			$action[] = array(
				'text' => $this->language->get('text_delete'),
				'href' => $this->url->link('extension/module/franchiseenquiryblock/unsubscribe', 'user_token=' . $this->session->data['user_token'] . '&user_id=' . $result['id'] . $url, true)
			);
			
			$data['users'][] = array(
				'id' 			=> $result['id'],
				'name'       	=> $result['name'],
				'username'      => $result['username'],
				'email_id'      => $result['email_id'],
				'selected'   	=> isset($this->request->post['selected']) && in_array($result['id'], $this->request->post['selected']),
				'action'     	=> $action,
				'start'         => ($page - 1) * $this->config->get('config_limit_admin'),
				'limit'         => $this->config->get('config_limit_admin')
			);
		
		}
		$data['export_csv'] = $this->url->link('extension/module/franchiseenquiryblock/exportCSV', 'user_token=' . $this->session->data['user_token'] . $url, true);

		//Mail
		$this->load->model('setting/store');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['stores'] = $this->model_setting_store->getStores();
		
		$this->load->model('customer/customer_group');
				
		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups(0);

		//Graph
		
	
		$data['jack'] = array();
		
		//Pagination 
		$pagination = new Pagination();
		$pagination->total = $user_total;
		$pagination->page = $page;
		$pagination->limit = 100;
		$pagination->text = $this->language->get('text_pagination');
		$pagination->url = $this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
			
		$data['pagination'] = $pagination->render();
		
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/module/franchiseenquiryblock', $data));
	
	}
	
	public function exportCSV() {

		$this->load->model('jacklb/franchiseenquiryblock');
		$this->load->language('extension/module/franchiseenquiryblock');
		
		/* CSV Header Starts Here */
		 
		$filename = "IshiNewsletter_" . date('Y-m-d') . ".csv";
		 
		/* CSV Header Ends Here */
		
		$delimiter = ",";
		 
		$output = fopen('php://memory', 'w'); //Opens and clears the contents of file; or creates a new file if it doesn't exist
		
		if (isset($this->request->get['page'])) {
			
			$page = $this->request->get['page'];
			
		} else {
			
			$page = 1;
			
		}
		
		$data['pages'] = array(
			'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'           => $this->config->get('config_limit_admin')
		);
		
		
		$results = $this->model_jacklb_franchiseenquiryblock->getList($data);
		
		//set column headers
		$name = $this->language->get('heading_name');
		$number = $this->language->get('heading_no');
		$email = $this->language->get('heading_email');
		
		$fields = array($number,$email, $name);
		fputcsv($output, $fields, $delimiter);
		 
		$data = array(); 
		
		 $i= 1;
		// We don't want to export all the information to be exported so maintain a separate array for the information to be exported
		foreach($results as $row) {
			$lineData = array(
			$i,
			$row['email_id'],
			$row['name']
		);
			fputcsv($output, $lineData, $delimiter);
			$i++;
		}
		 
		fseek($output, 0);

		//set headers to download file rather than displayed
		header('Content-Type: text/csv');
		header('Content-Disposition: attachment; filename="' . $filename . '";');

		//output all remaining data on a file pointer
		fpassthru($output);

	}
	
	public function unsubscribe() {
		
		$this->load->model('jacklb/franchiseenquiryblock');
		
		$data = '';
		
		if (isset($this->request->post['selected']) && $this->validateDelete()) {
			
			foreach ($this->request->post['selected'] as $user_id) {
				$this->model_jacklb_franchiseenquiryblock->delete($user_id);                
	  		}
			
			$this->session->data['success'] = $this->language->get('text_success');
			
			$url = '';
			
			if (isset($this->request->get['module_id'])) {
				$url .= '&module_id=' . $this->request->get['module_id'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->redirect($this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'] . $url, true));
			
		} else if( isset($this->request->get['user_id']) ) {
			
			$data = $this->request->get['user_id'];
			
			$this->model_jacklb_franchiseenquiryblock->delete($data);
			
			if (isset($this->request->get['page'])) {
				$page = $this->request->get['page'];
			} else {
				$page = 1;
			}
			
			$url = '';
			
			if (isset($this->request->get['module_id'])) {
				$url .= '&module_id=' . $this->request->get['module_id'];
			}
			
			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}
			
			$this->response->redirect($this->url->link('extension/module/franchiseenquiryblock', 'user_token=' . $this->session->data['user_token'] . $url, true));	
		
		} else {
		
			$this->index();
			
		}

	}
	
	//Send Mail Function
	
	public function send() {
		$this->language->load('extension/module/franchiseenquiryblock');
		
		$json = array();
		
		if ($this->request->server['REQUEST_METHOD'] == 'POST') {
			if (!$this->user->hasPermission('modify', 'extension/module/franchiseenquiryblock')) {
				$json['error']['warning'] = $this->language->get('error_permission');
			}
					
			if (!$this->request->post['subject']) {
				$json['error']['subject'] = $this->language->get('error_subject');
			}
	
			if (!$this->request->post['message']) {
				$json['error']['message'] = $this->language->get('error_message');
			}
			
			if (!$json) {
				
				$this->load->model('setting/store');
			
				$store_info = $this->model_setting_store->getStore($this->request->post['store_id']);			
				
				if ($store_info) {
					$store_name = $store_info['name'];
				} else {
					$store_name = $this->config->get('config_name');
				}
	
				$this->load->model('customer/customer');
				
				$this->load->model('customer/customer_group');
				
				//$this->load->model('sale/affiliate');
	
				$this->load->model('sale/order');
				
				$this->load->model('jacklb/franchiseenquiryblock');
	
				if (isset($this->request->get['page'])) {
					$page = $this->request->get['page'];
				} else {
					$page = 1;
				}
								
				$email_total = 0;
							
				$emails = array();
				
				switch ($this->request->post['to']) {
					case 'newsletter':
						$customer_data = array(
							'filter_newsletter' => 1,
							'start'             => ($page - 1) * 10,
							'limit'             => 10
						);
						
						$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
							
						$results = $this->model_customer_customer->getCustomers($customer_data);
					
						foreach ($results as $result) {
							$emails[] = $result['email'];
						}
						break;
					/* Start : Bhavin */	
					case 'sendall':
						$customer_data = array(
							'filter_newsletter' => 1,
							'start'             => ($page - 1) * 10,
							'limit'             => 10
						);
						
						$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
							
						$results = $this->model_customer_customer->getCustomers($customer_data);
						
						$email_total1 = $this->model_jacklb_franchiseenquiryblock->getTotalUsers();
							
						$results1 = $this->model_jacklb_franchiseenquiryblock->getList($customer_data);
						
						$email_total = $email_total + $email_total1;
						
						foreach ($results as $result) {
							$emails[] = $result['email'];
						}
						
						foreach ($results1 as $result1) {
							$emails1[] = $result1['email_id'];
						}
						
						$emails = array_merge($emails,$emails1);
						
						break;
					case 'lbnewsletter':
						$customer_data = array(
							'filter_newsletter' => 1,
							'start'             => ($page - 1) * 10,
							'limit'             => 10
						);
						
						$email_total = $this->model_jacklb_franchiseenquiryblock->getTotalUsers();
							
						$results = $this->model_jacklb_franchiseenquiryblock->getList($customer_data);
						
						foreach ($results as $result) {
							$emails[] = $result['email_id'];
						}
						break;
					/* End : Bhavin */
					case 'customer_all':
						$customer_data = array(
							'start'  => ($page - 1) * 10,
							'limit'  => 10
						);
									
						$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
										
						$results = $this->model_customer_customer->getCustomers($customer_data);
				
						foreach ($results as $result) {
							$emails[] = $result['email'];
						}						
						break;
					case 'customer_group':
						$customer_data = array(
							'filter_customer_group_id' => $this->request->post['customer_group_id'],
							'start'                    => ($page - 1) * 10,
							'limit'                    => 10
						);
						
						$email_total = $this->model_customer_customer->getTotalCustomers($customer_data);
										
						$results = $this->model_customer_customer->getCustomers($customer_data);
				
						foreach ($results as $result) {
							$emails[$result['customer_id']] = $result['email'];
						}						
						break;
					case 'customer':
						if (!empty($this->request->post['customer'])) {					
							foreach ($this->request->post['customer'] as $customer_id) {
								$customer_info = $this->model_customer_customer->getCustomer($customer_id);
								
								if ($customer_info) {
									$emails[] = $customer_info['email'];
								}
							}
						}
						break;
					case 'product':
						if (isset($this->request->post['product'])) {
							$email_total = $this->model_sale_order->getTotalEmailsByProductsOrdered($this->request->post['product']);	
							
							$results = $this->model_sale_order->getEmailsByProductsOrdered($this->request->post['product'], ($page - 1) * 10, 10);
													
							foreach ($results as $result) {
								$emails[] = $result['email'];
							}
						}
						break;												
				}
				
				if ($emails) {
					$start = ($page - 1) * 10;
					$end = $start + 10;
					
					if ($end < $email_total) {
						$json['success'] = sprintf($this->language->get('text_sent'), $start, $email_total);
					} else { 
						$json['success'] = $this->language->get('text_mail_success');
					}				
						
					if ($end < $email_total) {
						$json['next'] = str_replace('&amp;', '&', $this->url->link('extension/module/franchiseenquiryblock/send', 'user_token=' . $this->session->data['user_token'] . '&page=' . ($page + 1), true));
					} else {
						$json['next'] = '';
					}
										
					$message  = '<html dir="ltr" lang="en">' . "\n";
					$message .= '  <head>' . "\n";
					$message .= '    <title>' . $this->request->post['subject'] . '</title>' . "\n";
					$message .= '    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">' . "\n";
					$message .= '  </head>' . "\n";
					$message .= '  <body>' . html_entity_decode($this->request->post['message'], ENT_QUOTES, 'UTF-8') . '</body>' . "\n";
					$message .= '</html>' . "\n";
					
					foreach ($emails as $email) {
						$mail = new Mail();	
						$mail->protocol = $this->config->get('config_mail_protocol');
						$mail->parameter = $this->config->get('config_mail_parameter');
						$mail->smtp_hostname = $this->config->get('config_mail_smtp_hostname');
						$mail->smtp_username = $this->config->get('config_mail_smtp_username');
						$mail->smtp_password = html_entity_decode($this->config->get('config_mail_smtp_password'), ENT_QUOTES, 'UTF-8');
						$mail->smtp_port = $this->config->get('config_mail_smtp_port');
						$mail->smtp_timeout = $this->config->get('config_mail_smtp_timeout');				
						$mail->setTo($email);
						$mail->setFrom($this->config->get('config_email'));
						$mail->setSender($store_name);
						$mail->setSubject(html_entity_decode($this->request->post['subject'], ENT_QUOTES, 'UTF-8'));					
						$mail->setHtml($message);
						$mail->send();
					}
				} 
			}
		}
		
		$this->response->setOutput(json_encode($json));	
	}
	
	// Gives you dates between start and end
	public function GetDays($sStartDate, $sEndDate){  
      $sStartDate = gmdate("Y-m-d", strtotime($sStartDate));  
      $sEndDate = gmdate("Y-m-d", strtotime($sEndDate));  
      
      $aDays[] = $sStartDate;  
      
      $sCurrentDate = $sStartDate;  
      
      while($sCurrentDate < $sEndDate){  
        $sCurrentDate = gmdate("Y-m-d", strtotime("+1 day", strtotime($sCurrentDate)));  
      
        $aDays[] = $sCurrentDate;  
      }  
      return $aDays;  
    }  
		
	protected function validateDelete() {
    	if (!$this->user->hasPermission('modify', 'extension/module/franchiseenquiryblock')) {
      		$this->error['warning'] = $this->language->get('error_permission');  
    	}
		
		if (!$this->error) {
	  		return true;
		} else {
	  		return false;
		}
  	}
	protected function validateexportCSV() {
    	if (!$this->user->hasPermission('modify', 'extension/module/franchiseenquiryblock')) {
      		$this->error['warning'] = $this->language->get('error_permission');  
    	}
		
		if (!$this->error) {
	  		return true;
		} else {
	  		return false;
		}
  	}
	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/franchiseenquiryblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}
		
		return !$this->error;	
	}
}