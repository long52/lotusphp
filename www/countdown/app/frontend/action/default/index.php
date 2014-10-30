<?php
class DefaultIndexAction extends MyAction
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

        $de = new DefaultService();
        // 取当前用户通讯录的所有分组
        $this->data['rows'] = $de->getImgByUid(1);

        $this->count = count($this->data['rows']);
    }
}
