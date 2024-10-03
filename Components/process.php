<?php
$secHeading = isset($secHeading) ? $secHeading : 'Our Website Design Process';
$description = isset($description) ? $description : 'How to create a website tailored to your unique business goals? Take a look at our design process that helps us deliver customized and goal-oriented digital solutions.';
$processSteps = isset($processSteps) ? $processSteps : [];
?>

<section class="processSec">
    <div class="container-md">
        <div class="row">
            <div class="col-12">
                <div class="headingCont">
                    <h2 class="secHeading">
                        <?php echo $secHeading; ?>
                    </h2>
                    <h5>
                        <?php echo $description; ?>
                    </h5>
                </div>
            </div>
            <div class="col-12">
                <div class="processThumbsCont">
                    <?php foreach ($processSteps as $index => $step): ?>
                        <div class="processThumbBox <?php echo $index === 0 ? 'active' : ''; ?>">
                            <figure>
                                <figcaption><?php echo $step['title']; ?></figcaption>
                                <img src="<?php echo $step['thumbImage']; ?>" alt="">
                            </figure>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="processSlider">
                    <?php foreach ($processSteps as $index => $step): ?>
                        <div class="processBox <?php echo $index === 0 ? 'active' : ''; ?>">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-7">
                                        <div class="content">
                                            <h3><?php echo $step['title']; ?></h3>
                                            <p><?php echo $step['description']; ?></p>
                                            <h5>In this phase we:</h5>
                                            <ul>
                                                <?php foreach ($step['tasks'] as $task): ?>
                                                    <li>
                                                        <i class="fas fa-caret-right"></i>
                                                        <?php echo $task; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                            <a class="themeBtn" href="javascript:;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                Get Started
                                                <span></span><span></span><span></span><span></span> <b class="blinking-dot"></b>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <figure>
                                            <img src="<?php echo $step['fullImage']; ?>" alt="">
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
