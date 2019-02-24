
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Evaluation Requert Form</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Request Form <small>Please fill all the information Request above</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                      <?php echo validation_errors(); ?>
                    <?php echo form_open('Requestor','class="form-horizontal form-label-left input_mask"')?>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Requestor Name</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" name="requestorname" class="form-control" placeholder="who is requestor ?">
                        </div>

                        <label class="control-label col-md-1 col-sm-1 col-xs-12">Date</label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input type="date" name="requestdate" class="form-control" placeholder="who is requestor ?">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Requestor Email</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="email" name="emails" class="form-control" placeholder="user@email.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Customer</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" name="customer" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Product Name <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input class="form-control" name="productname" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Product Type <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input class="form-control" name="producttype" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Product Details <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <textarea rows="5" class="form-control" name="productdetail" type="text"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Failure Catalog</label>
                        <div class="col-md-3 col-sm-4 col-xs-12">
                          <input type="text" name="catalogfailure" class="form-control" placeholder="who is requestor ?">
                        </div>

                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Minimum Size</label>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <input type="text" name="msize" class="form-control" placeholder="who is requestor ?">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Special Request <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <textarea rows="5" class="form-control" name="special" type="text"></textarea>
                          <input type="hidden" name="status" value="verify">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                          <button type="button" class="btn btn-primary">Cancel</button>
						              <button class="btn btn-primary" type="reset">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
