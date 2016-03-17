@extends('layouts.master')


@section('content')

 <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Responsive Hover Table</h3>
                    <div class="box-tools">
                        <div class="input-group" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control input-sm pull-right" id="auto" placeholder="Search">
                            <div class="input-group-btn">
                                <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover" id="articlesTable">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        
                        <tbody>
                            <tr>

                            </tr>
                            </tbody>
                
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
@stop


@section('scripts')

<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.4/js/jquery.dataTables.js"></script>
<script type="text/javascript">
$('#articlesTable').dataTable( 
    {
        "bProcessing": true,
        
        "bServerSide": true,
        "sAjaxSource": "{{URL::to('users')}}",
     	"columnDefs": [{
    "defaultContent": "-",
    "targets": "_all"
  }],
 
    }
); 

</script>
@stop




