<?php
class DefaultService
{
	/**
	 * @var DefaultDao
	 */
	protected $DefaultDao;


	public function __construct()
	{
		$this->DefaultDao = new DefaultDao();
 	}

    function insert($data){
        return $this->DefaultDao->insert($data);
    }

    public function getImgByUid($uid)
    {
        $condition['where']['expression'] = "uid = $uid";
        return $this->DefaultDao->selectByCondition($condition);
    }
}
