@extends('layouts.backend.admin.app')
@section('title','Raw Material Create - ')
@push('css')
<script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
@endpush
@section('area')
<div class="col-sm-6">
        <div class="breadcrumbs-area clearfix">
            <h4 class="page-title pull-left">Raw Materials</h4>
            <ul class="breadcrumbs pull-left">
                <li><a href="{{route('admin.rawMaterial.index')}}">Raw Material</a></li>
                <li><span>create</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="main-content-inner"><br>
        <div class="row">
            <!-- seo fact area start -->
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card border-success mb-3">
                    <h5 class="card-header bg-transparent border-default"><i class=" fa fa-plus-circle">&nbsp;</i> Add Raw Material</h5>
                        <form action="{{route('admin.rawMaterial.store')}}" method="POST" class="form-control">
                            @csrf
                            <div class="form-group">
                                <h6>Raw Material Name</h6>
                                <input type="text" name="name" placeholder="Name Here" class="form-control">
                            </div>
                            <div class="form-group">
                                <h6>Raw Material Description</h6>
                                <textarea class="form-control" style="height:30ch" name="description" placeholder="Description Here"></textarea>
                            </div>
                        <div class="card-footer bg-transparent">
                        <button type="submit" class="btn btn-rounded mb-3 text-white float-right" style="background-color:#bf3e11"><i class="fa fa-database">&nbsp;</i>Save to Database</button>
                        <a href="{{ url()->previous() }}"><button type="button" class="btn btn-rounded btn-danger mb-3 text-white float-right"><i class="fa fa-chevron-circle-left">&nbsp;</i>Cancel</button></a>    
                    </div>
                </form>
                </div>
            </div>
            <!-- testimonial area end -->
        </div>
    </div>
        </div>
       @endsection 
       @push('js')
       @endpush
  
