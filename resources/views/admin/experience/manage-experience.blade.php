@extends('admin.master')
@section('title')
Manage Banner
@endsection
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <div class="sl-pagebody">
                <div class="sl-page-title">
                  <h5>Banner Manage Table</h5>
                  <a href="{{route('add.banner')}}" class="btn btn-sm btn-info">Add Banner</a>
                </div><!-- sl-page-title -->

                <div class="card pd-20 pd-sm-40">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-15p">SI</th>
                          <th class="wd-15p"> Company Name</th>
                          <th class="wd-20p">Posion</th>
                          <th class="wd-10p">Date</th>
                          <th class="wd-10p">Description</th>

                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                        @php
                            $i=1;
                        @endphp
                        @forelse ($experiences as $experience )
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$experience->compony_name}}</td>
                            <td>{{$experience->postion}}</td>
                            <td>{{$experience->date}}</td>
                            <td>{{substr($experience->description,0,10)}}</td>
                            <td>
                                <form action="{{route('delete.experience')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="experience_id" value="{{$experience->id}}">
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('are You sure!')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @empty
                        Noo Banner
                        @endforelse

                     </tbody>
                    </table>
                  </div><!-- table-wrapper -->
                </div><!-- card -->
        </div>
           </div>
    </div>
@endsection
//
