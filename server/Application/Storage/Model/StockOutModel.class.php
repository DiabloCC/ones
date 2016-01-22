<?php

/*
 * @app Storage
 * @package Storage.model.StockOut
 * @author laofahai@TEam Swift
 * @link https://ng-erp.com
 * */
namespace Storage\Model;
use Common\Model\CommonViewModel;

class StockOutModel extends CommonViewModel {

    protected $viewFields = [
        "StockOut" => ['*', '_type'=>'left'],
        "UserInfo" => [
            'login',
            'realname',
            '_on'=>"StockOut.user_info_id=UserInfo.id",
            '_type'=>'left'
        ]
    ];

}