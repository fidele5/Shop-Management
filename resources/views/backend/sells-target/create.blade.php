@extends('backend.layouts.app')
@section('title') {{__('pages.sell_target')}}  @endsection
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4 rounded-0">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">{{__('pages.create_sell_target')}}</h6>
                        <a href="{{route('branch-sells-target.index')}}" class="btn btn-secondary btn-sm rounded-0"><i class="fa fa-list mr-2"></i> {{__('pages.sell_targets')}}</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <form action="{{route('branch-sells-target.store')}}" method="post" data-parsley-validate>
                            @csrf

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="company_name">{{__('pages.select_month')}}<span class="text-danger">*</span></label>
                                        <input type="text" name="month" data-date-format="yyyy-M"   placeholder="{{__('pages.select_month')}}" id="monthpicker" class="form-control" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>

                            @foreach($branches as $branch)
                                <div class="row mt-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="branch_id[]" value="{{$branch->id}}" class="form-control" required>
                                            <input type="text" value="{{$branch->title}}" class="form-control" required readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="target_amount[]" step="1" min="1"  placeholder="Target Amount"  class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            <div class="row">
                                <div class="col-md-2 offset-10">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-block">{{__('pages.save')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection

@section('js')
    <script src="{{asset('/backend/js/custom.js')}}"></script>
@endsection

