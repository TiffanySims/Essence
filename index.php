<?php
  // Message Vars
  
 

	$msg = '';
	

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $age= htmlspecialchars($_POST['age']);
    $phone= htmlspecialchars($_POST['phone']);
    $package= htmlspecialchars($_POST['package']);



  
    if(empty($message)){
      $message='No message';
    }
    
    if(empty($age)){
      $age='Age not defined';
    }
    
    if(empty($phone)){
      $phone='Phone not defined';
    }
    
    if(empty($package)){
      $package='Package not defined';
    }
    

    

		// Check Required Fields
		if(!empty($email) && !empty($name)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
			
			} else {
        // Passed
        
				$toEmail = 'inquire@theessencefit.com';
				$subject = 'Contact Request From '.$name;
				$body = '<h2>Contact Request</h2>
					<h4>Name</h4><p>'.$name.'</p>
					<h4>Email</h4><p>'.$email.'</p>
          <h4>Phone</h4><p>'.$phone.'</p>
					<h4>Age</h4><p>'.$age.'</p>
          <h4>Package</h4><p>'.$package.'</p>
          <h4>Message</h4>
          <p>'.$message.'</p>


				';

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent!';
					
				} else {
					// Failed
					$msg = 'Your email was not sent';
					
				}
			}
		} else {
			// Failed
			$msg = '';
			
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />


    <link rel="stylesheet" href="public/css/icon-font.css" />
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="shortcut icon" type="image/png" href="public/img/favicon.png" />

    <title>Essence | Believe and Achieve</title>
  </head>
  <body>
    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle" />
      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">
          &nbsp;
        </span>
      </label>
      <div class="navigation__background">&nbsp;</div>
      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item js-scroll-about">
            <a href="#" class="navigation__link">About Essence</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link js-scroll-benefits"
              >Your benefits</a
            >
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link js-scroll"
              >Popular challenges</a
            >
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link js-scroll-test">Testimonies</a>
          </li>
          <li class="navigation__item">
            <a href="#" class="navigation__link js-scroll-book">Book now</a>
          </li>
        </ul>
      </nav>
    </div>
    <header class="header">
      <div class="header__logo-box">
        <img src="public/img/logo-white.png" alt="Logo" class="header__logo" />
      </div>
      <div class="header__text-box">
        <h1 class="heading-primary">
          <span class="heading-primary--main">Essence</span>
          <span class="heading-primary--sub">is where life happens</span>
        </h1>
        <a href="#" class="btn btn--white btn--animated js-scroll"
          >Discover our packages</a
        >
      </div>
    </header>

    <main>
      <section class="section-about js-about">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            Take the first step to a better you
          </h2>
        </div>
        <div class="row">
          <div class="col-1-of-2">
            <h3 class="heading-tertiary u-margin-bottom-small">
              You're going to fall in love with results
            </h3>
            <p class="paragraph">
              I am Nikki! Your virtual personal trainer. I will lead you on your
              journey to improved health and fitness. I have helped men and
              women lose weight and improve their mental and physical health. I
              have a passion for helping people live their best lives.
            </p>

            <h3 class="heading-tertiary u-margin-small">
              Live adventure like you've never have before.
            </h3>
            <p class="paragraph">
              You DO NOT need a gym to get in shape! All you need is some
              comfortable shoes and the outdoors. There is proof that working
              out in nature, improves mental and physical health. My workout
              plans do not require machinery.
            </p>
            
          </div>

          <div class="col-1-of-2">
            <div class="composition">
              <img
                src="public/img/ropes.jpeg"
                photo1
                alt="exercise"
                class="composition__photo composition__photo--p1"
              />

              <img
                src="public/img/nat-2-large.jpg"
                alt="exercise"
                class="composition__photo composition__photo--p2"
              />

              <img
                src="public/img/nat-3-large.jpg"
                alt="exercise"
                class="composition__photo composition__photo--p3"
              />
            </div>
          </div>
        </div>
      </section>

      <section class="section-features js-benefits">
        <div class="row">
          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-world"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">
                Find Support
              </h3>
              <p class="feature-box__text">
                Sometimes all we need is someone to cheer us on. You will have
                that cheerleader encouraging you all the way. I believe in you!
              </p>
            </div>
          </div>

          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-compass"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">
                Meet nature
              </h3>
              <p class="feature-box__text">
                I encourage you to cancel the gym membership and go outside. You
                do not need a treadmill or dumbbells to get fit!
              </p>
            </div>
          </div>

          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-map"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">
                Find your way
              </h3>
              <p class="feature-box__text">
                We will find out what works for YOU. My workout plans are not
                one size fits all. Your plan will be customized for your
                lifestyle and needs.
              </p>
            </div>
          </div>

          <div class="col-1-of-4">
            <div class="feature-box">
              <i class="feature-box__icon icon-basic-heart"></i>
              <h3 class="heading-tertiary u-margin-bottom-small">
                Live a healthier life
              </h3>
              <p class="feature-box__text">
                This is not a diet, but a lifestyle! I believe that most
                illnesses come from a bad diet. You will not be the same as you
                were before. 
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="section-tours">
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            Most popular programs
          </h2>
        </div>

        <div class="row js-cards">
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--1">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1">
                    Casual
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>60 day program</li>
                    <li>Custom fitness plan</li>
                    <li>4 private sessions</li>
                    <li>4 progress check-in</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back--1">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$397</p>
                  </div>
                  <a href="#popup" class="btn btn--white">Book now!</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--2">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--2">
                    Dedicated
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>90 day program</li>
                    <li>Custom fitness plan</li>
                    <li>8 private sessions</li>
                    <li>6 progress check-in</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back--2">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$547</p>
                  </div>
                  <a href="#popup" class="btn btn--white">Book now!</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-1-of-3">
            <div class="card">
              <div class="card__side card__side--front">
                <div class="card__picture card__picture--3">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--3">
                    Determined
                  </span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>180 day program</li>
                    <li>Custom fitness plan</li>
                    <li>Weekly private sessions</li>
                    <li>Weekly progress check-in</li>
                  </ul>
                </div>
              </div>
              <div class="card__side card__side--back card__side--back--3">
                <div class="card__cta">
                  <div class="card__price-box">
                    <p class="card__price-only">Only</p>
                    <p class="card__price-value">$897</p>
                  </div>
                  <a href="#popup" class="btn btn--white">Book now!</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="u-center-text u-margin-bottom-big u-margin-top-huge">
          <a href="#popup" class="btn btn--green">Book a Consultation</a>
        </div>
      </section>
      <section class="section-stories">
        <div class="bg-video">
          <video class="bg-video__content" autoplay muted loop>
            <source src="public/img/video.mp4" type="video/mp4" />
            <source src="public/img/video.webm" type="video/webm" />
            Your browser is not supported!
          </video>
        </div>
        <div class="u-center-text u-margin-bottom-big">
          <h2 class="heading-secondary">
            Helping people reach their goals
          </h2>
        </div>

        <div class="row">
          <div class="story js-test">
            <figure class="story__shape">
              <img src="public/img/nat-8.jpg" class="story__img" alt="Person" />
              <figcaption class="story__caption">
                Vicki Lake
              </figcaption>
            </figure>
            <div class="story-text">
              <h3 class="heading-tertiary u-margin-bottom-small">
                I lost over 50lbs!
              </h3>
              <p>
                This program helped me lose 58lbs in less than 8 months. The
                meals are easy to cook and delicious. I had so much fun
                experiementing. The workouts are intense, but do the job. The
                trainer is very knowledgeable and encouraging. I highly
                recommend.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="story">
            <figure class="story__shape">
              <img src="public/img/nat-9.jpg" class="story__img" alt="Person" />
              <figcaption class="story__caption">
                Jay Green
              </figcaption>
            </figure>
            <div class="story-text">
              <h3 class="heading-tertiary u-margin-bottom-small">
                Life changing experience
              </h3>
              <p>
                Not only did I lose weight. I also lowered my cholesterol and
                controlled my blood sugar. The meal plan was awesome. I found a
                new way of life.
              </p>
            </div>
          </div>
        </div>
        <div class="u-center-text u-margin-top-huge">
        </div>
      </section>

      <section class="section-book js-book">
        <div class="row">
          <div class="book">
            <div class="book__form">
              <form action="index.php" method="POST"class="form">
                <div class="u-center-text u-margin-bottom-medium">
                  <h2 class="heading-secondary">
                    Contact Me
                  </h2>
                </div>
                <?php if($msg != ''): ?>
    		<div class="paragraph"><?php echo $msg; ?></div>
    	<?php endif; ?>
                <div class="form__group">
                  <input
                    type="text"
                    class="form__input"
                    placeholder="Name"
                    id="name"
                    name="name"
                    required
                  />
                  <label for="name" class="form__label">Full Name</label>
                </div>

                <div class="form__group">
                  <input
                    type="email"
                    class="form__input"
                    placeholder="Email"
                    id="email"
                    name="email"
                    required
                  />
                  <label for="email" class="form__label">Email</label>
                </div>

                <div class="form__group u-margin-bottom-medium">
                  <div class="form__radio-group">
                    <textarea name="message"rows="4" cols="50"class="form__input form__input--textarea" placeholder="Message"></textarea>
                  </div>
                </div>
                <div class="form__group">
                  <button name="submit"class="btn btn--green">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="footer__logo-box">
        <img srcset="public/img/logo-white.png" alt="logo" class="footer__logo" />
      </div>
      <div class="row">
        <div class="col-1-of-2">
          <div class="footer__navigation">
            <ul class="footer__list">
              <li class="footer__item">
                <a href="#" class="footer__link">Company</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact us</a>
                
              </li>
              
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
                
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Terms</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-1-of-2">
          <p class="footer__copyright">
            Built by <a href="" class="footer__link">Tiffany Sims</a>
          </p>
        </div>
      </div>
    </footer>

    <div class="popup" id="popup">
      <div class="popup__content">
        <div class="popup__left">
          <img src="public/img/nat-8.jpg" alt="" class="popup__img" />
          <img src="public/img/nat-9.jpg" alt="" class="popup__img" />
        </div>
        <div class="popup__right">
          <a href="#section-tours" class="popup__close">&times;</a>
          <h2 class="heading-secondary u-margin-bottom-small">
            Start booking now
          </h2>
          <h3 class="heading-tertiary u-margin-bottom-small">
            Important &ndash; Please read these terms before booking
          </h3>
          <p class="popup__text">
            I will be accepting clients soon. Guess What! You will be the first to know...I take pride in my business and clients, and want to be of value to you.  Please fill out form on the next page. I will contact you shortly to set up a Free consultation. During your consultation, we will discuss your goals and pick the right plan for you. In the meantime, think about your current lifestyle. Write down your typical diet and exercise routine. Talk to you soon! -Nikki
          </p>

          <button id="booking"class="btn btn--green">Next Steps</button>
        </div>
      </div>
      <div class="popup__booking">
        <div class="popup__form">
          <form action="index.php" method="POST"class="form">
            <div class="u-center-text u-margin-bottom-medium">
              <h2 class="heading-secondary">
                Book Consultation
              </h2>
            </div>
            <a href="#section-tours" class="popup__close">&times;</a>
            <div class="form__group">
              <input
                type="text"
                class="form__input"
                placeholder="Name"
                id="booking-name"
                required
                name="name"
              />
              <label for="name" class="form__label">Full Name</label>
            </div>

            <div class="form__group">
              <input
                type="email"
                class="form__input"
                placeholder="Email"
                id="booking-email"
                name="email"
                required
              />
              <label for="email" class="form__label">Email</label>
            </div>

            <div class="form__group">
              <input
                type="tel"
                class="form__input"
                placeholder="Phone Number"
                id="booking-phone"
                name="phone"
                required
              />
              <label for="phone" class="form__label">Phone Number</label>
            </div>
            <div class="form__group">
              <input
                type="number"
                class="form__input form__input—-short" 
                placeholder="How old are you?"
                id="age"
                name="age"
                required
              />
              <label for="age" class="form__label">Age</label>
            </div>

            <div class="form__group u-margin-bottom-medium">
              <div class="form__radio-group">
                <input
                  type="radio"
                  class="form__radio-input"
                  id="casual"
                  name="package"
                  value="casual"
                />
                <label for="casual" class="form__radio-label"
                  ><span class="form__radio-button"></span>Casual Package:
                  $197</label
                >
              </div>

              <div class="form__radio-group">
                <input
                  type="radio"
                  class="form__radio-input"
                  id="dedicated"
                  name="package"
                  value="dedicated"
                />
                <label for="dedicated" class="form__radio-label"
                  ><span class="form__radio-button"></span>Dedicated package:
                  $347</label
                >
              </div>
              <div class="form__radio-group">
                <input
                  type="radio"
                  class="form__radio-input"
                  id="determined"
                  name="package"
                  value="determined"
                />
                <label for="determined" class="form__radio-label"
                  ><span class="form__radio-button"></span>Determined package:
                  $497</label
                >
              </div>
            </div>
            <div class="form__group">
              <button name="submit"id="checkout"class="btn btn--green">Book now</button>
            </div>
          </form>
        </div>
      </div>

      <div class="popup__checkout">
        <div class="u-center-text u-margin-bottom-medium">
          <a href="#section-tours" class="popup__close">&times;</a>

          <h2 class="heading-secondary">
            Inquiry Received
          </h2>
        </div>

        <p class="popup__text--message">
          You will hear from me soon ...
                Thank You! - Nikki
        </p>
    </div>

    <script src="https://use.fontawesome.com/c4fce1bcc1.js"></script>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>
    <script src="public/js/jquery.js"></script>
  </body>
</html>
