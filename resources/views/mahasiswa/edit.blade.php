@extends('mahasiswa.layout')
  
@section('content')
   
<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ route('mahasiswa.update', $mahasiswa->id) }}" id="myForm">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="name">Name</label>                    
                    <input type="text" name="name" class="form-control" id="name" value="{{ $mahasiswa->name }}" aria-describedby="name" >                
                </div>
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>                    
                    <input type="text" name="jurusan" class="form-control" id="jurusan" value="{{ $mahasiswa->jurusan }}" aria-describedby="jurusan" >                
                </div>
                <div class="form-group">
                    <label for="email">Email</label>                    
                    <input type="text" name="email" class="form-control" id="email" value="{{ $mahasiswa->email }}" aria-describedby="email" >                
                </div>
                <div class="form-group">
                    <label for="writer">Password</label>                    
                    <input type="password" name="password" class="form-control" id="password" value="{{ $mahasiswa->password }}" aria-describedby="password" >                
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection