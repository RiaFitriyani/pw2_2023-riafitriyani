@extends('layouts.main')

@section('content')
    <h1 class="mt-4">Movies Data</h1>
    <div class="d-flex justify-content-between mb-4">
            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                                <li class="breadcrumb-item active">Movies</li>
                            </ol>
                            <a href="#">
                                <button class="btn btn-success" type="submit">Create Data</button>
                            </a>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Movies Data
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Poster</th>
                                            <th>Genre</th>
                                            <th>Negara</th>
                                            <th>Tahun</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Poster</th>
                                            <th>Genre</th>
                                            <th>Negara</th>
                                            <th>Tahun</th>
                                            <th>Rating</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Duty After school</td>
                                            <td>image.png</td>
                                            <td>Drama</td>
                                            <td>Korea Selatan</td>
                                            <td>2023</td>
                                            <td>9.6</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Bad guys</td>
                                            <td>image.png</td>
                                            <td>Action</td>
                                            <td>Korea Selatan</td>
                                            <td>2014</td>
                                            <td>8.4</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Mouse</td>
                                            <td>image.png</td>
                                            <td>Crime, Drama</td>
                                            <td>Korea Selatan</td>
                                            <td>2021</td>
                                            <td>9.2</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>The ghost</td>
                                            <td>image.png</td>
                                            <td>Drama, Thriller</td>
                                            <td>Korea Selatan</td>
                                            <td>2018</td>
                                            <td>9.0</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Crush Cours in Romance</td>
                                            <td>image.png</td>
                                            <td>Drama, Romance</td>
                                            <td>Korea Sekatan</td>
                                            <td>2023</td>
                                            <td>9.8</td>
                                            <td>
                                                <a href="" class="btn btn-sm btn-warning"> Edit</a>
                                                <a href="" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
    
@endsection