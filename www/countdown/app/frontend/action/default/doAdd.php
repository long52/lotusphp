<?php
class DefaultDoAddAction extends MyAction
{
	public function execute()
	{
		$data = $this->context->post('data');
		$data['uid'] = $this->uid;

        $de = new DefaultService();
        $de->insert($data);

		$this->code = 200;
		$this->data['forward'] = C('LtUrl')->generate('Default', 'Index');

		$this->data['title'] = '轮播图片';
		$this->data['baseurl'] = LtObjectUtil::singleton('LtConfig')->get('baseurl');
		
		$this->layout = 'result';
	}
}
