@extends('admin.master')
@section('title')
Manage Contact
@endsection
@section('content')
    <div class="container">
        <div class="row">
           <div class="col-md-12">
            <div class="sl-pagebody">
                <div class="sl-page-title">
                  <h5>Contact Manage Table</h5>
                </div><!-- sl-page-title -->
                <div class="card pd-20 pd-sm-40">
                  <div class="table-wrapper">
                    <table id="datatable1" class="table display responsive nowrap">
                      <thead>
                        <tr>
                          <th class="wd-15p">SI</th>
                          <th class="wd-15p">  Name</th>
                          <th class="wd-20p">Email</th>
                          <th class="wd-10p">Message</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                        @php
                            $i=1;
                        @endphp
                        @forelse ($contacts as $contact )
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->email}}</td>
                            <td>{{$contact->message}}</td>
                            <td>
                                <form action="{{route('delete.contact')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="contact_id" value="{{$contact->id}}">
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
