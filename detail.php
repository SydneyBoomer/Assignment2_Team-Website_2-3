<?php
// INSERT TABLE HERE

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title><?php echo $team[$_GET['member']]['name'] . "'s Resume "?></title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $team[$_GET['member']]['name'] . "'s Resume ";?>">
    <meta name="author" content="<?php echo $team[$_GET['member']]['name'];?>">    
    <link rel="shortcut icon" href="favicon.ico"> 
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    
    <!-- FontAwesome JS-->
	<script defer src="assets/fontawesome/js/all.min.js"></script>
       
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/pillar-1.css">


</head> 

<body>
    <article class="resume-wrapper text-center position-relative">
		<?php /* Only the following line changed from the file in the previous assignment */ ?>
		<div class="mb-4"><a href="index.php" class="btn btn-primary">Back to index</a></div>
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="<?php echo $team[$_GET['member']]['profilePic']; ?>" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase"><?php echo $team[$_GET['member']]['name'];?></h1>
							    <div class="title mb-3"><?php echo $team[$_GET['member']]['desiredJobTitle'];?></div>
							    <ul class="list-unstyled">
								    <li class="mb-2"><a class="text-link" href="#"><i class="far fa-envelope fa-fw me-2" data-fa-transform="grow-3"></i><?php echo $team[$_GET['member']]['email'];?></a></li>
								    <li><a class="text-link" href="#"><i class="fas fa-mobile-alt fa-fw me-2" data-fa-transform="grow-6"></i><?php echo $team[$_GET['member']]['phoneNumber'];?></a></li>
							    </ul>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
							    <ul class="resume-social list-unstyled">
					                <li class="mb-3"><a class="text-link" href="<?php echo $team[$_GET['member']]['linkedin'];?>"><span class="fa-container text-center me-2"><i class="fab fa-linkedin-in fa-fw"></i></span><?php echo "LinkedIn"; ?></a></li>
					                <li class="mb-3"><a class="text-link" href="<?php echo $team[$_GET['member']]['github'];?>"><span class="fa-container text-center me-2"><i class="fab fa-github-alt fa-fw"></i></span><?php echo "GitHub";?></a></li>
					                <li><a class="text-link" href="<?php echo $team[$_GET['member']]['personalWebsite'];?>"><span class="fa-container text-center me-2"><i class="fas fa-globe"></i></span><?php echo "Personal Website";?></a></li>
							    </ul>
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    <div class="resume-body p-5">
			    <section class="resume-section summary-section mb-5">
				    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Summary";?></h2>
				    <div class="resume-section-content">
					    <p class="mb-0"><?php echo $team[$_GET['member']]['summary'];?></p>
				    </div>
			    </section><!--//summary-section-->
			    <div class="row">
				    <div class="col-lg-9">
					    <section class="resume-section experience-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Work Experience";?></h2>
						    <div class="resume-section-content">
							    <div class="resume-timeline position-relative">
									<?php foreach ($team[$_GET['member']]['workExperience'] as $job) { ?>

								    <article class="resume-timeline-item position-relative pb-5">
									    
									    <div class="resume-timeline-item-header mb-2">
										    <div class="d-flex flex-column flex-md-row">
										        <h3 class="resume-position-title font-weight-bold mb-1"><?php echo $job['title']; ?></h3>
										        <div class="resume-company-name ms-auto"><?php echo $job['company']; ?></div>
										    </div><!--//row-->
										    <div class="resume-position-time"><?php echo $job['timeWorked']; ?></div>
									    </div><!--//resume-timeline-item-header-->
									    <div class="resume-timeline-item-desc">
										    <p><?php echo $job['description']; ?></p>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo "Achievements:";?></h4>
										    <p><?php echo $job['achievementsDescription']; ?></p>
										    <ul>
												<?php foreach ($job['achievements'] as $achievement) { ?>
											    <li><?php echo $achievement; ?></li>
												<?php } ?>
										    </ul>
										    <h4 class="resume-timeline-item-desc-heading font-weight-bold"><?php echo "Technologies used:"; ?></h4>
										    <ul class="list-inline">
												<?php foreach ($job['technologiesUsed'] as $tech) { ?>
											    <li class="list-inline-item"><span class="badge bg-secondary badge-pill"><?php echo $tech; ?></span></li>
											    <?php } ?>
										    </ul>
									    </div><!--//resume-timeline-item-desc-->
								    </article><!--//resume-timeline-item-->
									<?php }?>
							    </div><!--//resume-timeline-->
							    							    
						    </div>
					    </section><!--//projects-section-->
				    </div>
				    <div class="col-lg-3">
					    <section class="resume-section skills-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Skills &amp; Tools"; ?></h2>
						    <div class="resume-section-content">
						        <div class="resume-skill-item">
							        <ul class="list-unstyled mb-4">
										<?php foreach ($team[$_GET['member']]['skills'] as $skill) { ?>
								        <li class="mb-2">
								            <div class="resume-skill-name"><?php echo $skill['skill'];?></div>
									        <div class="progress resume-progress">
											    <div class="progress-bar theme-progress-bar-dark" role="progressbar" style="width: <?php echo $skill['percent']; ?>%" aria-valuenow="<?php echo $skill['percent']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
											</div>
								        </li>
										<?php }?>
								    </ul>
									
						        </div><!--//resume-skill-item-->
						        <div class="resume-skill-item">
						            <h4 class="resume-skills-cat font-weight-bold"><?php echo "Others"; ?></h4>
						            <ul class="list-inline">
										<?php foreach ($team[$_GET['member']]['otherSkills'] as $skill) { ?>
							            <li class="list-inline-item"><span class="badge badge-light"><?php echo $skill;?></span></li>
							            <?php }?>
						            </ul>
						        </div><!--//resume-skill-item-->
						    </div><!--resume-section-content-->
					    </section><!--//skills-section-->
					    <section class="resume-section education-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Education"; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php foreach ($team[$_GET['member']]['education'] as $edu) { ?>
								    <li class="mb-2">
								        <div class="resume-degree font-weight-bold"><?php echo $edu['degree'];?></div>
								        <div class="resume-degree-org"><?php echo $edu['university'];?></div>
								        <div class="resume-degree-time"><?php echo $edu['graduation'];?></div>
								    </li>
								    <?php }?>
							    </ul>
						    </div>
					    </section><!--//education-section-->
					    <section class="resume-section reference-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Awards"; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-awards-list">
									<?php foreach ($team[$_GET['member']]['awards'] as $award) { ?>
								    <li class="mb-2 ps-4 position-relative">
								        <i class="resume-award-icon fas fa-trophy position-absolute" data-fa-transform="shrink-2"></i>
								        <div class="resume-award-name"><?php echo $award['name'];?></div>
								        <div class="resume-award-desc"><?php echo $award['description'];?></div>
								    </li>
								    <?php }?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    <section class="resume-section language-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Languages"; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled resume-lang-list">
									<?php foreach ($team[$_GET['member']]['languages'] as $lang) { ?>
								    <li class="mb-2"><span class="resume-lang-name font-weight-bold"><?php echo $lang['language'];?></span> <small class="text-muted font-weight-normal"><?php echo "(" . $lang['level'] . ")";?></small></li>
							    	<?php }?>
								</ul>
						    </div>
					    </section><!--//language-section-->
					    <section class="resume-section interests-section mb-5">
						    <h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Interests"; ?></h2>
						    <div class="resume-section-content">
							    <ul class="list-unstyled">
									<?php foreach ($team[$_GET['member']]['interests'] as $interest) { ?>
								    <li class="mb-1"><?php echo $interest; ?></li>
								    <?php }?>
							    </ul>
						    </div>
					    </section><!--//interests-section-->
					    
				    </div>
			    </div><!--//row-->
				<section class="resume-section experience-section mb-5">
					<h2 class="resume-section-title text-uppercase font-weight-bold pb-3 mb-3"><?php echo "Projects"; ?></h2>
					<div class="row mt-4">
						<?php foreach ($team[$_GET['member']]['projects'] as $project) { ?>
						<div class="col-md-4">
							<div class="card">
								<img src="<?php echo $project['imageLink']; ?>" alt="<?php echo $project['name']; ?>" class="card-img-top" style="max-height: 200px; width: 100%; object-fit: contain;>
								<div class="card-body">
									<h5 class="card-title"><?php echo $project['name']; ?></h5>
									<p class="card-text"><?php echo $project['description']; ?></p>
									<a href="<?php echo $project['link']; ?>" class="btn btn-outline-primary">Go to link</a>
								</div>
							</div>
						</div>
						<?php }?>
					</div>
				</section><!--//projects-section-->
		    </div><!--//resume-body-->
		    
		    
	    </div>
    </article> 

    
    <footer class="footer text-center pt-2 pb-5">
	    <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
        <small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart"></i> 
		<?php 
		foreach ($team as $key => $member) {
			if ($key === array_key_last($team)) {
				echo $member['name'];
			} else {
				echo $member['name'] . ", ";
			}
		}
		?></small>
    </footer>

    

</body>
</html> 

