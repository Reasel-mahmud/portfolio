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
                          <th class="wd-15p">project_name</th>
                          <th class="wd-20p">project_title</th>
                          <th class="wd-15p">clients</th>
                          <th class="wd-10p">completion</th>
                          <th class="wd-15p">project_type</th>
                          <th class="wd-10p">author</th>
                          <th class="wd-15p">budget</th>
                          <th class="wd-10p">image</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                        @php
                            $i=1;
                        @endphp
                        @forelse ($projects as $project )
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$project->project_name}}</td>
                            <td>
                            <img src="{{asset($project->image)}}" width="100" alt="" srcset="">
                            </td>
                            <td>{{$project->project_title}}</td>
                            <td>{{$project->clients}}</td>
                            <td>{{$project->completion}}</td>
                            <td>{{$project->project_type}}</td>
                            <td>{{$project->author}}</td>
                            <td>{{$project->budget}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info">Edit</a>

                                {{-- <form action="{{route('delete.banner')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="banner_id" value="{{$banner->id}}">
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('are You sure!')">Delete</button>
                                </form> --}}
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
