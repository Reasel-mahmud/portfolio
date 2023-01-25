@extends('admin.master')
@section('title')
Add Banner
@endsection
@section('content')
<div class="container">
<div class="row">
<div class="col-sm-8 mt-5 offset-md-2">
    <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
      <h6 class="card-body-title">Add Banner</h6>

      <form action="{{route('new.banner')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <label class="col-sm-4 form-control-label">Name: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="text" class="form-control" name="name" placeholder="Name">
            </div>
          </div><!-- row -->
          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Image <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
              <input type="file" class="form-control" name="image">
            </div>
          </div>
          <div class="row mg-t-20">
            <label class="col-sm-4 form-control-label">Short Des: <span class="tx-danger">*</span></label>
            <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                <textarea name="short_description" type="text" class="form-control" ></textarea>
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
