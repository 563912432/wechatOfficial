<?php

namespace app\agent\model\agent_book;

use think\Model;
use traits\model\SoftDelete;

class BookError extends Model
{

    use SoftDelete;



    // 表名
    protected $table = 'agent_book_error';

    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = 'deletetime';

    // 追加属性
    protected $append = [

    ];










    public function agentbook()
    {
        return $this->belongsTo('app\admin\model\AgentBook', 'book_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }


    public function agentbookchapter()
    {
        return $this->belongsTo('app\admin\model\AgentBookChapter', 'chapter_id', 'id', [], 'LEFT')->setEagerlyType(0);
    }
}
