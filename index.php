<?php require_once 'header.php'; ?>

<header class="main-header">

    <?php require "inc/navigation.php"; ?>

    <section class="hero">

        <div class="hero--media">

            <img src="https://images.pexels.com/photos/209272/pexels-photo-209272.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt="red and black crane">

        </div>

        <div class="hero--contentContainer container mx-auto">

            <p class="display-1">
                Making Building Easier For You
            </p>

            <p class="subtitle">
                Forget the old Days. You can have the best people on the job.
                Right <span style="color: yellow; text-transform: uppercase;">now</span>. Right <span
                    style="color: yellow; text-transform: uppercase;">here</span>.
            </p>

            <div class="hero--contentContainer_btnContainer">

                <button class="btn btn-primary">Find Contractor</button>

                <button class="btn btn-secondary_outline">
                    Find Clients

                    <svg id="Icons" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32"
                        xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g>
                            <path
                                d="M21,23c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l5.3-5.3l-5.3-5.3c-0.4-0.4-0.4-1,0-1.4s1-0.4,1.4,0l6,6   c0.4,0.4,0.4,1,0,1.4l-6,6C21.5,22.9,21.3,23,21,23z" />
                        </g>
                        <g>
                            <path d="M27,17H5c-0.6,0-1-0.4-1-1s0.4-1,1-1h22c0.6,0,1,0.4,1,1S27.6,17,27,17z" />
                        </g>
                    </svg>

                </button>

            </div>

        </div>

    </section>

</header>

<?php require_once 'footer.php'; ?>