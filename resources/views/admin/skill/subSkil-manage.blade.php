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
                          <th class="wd-20p">Skill Description</th>
                          <th class="wd-20p">Skill Exp</th>
                          <th class="wd-25p">Action</th>
                        </tr>
                      </thead>
                     <tbody>
                        @php
                            $i=1;
                        @endphp
                        @forelse ($subSkills as $subSkill )
                        <tr>


                            <td>{{$i++}}</td>
                            <td>{{$subSkill->skill_description}}</td>
                            <td>{{$subSkill->skill_exp}}</td>
                            <td>
                                <form action="{{route('delete.subSkill')}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="subSkill_id" value="{{$subSkill->id}}">
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
