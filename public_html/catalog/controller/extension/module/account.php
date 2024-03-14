<?php
class ControllerExtensionModuleAccount extends Controller {
	public function index() {
		$this->load->language('extension/module/account');

		if (isset($this->request->get['route'])){
			$active_route = $this->request->get['route'];
			if($active_route == 'account/address' || $active_route == 'account/address/add'){
				$data['address_active'] = 'active';
			}elseif($active_route == 'account/order' || $active_route == 'account/order/info'){
				$data['order_active'] = 'active';
			}elseif($active_route == 'account/account' || $active_route == 'account/account'){
				$data['account_active'] = 'active';
			}elseif($active_route == 'account/password' || $active_route == 'account/password'){
				$data['pass_active'] = 'active';
			}elseif($active_route == 'account/wishlist' || $active_route == 'account/wishlist'){
				$data['wishlist_active'] = 'active';
			}elseif($active_route == 'account/download' || $active_route == 'account/download'){
				$data['download_active'] = 'active';
			}elseif($active_route == 'account/recurring' || $active_route == 'account/recurring'){
				$data['recurring_active'] = 'active';
			}elseif($active_route == 'account/reward' || $active_route == 'account/reward'){
				$data['reward_active'] = 'active';
			}elseif($active_route == 'account/return' || $active_route == 'account/return'){
				$data['return_active'] = 'active';
			}elseif($active_route == 'account/transaction' || $active_route == 'account/transaction'){
				$data['trans_active'] = 'active';
			}elseif($active_route == 'account/newsletter' || $active_route == 'account/newsletter'){
				$data['news_active'] = 'active';
			}
			else{
				$data['edit_active'] = 'active';
			}
		}

		$data['logged'] = $this->customer->isLogged();
		$data['register'] = $this->url->link('account/register', '', true);
		$data['login'] = $this->url->link('account/login', '', true);
		$data['logout'] = $this->url->link('account/logout', '', true);
		$data['forgotten'] = $this->url->link('account/forgotten', '', true);
		$data['account'] = $this->url->link('account/account', '', true);
		$data['edit'] = $this->url->link('account/edit', '', true);
		$data['password'] = $this->url->link('account/password', '', true);
		$data['address'] = $this->url->link('account/address', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist');
		$data['order'] = $this->url->link('account/order', '', true);
		$data['download'] = $this->url->link('account/download', '', true);
		$data['reward'] = $this->url->link('account/reward', '', true);
		$data['return'] = $this->url->link('account/return', '', true);
		$data['transaction'] = $this->url->link('account/transaction', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);
		$data['recurring'] = $this->url->link('account/recurring', '', true);

		return $this->load->view('extension/module/account', $data);
	}
}