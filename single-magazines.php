<?php get_header()?>


    <section>
      <div class="container">
        <div class="flex items-center justify-between my-5" id="go-back">
          <a
            href="<?php echo site_url('/magazine')?>"
            class="flex items-center gap-2 mb-5 uppercase hover:underline group md:mb-0 font-generalSemiBold"
          >
            <div
              class="transition-all -translate-x-1 opacity-0 group-hover:opacity-100 group-hover:translate-x-0"
            >
              <svg class="icon-sm" role="image">
                <use xlink:href="./img/sprite.svg#icon-arrow-left"></use>
              </svg>
            </div>

            <span
              class="transition-transform -translate-x-7 group-hover:translate-x-0"
              >Go Back</span
            >
          </a>

          <h4 id="single-title">Magazine</h4>
        </div>

        <div class="grid grid-cols-2 gap-10 my-20">
          <h2 class="max-w-[470px]" id="single-main-title"><?php the_title()?></h2>
          <p id="single-main-excerpt">
          <?php the_field('excerpt')?>
          </p>
        </div>

        <div class="flex items-center justify-between mb-10 " id="single-article-details">
          <div class="details">
            <ul >
            <li><span>Author:</span> <?php the_field('author')?></li>
            <li><span>Date:</span> <?php echo get_the_date('d, F Y')?></li>
            <li><span>Duration:</span> <?php echo get_field('duration', get_the_ID())?> mins</li>
            </ul>
          </div>
          <a href="#" class="block category" id="single-article-category"><?php echo get_categories()[0]->name?></a>
        </div>

        <div class="banner" id="single-article-banner">
          <img src="<?php the_field('banner')?>" alt="" class="object-cover w-full" />
        </div>
      </div>
    </section>


    <article class="single-article">
      <div class="single-wrapper max-w-[1000px] mx-auto w-full">
        <div class="grid grid-cols-[300px_1fr] gap-20 my-20">
          <aside class="sticky top-0 self-start">


          <?php
                $author = new WP_Query(array(
                    'post_type' => 'authors',
                    'post_per_page' => 1,
                    'title' => get_field('author'),
                  
                ));

                if($author->have_posts()) : while($author->have_posts()) : $author->the_post()?>

            <div class="flex gap-5 pb-5 mb-5 border-b border-dark">
              <img
                src="<?php echo get_field('thumbnail')?>"
                alt=""
                class="rounded-full size-24"
              />
              <p class="text-3xl font-generalSemiBold"><?php the_title();?></p>
            </div>

            <ul class="flex justify-between mb-2">
              <li class="font-generalSemiBold">Date:</li>
              <li><?php echo get_the_date('d, F Y')?></li>
            </ul>

            <ul class="flex justify-between mb-2">
              <li class="font-generalSemiBold">Read:</li>
              <li><?php the_field('duration')?> mins</li>
            </ul>


          </aside>

          <?php endwhile;
                else: 
                    echo "No post xxx";
                endif;

                wp_reset_postdata();
            ?>


          <!-- <main id="main-article">
            <h5>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste,
              voluptates hic facere facilis corporis molestiae, deserunt modi
              sapiente impedit possimus distinctio iusto odio voluptatum vel
              praesentium laborum, minima quae. Dicta?
            </h5>

            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Dignissimos vitae aspernatur quam dicta placeat est eum excepturi
              assumenda ad, sint officia, nemo culpa. Nihil delectus natus odio,
              quo maxime architecto asperiores repellendus dolorum reiciendis
              expedita dignissimos, non accusamus vitae sunt?
            </p>

            <figure>
              <img src="./img/img-article-1.png" alt="" />
              <figcaption>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa,
                amet.
              </figcaption>
            </figure>

            <ul>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Explicabo, mollitia.
              </li>
              <li>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam
                quisquam quas, doloribus ratione adipisci eaque?
              </li>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Eligendi nihil nisi dignissimos perferendis, totam corrupti
                placeat accusamus eius ex vero!
              </li>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                nostrum ducimus eveniet ullam, distinctio inventore saepe error
                ex quaerat asperiores dolorem maiores temporibus
              </li>
            </ul>

            <ol>
              <li>Lorem ipsum dolor sit amet.</li>
              <li>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                hic?
              </li>
              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
              <li>Lorem ipsum</li>
            </ol>

            <h2>header 2</h2>
            <h3>header 3</h3>
            <h4>header 4</h4>
            <h5>header 5</h5>
            <h6>header 6</h6>

            <blockquote>
              Lorem, ipsum dolor sit amet consectetur adipisicing?
            </blockquote>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente
              quas impedit ut voluptas aspernatur! Dolores veniam fugit
              distinctio porro neque, optio consectetur deserunt. Ad, autem
              incidunt. Ipsa nobis animi asperiores quos dolorum, officia, cum
              ratione sed minus velit vero debitis!
            </p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Veritatis, ex numquam, culpa rem hic dicta reprehenderit odio cum
              cumque praesentium unde autem vitae, soluta harum ipsam vero quae
              sed quam!
            </p>
          </main> -->
        </div>
      </div>
    </article>

    <section class="mb-20 latest">
      <div class="container">
        <div
          class="flex items-center justify-between py-10 pb-20 border-t border-dark"
        >
          <h2 class="uppercase">Latest Post</h2>

          <a href="<?php echo site_url('/magazine')?>" class="link-arrow right"
            >All Articles
            <svg class="icon-sm" role="image">
              <use xlink:href="<?php echo get_template_directory_uri() ?>/img/sprite.svg#icon-arrow-right"></use>
            </svg>
          </a>
        </div>

        <div class="grid overflow-hidden border md:grid-cols-3 border-dark lastest-grid">
          

        <?php
            $magazine = new WP_Query(array(
                    'post_type' => 'magazines',
                    'post_per_page' => 1,
                    'orderby' => 'rand',
                    'post_not_in' => get_the_ID()
                  
                ));

        if($magazine->have_posts()) : while($magazine->have_posts()) : $magazine->the_post()?>


        <div class="p-10 grid-item">
            <span class="after"></span>
            <span class="before"></span>
            <div class="flex items-center justify-between mb-10">
              <p><?php echo get_the_date('d, F Y')?></p>
              <a href="#" class="category"><?php echo get_categories()[0]->name?></a>
            </div>

            <div class="mb-10 img-wrap">
              <img
                src="<?php the_field('thumbnail')?>"
                alt=""
                class="object-cover w-full h-full"
              />
            </div>

            <h3 class="article-header"><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
            <p class="mb-10 line-clamp-4">
              <?php the_field('excerpt')?>
            </p>
            <div class="details">
              <ul>
                <li><span>Date:</span> <?php echo get_the_date('d, F Y')?></li>
                <li><span>Duration:</span> <?php the_field('duration')?></li>
              </ul>
            </div>
          </div>


        </div>


        <?php 
        endwhile;
            else: 
                echo "No post xxx";
            endif;

            wp_reset_postdata();
        ?>


      </div>
    </section>



<?php get_footer()?>