<?php  defined('C5_EXECUTE') or die("Access Denied.");

class KansaiugHorizonBlockController extends BlockController {
	
	protected $btName = '水平線';
	protected $btDescription = '';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function view() {
	}
}
