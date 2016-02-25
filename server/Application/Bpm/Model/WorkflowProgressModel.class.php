<?php

/*
 * @app Bpm
 * @package Bpm.model.WorkflowProgress
 * @author laofahai@TEam Swift
 * @link https://ng-erp.com
 * */
namespace Bpm\Model;
use Common\Model\CommonViewModel;

class WorkflowProgressModel extends CommonViewModel {

    protected $viewFields = [
        "WorkflowProgress" => ['*', '_type'=>'left'],
        "WorkflowNode" => [
            'status_label' => 'node_status_label',
            'label' => 'node_label',
            '_on' => 'WorkflowProgress.workflow_node_id=WorkflowNode.id',
            '_type' => 'left'
        ]
    ];
}