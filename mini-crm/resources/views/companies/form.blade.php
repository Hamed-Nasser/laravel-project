
  <input type="hidden" name="hidden_id" value="" />
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">{{ $panelHeading }}</h3>
              <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
              </div>
            </div>
            <div class="box-body">
              <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <label>Company Name</label>
                  <input type="text" id="company_name" name="company_name" 
                  class="form-control" required maxlength="50" value="" />
                </div>

                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                  <label>Email</label>
                  <input type="text" id="email" name="email" 
                  class="form-control" required maxlength="50" value="" />
                </div>
      
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                  <label>Website</label>
                  <input type="text" id="website" name="website" class="form-control" required maxlength="20" 
                  value="" />
                </div>

                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                  <label>Logo</label>
                  <input type="text" id="logo" name="logo" maxlength="20" 
                  value="" class="form-control" />
                </div>
                <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                  <label>&nbsp;</label>
                  <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">{{ $btnLable }}</button>
              </div>
            </div>
            <div class="clearfix">&nbsp;</div>
          </div>
        </div>
       
     