@extends('layouts.main')

@section('title')
	Ruang - Edit PIC
@endsection

@section('contents')
<div id="page-wrapper">
 <div class="row"> <div class="col-lg-12"> <h1 class="page-header">Edit Ruang</h1> <hr class="col-md-12"> </div> </div>
 <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #013880;color: white;"><i class="fa fa-user fa-fw"></i><b>Edit PIC</b></div>
 <div class="panel-body border border-primary">
 <form class="form-horizontal" action={{url('/pic/'.$p->idPIC)}} method="POST" >
  {{ csrf_field() }}
  <div class="form-group">
      <label class="control-label col-sm-2">idPIC (nospasi)</label>
      <div class="col-sm-10"><input type="text" class="form-control" id="idPIC" placeholder="Masukan idPIC" 
         	name="idPIC" value="{{$p->idPIC}}" disabled> </div>
   </div>
  <div class="form-group">
       <label class="control-label col-sm-2">Nama PIC</label>
        <div class="col-sm-10"><input type="text" class="form-control" id="namaPIC" placeholder="Masukan Nama PIC" 
		name="namaPIC" value="{{$p->namaPIC}}">
        </div>
  </div>
  <div class="form-group">
       <label class="control-label col-sm-2">Keterangan</label>
        <div class="col-sm-10"><input type="text" class="form-control" id="keterangan" placeholder="Masukan Keterangan"
                name="keterangan" value="{{$p->keterangan}}">
        </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10"> <button type="submit" class="btn btn-primary">Submit</button> </div>
  </div>
 </form>
</div> </div></div>
@endsection
