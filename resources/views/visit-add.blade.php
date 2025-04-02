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
                        <h1 class="h3 mb-0 text-gray-800">RECORD VISIT</h1>
                    </div><hr/>

                    <form class="user" method='POST' action="{{ url('/visit/add-save') }}">
                    @csrf
                        <!-- first row -->
                        <div class="form-group row">
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='VisitDate' id='VisitDate'
                                    placeholder="Date of Visit">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='ChildCode' id='ChildCode'
                                    placeholder="ChildCode">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Weight' id='Weight'
                                    placeholder="Weight">
                            </div>
                            <div class="col-sm-3 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name='Height' id='Height'
                                    placeholder="Height">
                            </div>
                        </div>
                        <Hr/>
                        <h6 class="m-0 font-weight-bold text-primary">Vaccines Administered</h6>
                        <div class="form-group row">
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">BCG</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">HEPA B</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">PENTA 1</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">PENTA 2</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">PENTA 3</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">OPV 1</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">OPV 2</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">OPV 3</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">IPV 1</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">IPV 2</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">PCV 1</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">PCV 2</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">PCV 3</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="vaccines[]" value="option1" id="option1">
                                    <label class="form-check-label" for="option1">MCV 1</label>
                                </div>
                            </div>
                            <div class="col-sm-2 mb-3 mb-sm-0">
                                <div class="form-check form-control-user pb-0">
                                    <input class="form-check-input" type="checkbox" name="MCV2" id="MCV2">
                                    <label class="form-check-label" for="MCV2">MCV 2</label>
                                </div>
                            </div>
                        </div><hr/>

                        <!-- last row -->
                
                        <div class="form-group row"></div>
                        <div class="col-12 mb-3 mb-sm-0">
                            <button type='submit' class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm"><a class="text-white-50"><i
                                    class="fas fa-check fa-sm "></i> Save</a></button>
                            <button type='reset' class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm"><a class="text-white-50"><i
                                    class="fas fa-broom fa-sm "></i> Clear</a></button>
                            <a href="{{ route('visit.show') }}" class="d-none d-sm-inline-block btn btn-sm btn-dark shadow-sm"><i
                                    class="fas fa-arrow-right fa-sm text-white-50"></i> Cancel</a>
                        </div>
                    </form>
                </div>
                @if ($errors->any())
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
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

