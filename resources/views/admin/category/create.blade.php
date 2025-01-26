@extends('admin.layouts.app')
@section('content')



<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Create Category</h3>
            </div>         
            <form action="{{route('category.store')}}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" name="name"  placeholder="Enter Name">
                  @error('name')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Description" name="description">
                  @error('description')
                  <small class="text-danger">{{ $message }}</small>
                  @enderror
                </div>         
               
              </div>
              @if (session('success'))
    {{-- <script>
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: '{{ session('success') }}',
            timer: 3000,
            showConfirmButton: false,
        });
    </script> --}}
@endif

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
    </div>   
  </section>

@endsection
