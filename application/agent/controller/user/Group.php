<?php

namespace app\agent\controller\user;

use app\common\controller\BackendAgent;

/**
 * 会员组管理
 *
 * @icon fa fa-users
 */
class Group extends BackendAgent
{

    /**
     * @var \app\agent\model\UserGroup
     */
    protected $model = null;

    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('UserGroup');
        $this->view->assign("statusList", $this->model->getStatusList());
    }

    public function add()
    {
        $nodeList = \app\agent\model\UserRule::getTreeList();
        $this->assign("nodeList", $nodeList);
        return parent::add();
    }

    public function edit($ids = NULL)
    {
        $row = $this->model->get($ids);
        if (!$row)
            $this->error(__('No Results were found'));
        $rules = explode(',', $row['rules']);
        $nodeList = \app\agent\model\UserRule::getTreeList($rules);
        $this->assign("nodeList", $nodeList);
        return parent::edit($ids);
    }

}
