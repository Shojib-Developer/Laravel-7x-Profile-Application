@extends('layouts.admin_layout')

@section('content')
   
<main>

<div class="container-fluid">
      <br>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.main')}}"> Main Page</a></li>
            <li class="breadcrumb-item active"> Main Page</li>
        </ol>

        <div class="container">
          <form href="{{route('admin.main.update')}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
          
            <div class="row">

              <div class="col-4">
                <strong>Background Image</strong><hr>
                <img style="height: 27vh" src="{{url($main->bc_image)}}" >
                
                <div class="col">
                  <input class="mt-3" type="file" id="bc_image" name="bc_image">
              </div>
               
            
             </div>

              <div class="col-8">
                    <div class="col">
                       
                        <label for="exampleInputEmail1" class="form-label">Title</label>
                        <input type="test" name="title" value="{{$main->title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>

                    <div class="col">
                        <label for="exampleInputEmail1" class="form-label">Sub Title </label>
                        <input type="test" name="sub_title" value="{{$main->sub_title}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>

                    <div class="col">
                      <label for="exampleInputEmail1" class="form-label">Resume PDF </label>
                      <input type="file" name="resume" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                  </div>

                     
                  <br>
                    <div class="col">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </div>
                </div>
</form>

            
          </div>

</div>

</main>


@endsection
                



               