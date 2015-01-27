@extends('layouts.master')

@section('content')
<div id='myModal' class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <img src="" alt=""/>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="container e3mod-box">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 about-title">
            <h1><span class="white-e3">Photo Gallery of</span> <span class="orange-e3">E3 Modern</span> <span class="white-e3">and</span> <span class="pink-booze">The Boozetique</span></h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-8 col-md-offset-2 about-title">
            <h2><span class="white-e3">Art</span> <span class="orange-e3">Photos</span></h2>
        </div>
    </div>
    <div class="row">
        @foreach ($artPics as $artPic)
        
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="image-box" style='background-image:url({{$artPic}})' ></div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 about-title">
            <h2><span class="white-e3">Electronics</span> <span class="orange-e3">Photos</span></h2>
        </div>
    </div>
    <div class="row">
        @foreach ($electronicPics as $electronicPic)
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="image-box" style='background-image:url({{$electronicPic}})' ></div>
        </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 about-title">
            <h2><span class="white-e3">Fixture and Furniture</span> <span class="orange-e3">Photos</span></h2>
        </div>
    </div>
    <div class="row">
        @foreach ($fixturePics as $fixturePic)
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="image-box" style='background-image:url({{$fixturePic}})' ></div>
        </div>
        @endforeach
    </div>
</div>
<script src="/js/photo-gallery.js"></script>
@stop

