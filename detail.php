<?php
$team = [
	[
        'name' => 'Sydney Boomer',
		'role' => 'Software Sorcerer',
		'profilePic' => 'assets/images/sydney-profile-pic.jpg',
		'desiredJobTitle' => 'Software Developer',
		'email' => 'boomers1@nku.edu',
		'phoneNumber' => '(123) 456 - 7890',
		'linkedin' => 'https://www.linkedin.com/in/sydney-boomer/',
		'github' => 'https://github.com/SydneyBoomer',
		'personalWebsite' => 'https://sydneyboomer.github.io/INF286_FinalProject_PersonalSite/',
		'summary' => 'I am pursuing Bachelor of Science degrees in Computer Science and Cybersecurity, with minors in Mathematics and Honors, at Northern Kentucky University. I have experience in programming, cybersecurity, tutoring, and student leadership. I currently work as an Agency Interface Developer Intern with Cincinnati Insurance, where I am gaining hands-on software development experience. I also serve as a Supplemental Instruction Leader for Computer Systems and a Mathematics Tutor at NKU, and I am the Vice President of the NKU Women in Cybersecurity chapter.',
		'workExperience' => [
			[
				'title' => 'Agency Interface Developer',
				'description' => 'Work as an Agency Interface Developer Intern, collaborating closely with a developer and participating in daily team standups. Contribute to software development projects while gaining experience working with APIs, GitHub, and team development workflows.',
				'company' => 'Cincinnati Insurance Company',
				'timeWorked' => 'August 2026 - Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Organized a team-wide GitHub repository containing 29 API collections and hundreds of API calls.", 
					"Standardized the formatting and structure of API collections to improve consistency and maintainability across the team.",
					"Worked with existing API collections to organize and prepare them for easier use and collaboration within the team."
				],
				'technologiesUsed' => [
					"GitHub", "APIs", "Bruno", "PowerShell"
				]
			],
			[
				'title' => 'Supplemental Instruction Leader',
				'description' => 'Lead peer-assisted study sessions for Computer Systems, helping students understand challenging topics through collaborative problem-solving and active learning.',
				'company' => 'Northern Kentucky University',
				'timeWorked' => 'January 2026 - Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Facilitate study sessions for 5-15 students covering topics such as assembly language, registers, addressing modes, memory hierarchy, and memory management.",
					"Use group discussions, worked examples, and guided questions to help students develop their understanding of complex computer systems concepts.",
					"Collaborate with the course instructor and regularly attend lectures to align SI sessions with course material and learning objectives."
				],
				'technologiesUsed' => [
					"Assembly Language", "Computer Systems", "Memory Management"
				]
			],
			[
				'title' => 'Mathematics Tutor',
				'description' => 'Provide individual and small-group mathematics tutoring in a supportive environment, helping students build confidence and strengthen their problem-solving skills.',
				'company' => 'Northern Kentucky University',
				'timeWorked' => 'November 2024 - Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Tutor 3-4 students during a three-hour period on a range of mathematics and statistics topics.",
					"Explain difficult concepts in ways that are accessible to students with different levels of understanding.",
					"Encourage collaborative problem-solving and create a judgment-free environment for students to ask questions."
				],
				'technologiesUsed' => [
					"Mathematics", "Statistics", "Problem Solving"
				]
			],
			[
				'title' => 'Assistant Coach',
				'description' => 'Support daily restaurant operations while providing customer service, supervising team members, and helping maintain an efficient and welcoming environment.',
				'company' => 'Chick-fil-A',
				'timeWorked' => 'August 2022 - Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Serve 100+ guests during a three-hour period while maintaining a fast-paced and welcoming environment.",
					"Supervise and support a team of 12, helping with shift transitions, team morale, and adherence to food safety and service standards.",
					"Train and onboard new team members, helping them quickly learn operational procedures and expectations."
				],
				'technologiesUsed' => [
					"Team Leadership", "Customer Service", "Training", "Communication"
				]
			]
    	],
		'skills' => [
			// KEEP TO TOP 5, list others in otherSkills
			['skill' => 'Python', 'percent' => 90],
			['skill' => 'C++', 'percent' => 85],
			['skill' => 'Java', 'percent' => 85],
			['skill' => 'SQL', 'percent' => 80],
			['skill' => 'GitHub', 'percent' => 85]

		],
		'otherSkills' => [
			"HTML5",
			"MITRE ATT&CK",
			"Team Leadership",
			"Critical Thinking",
			"Adaptability"
		],
		'education' => [
			[
				'degree' => 'Bachelor of Science in Computer Science',
				'university' => 'Northern Kentucky University',
				'graduation' => 'Expected May 2027'
			],
			[
				'degree' => 'Bachelor of Science in Cybersecurity',
				'university' => 'Northern Kentucky University',
				'graduation' => 'Expected May 2027'
			]
		],
		'awards' => [
			[
				'name' => 'Michael Francis Zalla Honors Scholarship',
				'description' => 'Scholarship awarded through Northern Kentucky University for academic achievement.'
			],
			[
				'name' => 'Chick-fil-A Remarkable Futures Scholarship',
				'description' => 'Scholarship awarded to support college education and academic goals.'
			]
		],
		'languages' => [
			[
				'language' => 'English',
				'level' => 'Native'
			],
			[
				'language' => 'Spanish',
				'level' => 'Intermediate'
			]
		],
		'interests' => [
			//list as many as you want
			"Reading",
			"Programming",
			"Horseback Riding",
			"Baking"
		],
		'projects' => [
			[
				'imageLink' => 'assets\images\nkCyberLogo.png',
				'name' => 'Sky Sentry: Multi-Factor Authentication System',
				'description' => 'Developed a multi-factor authentication system with a team of three using facial recognition and RFID/swipe authentication for NKCyber and WiCyS.',
				'link' => 'https://github.com/nkcyber/RND-SkySentry.git'
			]
		]
	],
    [	//basic information for team member 2, to be utilized by the for loop later
        'name' => 'Victoria Deitsch',
		'role' => 'Cyber Warlock',
		'profilePic' => 'assets/images/victoria-profile-pic.jpeg',
		'desiredJobTitle' => 'Cybersecurity Analyst',
		'email' => 'deitschv1@mymail.nku.edu',
		'phoneNumber' => '111-222-3333',
		'linkedin' => 'https://linkedin.com/in/victoria-deitsch/',
		'github' => 'https://github.com/deitschling',
		'personalWebsite' => 'https://victoria_deitsch.com',
		'summary' => 'Cybersecurity Senior at Northern Kentucky University with a minor in Computer Forensics; anticipating graduation May of 2027. Ample customer experience and interest to learn. Seeking an entry level tech position or internship to build experience in the Greater Cincinnati / Northen Kentucky, in person or virtual.',
		'workExperience' => [
            [
                'title' => 'Server',
                'description' => 'Server at a movie theater restaraunt. Responsible for handling positive guest interactions, taking accurate orders in theater houses while film is playing, delivering food & drink according to FDA standard, and handling payment transactions.',
				'company' => 'Cinemark',
                'timeWorked' => '2023 - Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Most Improved Server", "Trained in All Areas"
				],
                'technologiesUsed' => [
					"Penny POS", "Linux Command Line"
				]
            ],
			[
                'title' => 'Bookseller',
                'description' => 'Bookseller at the Northern Kentucky University Campus Bookstore. Responsible for taking returns, processing orders, answering professional calls, calling suppliers to make and cancel orders, and maintaining a set order in the store.',
				'company' => 'Banres & Noble Educational',
                'timeWorked' => 'Decmeber 2022 - March 2023',
				'achievementsDescription' => '',
				'achievements' => [
					"Learned to Use a Trash Compactor", "Handled Making and Cancelling Orders from Suppliers"
				],
                'technologiesUsed' => [
					"Windows 11 Office", "Barnes & Noble Educational Proprietary POS"
				]
            ],
			[	//this member has only worked two jobs, so school is listed as the third
                'title' => 'Cybersecurity Student',
                'description' => 'Full-time Cybersecurity student at Northern Kentucky University. Responsible for balancing a 15-16 hour class workload on top of a part time job, learning key concepts for securing critical systems, learning best coding practices with security in mind, and learning what laws govern security in cyber space.',
				'company' => 'Northen Kentucky University',
                'timeWorked' => 'Fall 2022 - Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Admitted to the Young Scholars Academy", "Dean's List"
				],
                'technologiesUsed' => [
					"Python", "Linux Commandline"
				]
            ]
		],
		'skills' => [
			// KEEP TO TOP 5, list others in otherSkills
			['skill' => 'Linux Command Line', 'percent' => 90],
			['skill' => 'SQL', 'percent' => 90],
			['skill' => 'Python', 'percent' => 85],
			['skill' => 'Wireshark', 'percent' => 85],
			['skill' => 'OracleDB', 'percent' => 60]
		],
		'otherSkills' => [
			"Risk Management Plan Building", "RStudio", "Microsoft Office Suite"
		],
		'education' => [
			[
				'degree' => 'Bachelors of Science, Cybersecurity',
				'university' => 'Northern Kentucky University',
				'graduation' => 'Expected Spring 2027'
			],
			[
				'degree' => 'High School Diploma',
				'university' => 'Lloyd Memorial High School',
				'graduation' => 'May 2024'
			]
		],
		'awards' => [
			[
				'name' => 'Summa Cum Laude',
				'description' => 'Graduated high school with a weighted GPA of 3.9 or above.'
			],
			[
				'name' => 'Dean\'s List',
				'description' => 'Final grades for a semester with a GPA of 3.5 or above.'
			]
		],
		'languages' => [
			[
				'language' => 'English',
				//Skill should be Native, Professional, Intermediate, or Elementary
				'level' => 'Native'
			],
			[
				'language' => 'Italian',
				'level' => 'Elementary'
			]
		],
		'interests' => [
			//list as many as you want
			"Video Games",
			"Comic Book Collecting",
			"Crocheting",
			"Knitting",
			"Movies & TV Shows"
		],
		'projects' => [
			[
				'imageLink' => 'assets/images/picture_of_project_member2.png',
				'name' => 'Personal Website for INF 286',
				'description' => 'Final project requiring to build a website about myself utilizing Website Development skills learned throughout INF 286 (Intro to Website Development)',
				'link' => 'https://www.example.com'
			]
		]
    ],
    [	//third  member information-- this will be dummy info as there are only two members on this
		//this dummy information is based off of Peter Parker / Spider-Man from the Marvel Comics
        'name' => 'Peter Parker',
		'role' => 'Photographer',
		'profilePic' => 'assets/images/peter_profile_pic.jpg',
		'desiredJobTitle' => 'Biochemical Scientist',
		'email' => 'pbparker@gmail.com',
		'phoneNumber' => '123-456-7890',
		'linkedin' => 'https://linkedin.com/in/peter-parker/',
		'github' => 'https://github.com/pbparker',
		'personalWebsite' => 'https://peter_b_parker.com',
		'summary' => 'Twenty-two year old freelance phographer for the daily bugle. Has a Bachelors of Science in BioChemical Engineering from Empire State University, seeking assitant position for questionable scientific endeavors.',
		'workExperience' => [
            [
                'title' => 'Freelance Photographer',
                'description' => 'Sells professional photos to the Daily Bugle on a case by case basis. Ranges from profile to investigative. Has taken a good number of shots of Spider-Man',
				'company' => 'Daily Bugle',
                'timeWorked' => '2022-Present',
				'achievementsDescription' => '',
				'achievements' => [
					"Most Photos Taken of Spider-Menace", "Impressed J. Jonah Jameson"
				],
                'technologiesUsed' => [
					"Adobe Lightroom", "Apple Pixelmaster Pro"
				]
            ],
			[
                'title' => 'Stark Internship',
                'description' => 'Worked as an assistant in a lab for Tony Stark on his various projects including a mix of coding and engineering.',
				'company' => 'Stark Industries',
                'timeWorked' => '2019-2021',
				'achievementsDescription' => '',
				'achievements' => [
					"Grant Winner of the September Foundation", "First (and only) Member of the Stark Industries Internship Program"
				],
                'technologiesUsed' => [
					"Proprietary Stark 3D modeling software", "C Programming Language"
				]
            ],
			[
                'title' => 'Lab Assistant',
                'description' => 'Woked as a junior lab assistant for Dr. Curtis Connor\'s experimental gene therapy research specializing in spider and lizard DNA.',
				'company' => 'Oscorp',
                'timeWorked' => '2018-2019',
				'achievementsDescription' => '',
				'achievements' => [
					"Found main breakthrough in the reasearch", "Found cure when lizard research went wrong"
				],
                'technologiesUsed' => [
					"ChimeraX", "SnapGene"
				]
            ]
		],
		'skills' => [
			// KEEP TO TOP 5, list others in otherSkills
			['skill' => 'C Programming Language', 'percent' => 100],
			['skill' => 'Python', 'percent' => 90],
			['skill' => 'Linux Command Line', 'percent' => 90],
			['skill' => 'ChimeraX', 'percent' => 85],
			['skill' => 'SnapGene', 'percent' => 85]
		],
		'otherSkills' => [
			"Adobe Lightroom", "Microsoft Office Suite"
		],
		'education' => [
			[
				'degree' => 'Bachelor\'s of Science in BioChemical Engineering',
				'university' => 'Empire State University',
				'graduation' => 'Spring 2026'
			],
			[
				'degree' => 'High School Diploma',
				'university' => 'Midtown High School',
				'graduation' => '2022'
			]
		],
		'awards' => [
			[
				'name' => 'Summa Cum Laude',
				'description' => 'Graduated high school with a weighted GPA of 3.9 or above.'
			],
			[
				'name' => 'Dean\'s List',
				'description' => 'Final grades for a semester with a GPA of 3.5 or above.'
			]
		],
		'languages' => [
			[
				'language' => 'English',
				//Skill should be Native, Professional, Intermediate, or Elementary
				'level' => 'Native'
			],
			[
				'language' => 'Spanish',
				'level' => 'Intermediate'
			]
		],
		'interests' => [
			//list as many as you want
			"Photography",
			"Robotics",
			"Spider-Man"
		],
		'projects' => [
			[
				'imageLink' => 'assets/images/member_3_project.jpg',
				'name' => 'Lizard Gene Therapy',
				'description' => 'Worked with Dr. Curtis Connor on research to regrow limbs with gene therapy splicing humand and lizard DNA.',
				'link' => 'https://www.example.com'
			]
		]
    ]
];

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
		<div class="mb-4"><a href="index.php" class="btn btn-primary"><?php echo "Back to index"?></a></div>
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
								<img src="<?php echo $project['imageLink']; ?>" alt="<?php echo $project['name']; ?>" class="card-img-top" style="max-height: 200px; width: 100%; object-fit: contain;">
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
        <small class="copyright"><?php echo "Designed with "?><span class="sr-only"><?php echo "love"?></span><i class="fas fa-heart"></i> 
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

