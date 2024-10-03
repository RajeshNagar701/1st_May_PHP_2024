@extends('admin.layout.main_structure')

@section('main_code')
<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 class="page-head-line">Add Main Categories</h1>
                <h1 class="page-subhead-line">This is dummy text , you can replace it with your original text. </h1>

            </div>
        </div>
        <!-- /. ROW  -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Categories
                    </div>
                    <div class="panel-body">
                        <form action="{{url('/insert_categories')}}" role="form" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Enter Categories Name</label>
                                <input class="form-control" name="cate_name" type="text">
                            </div>
                            <div class="form-group">
                                <label>Upload Categories Image</label>
                                <input class="form-control" name="cate_img" type="file">
                            </div>

                            <button type="submit" name="submit" class="btn btn-info">Submit </button>

                        </form>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>

</div>

</div>
<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
</div>
<!-- /. WRAPPER  -->

@endsection