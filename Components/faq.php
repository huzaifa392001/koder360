<?php
$secHeading = isset($secHeading) ? $secHeading : 'Frequently Asked Questions';
$description = isset($description) ? $description : 'How to create a website tailored to your unique business goals? Take a look at our design process that helps us deliver customized and goal-oriented digital solutions.';
$faqItems = isset($faqItems) ? $faqItems : [];
?>
<section class="faqSec">
    <div class="accordion" id="accordionPanelsStayOpenExample">
        <div class="container">
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

                <?php foreach ($faqItems as $index => $faq): ?>
                    <div class="col-md-6">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button <?php echo $index === 0 ? '' : 'collapsed'; ?>"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapse<?php echo $index; ?>"
                                        aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>"
                                        aria-controls="panelsStayOpen-collapse<?php echo $index; ?>">
                                    <?php echo $faq['question']; ?>
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapse<?php echo $index; ?>"
                                 class="accordion-collapse collapse <?php echo $index === 0 ? 'show' : ''; ?>">
                                <div class="accordion-body">
                                    <?php echo $faq['answer']; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
