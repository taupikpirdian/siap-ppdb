@extends('admin.admin')

@section('content')
<div class="main-content-container container-fluid px-4">
      <!-- Page Header -->
      <div class="page-header row no-gutters py-4">
        <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle"> <a href="{{URL::to('/groups')}}"><i class="fa fa-dashboard"></i> Kembali</a></span>
          <h3 class="page-title">Data Groups</h3>
        </div>
      </div>
      <!-- End Page Header -->
      <!-- Default Light Table -->
      <div class="row">

        <div class="col-lg-8">
          <div class="card card-small mb-4">
            <div class="card-header border-bottom">
              <h6 class="m-0">Data Groups</h6>
            </div>
            <ul class="list-group list-group-flush">

              <li class="list-group-item p-3">
                <div class="row">
                  <div class="col">
                    <form>
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="feFirstName">Groups</label>
                          <input type="text" class="form-control" id="feFirstName" placeholder="First Name" value=" {{{$group->name}}}"  disabled> 
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </li>

            </ul>
          </div>
        </div>
      </div>
      <!-- End Default Light Table -->
    </div>
@endsection