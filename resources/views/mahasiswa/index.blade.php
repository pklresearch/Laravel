@extends('layout.main');

@section('title','Daptar Test Covid_19')

@section('container')
       <div class="container">
        <div class="row">
        <div class="cool-10">
        <h1 class="mt-3">Daptar Test Covid_19</h1>
        <table class="table">
        <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">nama</th>
        <th scope="col">nrp</th>
        <th scope="col">email</th>
        <th scope="col">alamat</th>
        <th scope="col">action</th>
        <tr>
        </thead>
        <tbody>
         @foreach( $Covid_19 as $mhs)
        <tr>
        <th scope="row">1</th>
        <td>Anyip Putra Pribumi</td>
        <td>1234567</td>
        <td>iiphermawan@gmail.com</td>
        <td>Kp.Rawa Sadang Desa Cibadak Kecamatan Tanjungsari Kabupaten Bogor</td>
        <td>
        <a href="" class="badge badge-success">edit</a>
        <a href=""class="badge badge-danger">delete</a>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
        </div>
        </div>
     </div>
    </div> 
@endsection
        