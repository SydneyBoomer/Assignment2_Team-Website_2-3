<?php
$team = [
	[
        'name' => 'Sydney Boomer',
		'role' => 'Software Sorcerer',
		'profilePic' => 'assets\images\sydney-profile-pic.jpg',
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
		'profilePic' => '',
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
					"Adnitted to the Young Scholars Academy", "Dean's List"
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
			"Risk Management Plan Building, RStudio, Microsoft Office Suite"
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
				'link' => ''
			]
		]
    ],
    [	//third  member information-- this will be dummy info as there are only two members on this
        'name' => '',
		'role' => '',
		'profilePic' => '',
		'desiredJobTitle' => '',
		'email' => '',
		'phoneNumber' => '',
		'linkedin' => '',
		'github' => '',
		'personalWebsite' => '',
		'summary' => '',
		'workExperience' => [
            [
                'title' => '',
                'description' => '',
				'company' => '',
                'timeWorked' => '',
				'achievementsDescription' => '',
				'achievements' => [
					"achievement1", "achievement2"
				],
                'technologiesUsed' => [
					"tech1", "tech2"
				]
            ],
			[
                'title' => '',
                'description' => '',
				'company' => '',
                'timeWorked' => '',
				'achievementsDescription' => '',
				'achievements' => [
					"achievement1", "achievement2"
				],
                'technologiesUsed' => [
					"tech1", "tech2"
				]
            ],
			[
                'title' => '',
                'description' => '',
				'company' => '',
                'timeWorked' => '',
				'achievementsDescription' => '',
				'achievements' => [
					"achievement1", "achievement2"
				],
                'technologiesUsed' => [
					"tech1", "tech2"
				]
            ]
		],
		'skills' => [
			// KEEP TO TOP 5, list others in otherSkills
			['skill' => '', 'percent' => 0],
			['skill' => '', 'percent' => 0],
			['skill' => '', 'percent' => 0],
			['skill' => '', 'percent' => 0],
			['skill' => '', 'percent' => 0]
		],
		'otherSkills' => [
			"skill1, skill2"
		],
		'education' => [
			[
				'degree' => '',
				'university' => '',
				'graduation' => ''
			],
			[
				'degree' => '',
				'university' => '',
				'graduation' => ''
			]
		],
		'awards' => [
			[
				'name' => '',
				'description' => ''
			],
			[
				'name' => '',
				'description' => ''
			]
		],
		'languages' => [
			[
				'language' => 'English',
				//Skill should be Native, Professional, Intermediate, or Elementary
				'level' => 'Native'
			],
			[
				'language' => '',
				'level' => ''
			]
		],
		'interests' => [
			//list as many as you want
			"",
			"",
			""
		],
		'projects' => [
			[
				'imageLink' => '',
				'name' => '',
				'description' => '',
				'link' => ''
			]
		]
    ]
];

?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Our amazing team</title>
    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Your name's resume">
    <meta name="author" content="Your name">    
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
	    <div class="resume-wrapper-inner mx-auto text-start bg-white shadow-lg">
			<h1 class="py-4 text-center">OUR AMAZING TEAM</h1>
		    <header class="resume-header pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Member 1 name</h1>
							    <div class="title mb-3">Member 1 role</div>
								<!-- replace 0, so it changes in each iteration of the for each loop-->
								<a href="<?php echo 'detail.php?member=0'; ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Member 2 name</h1>
							    <div class="title mb-3">Member 2 role</div>
								<a href="#<?php /*LINK_TO_MEMBER_2_PAGE*/ ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
		    <header class="resume-header mt-4 pt-4 pt-md-0">
			    <div class="row">
				    <div class="col-block col-md-auto resume-picture-holder text-center text-md-start">
				        <img class="picture" src="assets/images/profile.jpg" alt="">
				    </div><!--//col-->
				    <div class="col">
					    <div class="row p-4 justify-content-center justify-content-md-between">
						    <div class="primary-info col-auto">
							    <h1 class="name mt-0 mb-1 text-white text-uppercase text-uppercase">Member 3 name</h1>
							    <div class="title mb-3">Member 3 role</div>
								<a href="#<?php /*LINK_TO_MEMBER_3_PAGE*/ ?>" class="btn btn-secondary">See full profile</a>
						    </div><!--//primary-info-->
						    <div class="secondary-info col-auto mt-2">
						    </div><!--//secondary-info-->
					    </div><!--//row-->
					    
				    </div><!--//col-->
			    </div><!--//row-->
		    </header>
		    
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