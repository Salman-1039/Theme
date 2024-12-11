<?php
   get_header();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4pP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/Assets/CSS/style.css" />
    <title>WPWorld</title>

    <style>
        body {
            margin: 0;
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #f9f9f9;
        }
        .hero {
            text-align: center;
            padding: 50px 20px;
            position: relative;
            overflow: hidden;
        }
        .hero-title {
            font-size: 2.5rem;
            font-weight: bold;
            color: #5f49f4;
            margin: 20px 0;
        }
        .hero-subtitle {
            font-size: 1rem;
            color: #333;
            margin-bottom: 30px;
        }
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }
        .cta-button {
            padding: 15px 30px;
            border-radius: 25px;
            font-size: 16px;
            font-weight: bold;
            text-decoration: none;
            transition: all 0.3s ease;
        }
        .cta-button.primary {
            background-color: #5f49f4;
            color: #fff;
        }
        .cta-button.primary:hover {
            background-color: #3e30aa;
        }
        .cta-button.secondary {
            background-color: #fff;
            color: #5f49f4;
            border: 2px solid #5f49f4;
        }
        .cta-button.secondary:hover {
            background-color: #5f49f4;
            color: #fff;
        }
        .awards {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }
        .award {
            text-align: center;
            font-size: 14px;
            color: #333;
        }
        .award img {
            width: 100px;
            height: auto;
            display: block;
            margin: 0 auto 10px;
        }
        .comment-popup {
            position: absolute;
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background: #fff;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            border-radius: 15px;
            animation: float 5s infinite ease-in-out;
        }
        .comment-popup img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            border: 2px solid #5f49f4;
        }
        .comment-popup .content {
            font-size: 14px;
        }
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }
    </style>
</head>

<body>
    <main>
        <div class="hero">
            <div class="awards">
                <div class="award">
                    <img src="<?php echo get_template_directory_uri(); ?>/Assets/Images/best-support-2024.png" alt="Best Support 2024">
                    <strong>Best Support</strong>
                </div>
                <div class="award">
                    <img src="<?php echo get_template_directory_uri(); ?>/Assets/Images/seo-leader-2024.png" alt="SEO Leader 2024">
                    <strong>SEO Leader</strong>
                </div>
                <div class="award">
                    <img src="<?php echo get_template_directory_uri(); ?>/Assets/Images/best-speed-2024.png" alt="Best Speed 2024">
                    <strong>Best Speed</strong>
                </div>
            </div>
            <h1 class="hero-title">Unlimited WordPress Hosting that Grows Your Traffic</h1>
            <p class="hero-subtitle">Switch now to get your <strong>free SEO Campaign</strong>. Our engineers will migrate, optimize, and secure your website within 12 hours.</p>
            <div class="cta-buttons">
                <a href="#" class="cta-button primary">Start Now</a>
                <a href="#" class="cta-button secondary">See Features</a>
            </div>

            <!-- Comment Popups -->
            <div class="comment-popup" style="top: 10%; left: 10%;">
                <img src="https://via.placeholder.com/50" alt="User">
                <div class="content">
                    <strong>128%</strong> Site Traffic
                </div>
            </div>
            <div class="comment-popup" style="top: 20%; right: 10%;">
                <img src="https://via.placeholder.com/50" alt="User">
                <div class="content">
                    <strong>93%</strong> Subscribers
                </div>
            </div>
        </div>

         <!-- WordPress Loop to Display Posts -->
         <section class="blog-posts">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <article>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <p>No posts found.</p>
            <?php endif; ?>
        </section>
    </main>

    <?php get_footer(); ?>
</body>

</html>
