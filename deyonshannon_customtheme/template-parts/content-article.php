<main class="container-flex px-5">
    
    <div class="row">
        <div class="col-sm-12 py-2">
            <h2 class="project-heading">
                <!-- Project Name  -->
            </h2>
        </div>
        <div class="col-md-6 col-sm-12 py-4">
            <div class="project pb-4">
                <div class="project-image">
<?php
    the_post_thumbnail('medium');
?>
                </div>

                <div class="project-description">
                <?php
                    the_title();
                ?>
                </div>
                <?php
                    the_tags('<span class="tag"><i class="fa fa-tag"></i>', '<span class="tag"><i class="fa fa-tag"></i>', '</span>')
                ?>

                <?php
                    the_content();
                ?>

                <?php
                    the_excerpt();
                ?>
                <div class="project-buttons">
                    <button href="#" class="btn-github">View Code
                    <span aria-hidden class="btn-github__glitch">View Code</span>
                    </button>
                    
                    <button href="#" class="btn-demo">Demo
                    <span aria-hidden class="btn-demo__glitch">Demo</span>
                    </button>
                </div>
            </div> 
        </div>
    </div>
</main>

