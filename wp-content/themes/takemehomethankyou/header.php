
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php echo "$page_title";?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
</head>
<body>
    <nav class="nav-bar">
        <div class="logo">
            EQUINOX
        </div>
        <ul class="nav-bar-menu">
            <li>
                CHAT
            </li>
            <li>
                VISIT US
            </li>
            <li>
                CANCEL
            </li>
        </ul>
        
            <div class="nav-bar__hamburger-container">
                    <div class="nav-bar__hamburger">
            
                        </div>
            </div>



    </nav>
    <div class="nav-bar-overlay">
        <ul>
                <li>
                        CHAT
                    </li>
                    <li>
                        VISIT US
                    </li>
                    <li>
                        CANCEL
                    </li>
        </ul>
    </div>
    <div class="image-group">
        <img src="<?php echo get_template_directory_uri(); ?>/images/barbell-black-and-white-equipment-949131.jpg" alt="athlete with barbell" class="img-1">
        <div class="mid-img-container">
            <div class="step-text-container">
					
                    <p class="upper-text"><?php echo $step; ?></p>
                    <p class="lower-text"><?php echo $step_name;?></p>
		
            </div>
        </div>
        <img src="<?php echo get_template_directory_uri(); ?>/images/bodybuilding-close-up-dumbbells-260352.jpg" alt="barbell" class="img-3">
	
	</div>