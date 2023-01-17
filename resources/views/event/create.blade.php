
@extends('layouts.app')
@section('section')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Create Event</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <!-- SELECT2 EXAMPLE -->
      <div class="card card-default">
        
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Eveent Title</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Event Des.</label>
                <textarea  class="form-control"></textarea>
                
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-md-6">
              <div class="form-group">
                <label>Start Date</label>
                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
              </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>End date</label>
                <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                  <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                  </div>
              </div>
              </div>

              <!-- /.form-group -->

              <div class="form-group">
                  <label>Select event type</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Alabama</option>
                    <option>Alaska</option>
                    <option>California</option>
                    <option>Delaware</option>
                    <option>Tennessee</option>
                    <option>Texas</option>
                    <option>Washington</option>
                  </select>
                </div>
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->

          
          <div class="row">
            <div class="col-12 col-sm-6">
              
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
            <div class="col-12 col-sm-6">
              <div class="form-group">
                  <label></label>
                  <button type="submit" class="btn btn-primary">Submit</button>  
                
              </div>
              <!-- /.form-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
        
      </div>
      <!-- /.card -->

      
      
      <!-- /.card -->

     
      
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 

  
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection
