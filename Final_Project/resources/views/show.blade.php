@extends('layouts.master')

@section('title')
    Judul Posting Muncul disini
@endsection

@section('content_header')
    
@endsection



@section('content_body')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Judul Posting Muncul disini</h3><br>
            <div class="user-block">
                <span class="username"><a href="#">User Penulis</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
            </div>
            <!-- /.user-block -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- post text -->
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, harum minus? Ab, omnis ad impedit cum maiores deserunt adipisci placeat temporibus sunt quidem! Adipisci amet sed maxime quia, est ut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo quos debitis nihil incidunt. Sint doloribus iusto iste optio sed placeat magnam dolore cupiditate veritatis, molestiae culpa est consectetur voluptatum in. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis quas nulla sit consequatur, rerum commodi cum aliquid doloribus porro architecto dignissimos ut reprehenderit nisi deleniti voluptatibus facilis explicabo necessitatibus non? Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, a temporibus recusandae maxime velit aliquam ullam incidunt dignissimos at delectus dolores, non vero praesentium ducimus sit obcaecati laboriosam laudantium ea. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum vel, at quisquam delectus omnis provident temporibus dolorum architecto. Ratione laborum ab nesciunt debitis officia aperiam libero voluptates accusamus soluta. Qui.</p>
            <!-- Social sharing buttons -->
            <button type="button" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Like</button>
            <span class="float-right text-muted">45 likes - 2 komentar</span>
        </div>
        <!-- /.card-body -->
        <div class="card-footer card-comments">
            <div class="card-comment">
                <div class="comment-text">
                    <span class="username">
                        Maria Gonzales
                        <span class="text-muted float-right">
                            8:03 PM Today
                        </span>
                    </span>
                    <!-- /.username -->
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam atque sed dolorum, libero non consequuntur ipsam vitae voluptates quidem, at commodi sit vero quibusdam officiis quod? Ipsa adipisci dicta voluptas?
                    <!-- /.komentar -->
                </div>
            <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
            <div class="card-comment">
                <!-- User image -->
                <div class="comment-text">
                    <span class="username">
                        Nora Havisham
                        <span class="text-muted float-right">
                            8:03 PM Today
                        </span>
                    </span>
                    <!-- /.username -->
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cum placeat, consectetur dolore delectus provident rerum eos dolor labore perferendis quod ea? Quisquam rerum nostrum debitis illo sapiente a tenetur ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat voluptatem facilis nobis eos laboriosam consequatur nostrum? Quod, eveniet. Dolorum tempora architecto quasi ipsum corporis voluptas beatae ab modi reiciendis praesentium!
                </div>
                <!-- /.comment-text -->
            </div>
            <!-- /.card-comment -->
        </div>
        <!-- /.card-footer -->
        <div class="card-footer">
            <form action="#" method="post">
                <div class="img-push">
                    <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                </div>
            </form>
        </div>
        <!-- /.card-footer -->
    </div>
@endsection