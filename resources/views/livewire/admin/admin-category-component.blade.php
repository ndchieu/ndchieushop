<div>
    <style>
        nav svg {
            height: 20px;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container" style="padding:30px 0">
        <div class="row">
            <div class="col-md-12">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6">
                            All Categories
                        </div>
                        <div class="col-md-6">
                            <a href="{{route('admin.addcategory')}}" class="btn btn-success pull-right">Add New</a>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    @if(Session::has('message'))
                        <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                                <th>Id</th>           
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>   
                        </thead>
                        <tbody>
                            @php
                                $stt = 1 ;
                            @endphp
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$stt++}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->slug}}</td>
                                <td>
                                    <a href="{{route('admin.editcategory',['category_slug'=>$category->slug])}}">
                                        <i class="fa fa-edit fa-2x"></i>
                                    </a>
                                    <a href="#" wire:click.prevent="deteleCategory({{$category->id}})" style="margin-left: 10px;">
                                        <i class="fa fa-times fa-2x text-danger"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{$categories->links('pagination::bootstrap-4')}}
                </div>
            </div>
        </div>
    </div>
</div>