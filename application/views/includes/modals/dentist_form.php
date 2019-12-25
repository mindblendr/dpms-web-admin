<div class="modal fade" id="modal_dentist_form" tabindex="-1" role="dialog" aria-labelledby="modal-popout" aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Dentist Form</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-material" ng-class="modal.data.id ? '' : 'floating'">
                                <input type="text" class="form-control" ng-disabled="modal.data.id" ng-model="modal.data.username">
                                <label>Username</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.pin">
                                <label>Pin</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.password">
                                <label>Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.confirm_password">
                                <label>Confirm Password</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.firstname">
                                <label>Firstname</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-material">
                                <input type="text" class="form-control" ng-model="modal.data.lastname">
                                <label>Lastname</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Close</button>
                <button ng-show="modal.save" ng-click="modal.save(modal.data);" type="button" class="btn btn-alt-success" data-dismiss="modal"><i class="fa fa-check"></i> Save</button>
            </div>
        </div>
    </div>
</div>