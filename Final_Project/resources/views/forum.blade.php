@extends('layouts.master')

@section('title')
    Forum Sanbercode
@endsection

@section('content_header')

@endsection



@section('content_body')
    {{--  Daftar Threads Forum  --}}
    <div class="card">
        <div class="card-header">
            <h1>
                Threads
            </h1>
        </div>
        <div class="card-body">
            <div class="list-group">
                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                    <div class="d-flex w-100 justify-content-between">
                        <div class="ribbon-wrapper">
                            <div class="ribbon bg-danger">
                                <small>"New Threads"</small> 
                            </div>
                        </div>
                        <h5 class="mb-1">Judul Terbaru</h5>
                        <p class="Text-right"> <small>1 days ago</small></p>
                    </div>
                    <div class="d-flex w-50 justify-content-between">
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint tempore non ut, ipsa laudantium tempora nesciunt eveniet porro! Animi dolore laborum minima veritatis hic autem repellat saepe consequatur maiores quas.</small>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Judul lebih lama dari di atas</h5>
                        <p class="Text-right"> <small>2 days ago</small></p>
                    </div>
                    <div class="d-flex w-50 justify-content-between">
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint tempore non ut, ipsa laudantium tempora nesciunt eveniet porro! Animi dolore laborum minima veritatis hic autem repellat saepe consequatur maiores quas.</small>
                    </div>
                </a>
                <a class="list-group-item list-group-item-action flex-column align-items-start" href="#">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">Judul jauh lebih lama dari yang di atas</h5>
                        <p class="Text-right"> <small>3 days ago</small></p>
                    </div>
                    <div class="d-flex w-50 justify-content-between">
                        <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint tempore non ut, ipsa laudantium tempora nesciunt eveniet porro! Animi dolore laborum minima veritatis hic autem repellat saepe consequatur maiores quas.</small>
                    </div>
                </a>
            </div>
        </div>
    </div>
    {{-- /. Daftar Threads Forum  --}}


    {{--  User Activity  --}}
    <div class="card">
        <div class="card-header">
            <h3>
                User Activity
            </h3>
        </div>
        <div class="card-body">
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                    <tr>
                        <th class="text-left">
                            User
                        </th>
                        <th class="text-center">
                            Location
                        </th>
                        <th class="text-right">
                            Activity
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div>Yiorgos Avraamu</div>
                            <div class="small text-muted">Registered: Jan 1, 2015</div>
                        </td>
                        <td class="text-center">
                            <div>Jakarta</div>
                        </td>
                        <td class="text-right">
                            <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Avram Tarasios</div>
                            <div class="small text-muted">Registered: Jan 1, 2015</div>
                        </td>
                        <td class="text-center">
                            <div>Bandung</div>
                        </td>
                        <td class="text-right">
                            <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Quintin Ed</div>
                            <div class="small text-muted">Registered: Jan 1, 2015</div>
                        </td>
                        <td class="text-center">
                            <div>Surabaya</div>
                        </td>
                        <td class="text-right">
                            <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div>Enéas Kwadwo</div>
                            <div class="small text-muted">Registered: Jan 1, 2015</div>
                        </td>
                        <td class="text-center">
                            <div>Malang</div>
                        </td>
                        <td class="text-right">
                            <div class="small text-muted">Last login</div><strong>Last month</strong>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    {{-- /. User Activity --}}
@endsection