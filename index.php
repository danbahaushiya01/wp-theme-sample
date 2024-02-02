<!-- index.php -->

<?php get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="text-center">Welcome to the Amazing blog</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi neque consequuntur quas aliquam fugit quo facere reprehenderit, unde odio amet quis culpa adipisci praesentium, itaque maxime magnam perferendis ut officiis! <a href="#">..read more</a></p>
            </div>
            <div class="col-md-6">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeEmb1SEAs-UXneuKBHM5B_EtTNiINOyJr7ejCC8sUDg&s" alt="" class="img-fluid">
            </div>
        </div>
    </div>

    <!-- our features -->
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="text-center">WHAT WE DO</h1>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center bg-primary">A feature</div>
                <div class="card-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit odit perferendis at tenetur modi omnis corrupti esse fugit, perspiciatis voluptatem officiis necessitatibus officia cum quibusdam fugiat nisi quidem accusamus dolorem.
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Check it out</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center bg-warning">A feature</div>
                <div class="card-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit odit perferendis at tenetur modi omnis corrupti esse fugit, perspiciatis voluptatem officiis necessitatibus officia cum quibusdam fugiat nisi quidem accusamus dolorem.
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Check it out</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center bg-danger">A feature</div>
                <div class="card-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit odit perferendis at tenetur modi omnis corrupti esse fugit, perspiciatis voluptatem officiis necessitatibus officia cum quibusdam fugiat nisi quidem accusamus dolorem.
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Check it out</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center bg-secondary">A feature</div>
                <div class="card-body">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Impedit odit perferendis at tenetur modi omnis corrupti esse fugit, perspiciatis voluptatem officiis necessitatibus officia cum quibusdam fugiat nisi quidem accusamus dolorem.
                </div>
                <div class="card-footer text-center">
                    <a href="#" class="btn btn-primary">Check it out</a>
                </div>
            </div>
        </div>
    </div>

   <!-- recent blogs -->
   <div class="col-md-12">
            <h1 class="text-center">OUR BLOG</h1>
        </div>
   <?php get_template_part('include/recent-blogs'); ?>

    <!-- contact us -->
    <div class="row mt-5">
        <div class="col-md-6">
            <img class="img-fluid" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSeEmb1SEAs-UXneuKBHM5B_EtTNiINOyJr7ejCC8sUDg&s" alt="" class="img-fluid">
        </div>
        <div class="col-md-6">
            <form action="">
                <label for="Name">Name</label>
                <input type="text" class="mb-2 form-control" id="name">

                <label for="email">Email</label>
                <input type="email" class="mb-2 form-control" id="email">

                <label for="subject">Subject</label>
                <input type="text" class="mb-2 form-control" id="subject">

                <label for="description">Description</label>
                <textarea name="" id="description"  class="mb-2 form-control"></textarea>

                <input type="submit" value="Submit form" class="btn btn-primary mb-2 form-control">
            </form>
        </div>
    </div>

<?php get_footer(); ?>
