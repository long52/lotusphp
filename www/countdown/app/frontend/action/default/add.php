<?php
class DefaultAddAction extends MyAction
{
	public function __construct()
	{
		parent::__construct();
		$this->responseType = 'tpl';
		//$this->layout = '';
	}

	public function execute()
	{
        $this->layout = '';
        $this->data['baseurl'] = LtObjectUtil::singleton('LtConfig')->get('baseurl');

    }
}
