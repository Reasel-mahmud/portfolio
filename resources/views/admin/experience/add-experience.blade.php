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

      <form action="{{route('new.experience')}}" method="post">
        @csrf
        <div class="row">
            <label class="col-sm-4 form-control-label"> Company Name: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="compony_name" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> Date: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="date" placeholder=" Enter Sterd And End Date">
            </div>
          </div>
          <div class="row mt-3">
            <label class="col-sm-4 form-control-label"> Postion Name: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="postion" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label"> Description: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea name="description" type="text" class="form-control" ></textarea>
            </div>
          </div>
          <div class="form-layout-footer mg-t-30">
            <button type="submit" class="btn btn-info mg-r-5">Submit Form</button>
          </div><!-- form-layout-footer -->
      </form>
    </div><!-- card -->
</div>
</div>
</div>


@endsection
