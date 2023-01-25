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
                          <th class="wd-15p">Name</th>
                          <th class="wd-20p">Image</th>
                          <th class="wd-15p">Description</th>
                          <th class="wd-10p">Status</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                        @php
                            $i=1;
                        @endphp
                        @forelse ($banners as $banner )
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$banner->name}}</td>
                            <td>
                            <img src="{{asset($banner->image)}}" width="100" alt="" srcset="">
                            </td>
                            <td>{{$banner->short_description}}</td>
                            <td>{{$banner->status == 1? 'Publiesd':'UnPubliesd'}}</td>
                            <td>
                                <a href="" class="btn btn-sm btn-info">Edit</a>
                                @if ($banner->status == 1)
                                <a href="{{route('status',['id'=>$banner->id])}}" class="btn btn-sm btn-warning">Unpubliesd</a>
                                @else
                                <a href="{{route('status',['id'=>$banner->id])}}" class="btn btn-sm btn-primary">Publiesd</a>
                                @endif
                                <form action="{{route('delete.banner')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="banner_id" value="{{$banner->id}}">
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
