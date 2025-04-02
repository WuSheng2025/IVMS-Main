@extends('main')
@section('page-content')
<link rel="stylesheet" href="{{ asset('css/sb-admin-2.css') }}">
<div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">TARGET CLIENT LIST</h1>
                        <div>
                            <a href="/tcl/add-once" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                    class="fas fa-plus fa-sm text-white-50"></i></a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><i
                                    class="fas fa-upload fa-sm text-white-50"></i></a>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm"><i
                                    class="fas fa-download fa-sm text-white-50"></i></a>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

                 <!-- Begin Page Content -->
                <div class="container-fluid">

            <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Children 0 to 12 months of Age</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Child Code</th>
                                            <th>Full Name</th>
                                            <th>Birth Date </th>
                                            <th>Mother's Name</th>
                                            <th>Adress</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Child Code</th>
                                            <th>Full Name</th>
                                            <th>Birth Date </th>
                                            <th>Mother's Name</th>
                                            <th>Adress</th>
                                            <th>Action</th>
                                            
                                    </tfoot>
                                    <tbody>
                                    @if ($clients)
                                        @foreach ( $clients as $client )
                                        <tr>
                                            <td>{{ $client->ChildCode }} </td>
                                            <td>{{ $client->FirstName.' '.$client->MiddleName.' '.$client->LastName}} </td>
                                            <td>{{ $client->BirthDate }} </td>
                                            <td>{{ $client->MotherMaidenName }} </td>
                                            <td>{{ $client->Barangay.', '.$client->Municipality.', '.$client->Province }} </td>
                                            <td><div class="d-inline-flex">
                                                <a href='/tcl/view' class="d-none d-sm-inline-block btn btn-sm btn-info shadow-sm"><i
                                                        class="fas fa-info-circle fa-sm text-white-50"></i></a>

                                                <a href="{{ route('client.edit', ['id' => $client->id]) }}" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                                                        class="fas fa-pen fa-sm text-white-50"> </i></a>

                                                <a><form action="{{ route('client.destroy', $client->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this?');">
                                                        @csrf
                                                        @method('DELETE')  <!-- Laravel requires this for DELETE requests -->
                                                        <button class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm" type="submit">
                                                            <i class="fas fa-trash fa-sm text-white-50"></i>
                                                        </button>
                                                    </form>
                                                </a>
                                                    

                                            </div></td>
                                        </tr> 
                                        @endforeach
                                    @else
                                        <p>No Clients found</p>
                                    @endif                                       
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                 </div>
            <!-- /.container-fluid -->
@endsection