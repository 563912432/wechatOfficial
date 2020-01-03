<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:104:"F:\phpstudy\PHPTutorial\WWW\wechatOfficial\public/../application/agent\view\agent_book\chapter\edit.html";i:1578054997;s:85:"F:\phpstudy\PHPTutorial\WWW\wechatOfficial\application\agent\view\layout\default.html";i:1577865801;s:82:"F:\phpstudy\PHPTutorial\WWW\wechatOfficial\application\agent\view\common\meta.html";i:1576638344;s:84:"F:\phpstudy\PHPTutorial\WWW\wechatOfficial\application\agent\view\common\script.html";i:1578013858;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !$config['fastadmin']['multiplenav']): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Book_id'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <!--<input id="c-book_id" data-rule="required" data-source="agent_book/book/index" class="form-control selectpage" name="row[book_id]" type="text" value="<?php echo htmlentities($row['book_id']); ?>">-->
            <select id="c-book_id" data-rule="required" class="form-control selectpicker" name="row[book_id]">
                <?php if(is_array($bookList) || $bookList instanceof \think\Collection || $bookList instanceof \think\Paginator): if( count($bookList)==0 ) : echo "" ;else: foreach($bookList as $key=>$vo): ?>
                <option class="" value="<?php echo $vo['id']; ?>" <?php if(in_array(($vo['id']), is_array($row['book_id'])?$row['book_id']:explode(',',$row['book_id']))): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Pid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
<!--            <?php echo build_select('row[pid]', $ruledata, null, ['class'=>'form-control', 'required'=>'']); ?>-->
            <select id="c-pid" data-rule="required" class="form-control selectpicker" name="row[pid]">
                <?php if(is_array($ruledata) || $ruledata instanceof \think\Collection || $ruledata instanceof \think\Paginator): if( count($ruledata)==0 ) : echo "" ;else: foreach($ruledata as $key=>$vo): ?>
                <option class="" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['pid'])?$row['pid']:explode(',',$row['pid']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Title'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-title" class="form-control" name="row[title]" type="text" value="<?php echo htmlentities($row['title']); ?>">
        </div>
    </div>
<!--    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Pid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-pid" class="form-control" name="row[pid]" type="number" value="<?php echo htmlentities($row['pid']); ?>">
        </div>
    </div>-->
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Weigh'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-weigh" class="form-control" name="row[weigh]" type="number" value="<?php echo $row['weigh']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Remark'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-remark" class="form-control" name="row[remark]" type="text" value="<?php echo $row['remark']; ?>">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js"></script>

    </body>
</html>
