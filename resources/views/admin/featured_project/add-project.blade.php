@extends('admin.master')
@section('title')
Add Exprience
@endsection
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-8 mt-5 offset-md-2">
    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
      <h6 class="card-body-title">Add Banner</h6>

      <form action="{{route('new.project')}}" method="post" enctype="multipart/form-data">
        @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
        @csrf
        <div class="row">
            <label class="col-sm-4 form-control-label"> Project Name: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="project_name" placeholder=" Project Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label">Project Title: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="project_title" placeholder=" Enter Sterd And End Date">
            </div>
          </div>
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> CLIENTS: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="clients" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> COMPLETION: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="completion" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> PROJECT TYPE: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="project_type" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> AUTHORS: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="author" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> BUDGET: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="budget" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> Image: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" class="form-control" name="image" >
            </div>
          </div><!-- row -->
          <div class="form-layout-footer mg-t-30">
            <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
          </div><!-- form-layout-footer -->
      </form>
    </div><!-- card -->
</div>
</div>
</div>


@endsection
