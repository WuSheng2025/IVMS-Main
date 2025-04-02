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
                        <h1 class="h3 mb-0 text-gray-800">EDIT RECORD</h1>
                        
                    </div>

                    <form class="user" method='POST' action="{{ route('client.update', $client->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                            <input type="text" class="form-control form-control-user" name='ChildCode' value="{{ $client->ChildCode }}" required>
                        </div>
                        <!-- first row -->
                        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='FirstName' value="{{ $client->FirstName }}" required>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='MiddleName' value="{{ $client->MiddleName }}" required>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='LastName' value="{{ $client->LastName }}" required>
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='NameExt' value="N/A" required>
                            </div>
                        </div>
                        <!-- second row -->
                        <div class="form-group row">
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='BirthDate' value="{{ $client->BirthDate }}" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='BirthPlace' value="{{ $client->BirthPlace }}" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='BirthFacility' value="{{ $client->BirthFacility }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='MotherMaidenName' value="{{ $client->MotherMaidenName }}" required>
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='FatherName' value="{{ $client->FatherName }}" required>
                            </div>
                        </div>
                        <!-- last row -->
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Street' value="{{ $client->Street }}" required">
                            </div>
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Purok' value="{{ $client->Purok }}" required>
                            </div>
                        </div>
                        <div class="form-group row">
                        <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Barangay' value="{{ $client->Barangay }}" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Municipality' value="{{ $client->Municipality }}" required>
                            </div>
                            <div class="col-sm-4 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Province' value="{{ $client->Province }}" required>
                            </div>
                        </div>
                        <div class="col-12 mb-3 mb-sm-0">
                            <button type='submit' class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><a class="text-white-50"><i
                                    class="fas fa-check fa-sm "></i> Update</a></button>
                            <a href="{{ route('client.show') }}" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                                    class="fas fa-arrow-right fa-sm text-white-50"></i> Cancel</a>
                        </div>
                    </form>
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
    <!-- <form action="{{ route('client.update', $client->id) }}" method="POST">
        @csrf
        
        @method('PUT')
        <label for='ChildCode'>Child Code:</label>
        <input type="text" name="ChildCode" value="{{ $client->ChildCode }}" required></br>

        <label for='FirstName'>First Name:</label>
        <input type="text" name="FirstName" value="{{ $client->FirstName }}" required></br>

        <label for='MiddleName'>Middle Name:</label>
        <input type="text" name="MiddleName" value="{{ $client->MiddleName }}" required></br>

        <label for='LastName'>Last Name:</label>
        <input type="text" name="LastName" value="{{ $client->LastName }}" required></br>

        <label for='BirthDate'> Birth Date:</label>
        <input type="text" name="BirthDate" value="{{ $client->BirthDate }}" required></br>

        <label for='BirthPlace'>Birth Place:</label>
        <input type="text" name="BirthPlace" value="{{ $client->BirthPlace }}" required></br>


        <button type="submit">Update</button>
    </form> -->

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    @if(session('success'))
        {{session('success')}}
    @endif

@endsection

