<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div class="content" ng-controller="dentistCtrl">
    <div class="block">
        <div class="block-header block-header-default">
            <h3 class="block-title">Dentist <small>List</small></h3>
            <div class="block-options">
                <button type="button" class="btn-block-option btn btn-secondary" title="Refresh Data" ng-click="getDentists();">
                    <i class="si si-reload"></i>
                </button>
            </div>
        </div>
        <div class="block-content">
            <table class="table table-vcenter">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th class="d-sm-table-cell">DENTIST</th>
                        <th style="width: 200px;">REGISTERED DATE</th>
                        <th style="width: 200px;">UPDATED DATE</th>
                        <th style="width: 100px;">STATUS</th>
                        <th style="width: 100px;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="dentist in dentists track by $index">
                        <td><span ng-bind="$index + dentist_pagination.offset"></span></td>
                        <td>
                            Dr. <span ng-bind="dentist.firstname"></span> <span ng-bind="dentist.lastname"></span> [ <span ng-bind="dentist.username"></span> ]
                        </td>
                        <td><span ng-bind="dentist.created_at"></span></td>
                        <td><span ng-bind="dentist.updated_at"></span></td>
                        <td>
                            <span class="badge badge-danger" ng-show="dentist.status == 0">Inactive</span>
                            <span class="badge badge-info" ng-show="dentist.status == 1">Active</span>
                        </td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-secondary" title="Edit" ng-click="editDentist(dentist)">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button ng-show="dentist.status == 1" type="button" class="btn btn-sm btn-secondary" title="Block" ng-click="changeStatus(dentist)">
                                    <i class="fa fa-ban"></i>
                                </button>
                                <button ng-show="dentist.status == 0" type="button" class="btn btn-sm btn-secondary" title="Activate" ng-click="changeStatus(dentist)">
                                    <i class="fa fa-check"></i>
                                </button>
                                <button type="button" class="btn btn-sm btn-secondary" title="Delete" ng-click="deleteDentist(dentist);">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="100%"><div pagination="dentist_pagination" ng-pagination></div></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>