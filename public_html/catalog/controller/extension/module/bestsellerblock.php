<?php  
class ControllerExtensionModuleBestsellerBlock extends Controller {
  	private $error = array();
	
	public function index($setting) {
		
	
		$this->language->load('extension/module/bestsellerblock');
		
      	$data['option_unsubscribe'] = $this->config->get('option_unsubscribe');
		$language_id = $this->config->get('config_language_id');
		if(isset($setting['heading'][$language_id])){
			$data['heading_title'] = $setting['heading'][$language_id];
		}
      	
		$this->id = 'bestsellerblock';

		   
		$this->load->model('setting/module');
		
		//CODE TO FETCH PRODUCTS
		$this->load->language('product/quickview');
		$this->load->model('catalog/product');
		$this->load->model('catalog/category');

		$this->load->model('tool/image');
		$filter_data = array(
				'sort'  => 'p.date_added',
				'filter_category_id'  => $setting['categoryid'],
				'order' => 'DESC',
				'start' => 0,
				'limit' => 3
		);

		$results = $this->model_catalog_product->getProducts($filter_data);

		if ($results) {
			foreach ($results as $result) {
				$extraimage = '';

				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], 350, 350);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', 350, 350);
				}

				$images = $this->model_catalog_product->getProductImages($result['product_id']);

				if(!empty($images) && isset($images[0]['image'])){
				 $extraimage = $this->model_tool_image->resize($images[0]['image'], 350, 350);
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if(isset($result['discount_percentage']) && !empty($result['discount_percentage'])){
				$data['discount_percentage'] = $result['discount_percentage'];

				}else{
					$data['discount_percentage'] = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = number_format($result['rating'],1);
				} else {
					$rating = false;
				}

				if ($this->config->get('config_review_status')) {
					$reviews = number_format($result['reviews']);
				} else {
					$reviews = false;
				}
				
				$stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';
				
				$specialDates = $this->model_catalog_product->getProductSpecialsDate($result['product_id']);
			
				if(isset($specialDates['date_end']) && $specialDates['date_end'] != '0000-00-00'){
					$date_end  = $specialDates['date_end'];
				}else{
					$date_end = '';
				}		

				$productSizeOptions = '';
				foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
					if($option['name'] == 'Size' || $option['name'] == 'size' ) {
						$product_option_value_data = array();
						foreach ($option['product_option_value'] as $option_value) {
							if($option_value['quantity']) {
								$product_option_value_data[] = array(
									'name'                    => $option_value['name'],
									'stock'					  => $option_value['quantity']
								);
							}
						}
						$productSizeOptions = $product_option_value_data;
						break;
					}
				}

				// print_r($price);
				// die;

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'extra'       => $extraimage,
					'stock_status'=> $stock_status,
					'date_end'    => $date_end,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'discount_percentage'=> $result['discount_percentage'],
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'reviews'      => $reviews,
					'product_size_options'=> $productSizeOptions,
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id'])
				);
			}
		}



		return $this->load->view('extension/module/bestsellerblock', $data);
		
	}
	
	// public function subscribe() {
	
	// 	$prefix_eval = "";
	  
	// 	$this->language->load('extension/module/bestsellerblock');
	 
	// 	$this->load->model('account/bestsellerblock');
	  
	// 	if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
			   
	// 		   if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
	// 				$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,1);
					
	// 				echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>")$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				   
				
	// 		   } else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
	// 				$this->model_account_newslettersubscribe->subscribe($this->request->post);
					
	// 				echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-success\"> '.$this->language->get('subscribe').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
				 
	// 			} else {
	// 				  echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-danger\"> '.$this->language->get('alreadyexist').'</div>");$("'.$prefix_eval.' #subscribe-normal")[0].reset();');
	// 			}
			   
	// 		} else {
				
	// 			echo('$("'.$prefix_eval.' #notification-normal").html("<div class=\"alert alert-danger\"> '.$this->language->get('error_invalid').'</div>")');
				
	// 		}
	  
	// }

	// public function unsubscribe(){
	  
	// 	if ($this->config->get('newslettersubscribe_thickbox')) {
	// 		  $prefix_eval = "";
	// 	} else {
	// 		  $prefix_eval = "";
	// 	}
	  
	// 	$this->language->load('extension/module/bestsellerblock');
	 
	// 	$this->load->model('account/newslettersubscribe');
	  
	// 	if (isset($this->request->post['subscribe_email']) and filter_var($this->request->post['subscribe_email'],FILTER_VALIDATE_EMAIL)) {
				
	// 		if ($this->config->get('newslettersubscribe_registered') and $this->model_account_newslettersubscribe->checkRegisteredUser($this->request->post)) {
				   
	// 				$this->model_account_newslettersubscribe->UpdateRegisterUsers($this->request->post,0);
					
	// 				echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-success\"> '.$this->language->get('unsubscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				   
				
	// 		} else if (!$this->model_account_newslettersubscribe->checkmailid($this->request->post)) {
				 
	// 				echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-danger\"> '.$this->language->get('notexist').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
				 
	// 		} else {
				   
	// 				if ($this->config->get('option_unsubscribe')) {
						
	// 				 $this->model_account_newslettersubscribe->unsubscribe($this->request->post);
					 
	// 				 echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-success\"> '.$this->language->get('unsubscribe').'</div>");$("'.$prefix_eval.' #subscribe")[0].reset();');
					 
	// 				}
	// 		}
			   
	// 	} else {
			
	// 			echo('$("'.$prefix_eval.' #notification").html("<div class=\"alert alert-danger\"> '.$this->language->get('error_invalid').'</div>")');
				
	// 	}
	  
	// }

	// protected function loadmodule() {
		
	// 	$this->language->load('extension/module/bestsellerblock');

 //      	$data['heading_title'] = $this->language->get('heading_title');	
		
 //      	$data['entry_name'] = $this->language->get('entry_name');	
 //      	$data['entry_email'] = $this->language->get('entry_email');	
	// 	$data['entry_button'] = $this->language->get('entry_button');	
	// 	$data['entry_unbutton'] = $this->language->get('entry_unbutton');	
	// 	$data['option_unsubscribe'] = $this->config->get('option_unsubscribe');	
		
	// 	$data['text_subscribe'] = $this->language->get('text_subscribe');	
		
	// 	$this->id = 'bestsellerblock';

		
	// 	return $this->load->view('extension/module/bestsellerblock', $data);
	// }
}
?>