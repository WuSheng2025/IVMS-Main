@extends('main')
@section('page-content')

<div class="container">
<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-12">
            
                <div class="p-5">
                     <!-- Page Heading -->
                     <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">ADD RECORD</h1>
                        
                    </div>

                    <form class="user" method='POST' action="/tcl/add">
                    @csrf
                    <div class="form-group">
                            <input type="text" class="form-control form-control-user" name='ChildCode' id='ChildCode'
                                placeholder="Child Code">
                        </div>
                        <!-- first row -->
                        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='FirstName' id='FirstName'
                                    placeholder="First Name">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='MiddleName' id='MiddleName'
                                    placeholder="Middle  Name">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='LastName' id='LastName'
                                    placeholder="Last  Name">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='NameExt' id='NameExt'
                                    placeholder="Name Extension">
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='BirthDate' id='BirthDate'
                                    placeholder="Birthdate">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='BirthPlace' id='BirthPlace'
                                    placeholder="Birth Place">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='BirthFacility' id='BirthFacility'
                                    placeholder="Birth Facility">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='MotherMaidenName' id='MotherMaidenName'
                                    placeholder="Mother's Maiden Name">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='FatherName' id='FatherName'
                                    placeholder="Father's Name">
                            </div>
                        </div>
                        <!-- last row -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Street' id='Street'
                                    placeholder="Building/House#/Street">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Purok' id='Purok'
                                    placeholder="Purok">
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Barangay' id='Barangay'
                                    placeholder="Barangay">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Municipality' id='Municipality'
                                    placeholder="Municipality">
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Province' id='Province'
                                    placeholder="Province">
                            </div>
                        </div>
                        <div class="col-12 mb-3 mb-sm-0">
                            <button type='submit' class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><a class="text-white-50"><i
                                    class="fas fa-check fa-sm "></i> Save</a></button>
                            <button type='reset' class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><a class="text-white-50"><i
                                    class="fas fa-broom fa-sm "></i> Clear</a></button>
                            <a href="{{ route('client.show') }}" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                                    class="fas fa-arrow-right fa-sm text-white-50"></i> Cancel</a>
                        </div>
                    </form>
                </div>
                @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                @if(session('message'))
                    {{session('message')}}
                @endif
            </div>
        </div>
    </div>
</div>
        
</div>
@endsection

