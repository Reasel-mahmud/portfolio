@extends('admin.master')
@section('title')
Add skill
@endsection
@section('content')
<div class="container">
    <div class="row">
    <div class="col-sm-8 mt-5 offset-md-2">
        <div class="card pd-20 pd-sm-40 form-layout form-layout-4">
          <h6 class="card-body-title">Add Skill</h6>
          <form action="{{route('new.subSkill')}}" method="post" >
            @csrf
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
              <div class="row">
                <label class="col-sm-4 form-control-label"> Skill Description: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" @error('skill_description') is-invalid @enderror name="skill_description" placeholder=" Skills Description">
                </div>
              </div><!-- row -->
              <div class="row mt-5">
                <label class="col-sm-4 form-control-label"> Skill Exp: <span class="tx-danger">*</span></label>
                <div class="col-sm-8 mg-t-10 mg-sm-t-0">
                  <input type="text" class="form-control" @error('skill_exp') is-invalid @enderror name="skill_exp" placeholder=" Skills Exp">
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

