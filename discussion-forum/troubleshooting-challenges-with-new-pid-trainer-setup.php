
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="I have developed a new style PID trainer in an effort to offer a more cost-effective option compared to our current model. This version may appear simple at first glance, but I am facing challenges in getting it to function properly. The setup includes a basic setup with a">
    <meta name="keywords" content="pid trainer setup, troubleshooting challenges, new pid trainer, cost-effective option, pid settings, motor speed impact, pid performance factors, oscillating fan movement, adjusting pid settings, pid configuration, pid setup issues, pid trainer functionality, pid trainer problems">
    <meta name="author" content="oxmaint">
    
    <link rel="canonical" href="https://community.oxmaint.com/discussion-forum/troubleshooting-challenges-with-new-pid-trainer-setup">
    <title>Troubleshooting Challenges with New PID Trainer Setup | Oxmaint Community</title>
    <link rel="shortcut icon" href="./../assets/img/favicon.png" />
    <link rel="stylesheet" href="./../assets/css/plugins.css" />
    <link rel="stylesheet" href="./../assets/css/style.css" />
    <link rel="stylesheet" href="./../assets/css/colors/purple.css" />
    
    <!-- og or twitter tags -->
    <meta property="og:type" content="article">
    <meta property="og:title" content="Troubleshooting Challenges with New PID Trainer Setup | Oxmaint Community">
    <meta property="og:description" content="I have developed a new style PID trainer in an effort to offer a more cost-effective option compared to our current model. This version may appear simple at first glance, but I am facing challenges in getting it to function properly. The setup includes a basic setup with a">
    <meta property="og:url" content="https://community.oxmaint.com/discussion-forum/troubleshooting-challenges-with-new-pid-trainer-setup">
    <meta property="og:site_name" content="Oxmaint">
    <meta property="og:image" content="https://community.oxmaint.com/assets/img/favicon.png">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Troubleshooting Challenges with New PID Trainer Setup | Oxmaint Community">
    <meta name="twitter:description" content="I have developed a new style PID trainer in an effort to offer a more cost-effective option compared to our current model. This version may appear simple at first glance, but I am facing challenges in getting it to function properly. The setup includes a basic setup with a">
    <meta name="twitter:image" content="https://community.oxmaint.com/assets/img/favicon.png">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Y6M0T9NLP4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-Y6M0T9NLP4');
    </script>

    <!-- Structured Data (Schema.org) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Article",
      "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "https://community.oxmaint.com/discussion-forum/troubleshooting-challenges-with-new-pid-trainer-setup"
      },
      "headline": "Troubleshooting Challenges with New PID Trainer Setup",
      "description": "I have developed a new style PID trainer in an effort to offer a more cost-effective option compared to our current model. This version may appear simple at first glance, but I am facing challenges in getting it to function properly. The setup includes a basic setup with a",
      "author": {
        "@type": "Person",
        "name": "geniusintraining"
      },
      "publisher": {
        "@type": "Organization",
        "name": "Oxmaint",
        "logo": {
          "@type": "ImageObject",
          "url": "https://community.oxmaint.com/assets/img/favicon.png"
        }
      },
      "datePublished": "2024-07-12",
      "image": "https://community.oxmaint.com/assets/img/favicon.png"
    }
    </script>

<link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
<script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" defer></script>
<link rel="stylesheet" href="./../assets/css/home.css"/>
</head>
<body>
    <div class="content-wrapper bg-gray">
        <?php include "../include/header.php" ?>
        <!-- /header -->
        <div class="container my-5">
            

            <div class="bg-primary card p-4 mb-4">
                <h1 class="text-white">Troubleshooting Challenges with New PID Trainer Setup</h1>
                <div class="d-flex justify-content-between">
                    <ul class="post-meta text-white fs-15 mb-4">
                        <li class="post-date"><i class="uil uil-calendar-alt"></i><span>12-07-2024</span></li>
                        <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
                        <li class="post-comments"><i class="uil uil-comment-alt-dots"></i><span>268 comments</span></li>
                        <li class="post-seen"><i class="uil uil-eye"></i><span id="counter">41064</span></li>
                        <li class="post-like"><i class="uil uil-thumbs-up" id="likeButton"></i><span id="likeCount">20</span></li>
                    </ul>
                </div>
                <div class="card p-4">
                    <h3>Question:</h3>
                    <p>I have developed a new style PID trainer in an effort to offer a more cost-effective option compared to our current model. This version may appear simple at first glance, but I am facing challenges in getting it to function properly. The setup includes a basic setup with a motor for vertical movement, but despite my best efforts in adjusting the PID settings, I am unable to achieve the desired outcome. I have tried various configurations and believed I had a good grasp on setting them up, but the issue persists. Could it be possible that certain factors, such as the motor speed, are affecting the PID performance? My original plan was to incorporate oscillating fan movement to add complexity, but I am currently unable to resolve the existing issues before introducing additional variables. Watch the demo video here: https://www.youtube.com/watch?v=WbB1Lq27Pvg.</p>
                </div>
            </div>

            <div class="row custom-row">
                <div class="col-lg-9 mx-auto mb-5">
                    <div>
                        <div class="p-4">
                            <h3 class="text-primary">Top Replies</h3>
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Are you able to track the location of the ball at all times?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>13-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like the servo is operating at a satisfactory speed, ruling out any issues there. One thing to consider is the effectiveness of the ball-tracking sensor in terms of speed. For the next version of the "PID trainer," a suggestion could be to test it with a ball on a level or slightly curved surface, where the PID system ensures the ball stays centered on the surface. This experiment could help enhance the performance of the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>busarider29</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Question: Can you track the location of the ball at any time? 

Yes, I have configured the PLC with one input on the left side connected to a sensor that monitors the ball's position. The sensor outputs 4mA when the ball is near and 20mA when it is at the opposite end. The PLC output ranges from 4-20mA and adjusts the angle accordingly. I am utilizing the PID output's min/max values to reduce overshooting. 

It seems like the servo is fast enough, so the issue might not lie there. Have you checked if the sensor tracking the ball is responsive? In the next iteration of the "PID trainer," consider having the ball on a flat or slightly curved surface and use PID to keep it centered. 

I appreciate your input, and it appears that the sensor feedback is instantaneous. I initially had concerns about the PID's ability to prevent overshooting, but I will experiment with the feedforward setting to see if it makes a difference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>14-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Have you simulated the system? It is important to note that the system is inherently unstable. When the channel is level, the ball will be stable anywhere, but when the channel is not level, the ball will always come to a stop. By adjusting the angle channel's attitude, the PID system controls the force (gravity) acting on the ball, rather than the velocity. This is akin to operating a joystick on a jet fighter. The acceleration or force applied is directly proportional to the sine of the channel angle in relation to being level, meaning the system gain closely follows the servo position. There is a significant amount of inertia present when the ball is in motion, both in terms of translation and rotation, with a high ratio relative to the controlled acceleration (sine of the angle) when the channel is close to being level. It may be more straightforward to convert the position into velocity and focus on driving that velocity to zero using acceleration (equivalent to force relative to angle).</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Back in my working days with the RS500, I recall using the PID instruction which had a timer feature. Have you ever considered adjusting that value? Another tool I used for quicker responses was STI. I wonder if it would be applicable in this scenario. As someone who is now retired, these memories of experimenting with PLC programming methods still stick with me.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>widelto</span></li>
            </ul>
        </div>
        
                        </div>
                        <div class="p-4">
    <h3 class="text-primary">
        <a href="#" class="toggle-more-replies" style="text-decoration: underline; color: #1a73e8; cursor: pointer;">More Replies →</a>
    </h3>
    <div class="more-replies-content" style="display: none;">
                            
        <div class="bg-white p-3 rounded mb-3">
            <p>Before we dive into the discussion, let's address a key question: Can you share the system transfer function? This concept is crucial in understanding the behavior and performance of a system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PID trainer I have developed is a new, affordable alternative to our current model. However, I need to ensure it functions correctly and is mechanically sound before production. 

One of the challenges I face is the complexity of the system, making control difficult. Despite various adjustments to the PID setup, I have not been able to achieve the desired results. 

In addition, the system's non-linearity adds to the difficulty of control. I have considered whether the speed of the motor may be a factor in the challenges faced. 

I had initially planned to introduce additional variables, such as fan oscillation, to make the system more challenging. However, I have struggled with controlling the system as it is, let alone with added complexities. 

For a more manageable project, consider exploring Ron Beaufort's hot rod temperature control systems for training purposes. This alternative was discussed in 2005 and shows promise for easier control. 

In the past, I have observed university students’ struggles with a similar system involving balancing a steel ball. By replacing the steel ball with a ping pong ball and focusing on energy reduction, significant progress was made. 

Modeling the system is crucial for understanding its dynamics. Managing the energy of the ball is key to achieving control, especially in balancing movements. 

While the system's complexity may be discouraging, it provides valuable lessons in real-world control challenges. Advanced mathematical techniques may be required to fully grasp the system's behavior and improve control strategies.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>15-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion thread, drbitboy shared his thoughts on using a ball as a training tool for stability testing. The ball should remain stable at different angles and set points, offering a versatile training experience. PIDwidelto chimed in, mentioning a similar technique called STI for faster responses. MAXk inquired about the system transfer function, to which the response was uncertain. Peter Nachtwey pointed out challenges in the project but encouraged experimentation for progress. He suggested exploring Ron Beaufort's temperature control systems for easier control, referencing a discussion from 2005. Despite facing challenges, the development of a cost-effective PID trainer showed promise. The discussion also touched upon specific settings and functionalities within RSLogix 500.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, drbitboy suggested converting position into velocity and using acceleration to drive the derived velocity to zero. This approach is analogous to tank level control, where the system gain is determined by the reciprocal of cross-sectional area (CSA). By considering tank level as a proxy for fluid volume and ball velocity as a proxy for momentum, we can analyze the system using the equations provided.

It is important to note that momentum is a more suitable metric for analysis than energy, as it is linear with the product of force and time. This eliminates the complexity that arises when dealing with energy, which is linear with the product of force, velocity, and time. By focusing on momentum, we can easily manage the directionality of the system without additional considerations.

For a simpler control system, one could create arotameter by controlling the level of a ping pong ball in a vertical tube with a gradually increasing internal diameter. Utilizing a PID controller to regulate airflow through the tube would result in a stable and easily controllable system. Adding a butterfly valve at the top for load adjustment would further enhance control.

While constructing a clear tube with a variable diameter may be challenging, an alternative approach could involve drilling small holes along the length of the tube to mimic the increasing diameter effect. This solution provides a practical and feasible method for achieving control in a similar system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the training session, it was discussed that the ball needs to remain steady when the angle is flat. To clarify, if the PID is switched to manual mode and the output (angle) is adjusted to a non-flat value, the ball will keep moving in one direction without settling in a fixed position. In fact, it may continue to accelerate endlessly if the track is long enough. This complexity explains why controlling this system, as highlighted by @Peter Nachtwey, is quite challenging. The ball's position will not be stable as it will keep changing based on its velocity when the angle flattens, disregarding any minimal friction present.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>16-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Addressing non-linearity in your system is easily manageable. The relationship between sin(θ) and θ is approximately linear for small values of θ in radians. Any non-linearity that may arise can be reduced through effective linkage design or by incorporating a cam mechanism between the PID control variable and the servo position. This ensures smooth operation and accurate control in your system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to create a simpler and more easily controlled system, one could consider constructing a rotameter. This involves controlling the level of a ping pong ball in a vertical tube with a gradually increasing internal diameter. The PID's CV would then regulate the airflow through the tube, resulting in a stable system that is easier to control. By incorporating a butterfly valve at the top, adjustments to the load can be made.

While constructing a clear tube may be challenging, an alternative method involves drilling small holes along the length of the tube to mimic the increasing diameter. This approach offers a more cost-effective and simpler solution compared to other elaborate setups. Check out this video for a demonstration: https://youtu.be/8Yv-aBEZFrc?t=56.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I came across my mathcad pdf showcasing the dynamics of a rolling TT ball. The control mechanism implemented in the analysis is a PD controller. The differential equations system, D(t,y), is managed by the PD control, while the trajectory is computed using the rkfixed Runge Kutta method. The ball initially rotates clockwise as the angle becomes negative, before gradually slowing down. Despite the slow speed, it takes a couple of seconds for the ball to move 0.1 meters. The angle of tilt is minimal. While I could have included the motor model in the analysis, the motor and control system operate at a much faster pace compared to the movement of the TT ball and the slight adjustments needed in the system.Discover more at: https://deltamotion.com/peter/Mathcad/Mathcad%20-%20RollingTTBall.pdf.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@Peter Nachtwey: Great insight! It is clear that in the simulation, the Integral action is unnecessary. The main focus of the loop is to control velocity, specifically bringing it to zero. The Derivative action handles both calculating and driving the velocity to zero. Once the velocity reaches zero, the net derivative action will also be zero. If the ball stops at an offset from the setpoint, the Proportional action will provide a slight adjustment to bring it closer to the setpoint. This process happens simultaneously, although it may seem like separate steps when simplified. 

It's important to note that in the simulation, using a PD control strategy works because the Controlled Variable (CV) is perfect, represented as θ. A PID output of 0 results in a level channel, making it ideal. The output of the PD controller will be 0 when the ball stops at the setpoint. However, in a real system, achieving an angle of 0 may require a non-zero PID output. In such cases, an offset bias or Integral action may be necessary.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When running a simulation, keep in mind that achieving a perfect control variable (CV) allows for the use of Proportional-Derivative (PD) control. In this scenario, a PID output of 0 signifies a balanced channel, making it the ideal outcome. However, in a real-world system, achieving a CV of 0 may require additional adjustments such as an offset bias or Integral action. Our motion controller eliminates the need for a bias, as it is directly linked to the motor controlling the rail without the need for mechanical adjustments. The only areas of concern are not modeling the motor response and fixed Kp and Kd values, which do not change based on the angle. This simulation was designed with college students in mind, who were able to successfully implement a PD control system with conservative gains to maintain stability and efficiency. Researching the physics of a ball rolling down a slope without sliding was necessary, but overall, the simulation process proved to be straightforward.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent conversation, Peter Nachtwey mentioned that their motion controller is designed without the need for bias adjustments. This aligns with my understanding as well. I decided to take Peter Nachtwey's PDF and implement it in Octave, a software similar to Matlab. By following the instructions provided in the links shared, I created a script (refer to the first attachment) and executed it in Octave (see the second attached image), resulting in a plotted outcome.

Upon further analysis, I believe that if the beam is not level despite a control value (CV) of 0, there may be a need for a bias or integral term in the PID controller to stabilize the ball at the desired setpoint. Consider this scenario: Assuming there is no external bias correction in the PID system, if the ball is at the setpoint (position 0) and the PID error is 0, the proportional (P) term should also be 0. If the ball is stationary at the setpoint (velocity is 0), the derivative (D) term should be 0. In a PD controller setup, the integral (I) term would always be 0.

Putting this information together, if the ball is both stationary and at the setpoint (position 0), the CV should ideally be 0 (P=0 + I=0 + D=0). If the CV is indeed 0, then it suggests that the beam may not be perfectly level. This imbalance could cause the ball to move away from the setpoint position over time, resulting in a stable but offset final position. However, if the PID output is able to bring the beam close to level with a CV of 0, friction between the ball and the beam could potentially stabilize the ball at the setpoint.

I am confident that adjustments can be made in the Octave code to account for a CV-level offset in the P_ball transfer function. Although it may require some reactivation of long-dormant knowledge, the results could provide valuable insights for the system's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It seems like there may be a small issue with the trends showing different settings compared to yesterday. The red line represents SP, pink is PV, and white is CVPIC. PIC 459 is displaying good control, which I am pleased with. However, PIC 616 has the same setup but the PV is consistently high and struggles to decrease. While it performs well 8 out of 10 times, occasionally it falls short or exceeds expectations without improving. Could this lack of deadband be causing the issue you anticipated? I have attempted using PD only with limited success.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is there a noticeable backlash in the linkage? The PID update time is set at 10ms, so how quickly does the servo respond? How does this performance change when adjusting the Loop update time and STI time to 100ms or 50ms? With a 10ms update time and a Ti of approximately 300, there seems to be minimal difference between this PID and PD control methods.

The Feed Forward feature in MicroLogix may have been adapted from SLCs. Refer to the SLC manual for more information. In some cases, I have observed that integral action eventually compensates for any output bias. However, with such a large Ti, it is uncertain if this holds true in this scenario.

I came across an interesting paper discussing the selection of linkages to establish a linear relationship between servo and beam angles. Explore this paper and others available online to delve deeper into this topic.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the servo's response time in relation to the PID update time of 10ms is a valid concern for optimal system performance. When the PLC updates every 10ms, the motion controller may experience abrupt input changes, which can be detrimental. Adjusting the Loop update time and STI time to 100ms or 50ms could potentially worsen the situation. With an update time of 10ms and a Ti of approximately 300 (seconds or minutes), the PID control may not differ much from PD control due to an excess of integrators in the system. This issue led to the consideration of energy integration as a solution, where a linear relationship between servo and beam angles was pursued. Implementing tiny hydraulic cylinders for linkage simplification was a successful strategy. Additionally, simplifying the sin(x) function to x for small tilt angles proved beneficial in optimizing system performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When scaling the PV and SP, are you using a range of 0-100 or 0-16383? Opting for the former means operating at a lower resolution. While this may not directly cause oscillations, it can lead to unnecessary noise in the response.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Someone in training mentioned that occasionally, the PID system may not perform optimally due to the lack of a deadband setting. This could be attributed to the fact that RSLogix 500 PID operates in integer space. The small increment of Integral action applied to the PID output CV may be too insignificant to accumulate, resulting in no improvement scan after scan. Another contributing factor could be the restricted PV-SP scaling, possibly from 0 to 100. Similar behavior was observed when emulating a Honeywell PID many years back.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey addressed a crucial issue regarding the controller's response time. While the default setting is to respond every millisecond, if the PLC is updating every 10 milliseconds, the motion controller would perceive input changes in steps, which is not ideal.Looking at the speed of the ball in the video, a 100Hz update rate should be sufficient. However, it may also be a matter of resolution, especially for the output. The servo's range used by the short arm appears limited, with a CV limit range of 25 (40-65). Even with a PLC update rate of 100Hz, the outgoing step changes may still be slower than desired.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion between Peter Nachtwey and drbitboy, the topic of changing the Loop update time (along with the STI time) to 100ms or 50ms was brought up. drbitboy questioned how well this would work, to which Peter Nachtwey responded that it would actually make things worse. While increasing the Loop update time is generally not recommended, in cases where the Loop update time is too short and the scaling is coarse enough to cause integer math truncation issues, it may be worth considering. This adjustment could help attenuate such issues, especially when dealing with slow-moving objects where a frequency of 10-20Hz may still suffice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy asked if there is any noticeable backlash in the linkage. There was some before, but now it is just minimal. I will continue working on the linkage in the morning to make it tighter. This is just a prototype, so when I start producing them, I will ensure a tighter fit. I also increased the Feed Forward Bias, which seemed to improve the situation slightly. I am currently scaling the input from 0-100 and will consider removing or widening the limits on the CV to see if that helps. The ball is moving very slowly, so I will create another video to demonstrate. Thank you for your assistance!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As geniusintraining mentioned, there is a small issue with the linkage that will be addressed in the morning. This prototype will be refined to ensure a tighter fit when mass production begins. Upon reviewing a video at the 53-second mark, it appears that there is some backlash in the pin system. To temporarily address this during development and testing, try using a rubber band to compress the linkage and reduce the lash. While not a permanent solution, it can give insight into how much the backlash is affecting performance. Additionally, a search on Google for table tennis rules led me to @Peter Nachtwey's MathCAD PDF, which offers a helpful model for regulation ping pong balls.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy noted a potential issue with the bolt, leading him to replace it yesterday. However, he observed that another bolt also had some slack. The suggestion to use a rubber band was seen as a brilliant solution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to a comment by drbitboy, it is usually advisable to increase the Loop update time if it is too short and causing the Integral action to be affected per scan. The scaling of the integer math may be truncating changes from scan to scan, which can be alleviated by adjusting the Loop update time. Despite the slow movement of the ball, a frequency of 10-20Hz should still be sufficient. Surprisingly, there seems to be no floating point integrator value, even though it was initially thought to be present.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are some ideal models for tuning parameters (KP, KI, KD) in training. While these values may not be quantitatively perfect for the specific trainer, experimenting with doubling or halving KP, adjusting KD, or scaling both by a factor of ten can give insights into how the physical trainer might respond - providing a potential direction for improvement. Generally, increasing KP and decreasing KD reduces per-cycle oscillation attenuation, leading to more and larger oscillations. Increasing both gains also decreases the time to the end of oscillations. It's important to note that these gains are independent and must be calibrated accordingly for optimal performance.

For example, adjusting values such as [5,0,4] to [2,0,8] or [50,0,40] can potentially improve trainer behavior, although this is speculative and trial-and-error. Calibration of PID output may be necessary to achieve optimal results. The key is to experiment thoughtfully and systematically to avoid complicating the tuning process. The provided Octave/Matlab script and model offer a starting point for this process, based on simplified physics and tennis ball dynamics.

It is important to approach tuning with an open mind and patience, as perfection may already be achieved, and any observed issues may be attributed to other factors such as backlash. Remember, the ultimate goal is to fine-tune the trainer for optimal performance while keeping an eye on potential improvements.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey was surprised to find no floating point integrator values in the data file types of Micrologix and SLC programming manuals. While it may seem like there should be floating point values, the reality is that only binary bits, words, and long words are used. The only reference to decimals is seen in the PID setup dialog of RSLogix 500. For example, the Loop update time is adjustable in increments of 0.01s. KC, TI, and TD values have a range of 0.01 to 327.67 if the PD structure's RG bit is 1, with range limits increased by a factor of 10 for KC and TI if the RG bit is 0. Remember, the devil is in the details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Impressive discovery! This includes 30 posts, a new pdf from Peter Nachtwey, and his mention of "real control experts" discussing problem-solving by approximation using the Euler method. The outcome reveals that the plant is a 2nd order integrator, making it an unstable object. This sensitivity to dead band issues was highlighted in the initial post. Moving forward, the focus will be on theoretical models to determine the poles in the equation: s^2+k*kd*s+kp*k = 0. It was noted that unstable objects exhibit significant dead bands, as seen in posts 18, PIC 459, and PIC 616. Additional confusion arose from the system convulsions in a video, emphasizing the importance of understanding PID controller parameters. Despite the complexity, humor was injected into the situation, with one individual joking about limited knowledge in the field. In a lighthearted moment, a comparison was made between metal and ping pong balls in control systems theory. This showcases the need for differential equations in handling drag forces in such scenarios.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK expressed excitement about the recent developments on the forum, including 30 new posts and a PDF shared by Peter Nachtwey. Nachtwey also touched on the importance of "real control experts" and problem-solving through approximation using the Euler method. In my own approach using differential equations, I avoided assuming that sin(x) is approximately equal to x for small angles. It is important to note that the system is second order, with tilt resulting in acceleration that integrates to velocity and ultimately to position, representing the two poles of the system. Despite the presence of mass, it cancels out in the equations. Rather than using Euler's method, I opted for the Runge-Kutta method to solve the non-linear differential equations. Where do you stand on finding a solution to the problem at hand?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When looking at the theoretical system without emotions, the closed-loop disturbance is represented by the equation W(s) = k / (s^2+k*kd*s+kp*k), with kp denoting the stability margin squared divided by k and kd equal to 2 times the stability margin divided by k. However, in reality, the process behaves differently from the theoretical model due to factors like "dead bands" in mechanical and mathematical aspects. Even with adjustments, some deadbands persist. It is challenging to pinpoint and include all dead bands in a mathematical model, resulting in complexity or the use of high-resolution curves for approximation. This leads to a model with high order and/or dead times to compensate for the dead bands, requiring a controller with a high order of derivatives. The purpose of a PID trainer in light of the limitations of typical PID-tuning methods is questioned, suggesting a need for tightening the nuts, using high-resolution curves, and exploring PID-tuning parameters for insights. Peter Nachtwey's approach using Runge-Kutta to solve non-linear differential equations is contrasted with mentions of Euler, questioning the originator and constraints of this family of methods. Additionally, a discussion on solving a problem related to controlling the position of a sphere on an inclined plane with a PD controller is raised, exploring potential solutions to the issue at hand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, a user shared their experience of using a rubber band to fix slop in the lower linkage of a project. They also mentioned working on other tasks to pay the bills but promised to update progress on the project later. Another user chimed in with a joke about someone building a PID trainer without knowledge of control systems theory, to which the original poster responded by emphasizing the importance of seeking feedback to improve. The purpose of the PID trainer was clarified as being a tool for technicians, students, and hobbyists to experiment and learn, challenging them to work towards understanding rather than opting for easy solutions. The possibility of it not working was acknowledged, highlighting the need for problem-solving and learning from the process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Trainers should not expect to simulate a real process and have it work perfectly. However, I developed two systems to provide hands-on training. One system featured a heating element with a coil, circulating water in and out of a tank. The tank held water that was heated to 98 degrees Celsius, with cold water injections for temperature control. This practical exercise was quite engaging for our technicians, who learned through trial and error how to troubleshoot and adjust parameters for optimal performance. The second system included a heatsink, heater element, and variable fan for different scenarios. This hands-on experience helped technicians gain valuable skills in tuning CIP system loops.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>parky</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aspiring geniuses-in-training believe in the value of experimentation and learning in the field of technology. They understand that true growth comes from overcoming challenges, rather than taking the easy route. By exploring the concept of tunable backlashes in the PID trainer, enthusiasts can see firsthand how "dead bands" can negatively impact a system. The first graph showcases a system with minor dead bands, while the second graph illustrates a system with significant dead bands. Through analyzing these graphs, individuals can recognize the importance of delving deep into their work and not simply relying on easy solutions. This serves as a valuable lesson for techs, students, and hobbyists alike who aim to truly understand the complexities of PD-controller systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Optimize the system by utilizing the Feed Forward bias to eliminate the Integral term. Begin by setting T.I to 0 and adjusting K.C and T.D until the system can efficiently stop the ball. Focus on finding the output C.V that keeps the beam level. To achieve this, observe the beam and ensure the ball is not in motion. Introduce disturbances to test the system and note the final C.V each time the ball stops. Although there may be some variability due to factors like friction and channel irregularities, averaging several values should provide a reliable estimate.

Utilize the calibrated C.V when the beam is level as the Feed Forward bias (F.F.B) value, eliminating the need for T.I. With T.I at 0, any deviation from the setpoint will result in a non-zero error, prompting the output C.V to adjust the beam position. Consider expanding the input and output ranges for better precision, although it's important to ensure the components can support this level of granularity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK suggested the idea of adjusting backlashes in the PID trainer for better performance. One of the major issues with backlashes is overcoming static friction, especially when starting a stationary ball in motion on a plastic channel. Using a piece of PVC pipe or changing the angle of the channel could potentially help reduce this problem. There is also a consideration of using a hollow ball instead of a solid one, as their acceleration coefficients differ. However, it is uncertain if this will have any impact on overcoming static friction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In modeling, a linear time characteristic with a maximum radian/s for servo-angle dynamics may be sufficient without the need for Runge-Kutta or Euler methods. The double integration for position modeling can be done analytically, whether based on a linear-in-time angle or sine function to calculate force and acceleration. The PID control is discrete. Friction-related deadband dynamics may also be incorporated. However, @gitintraining's main focus is identifying mechanical issues. Using a rubber band can help quantify backlash effects, while enhancing input and output resolutions could be beneficial. Consider using a steel ball to improve the static friction ratio for angles near zero. Additionally, evaluate the impact of noise and sample rate on position sensor measurements. It is likely that for every major obstacle removed, smaller ones will be uncovered.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Let's add some excitement by filling the ping pong ball with water - now Navier-Stokes equations come into play!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Our models have been consistently overestimating the force by one and a half percent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>For a more precise calibration, consider utilizing a predetermined feed forward bias value to adjust the servo. Use washers or screws to fine-tune the base orientation, keeping count of the turns in each direction until the ball reaches the midpoint between the two release points affected by static friction. This method helps ensure accurate and consistent performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One effective method to reduce response deadband caused by static friction is by introducing a temporal sine wave or sawtooth offset to the Feed forward bias. It is crucial that the frequency of this offset differs from the natural frequencies of the system being controlled.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One innovative solution to eliminate deadband in linkages is by utilizing gravity as a replacement for rubber bands. Placing the fulcrum at one end and the servo at the other end can help maintain a constant linkage length, preventing any bounce caused by servo steps. This setup also simplifies the wiring to the position sensor located at the fulcrum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I've noticed something intriguing in the video shared in Post #1. The incline that I originally thought was caused by static friction appears to be steeper at the edges. Particularly on the right side of the screen, there seems to be a slight downhill slope from right to left after the ball makes contact with a stop, making it take more effort to start moving left again.

There seem to be two factors at play here. Firstly, there is residual angular momentum present after the ball hits the stop. This can be observed at seconds 0:06, 0:07, and 0:08 in the video, where the ball appears to roll uphill after hitting the stop. Secondly, it's possible that the angle channel is bent or deformed at the points where it meets the stop. If the angle were wider, it could create a small gravitational well near the stop. This can be seen around seconds 0:36 and 0:37 of the video.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK exclaimed, "Impressive! We have a total of 30 posts here." However, half of those posts belong to me and should not be included in the count.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to the setup of a plastic ball on a plastic channel, it may not be ideal, but it's still a step up from using cloth. To improve performance, consider adjusting the angle of the channel or using a piece of PVC pipe for smoother contact. When comparing acceleration coefficients, hollow balls have a ratio of 5/3, while solid balls have a ratio of 7/5. Looking to add an intriguing twist? Try filling a ping pong ball with water to bring Navier and Stokes into the equation. Another solution to address linkage deadband is to position the fulcrum at one end instead of the middle, although this may impact the scientific appeal of the PID trainer to potential customers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK mentioned that the acceleration coefficient for hollow balls is 5/3, while for solid balls it is 7/5. Can you provide more clarity on this? Are you requesting a derivation? This adjustment may solve the issue of rod play, but it could make the PID trainer less technically advanced and therefore less appealing to prospective customers. Your input is valid.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>To approach this differently, consider incorporating backlash into the linkage when selling alongside a rubber band. Providing guidance on tuning a PID or understanding the mechanical aspects is important, but understanding how to integrate and analyze the interaction between the two is even more valuable. It is common for designers to overlook the process when labeling PID on the P&ID, leading to challenges during commissioning. Peter Nachtwey often emphasizes the importance of considering all aspects before implementation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the realm of inertia, it is commonly acknowledged that a hollow sphere, such as a table tennis ball, exhibits greater inertia compared to a solid sphere of the same mass. The equation for calculating the inertia of a hollow sphere is (2/3)*m*r^2, while for a solid sphere it is (2/5)*m*r^2. This difference in inertia is why a table tennis ball outperforms a solid steel ball. Despite the mass being equal, the fractions in the ratio play a crucial role. Drbitboy's toy possesses significant inertia due to the distribution of mass away from the center of rotation. However, the origin of those acceleration metrics remains unknown to me, warranting a review of my Mathcad worksheet to gain clarity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey expressed uncertainty about the origins of the acceleration data mentioned. The force acting on the ball externally is its weight, mg (the product of the ball's mass, m, and the constant gravitational acceleration, g), directed downward. Any force perpendicular to the beam is counteracted by the beam and does not contribute to acceleration parallel to the beam. In case the beam is not level, the force along the beam is the weight adjusted by sin(θ), denoted as g sin(θ). This force is divided into two components: a force leading to translational acceleration FLinear= m aLinear; and a torque causing angular acceleration due to the assumption that the ball's surface does not slide on the beam, FRotationalr=Torque= αInertia=aLinearInertia/r, where α represents angular acceleration and r stands for the ball's radius. To maintain equilibrium, the forces must balance, resulting in the equation mg sin(θ)=FLinear+FRotational=m aLinear+aLinearInertia/r^2Inertia, which can be simplified as aLinear=g sin(θ)/(1+k). Under the assumption of small θ and using standard gravitational acceleration of approximately 9.8 m/s², the estimated linear acceleration is approximately 5.9θ for spherical shells (e.g., ping pong balls) and around 7θ for solid balls. The text also disregards radial acceleration along the beam from the beam's angular velocity ω at the ball's distance from the fulcrum, d, and the buoyancy force on the ping pong ball, which is deemed insignificant.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy mentioned the need for a derivation to be shown. It appears there may be some confusion regarding the term "acceleration coefficient" or potential errors in the math provided, as the numbers are not clear. The image may seem insignificant, yet amusing (although fun is truly valuable in life). When discussing PID tuning, it seems that geniusintraining's PID trainers can help ensure that individuals can effectively tune a PID controller, rather than directly teaching the process. Please note that no negative connotations are intended towards geniusintraining, as there are many who profit from exploiting human ignorance, to some extent.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK acknowledged a misunderstanding in the concept of "acceleration coefficient" due to potential errors in either English comprehension or mathematical calculations. He requested further clarification on the numbers provided. Despite MaxK's limited English skills compared to Czech, the appropriate phrase to use is "can you explain?" The coefficients, as discussed in Post #52, are defined by the ratio 1/(1+k). It was also noted that there was an error in the coefficients calculation mentioned in Post #38.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, drbitboy shared an interesting formula for calculating acceleration in different types of balls. For spherical shells, such as ping pong balls, the formula is aLinear = g sin(θ) /(1 + 2/3) = 3g sin(θ) / 5. On the other hand, for solid balls, the formula becomes aLinear = g sin(θ) /(1 + 2/5) = 5g sin(θ) / 7. This information is especially helpful for those working on geniusintraining's plastic channel at a 90-degree angle. In this case, the formula is aLinear = 3 g sin(θ) / (3+2*2^0,5) for spherical shells and aLinear = 5 g sin(θ) / (5+2*2^0,5) for solid balls. If you're unsure about any of these calculations, don't hesitate to ask for clarification. And a fun fact: drbitboy appreciates the nuances of the English language, even if his Czech skills aren't as strong.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When calculating the numbers for a hollow sphere, I ended up with the same result as drbitboy - 5.887 when multiplying by the tilt in radians. For this two-pole system, I determined the Kp and Kd values for the tilt as Kp=6.709 rad/m and Kd=2.136 rad/(m/s), positioning the two poles at -2*PI. I also considered factoring in an integrator gain, though this would introduce another pole to the closed loop transfer function. Friction was not taken into account, which could slightly alter the Kd value. Without any noise in my simulator, I can enhance the response, but in reality, noise levels may impose constraints on how high the gains can be pushed. Does this mark the completion of our task?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK discussed the values of 5.9 and 7 multiplied by Theta, mentioning equations involving (3/5 * 9.8) and (5/7 * 9.8). These values are crucial for determining the angle Theta in both shell7 and solid calculations. The original text has been amended for accuracy. Appreciation for the prompt review!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey and drbitboy both arrived at a value of 5.887 for a hollow sphere when combining their numbers. This value is directly multiplied by the tilt in radians. In this two-pole system, Kp is calculated as 6.709 rad/m and Kd as 2.136 rad/(m/s), placing two poles at -2*PI. While an integrator gain could be calculated, it would introduce another pole to the closed-loop transfer function. No friction was assumed in these calculations, which may slightly decrease the Kd value. Without noise in the simulator, the response can be increased, but real-world conditions may limit how high the gains can be adjusted.

Although it may seem like progress has been made, the amount of information available about the PID trainer is currently zero. Only with data from geniusintraining can actual work begin. The factor of 5.887 is more suited for a flat surface rather than a 90-degree gutter, but its significance is minimal. To maintain stability with Kp = 6.709 and Kd = 2.136, the rate of change of the ramp angle must be at least 0.5 rad/sec. There are doubts about whether geniusintraining's PID trainer can achieve such speed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, MaxK pointed out that the factor 5.887 is applicable to a flat surface, rather than a 90 degree gutter, but its significance is minimal. Upon further exploration, it was realized that the values 4.2θ for shell and 5.4θ for solid were also relevant.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy exclaimed, "Argh, how did I overlook that?" The values provided are 4.2θ for shell and 5.4θ for solid. Can you kindly elaborate on this? I am curious about the representation form of a PID controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When MaxK asked for an explanation, it was in reference to the moment arm length for a ball in a 90-degree channel. The angular acceleration for the ball can be calculated by dividing the linear acceleration by the distance from the rotation axis to the contact point between the ball and the channel. The rotational force acting on the ball can be determined by multiplying the angular acceleration by the inertia of the ball. By balancing the translational force causing acceleration along the channel with the rotational force applied at the end of the moment arm perpendicular to the rotation axis of the ball, the total force can be calculated. This involves linearizing the sin(θ) function for small angles. Ultimately, the linear acceleration can be solved for based on the gravitational pull and the angle of the slope in the channel.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK inquired about the representation format of a PID controller. When considering independent gains, the form is typically expressed as (KDs2 + KPs + KI) / s. This information is based on insights from Octave, as illustrated in the attachments included in Post #17.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to drbitboy's query about solving for aLinear, the formula for aLinear is calculated as gθ/ (1 + 2 k). I acknowledge my mistake and appreciate the correction. Additionally, for independent gains, the formula (KDs^2 + KPs + KI) / s is suggested by Octave, as mentioned in the attachments to Post #17. My intention was to discuss the representation of a PID controller in geniusintraining's PLC.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK mentioned the importance of accurately representing a PID controller within geniusintraining's PLC. It seems that @git is utilizing a Micrologix 1400, so the following information should be applicable. The parameters provided do not include floating point values, indicating that integer math is likely being used. This aligns with the Micrologix line's heritage from the SLC/5 line, suggesting that integer accumulation may involve fixed-point math.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK mentioned that while the PID trainers offered by geniusintraining may not explicitly teach how to tune a PID controller, they can assist individuals in gaining the confidence to do so. MaxK only provides the tools and hardware, leaving the teaching to those with expertise in the subject matter. This requires a specialized skill set that MaxK does not possess due to time constraints. Despite being occupied with work and financial responsibilities, MaxK hopes to address issues with scaling and signal training next week. In a separate response, Brian confirmed that @git is utilizing a Micrologix 1400 for their project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geniusintraining raised a concern involving the PID setup on the PIC 616, where the PV tends to remain high without attempting to reach a lower value consistently. While it generally works well, occasional discrepancies occur, resulting in the PV falling short or exceeding the desired range. 

Upon reviewing the PID structure in the MicroLogix 1400 Instruction Set Reference Manual, it is evident that the PID calculation relies on integer math for all operations. This could be a legacy approach from previous PID implementations in SLC and PLC-x systems where floating-point calculations were limited. Despite technological advancements, the use of integer math in PID algorithms remains prevalent in the MicroLogix series.

A significant aspect for consideration, concerning @git's query, is the Integral Sum (.IS) member of the PID structure. The range of the output value is fixed between [0:16383], while the Integral Sum is maintained within the range of [-16384:+16383] using 15 bits. By allocating 15 bits for integer values and 17 bits for sub-integer precision within the 32-bit .IS, the PID system can accurately handle errors and adjustments.

The manual states that the Integral Sum represents KC/TI∫ E dt; however, there is a possibility of a typographical error. The accumulated value in the Integral Sum could be better represented as 1/TI∫ E dt or in discrete form as Σ(EΔt/TI). This speculation raises questions regarding PID performance when errors persist despite noticeable discrepancies.

Taking into account the error (-9), TI value (290.8 minutes), and time increment (Δt), a theoretical processing method is outlined. By scaling the error to a 32-bit fixed-point long integer and applying division and multiplication steps, the PID system aims to gradually correct errors over multiple loop updates. The precision and accuracy of the PID algorithm play a crucial role in achieving optimal control values for the output.

In conclusion, the speculation on the PID algorithm's operation provides insight into the potential factors affecting PID performance. Despite uncertainties, understanding the internal mechanisms of the PID system can help optimize control strategies for enhanced process control and stability.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is it possible for the motion controller to perform this task without the ML1400? In a previous post, I noted that a TI value of 290.8min is so significant that it practically renders integral action undetectable. However, it is important to consider that what takes time to initiate also takes time to stop. Where exactly are the closed loop poles located?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey posed an intriguing question about the closed-loop poles in a control system. In analyzing the system dynamics, it was observed that the ball's travel range is approximately 0.4m, with the distance from the fulcrum to the servo link connection being half of that at 0.2m. The servo arm has a vertical range of 19mm, and a servo range of 22 units is needed to move the arm over this distance.

By defining the PID control variable in radians, the equivalent gearing required to achieve the desired motion was calculated. The force exerted on the ball by the beam was determined based on the angular displacement of the servo arm. The system's error calculation, scaled to 0-100 arbitrary units, allows for the derivation of the controller gains necessary for accurate positioning.

Utilizing the MicroLogix PID parameters, the model controller gains were calculated to ensure precise control over the ball's position. However, further analysis is needed to refine the model and achieve accurate control outcomes. The transfer function of the system shows the positioning of the poles in the complex plane based on the control parameters set.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for the error, the distance the ball can travel is actually around 1.25 feet, not 2.5 feet. The accurate measurement is 0.4 meters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey inquired about the locations of the closed loop poles. To find out where they are located, simply click to expand.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Currently, I am in relaxation mode, enjoying a movie and munching on popcorn. Let's discuss the acceleration when using the a_linear equation in #61 with respect to theta. Initially, we agreed on the ball rolling on a flat surface, but then shifted to a 90-degree V channel, altering the open loop gain. How does this affect the acceleration in terms of theta? Additionally, what assumptions are being made regarding damping or resistance?

The origin of transfer function y1 in #68 is unclear. Is it a closed-loop transfer function? It doesn't seem logical if it's an open-loop transfer function. By the way, I recommend checking out my Peter Ponders PID YouTube channel for further insights. I can efficiently calculate gains for an ML1400 to prevent overshoot. However, I've always had issues with how Rockwell PIDs operate. The gain should have units of rad/meter, but Rockwell uses unitless gains, necessitating conversions from radians to counts and vice versa.

I may have the most extensive range of real-world applications discussed per post here. Time to indulge in more wine and popcorn.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, drbitboy clarified that the ball travel range is closer to a foot and a third (1.312) rather than two and a half feet. This correction aligns with the measurement of 0.4m. In the U.S. system of units (ft, lb, gl... min), it would be more relatable to state, for example, "Usain Bolt achieves a new world record with 328.95 feet in just 0.1597 minutes." Additionally, drbitboy raised a point regarding the PID-calculated error, highlighting that it can be 250 times greater than the actual error in meters. Furthermore, there was a query about learning encoder and scaling options, specifically asking how many meters correspond to a value of "1" at the input of the PID controller.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK apologized for his lack of attention and asked for forgiveness. While many may have been thinking "Do Not Feed the Troll," MaxK continued to engage in discussions. He jokingly promised a dinner, beer, handshake, or a heartfelt thank you if he ever visited someone's town. MaxK inquired about learning encoder and scaling options, specifically asking about the input distance of "1" at the PID controller. Referencing a picture of the PID setup dialog menu, he analyzed the movement of a ball rolling across a beam to determine the relationship between PV and distance. Assuming linearity, he calculated that 1 PV equaled 0.04 meters. Similar calculations were made for the servo arm and CV. MaxK acknowledged that these findings may have changed due to adjustments made by @git, but emphasized that the principles of linearity still hold true.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned being in a relaxed state, enjoying popcorn while discussing technical details related to acceleration and rotational inertia. The conversation delves into the specific details of the ping pong ball's rotational inertia, the angle of the channel, and the relationship between angular and translational accelerations. Various factors such as force/torque balance, specific torque, and specific force balance are considered in the analysis.

Furthermore, the discussion touches on damping or resistance assumptions, buoyancy of the ball, centrifugal acceleration, and starting resistance. While the conversation may seem complex, it emphasizes the importance of understanding the transfer functions and closed-loop systems, as highlighted in Peter's educational YouTube channel.

In summary, the dialogue showcases a deep dive into technical concepts related to dynamics and control systems, urging the importance of thorough comprehension and analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK recommended that a news headline in the United States should read: "Usain Bolt breaks world record by running 328.95 feet in just 0.1597 minutes."  Click to read more. However, there are those who continue to advocate for the superiority of the metric system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Save us from the proponents of the "SI-is-better" ideology. It is worth noting that the majority of the world, excluding only the United States, Liberia, and Burma (Myanmar), have embraced the SI (Systeme Internationale) units. It appears that those promoting the FPS system are the true devotees of a fading measurement system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Steve Bailey, the majority of the world has adopted the SI (Systeme Internationale) units, leaving only the United States, Liberia, and Burma (Myanmar) still using the FPS system. The debate between the two systems is often seen as a battle between cults, with the SI system being more widely accepted. Those who argue for either system are often considered cultists, with the exception of those who understand that the choice between units does not truly matter.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I am personally a fan of the FPF (furlong, pennyweight, fortnight) measurement system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Steve Bailey, the FPF system (furlong, pennyweight, fortnight) is personally preferred. The VAX/VMS operating system utilized microfortnights as a unit of time measurement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a comment, drbitboy expressed dismay over the "SI-is-better" mindset that some people have. He humorously pointed out that a joke that needs to be explained is not a successful one. In this post, I pledge to communicate sincerely without the use of irony or sarcasm.

If you are more comfortable thinking in feet and pounds, then stick to those units. Likewise, if you prefer meters and kilograms, then stick to that system. The joke I made was about the use of minutes as a time unit, which seemed to confuse some. 

Regarding the model controller, the formula for KP, KI, and Kd provided involves calculations based on seconds. As someone unfamiliar with standard PID-FBs, I question why we multiply by 60 for time conversions instead of dividing. Can someone clarify this for me?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, user drbitboy provided insight on the transfer function 'T' from input 'u1' to output 'y1', showcasing a mathematical equation involving various coefficients and variables. Setting the KI parameters to zero leads to the alignment of two poles along the real axis in the complex plane's left side. However, there appears to be ambiguity regarding the definitions of 'y1' and 'u1'. Could it be that 'u1' represents the desired position while 'y1' signifies the achieved position? In such a scenario, during steady-state conditions where s approaches 0, the achieved position may not align with the desired position.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK expressed a lack of knowledge regarding standard PID-FBs, questioning the calculation of integrals and derivatives in relation to minutes. The confusion arose from the use of multiplying by 60 instead of dividing when converting coefficients to seconds. In reality, there is no such thing as a standard PID block, with only one PID equation but multiple implementations available. In the context of Allen-Bradley systems, two main forms are commonly used: independent gains (KP, KI, KD) and dependent gains (KC, TI, TD). The choice of using minutes in the dependent gains is likely due to historical reasons, as many industrial processes operate on a slower scale than seconds. The parameters of both forms are linearly related, and implementation details vary, including the unitless nature of gains and their application to predetermined ranges. Further details can be found in the provided link.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Peter Nachtwey, it appears that y1 and u1 are the output names when using the pid(...) and feedback(...) functions. When the system reaches steady state with s approaching 0, the actual position may not match the target position. For further clarification, refer to the code and additional resources provided in previous discussions (such as post 17). The solution to understanding this issue should be evident from reviewing these sources, as explaining the entire thread would be redundant since your focus is on the most recent posts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the discussion, drbitboy pointed out that y1 and u1 are the generated names when the pid(...) and feedback(...) functions are activated. It raises the question of the transfer function's arbitrariness. Referring back to post #17, it seems that the closed-loop transfer function hasn't been calculated accurately. Instead, the focus has been on the open-loop transfer function without feedback. A correctly calculated closed-loop transfer function should yield a value of 1 when s=0, indicating that the actual position aligns with the target position. Reviewing the provided code and references, particularly post 17, should clarify any uncertainties. Although there was an attempt to convert the calculations into Octave, the transfer function was found to be incorrect. Despite using approximate values for Kp and Kd, the closed-loop transfer function should still yield a value of 1 when s=0, as the actual position approaches the target position. If necessary, further guidance can be provided to ensure the correct approach is taken.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey clarifies that the transfer function is not arbitrary, contrary to a misunderstanding. When calling the PID function with specific parameters, such as C=pid(Kp,Ki,Kd), it outputs the PID transfer function. Similarly, when utilizing the feedback function with parameters like T=feedback(C*P_ball,5^-1), it displays the combined PID model (variable C) and the acceleration model (P_ball) on the screen. The numerator in the displayed equation represents ACCEL(s) PID(S), while the denominator represents the (1 + (ACCEL(s) PID(s) * 1/5)) s*2. The argument 5^-1 in the feedback(...) function signifies a new target setpoint. Peter Nachtwey also points out the importance of calculating the closed loop transfer function for accurate analysis and explanation of the system's behavior. In a post discussing the ball's movement to a new setpoint, it is evident that the closed loop transfer function plays a crucial role in understanding overshoot and oscillations observed in the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey jokingly asked, "Do I need to set aside my popcorn and demonstrate the correct way to do it?" It would truly make my day, but it seems like you already have a handle on it. While I may not have access to MathCAD, it seems like the control package in Octave is handling something quite similar, right? Thankfully, there is no need for Runge-Kutta as solving the differential equation should be straightforward with an analytical solution available between PID loop updates.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion thread, user drbitboy shared insights on the misconception of a standard PID block, with reference to a popular XKCD comic. Apologies for any confusion caused by the initial question, which led to a different direction. The intended inquiry was regarding the formula for Kd in relation to Kc and Td, either per minute or per second. Is there a mistake in my understanding?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK apologized for the confusion caused by the unclearly formulated question leading to an incorrect answer. The intended formula is Kd = Kc * 250 * Td for per minute or Kd = Kc * 250 * Td/60 for per second. To clarify, the units of the derivative tuning parameters, TD* 60 s min-1 and KD, are in seconds. This is because they are multiplied by dE/dt, which is in PV s-1. The units need to be adjusted to cancel out the seconds in the denominator. For more information, refer to the image below taken from the Allen-Bradley document mentioned.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In control systems engineering, Peter Nachtwey emphasized the importance of a closed-loop transfer function equating to 1 at s=0 (steady state). This signifies that the actual position matches the target position. By substituting 5^-1 with 1^-1 as the setpoint, the resulting transfer function generated by Octave/control is expressed as: 11.76s + 17.64 / s^2 + 11.76s + 17.64. When s=0, indicating time=∞ or steady state, the comparison of zero-order coefficients determines the target position alignment. Is this considered a closed-loop transfer function in this scenario?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hey Peter, can you explain why your model (check here) shows a tilt angle that is not zero for t=∞, even when the ball has zero velocity and acceleration? It seems like a contradiction, as if the model needs some self-healing.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion involving the closed-loop transfer function with different setpoints, the output produced by Octave/control software revealed a transfer function with specific coefficients, indicating a closed-loop system with a PD controller. The system displayed characteristics of being over-damped, with two real poles based on the calculated coefficients. While considering the control of a double integrator or type 2 system, it is recommended to explore symbolic calculations using tools like the sympy package in Python. Additionally, alternative software options such as wxMaxima are available for tasks like autotuning a simple first-order system. Explore the provided links for further information and examples related to control systems analysis and design.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey recommends exploring the SymPy package for Python programmers. However, some may find it easier to write the code from scratch due to the analytical nature of each individual step.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy expressed doubt in the accuracy of the model's movement, comparing it unfavorably to @git's latest data visualizations. The model quickly shifts the ball to a new position, unlike the precise plots shown by @git. To achieve similar curves to #18, both kp and kd should fall within the 10-100 range (though this estimation may vary due to unclear scale on the graphs). In a specific example at 1:28 in video #1, the Scaled Error is 20 with Kc set at 18. This means the proportional term value should ideally be 360, but the Control Output is only 63.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey noted that the closed-loop transfer function with a PD controller is more efficient. This adjustment ensures that the actual position will eventually reach the target position during steady state. It's important to clarify that the previous transfer functions were also closed loop, being nearly identical to the current one. The main difference lies in the non-unity ratio of the zeroth-order terms in the numerator and denominator. As a result, the steady-state position (s=0 or the PID setpoint) was not set at 1.0.

Moving on, progress has been made in extracting the PID output CV values using Octave+control. By utilizing the step function, data such as ball position, time duration, and state trajectory can be obtained. The state trajectory is expected to provide pairs of theta and ball position data over specified time intervals. However, upon plotting the data, discrepancies were noticed. While the orange line corresponds to the ball position as expected, the blue line does not match the theta values. This suggests that further simulation and analysis are necessary to accurately predict the system's behavior. Ultimately, continuous simulation efforts will be pursued for better insight and understanding.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, drbitboy questioned Peter about why his model displayed a non-zero tilt angle for t=∞, despite zero velocity and acceleration of the ball. The discussion delved into the calculation of acceleration using the parameter K in the formula acceleration = K * theta, with an emphasis on using standard MKS units for simplicity. The conversation referenced previous work on PD control solutions from 2009 and highlighted the importance of determining the correct value for K to achieve the desired response. Additionally, the discussion touched upon the issue of overshoot in graphs and the need to address it in motion control applications. Overall, the dialogue between the participants emphasized the need for accuracy in graph reading and understanding closed-loop transfer functions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey emphasized the importance of checking the scale on the right side of the graph to accurately interpret the data. Understanding basic graph reading is essential for making informed decisions. Don't forget to expand your knowledge to avoid simple mistakes!</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring about the use of K in the acceleration equation K * theta and its units, Peter Nachtwey discussed various factors. When it comes to K, the formula K = acceleration/θ is crucial. In this context, it is worth considering MKS as a viable option. However, it is essential to note that K is dependent on specific variables. For instance, in the equation Beam = g/(k+1), where g = 9.8m/s and k = sin-2(Γ/2) 2/3, the angle Γ plays a significant role. Sin-2(Γ/2) compensates for the torque/force attenuation caused by the reactive force of the channel. Additionally, the factor 2/3 derives from the inertia formula for a spherical shell, emphasizing the importance of gravitational acceleration in the overall calculation. By incorporating the necessary components and making accurate assessments, the value of K can be determined effectively based on the calculated parameters.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to Peter Nachtwey's question about the input for K, it was clearly shown in Post #17 that the P_ball (ball position) transfer function is 5.88/s^2. This value, calculated as 5.88 = 9.8 / (2/3 + 1) with a Γ value of 180 and sin(Γ/2) = 1, was also found in the PDF you provided. It's essential to pay attention to details like the ordinate scale to fully understand the calculations involved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion on a forum, drbitboy pointed out that the P_ball (ball position) transfer function was clearly shown as 5.88/s^2 in Post #17, with the same value found in a referenced PDF. This value was calculated using specific mathematical formulas, showing the relationship between different variables. Understanding this information is crucial for analyzing the system's behavior efficiently. Despite encountering challenges with achieving critical damping and avoiding overshoot, the focus has shifted to utilizing a discrete analytical model in Python for further exploration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>p_ball represents a variable position within an open loop system. To calculate the response, multiply the closed loop transfer function by r/s, where r is the set point or target position. To avoid confusion, use more descriptive labels for variables. The bottom T is not a position value of 5; multiply the closed loop transfer function by (5/s) to factor in the forcing function. In motion control, the forcing function is generated by the target generator. Overshoot may occur due to the presence of a zero, as seen in an inverse Laplace transform. Watch my YouTube video explaining zeros and their effects.

Visit the updated version of my initial PDF for further insights. I express my concerns about the limitations of Matlab and Octave tools. These programs may calculate closed loop responses without considering the system's components, leading to inaccuracies. In a control theory class, I would discourage relying solely on such programs for understanding system behaviors. While useful for obtaining results, Matlab and Octave may not provide a comprehensive understanding of system limitations.

Understanding these limitations is crucial for system design and embedded programming, especially for motion controllers. Consider embedding algorithms written in C or assembly in your code, rather than relying on external programs like Matlab or Octave.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Estimation of the transfer function using data set #18: To simplify, let's set ki=0 and focus on the disturbance response shown in the graphs. The oscillation period Т is calculated to be 8.63 seconds with an oscillation damping coefficient of k_dmp = 0.775. The poles of the transfer function are determined as follows: Im = 2 * pi / T = 0.728 and Re = ln(k_dmp) / T = -0.03. Further calculations result in kp = 37.1, k = 0.014, and kd = 4.19. If the disturbance magnitude is known (e.g. 50%), additional parameters can be calculated. In this case, kp = 5.556, k = 0.096, and kd = 0.625. It is important to note that this approximation is not intended to be precise but rather to provide a rough estimate of parameter values that align with the observed curves.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my previous PDF, I demonstrated how to calculate the gains for a response that is critically damped. On page 2 out of 6, I established the initial values for both position and velocity. These initial values can vary within a reasonable range. The ball eventually returns to the fulcrum or pivot point at 0. However, it's worth noting that I can adjust the position in a similar manner as in my other PDFs, and the ball will still reach the target position.

@MaxK, I'm unsure of what your intentions are. I simply made adjustments to a worksheet that I originally created in 2009. If you'd like, I can implement a Lead/Lag controller, as I have already calculated numerous options. With 30 years' worth of simulations, I have identified over 800 successful ones, with approximately 200 that didn't quite work out - although there are still valuable insights to be gained from those.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned that there are numerous occurrences of the term "y1" which often causes confusion. However, it is important to understand that "y1" is the generic name shown in Octave's control package when printing a transfer function. The actual Octave variable name, which is highlighted in a recent post, is what the transfer function is linked to. It is crucial to grasp the context before assuming that what others have written is incorrect.

Moving on to the debate of open loop versus closed loop systems, it is clarified that P_ball and C (PID control) are indeed open loop. However, with T declared as feedback(C*P_ball,...), it functions as a closed loop system, regardless of whether the steady state value is 1.0 at s=0. The setpoint is not fixed at 5; the steady state value of the polynomial ratio at s=0 is what should be focused on.

In terms of plot labels, analyzing the graphs provided in the ball and beam PDF requires a certain level of skill. The trends depicted in the plot indicate that at steady state, the Angle is 0.2 radians and the Position is -0.375, with a velocity of 0. It may be necessary to review and enhance graph reading skills to interpret the data accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey expressed uncertainty about the value of K provided by MaxK, indicating that 0.018 may be too low. The value was derived from working with the Micrologix PID's output CV in the past, making it accurate. The main focus of the discussion is assisting @git in implementing a ball-on-beam balance system using a MicroLogix PID. While theoretical models may use radians, @git needs practical solutions for his setup. 

If the beam is 0.4m long, the distance between the fulcrum and servo link is 0.2m, and the PID output moves the servo arm by 0.019mm over a CV range of 22, the calculations reveal k ≈ 0.018 in the real world. This value is crucial for determining ball acceleration and tilt angle. By simplifying the calculations, it is clear that K plays a significant role in the system's functionality.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The image on the left accurately replicates a simulation by Peter Nachtwey shown in the image on the right, which has been corrected with the proper labels. You can find my Python model on GitHub for more details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK provided an estimate of the transfer function using #18 data. In response to skeptics, MaxK quoted John Lennon's "Strawberry Fields Forever" to emphasize the ease of living with closed eyes. Additionally, he calculated a value of k = 0.014, which, in his opinion, is close to the value of 0.018 calculated in #68. The feeling of accuracy is definitely satisfying.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I made some adjustments to the storyline to better align with the visuals and tuning in @Peter's revised PDF. There is a slight hint of overshoot remaining, likely due to aliasing in the discrete analytical model calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The chart displaying the angle graph was initially labeled incorrectly but has since been corrected. I have also adjusted the time length of the plot to ensure consistency. For a visual representation, refer to page 6/6 of my PDF document. This page illustrates the response obtained when converting the transfer function to the time domain, showcasing a noticeable increase in overshoot.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Who can I bargain with to gain access to the secret insights of PID block calculation, specifically in transforming block coefficients into kp and kd values per second?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK pondered, "Who can I bargain with to uncover the mystery behind the PID block's calculation process, specifically in converting its coefficients into kp and kd values per second?" It seems like the question revolves around understanding the calculations performed by a PID instruction in each loop update, taking into account the control variable (CV), process variable (PV), tuning parameters, and configuration settings. This information is commonly found in various manuals. However, if the query pertains to the operations of Micro800/CCW PID instructions, the topic may delve into more intricate details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK inquired about the possibility of selling their soul in exchange for hidden insights on how the PID block calculates coefficients for kp and kd per second. If you're interested in delving into this complex topic, check out my YouTube channel, Peter Ponders PID. My channel dives deep into advanced content on this subject, breaking down complex math for a better understanding. While some may shy away from the technical aspects, I believe you can handle it. Watch as I demonstrate the step-by-step process, utilizing the metric system for clarity. Instead of relying on matrices or functions like Matlab or Octave, I derive the formulas for controller gains symbolically. This approach allows you to grasp how each term in the transfer function impacts the gains, leading to a more profound comprehension. While Matlab and Octave may provide quick answers, they lack the depth of a symbolic solution. It's a disservice that universities rely solely on tools like Matlab for teaching, as true understanding comes from delving into the symbolic reasoning behind the calculations. Visit my channel at https://www.youtube.com/channel/UCW-m6-nwUfJrnZ0ftoaTU_w for more insightful content on PID block calculations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have been primarily observing in a casual manner (due to lack of time to engage further, which I would like to do). However, I stumbled upon these intriguing videos that caught my interest. Check them out: https://youtu.be/GP7L7wrLOOQ, https://www.reddit.com/r/raspberry_.../?utm_source=share&utm_medium=web2x&context=3, and https://youtu.be/wvAPdFuQjow. Initially, I almost stopped watching one of them after the first few seconds. But I recommend giving it a chance until the end, at least until the 6:00 mark. Don't miss this one: https://youtu.be/-h1OtBgMqcE.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>ndzied1</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have some thoughts for @geniusintraining. Please note that these are just my observations and interpretations. I believe the issue lies in system limitations stemming from design choices rather than tuning. 

It seems that the servo in question operates at either a 20Hz (50ms) or 50Hz (20ms) PWM pulse frequency. However, with a PID loop update time of 10ms, only a fraction of the updates will actually cause a change. Furthermore, the servo typically works with a duty cycle of 1-2% of the PWM period, resulting in a limited range of control values. 

It is possible that measures have been taken to enhance control precision, such as utilizing a 555 timer circuit or Arduino. Nonetheless, these challenges suggest that the system may not be optimal for effective control. 

While this scenario may serve as a valuable learning experience for understanding order-of-magnitude concepts in mechanical and control system design, it may not effectively demonstrate PID principles. 

In a related video shared by @ndzied1, the control system faces additional complexities due to the ball's rotational inertia and limited control characteristics. Despite these challenges, the achieved level of control is commendable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Apologies for any confusion earlier. I was specifically referring to the functionality of Micro800/CCW PID instructions. I've been struggling to connect video #1 discussing scaled error, control output, Kc, and Ti with curves #18 and calculations #68 in the past few days. The correlation between them seems unclear.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK recently mentioned his struggles in linking video #1, which covers topics like scaled error, control output, Kc, and Ti, with curves #18 and calculations #68. However, the correlation seems to be lacking due to a sampling issue with RSLogix 500, as the values are not updated at the required PID loop update time of 100Hz. Additionally, there are discrepancies in post #68's calculations, possibly due to a multiplication error. If @geniusintraining could provide a PDF of the program along with details on input and output scaling, servo model number, and parameters like arm length, it might help resolve these issues. The approach taken in Post #101 is considered the most promising so far.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>ndzied1 mentioned that they have been observing passively in "popcorn mode" due to time constraints but would like to engage more. They found several interesting videos related to raspberry_ on Reddit and YouTube. In one video, they pointed out issues with resolution and sampling interval consistency affecting the motor's ability to position properly. The control was noted to be jerky due to poor resolution, leading to noisy speed estimations. The presence of rolling friction from the ping pong ball was also highlighted. The discussion delved into the importance of incorporating friction and motor response into the closed-loop transfer function for better control. A Mathcad worksheet demonstrating calculations for a PID controller and state space was shared, emphasizing the need to account for motor response and friction in the system. Additionally, the preference for self-contained Mathcad PDFs over lengthy posts for easy reference was expressed. The importance of symbolic transfer functions in understanding damping terms, such as demonstrated in the PD example, was emphasized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When responding to @geniusintraining, drbitboy shared insights on disturbance response in a system with specific parameters. The chart provided shows the velocity disturbance at 0.1 m/s, with calculations for k (plant) at 4.515, kp at 0.14, and kd at 0.5. Other parameters include a PID Loop Update of 0.01s, servo pulse frequency of 20 Hz, encoder resolution of 10^-5 m, actuator speed limit of 0.005 m/s, and a rod play of 5*10^-4 m. Removing friction from the system adds complexity, as highlighted by the challenges posed by limited actuator speed and backlash in the inclination mechanism. These limitations affect the tuning of the PID controller, particularly in unstable conditions near zero. Despite potential drawbacks, the impact of PID Loop Update and servo pulse frequency may be less significant when dealing with slower actuators.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey openly admitted his dislike for scrolling through numerous posts to find important information, labeling himself as lazy in the process. He emphasized the importance of efficiency and avoiding repetitive content. In the same vein, he made it clear that he was uninterested in irrelevant or redundant information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK acknowledged that setting up such a system can be quite challenging. It was actually @Peter Nachtwey who initially made this observation, not MaxK.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While out camping under the stars, I took advantage of the quiet nights to work on a new Mathcad worksheet. You can view the worksheet at this link: https://deltamotion.com/peter/Mathcad/Mathcad - RollingTTBall PID.pdf. As you cook your meals over the campfire, I also made some minor corrections on page 2. These adjustments do not alter the overall approach or the final outcome.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy explained how an RC analog servo typically operates with a duty cycle between 1% and 2%, or possibly up to 2.5%, of the PWM period. The PWMX.DC setting ranges from 0 (0% duty cycle) to 1000 (100% duty cycle). This means the CV output to the PWM.DC control parameter will have a usable range of 10-20 out of 1000, providing only 11 discrete values.

To address this issue, configuring the MicroLogix (ML) PWM for 800Hz results in 800k PWM "k-counts" per second, with each cycle lasting 1.25ms. For a servo PWM frequency of 20Hz, with a period of 50ms, the usable range of 1-2% equates to 400-800 k-counts and involves 40 MicroLogix PWM cycles per servo. If the servo PWM frequency is 50Hz, with a period of 20ms, the 1-2% range translates to 160-320 k-counts and includes 16 MicroLogix PWM cycles per servo.

An effective solution could involve turning off 39 out of 40 (for a 20Hz servo) or 15 out of 16 (for a 50Hz servo) of the ML PWM cycles. This can be achieved through hardware using a counter triggered by the MicroLogix PWM signal's falling edge, or in software with a 1ms STI program task that enables the MicroLogix PWM for only one cycle out of 50 or 20.

The key considerations include whether the ML PWM starts immediately when its enable bit is set to 1, and if the delay before execution affects the written instructions. This software-based approach also allows for synchronizing loop updates for the PID with the servo PWM signal, potentially resolving resolution issues in comparison to backlash in the linkage.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In discussing the calculations for page 2, drbitboy pointed out the importance of minor corrections while cooking eggs over a fire. The sudden appearance of sin2 raised a question, but the previously agreed-upon value of 5.88 is indeed correct. This value is obtained by equating and solving the equation mgh=(1/2)*m*v^2+(1/2)I*ω^2 after making necessary substitutions. The approach and overall result remain unchanged despite these adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey questioned the sudden appearance of sin2, but its significance has been established by @MaxK over fifty years ago. Lack of understanding may stem from admitted laziness. The agreed value of 5.88 was confirmed by Peter Nachtwey. However, @MaxK and Peter had actually settled on 4.2 for most of the previous week. If further clarification is needed, links can be provided or some scrolling may suffice.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>geniusintraining mentioned the idea of using an oscillating fan to add another dimension but faced difficulties in managing the current variables. In this guide, I will provide simple steps for tuning a PD controller in a closed-loop system, gradually bringing it closer to the desired parameters. 

Before conducting the experiment, ensure the ball is placed at the setpoint (Error = 0) and run the PD control. Introduce an impulse disturbance by briefly hitting the ball and analyze the data using the PD algorithm formula. 

Observing the CV values at specific points in the process can help determine the proper adjustments. By calculating the ratio of CV values at two key points, adjustments can be made to the Td and Kc values accordingly. Pay attention to the Actuator Delay Factor to optimize the system's performance. 

It is important to note that the decision to adjust Kc should be based on the experiment's results with the new parameters. Continuous monitoring and fine-tuning are essential for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@geniusintraining: It's time to move beyond theory and take @MaxK's advice by focusing on characterizing the actual system. Let's start by determining the sample rate of the raw position measurement and confirming the range mentioned in the first video, which is approximately 300 to 29000. Additionally, we should create a table showing the relationship between ΔCV and the time it takes for the ball to travel the length of the beam.

To create the table, set ΔCV to 1 and begin with CV = CVBase, a value just below the point where the ball is balanced. Hold the CV at CVBase until the ball reaches the end of the beam, then increase CV by ΔCV in a step change. If the ball doesn't move, increase ΔCV by 1 and repeat the process. Once the ball moves, record the time it takes to travel to the other end at the current ΔCV value. 

For better analysis, save the data in a spreadsheet with columns for ΔCV and time. Use the formula A = 2 * D / Time to calculate A, where D is the raw PV to the PID (ball movement along the beam). Perform multiple runs at each ΔCV value to enhance statistical accuracy. Finally, fit a regression line to ΔCV vs. A to determine the slope, m, which represents our K value.

It's important to note that this model assumes linear acceleration with CV, which has its pros and cons. Limiting the range of ΔCV for testing purposes may help refine the results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This design exhibits a servo angle characteristic that is nearly linear with sin(θBeam), resulting in a direct correlation with acceleration.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Ouch...! I feel like a perfunctory narcissistic fool! Let's focus on the curves in situation #18. In this scenario, the peaks of the PV curve align with the troughs of the CV curve, indicating that the PV and SV curves are out of phase and the D-term is minimal. From this, we can draw three conclusions: 

1. The system in the #18 graphs seems to be stabilized not by the PID controller, but by friction. This implies that the PID controller is manageable, despite my initial doubts. Perhaps there was some clever trick or technique involved in stabilizing the system. 

2. It appears that understanding the Micro800/CCW PID instruction involves a formula like: CV = blahblah + Kc/100% * (1 + blahblah + Td/100% * blahblah).

3. It turns out that my previous 9 pages of self-appreciation were unnecessary. In hindsight, a simple recommendation in post 19 would have sufficed: Increase Td significantly (as the current value is too low) and possibly adjust Kc based on experiment results with the increased Td.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK;936140
It seems there is damping present, whether it be mechanical or electrical. The Micro800/CCW PID instruction should be interpreted as: CV = blahblah + Kc / 100% * (1 + blahblah + Td / 100% * blahblah). The gain values for the ML1400 are dimensionless, and the time constants are in minutes, calculated using integers. This method may not be ideal. Despite 9 pages of self-praise, the solution in post 19 is simple: Increase Td significantly (as the current value is very low), but be aware that the response may not be well-damped. If necessary, consider reducing Kc slightly after experimenting with increased Td. The focus should be on achieving noise-free feedback for Td to operate effectively. Modifications to drbitboy's diagram could involve using a large pulley on the rotating point and a small pulley on the motor to increase resolution without the need for significant tilt angles.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the context of modifying a diagram, Peter Nachtwey suggests using a large pulley on the rotating point and a small pulley on the motor to gear down the motor, effectively increasing resolution. Concerns about backlash may arise with gears and a large mechanical advantage. However, the focus of the diagram is on near-linearity and feasibility. Using easily accessible materials like dental floss and simple tools like a hole saw, a drill, and a round file for making the pulley wheel can simplify the construction process. The mechanical advantage is determined by the fulcrum and servo locations, as well as the wheel radius. While linearity may not be crucial, these adjustments can optimize the system's performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to concerns about backlash with gears and a large mechanical advantage, drbitboy recommended using a belt instead to minimize this issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey also recommends using a belt for this task. This simple yet effective tool can make a significant difference.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Looking forward to revisiting this next week, @Geniusintraining. Could you please optimize the PID controller according to the instructions in post 124? I may not have many chances to test it on an actual process with a time constant of (k / s ^ 2), so I am eager to see how effective this method is.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello Max, I will be addressing this matter soon as I am currently handling the responsibilities of being a business owner during tax season, which is the busiest time of the year. I have a few more days of paperwork to complete before I can focus on other projects. Although my attempt to hire drbitboy for a project did not work out, I may consider hiring him for this one and sending a trainer to assist. I will wait and see if I can find some free time amidst my busy schedule.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It's possible that there is another issue at play here, such as the quality of the table tennis balls I purchased on Amazon. Watch this video for more insights: https://www.youtube.com/watch?v=_01K989nc2Q.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>After following Max's advice, I came close to resolving the issue but still had to rely on all 3 P, I, and D values. This indicated a mechanical problem that can't be fixed with just a PID tune. I discovered that sending my trainer less than 4ma or more than 20ma caused erratic behavior, prompting me to set limits on what the PLC can send. The visual representation of the process (red for SP, green for CV, blue for PV) showed that the ball was only 4 units away from the setpoint. Despite small movements from the CV, the ball wouldn't budge, signaling the need for mechanical adjustments. Once I fix the mechanics, I'll revisit the PID tuning. Appreciating the assistance received so far.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The inclusion of TI is vital due to the presence of hysteresis within the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy noted that the use of TI is essential due to the presence of hysteresis in the system. It will be intriguing to observe how the mechanics perform and if adjustments can be made accordingly. DR inquired about the disparity in activity levels between CV and PV in the discussion. This difference may be attributed to motion and inertia, with the ball staying in motion until it comes to a stop, requiring more effort to set it back in motion again, similar to a static state.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user questioned why there is a stark difference in activity between the CV and PV variables. Could it be related to the concept of motion and inertia? While PV continues to fluctuate sinusoidally, CV remains quiet during a specific section of the trend. However, CV should be responsive to changes in PV, as it is controlled by the PID system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I believe that adjusting the tune settings, as well as experimenting with the Deadband feature, has made a difference in performance. I recently purchased a variety of balls of different masses to further test this theory. If the results vary based on the mass size, I intend to offer these options to my customers to showcase the impact on performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Why is the CV silent during the left-hand section of the trend, while the PV continues to oscillate sinusoidally just before both PV and the ball come to rest? The reason lies in the relative magnitudes of the proportional and integral components of the CV. The impact of the large swing in the PV can be observed by examining the area to the left of the highlighted section. This disparity in components explains the difference in behavior between CV and PV in that specific scenario.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Steve Bailey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Steve Bailey pointed out that the significant impact of the proportional component of the CV compared to the integral component can be observed by examining the area to the left of the highlighted section to understand the influence of the large swing in the PV. Upon further examination, it appears that the CV trend may be rounded to the nearest percentage. This raises two potential issues: TDis might be too small, and increasing it by a factor of two or even an order of magnitude, while reducing KP, could help improve performance. However, factors such as friction and other non-idealities within the system may still be the main concern.

The uneven mass distribution of the ball is a noticeable factor to consider, although it may not be as extreme as cheaper alternatives. In relation to the friction problem, there is a possibility that the flat sides of the V-channel impede the ball's movement. One solution could involve replacing the V-channel with sharper corners, similar to those found on a slide rule or utilizing a half- or quarter-pipe made of PVC or glass. These modifications would create a smaller point of contact with the ball, potentially leading to enhanced performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When discussing hysteresis in a system, TIonly may be deemed necessary. The limited resolution in data display can lead to blurred effects from the PID controller, especially in scenarios like "ball oscillation." In this zone, the ramp angle is close to reaching a point where friction force surpasses acceleration force, but hasn't quite reached it. As a result, even significant adjustments by the PID controller may not budge the ball. However, towards the end of the hysteresis zone, the ramp angle shifts to favor acceleration force over friction force, requiring only a minimal push to set the ball in motion. Explore the attachment below for a visual representation of this phenomenon.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Writing with a Ki value of 0 and high Kd can lead to a system behaving erratically, causing anxiety for the user. This phenomenon is akin to the instinctive reaction of pressing the brake pedal when a car skids, even though it goes against the laws of physics. It highlights the psychological aspect of tuning these parameters, which can affect the system's stability and performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the concept of motion and inertia is crucial when dealing with objects like ping pong balls. When a ball is in motion, it will continue moving, but once it comes to a stop, it requires more effort to get it moving again. This could be due to static electricity affecting the ball. To combat this issue, one can use anti-static clothes from a washing machine placed in the robot tray. However, it's essential to note that anti-static clothes may result in more static friction in certain cases. Plastic balls are particularly prone to static electricity build-up.

From the equations discussed earlier, it is evident that a solid sphere has less inertia and moves faster when tilted at the same angle. Additionally, the angle of the V channel plays a significant role in determining the speed of the ball's roll. A shallower or lower angle V channel will cause the ball to move faster for the same angle. To explore this further, one can refer to examples like drbitboy's toy, which showcases these principles in action.

When it comes to optimizing control mechanisms for a ping pong robot, understanding the dynamics of PID control is crucial. By incorporating inner loop PID for the motor and outer loop PID for the V channel and ball control, one can achieve more precise and efficient movements. It's essential to address any static electricity issues beforehand to ensure smooth operation.

Considering the advancements in motor technology, there are various options available for different applications. While stepper motors have been commonly used in the past, newer alternatives may offer better performance and efficiency. Additionally, exploring innovative setups like using parallel rods to reduce friction, as seen on certain YouTube channels, can provide valuable insights for improving ball movement.

In conclusion, staying informed about the latest techniques and technologies in the realm of ping pong robotics is essential for optimizing performance. By sharing insights and experiences on forums and platforms dedicated to the sport, one can contribute to the collective knowledge and advancements in this field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK stated that we have all experienced at least once the need to set Ki equal to 0, which results in the CV reaching maximum output. It is possible that the PLC being used does not perform well with a Ki value of 0. Additionally, new balls of varying materials and weights, including some conductive ones, are expected to arrive tomorrow to help reduce static. Peter mentioned that this will help to decrease friction. Opting for an angled design will provide ease in testing different sizes with minimal surface contact, thereby minimizing potential friction concerns.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Adjusting the distance between two parallel rods is a simple way to control their position. Unfortunately, the V channel in the image cannot be adjusted. If the integral gain (Ki) is set to 0, the control variable (CV) will reach maximum output. It is possible that this particular PLC is not compatible with a Ki value of 0. However, a proportional-derivative (PD) controller should still function correctly in this situation. Click here for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned how two parallel rods can easily be adjusted by moving them closer or farther apart. However, in order to achieve proper functionality, the rods may need to be adjusted as the angle should work within a range of 1 1/4 to 2 inches without any alterations. Peter pointed out that using a PD controller should resolve any issues. However, there seems to be a discrepancy as adjusting the values on the left side to 1.2 and the right side to 0 results in the green indicator (CV) reaching maximum and the ball moving to one side. This could be due to a setting that has not been identified yet.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Programmable Logic Controller (PLC) operates independently of your desires, following your commands without hesitation. When the Integral Time (TI) reaches 0, the Control Variable (CV) drops to its minimum output level, which is 30% of the range 30-80%. This adjustment is reflected in the latest image, with a CV value of 30 representing "Output Min CV(%)."

It is apparent that reducing the TI to 0 causes the PID algorithm to cease adding integral accumulation (integral bias) to the CV. Consequently, when there is zero error and zero error velocity, the output defaults to the Feed Forward bias value, which is indicated as 400 in the most recent image. Given that 400 is less than 3% of the CV range (0-16383), if the Proportional Gain (KC) is not sufficiently high to adjust the error beyond that bias by 27%+, the CV will saturate at its lower limit, aligning with our observations.

In instances where TI is set to 0, it becomes crucial to assign a Feed Forward bias value that will maintain the beam level at around 10k (approximately 60% of 16383). This ensures that when both the error and its first derivative are zero, signaling a stationary state (dE/dt = 0) at the setpoint (E=0), the PID output will correspond to the designated bias.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Just before receiving the message below, I successfully elicited a response with a Ti at 0, though I needed to increase both P and D to over 300. The message mentioned a possible setting that needs to be located. The Doctor suggested a plan of action, which will be implemented tomorrow while eagerly awaiting the arrival of the necessary equipment.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Is anyone in possession of a syringe and needle? These tools would be perfect for injecting liquids of different viscosities into the spherical containers.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining shared their experience of achieving a reaction with Ti set at 0 but needing to increase P and D to over 300. They suggested trying adjusting the Feed Forward Bias to around 10000 while leaving KC and TD untouched. Have you experimented with this approach?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In my analysis, I considered the angle of the ball to minimize surface contact and reduce potential frictional issues. Additionally, the weight pushing on the sides of the ball creates an extra 40%+ (√2 - 1) force compared to a ball on a flat surface. This angle also causes any static friction forces from non-point contact to exert torques that hinder the ball from rolling. This scenario is similar to a monkey climbing a ladder leaning against a wall, where a single point of contact or two points at a larger angle would not encounter the same issue.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In considering the issue of friction, I speculate whether the flat surfaces of the V-channel impede the movement of the ball. It may be beneficial to replace this channel with features such as the sharp corners of a slide rule or a curved pipe section to reduce the contact area with the ball, potentially enhancing performance. It is crucial to ensure proper alignment between the ball's movement and the ramp's axis to prevent erratic behavior. Experimenting with different angles like V-120 or V-150 degrees could provide valuable insights.

If anyone has a syringe and needle, we could explore filling hollow balls with liquids of varying viscosities for experimentation purposes. Your creativity in this regard is truly impressive and intricate.

Have you considered leaving KC and TD unchanged while adjusting the Feed Forward Bias to around 10000? By fine-tuning Kc and Td first, any bias discrepancies should become apparent and easily rectifiable.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK emphasizes the importance of aligning the movement of the ball with the axis of the ramp to avoid unpredictable consequences. It is crucial to select a pipe with an internal diameter close to the size of the ball to maintain accuracy in measurements. For example, for table tennis balls with a diameter of 40-40.5mm, a 2" ID pipe would be appropriate. Consider using a V-120 or V-150 degree angle for improved performance. Additionally, a properly fitted cove molding could enhance the behavior of the ball within the channel.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have to wait for the arrival of the new balls before I can proceed. It's surprising to me that I've tuned around 200 pieces of equipment, primarily related to temperature (as seen on this forum thread from 2006: https://www.plctalk.net/qanda/showthread.php?t=27555), and encountered various issues, some of them quite severe. For instance, I once had to set an oil temperature point to 580 degrees Fahrenheit, despite the fluctuations in the heat exchanger's temperature ranging from 480 to 700 degrees. Despite the challenging design flaws or worn-out parts, the PID system in all these instances was able to adapt and perform effectively. It's perplexing that I struggled to tune a rusted pneumatic positioner but am now struggling to tune a ball on an angle. The feedback from Dr. has helped me adjust the feed forward and achieve a tune using only PD. However, the results are not significantly different from my previous attempts. I am hopeful that the new balls will make a difference and improve the situation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geniusintraining noted that by implementing Dr's recommendation to increase the feed forward, they were able to achieve a tuning where only the PD method was used. However, the results did not show significant improvement compared to other methods. In an ideal scenario, the feed forward bias would need to maintain the beam level to keep the ball stationary at the setpoint, where the P and D terms are zero. The feed forward essentially functions as the setpoint. In a real-world setting with static friction, the ball may come to a stop with a slight offset from being perfectly level.

Have you thought about incorporating a sinusoidal offset to the control valve output, such as a ±5-8% variation at around 1-2Hz after the PID loop? This adjustment could help keep the ball "loose" to prevent static friction from affecting it. 

Geniusintraining expressed optimism about the potential improvements from the new balls. If the balls are spherical and fit within the designated angle, the key distinctions will likely be between solid balls with uniform weight distribution and shells, like those used in table tennis. Additionally, consider the impact of frictional force in relation to the ball's weight.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user asked for advice from a Dr on increasing feed forward in order to improve tuning, but so far, it hasn't yielded significant results compared to other methods. The hope is that new adjustments will make a difference. The user is seeking sharper curves in the data. The system has an oscillatory period of around 10 seconds and the user wonders if it is possible to show curves with more detailed time resolution, like displaying data points every 30 seconds instead of every 5 minutes on the chart.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing bias in a feedforward system should ideally be proportional to a setpoint (SP) or its derivatives. It is crucial to provide a proper warning before attempting PID training on a double integrating system with minimal friction, as excessive derivative gain may be necessary for effective feedback control.

A significant investment has been made in state-of-the-art test and training systems, as showcased in a video created a year ago. The video highlights a 6 Degrees of Freedom (6DOF) system and a system for balancing and controlling a ball, both requiring precise feedback control. Students from WSU can be seen attempting similar tasks to what is being pursued by GIT, albeit struggling due to rapid movements causing instability.

The video also features a challenging hydraulic system that demands advanced control algorithms beyond basic PID tuning. Our RMC75 system excels at controlling such complex systems, showcasing its superiority over conventional motion controllers.

The importance of thorough training on such systems cannot be overstated, as evidenced by the need for dither in hydraulic valves to prevent sticking. Additionally, implementing parallel rods can help reduce friction compared to traditional v channel setups.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>One possible approach is to model the friction effects using an exponential function of speed that acts in the opposite direction to velocity. To simplify, let's say the reciprocal of the frictional force can be represented as an exponential function of speed. However, a challenge arises due to a discontinuity in the system, as the frictional term may not allow the acceleration to decelerate the ball to the point of zero velocity or reverse its direction. This can be addressed by introducing a parameter, δ, to prevent division by zero and enable the ball to start moving when the magnitude of the applied force exceeds a certain threshold. In this model, frictional force is assumed to be proportional to the weight of the object, and the mass factor conveniently drops out of the equation. It is important to consider these dynamics in controlling the acceleration and velocity of the ball.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey emphasized that bias would not be beneficial in the given context. While the term "Feed Forward" is included in the Logix name as "Feed Forward Bias," it actually pertains to PID bias. The use of "Feed Forward" was simply to specify a particular PID dialog menu parameter to @geniusintraining. It is important to note that in this discussion, we are focusing on PID bias, which relates to the PID's CV output value when Error and dError/dt are both zero, rather than actual Feed Forward in the system control sense. Trust me on this clarification as it may not be evident from the context presented.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK mentioned the importance of mastering curves in PD mode. However, there is still an issue with settling on angles and abruptly stopping. Unfortunately, I am the only one available to work on this today and time is limited. Nonetheless, Peter has created a great learning environment for students to excel and improve their skills.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The current trend has significantly improved, with a reduction in interference. Previously, I shared the equations for determining the P and D gains for controllers, along with their respective units. To utilize these gains in Rockwell systems, you will need to convert them accordingly.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>An aspiring genius in training mentioned: The issue persists with the PD controller settling at any angle and abruptly stopping. I am puzzled by the clear anti-phase of PV and CV, despite the substantial value of Td. Have signal filtering techniques been implemented? At this point, there is no need to fear oscillations. To achieve a stepwise effect with the PD controller during the initial transient phase, consider gradually increasing the D-term.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, MaxK expressed confusion over the apparent anti-phase relationship between PV and CV, despite the significant value of Td. The question arises: Could signal filtering be the missing element here? At this juncture, there is no need to fear oscillation. What is crucial is to achieve a stepwise effect from the PD controller during the initial stages of the transient process, achieved by increasing the D-term. However, the challenge lies in achieving this consistently, as it currently occurs sporadically without any filtering in place, despite having elevated the D value until encountering an error.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently received some shiny balls, although they turned out to be less valuable than anticipated. However, I have another shipment arriving on Monday. The hollow balls weigh 0.5 oz, while the solid ones are heavier at 9 and 4.8 oz. I am eagerly awaiting a new batch in the hopes of finding higher-quality balls.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining shared that the system's behavior is inconsistent, happening less than 50% of the time. This is a common issue with static friction when the friction index is zero. Additionally, there is an asymmetry in the oscillations, with the PV peaks and CV valleys being more pronounced than the PV valleys and CV peaks. It raises questions about the roughness of one end of the beam. The situation is similar to the P-only ideal model, suggesting friction or backlash in the control system as the root cause of the problem. 
Consider adjusting KC and TD parameters or setting TD to the maximum value and gradually reducing KC until the system operates without faults. It might be beneficial to review the loop update time, as a 100Hz control loop may not be necessary for the process and servo speed. A longer update time could potentially improve control smoothness, although it is based on intuition rather than a proven theory.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In order to reduce hysteresis in systems, a helpful technique is to provide the ability to deactivate the integrator when the actuator reaches a specific in_position range. This feature is particularly useful for systems with noticeable hysteresis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion, drbitboy suggested exploring the idea of incorporating a sinusoidal offset into the CV output to prevent static friction and maintain the ball's mobility. However, the challenge lies in maintaining a balance between small deviations and significant swings in the output. Dr. responded by pointing out that this problem is due to static friction with a TI value of 0. To address this issue, it was proposed to reintroduce Ti into the equation and consider adjusting the values of KC and TD in the PID controller. Another tip provided was to deactivate the integrator within a specific range known as the dead band or in_position window. This approach aims to fine-tune the control system and improve performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A question was raised about the necessity of including Ti in the mix alongside PID instead of just PD. The concern with adding Ti in the presence of non-zero Ti and static friction is the possibility of inducing "reset windup." This phenomenon occurs when there is an error in the system while the beam is near level, leading to the integral accumulation moving the control variable (CV). In this case, the initial change in CV does not impact the ball's position or velocity due to friction until the beam tips significantly, causing the integral accumulation to overshoot the correct bias.

The PID equation highlights the integral term and bias as the only non-zero elements when the process variable (PV) is at the setpoint (SP). The bias, which is responsible for keeping the beam level by aligning the gravitational acceleration vector with the beam's long axis, remains a fixed value unless there are major load changes in the system.

Integral action serves to compensate for varying loads, such as in a heat exchanger adjusting airflow to maintain a temperature setpoint. Before the advent of integral action, operators would manually adjust setpoints to accommodate load changes, leading to a non-zero SP-PV offset.

In the case of the beam and ball system, where load changes are minimal, once the bias is correctly set, there is no need for a non-zero Ti. Introducing integral action may lead to overshooting due to static friction, causing oscillations in both directions.

Continuing efforts to lower the proportional term (P) in the system appear promising and are a step in the right direction.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By the way, setting TI= 0 opens up another opportunity for optimization: Create a second PID controller, PD9:1, identical to PD9:0 in terms of PV input (N7:20), setpoint, limits, bias, and tuning. However, there are a few key differences: Set P9:1.TD to 0 and assign the output of PD9:1 to a different N7 element such as N7:ccc. Subtract the value of N7:ccc from N7:21 and store the result in N7:ddd. Track the following variables: N7:20 (PV), N7:21 (CV output with PD control), N7:ccc (contribution of P + bias terms to PD CV), and N7:ddd (contribution of the D term to PD CV). All these values, except N7:ddd, should be scaled between 0 and 16383. N7:ddd, on the other hand, should be scaled within the range of -8192 to +8192 for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dr. Bitboy expressed his satisfaction with the progress made, highlighting the importance of reaching the setpoint. The discussion revolved around the challenges faced in achieving the desired outcome, with valuable insights shared by Dr. and Max. The conversation touched upon the significance of PID training and the potential barriers individuals face in accessing such resources. Despite the complexities of the system, Peter acknowledged the ongoing efforts and determination of everyone involved.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have included two "images" with the parameters kp=0.22 and kd=0.05. The key point to note is that the control variable (CV) is in anti-phase with the measured x-value, indicating that the derivative term (Ud) is negligible. As a result, the system is deemed unstable or weakly stable, with fluctuations in the measured x-value curve evident in your graphs.

In contrast, with parameters kp=0.22 and kd=0.5, the CV now leads the measured x-value due to the sufficient presence of the derivative term (Ud) ensuring stability. The oscillations in the measured x-value curve gradually diminish. Moreover, the CV curve initially displays a step-like shape, illustrating the significant impact of the derivative term (Ud). While actuators may not replicate this precisely, it is important to consider the theoretical underpinnings of the proportional-derivative (PD) control.

Additionally, it is worth mentioning that the system's stability is indicated by the presence of a clear CV step at the onset of the transient response. Furthermore, any insights on the functioning of the derivative on integral plus error (DIPE) controller and the unit of measurement for the derivative time (Td) would be greatly appreciated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK asked for insight on how DIPE works and in what units Td is measured. It seems that the answer may be in minutes. If you are referring to DIPE, or possibly PIDE, you can find detailed information in the 1756 RM (Reference Manual) 006 for "Advanced" instructions, as opposed to RM 003 for General instructions. Additionally, Rockwell has a white paper available on PIDE. When it comes to PIDE, the derivative constant is typically measured in minutes in either of its forms. PIDE has two variations: The Dependent Gains form utilizes Td, which is then adjusted by KCoverall, while the Independent Gains form utilizes KD. The Dependent Gains form closely resembles the PID instruction found in MicroLogix 1400 by @genuiusintrainings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK pointed out that two "images" were attached, showing different values for the proportional (KP) and derivative (KD) constants. In one scenario with KP=0.22 and KD=0.05, the measured x value curve fluctuates in phase with the controlled variable (CV). In another scenario with KP=0.22 and KD=0.5, the CV is observed to be "leading" the measured x value. The system is expected to stabilize when the CV-step is clearly visible at the start of the transient response. 

However, despite setting the derivative time (TD) to its maximum value in the latest trend analysis by @geniusintraining on the ball, beam, and PID loop, it is challenging to detect any phase shift between CV and process variable (PV). One potential issue could be the small loop update time of 0.01 seconds, potentially causing aliasing of measured and calculated values. This fast update rate might lead to the derivative term measurement (dPV/dt) being zero at most updates, while the CV may be operating as a servo with updates occurring at a frequency of 20-50Hz. 

The gradual process dynamics, with a single oscillation taking approximately 7-8 seconds, suggest that a longer loop update time (e.g. 0.1s or 0.5s) should not pose a problem. Questions arise regarding the specifics of the system, such as the conversion of CV to a 4-20mA analog signal and the use of PWM for servo control. Speculation remains regarding potential drivers converting the current signal to PWM, but further details are sought after for clarification.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining mentioned that achieving setpoint is unlikely with the current physical setup due to issues like friction and stiction. Click to learn more about overcoming these obstacles and optimizing your system for peak performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy raised a valid point about the short loop update time of 0.01s potentially causing aliasing of measured and calculated values, leading to issues in the system. It is possible that the loop update is faster than the PV update, resulting in the D-term measurement being 0 at most updates. The CV appears to be moving towards a servo control, possibly an analog servo controlled by PWM between 20-50Hz per update.

geniusintraining mentioned that the CV is converted to a 4-20mA analog signal, raising questions about the use of PWM in servos. Speculation suggests a driver may be converting the current signal to PWM, highlighting the need for more details on this aspect.

In an ideal scenario, the loop update and feedback update times should be synchronous to avoid sample jitter and ensure the derivative term functions correctly. Problems can arise when using analog Temposonic or Balluff rods that update asynchronously, making it challenging to calculate derivative terms accurately.

It is crucial for feedback to be synchronous for optimal control performance. While analog resistive feedback is acceptable due to controlled updates, using PLCs directly for motion control is not recommended. Consideration should also be given to using two parallel square bars instead of a V channel to reduce friction and improve ball rolling.

Overall, the system's cost-effectiveness remains a concern and requires further evaluation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey recommended using square bars to ensure that the ball only comes into contact with the corners of the bars. This technique can significantly decrease the friction that hinders the ball's ability to roll smoothly. You can watch a demonstration of this concept on my slide rule at https://www.youtube.com/watch?v=_01K989nc2Q.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello everyone in the GIT forum! This thread has now reached 12 pages, and I must admit that the discussions on transfer functions from page 1 were a bit challenging for me. If I repeat something already covered, please forgive me.

After watching your video, GIT, I have two thoughts on the matter. Firstly, assuming your controller is accurate, it seems that either your sensor or motor is not fast enough. Both may need to be upgraded to keep up with the fast acceleration of the ball. 

Secondly, considering the accuracy of your controller, I believe a simpler PI controller may be more appropriate than a PID controller in this case. By making these adjustments, your system should operate more smoothly, especially if you also increase the speed of measurement and response.

There are other possible solutions, such as using a longer balance bar, but I think these may be too out of scope for our current discussion. Let's focus on fine-tuning the current system for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Honey Badger mentioned that they would like to apologize in advance if they are repeating something that has already been discussed in the previous conversation threads. However, they pointed out a potential issue with the sensor measurements and motor response time in the setup. They advised to use a faster sensor and a more responsive motor to effectively control the fast-accelerating object over short distances. Additionally, they recommended using a PID controller for more complex systems like temperature control.

It was also suggested that the system may not meet the criteria for applying a derivative gain due to factors such as asynchronous update rate, low resolution, and potential dead time. The recommendation included setting up a faster system, using a PI controller instead of PID, and tuning the PI for smooth operation.

Moreover, the location of the mass was highlighted as a crucial factor rather than the mass itself. Suggestions were made to potentially use a motion controller and a small servo motor for improved performance, although acknowledging that these may be cost-prohibitive for some setups.

If given the opportunity, the suggestion was made to conduct a system identification to establish a real transfer function and consider using a Luenberger observer to enhance feedback filtering and predict the actual state of the ball more accurately.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a statement made by Peter Nachtwey, it was mentioned that all parts used in their test systems are likely of higher quality than what GIT has access to. While GIT aims to create an affordable training system, Nachtwey suggests starting the design process from scratch to achieve this goal effectively. He expressed his skepticism about GIT's ability to reach their financial objective based on the system presented in their video. Nachtwey is open to being proven wrong, as he is simply providing critique without having made any investment in the project. Good luck to GIT with their endeavor.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the world of PID control, it is common practice to use PI for most systems, reserving PID for more complex systems. However, when it comes to your system, I do not believe it meets the requirements for implementing derivative control. In my opinion, it is a rather simple system where the ball is moving in a specific direction and the motor needs to make adjustments to minimize acceleration and bring it close to zero.

Have you ever steered a boat with a rudder, controlled a plane with a joystick, or turned a car with a steering wheel? In all these scenarios, turning involves controlling acceleration to change the direction of the vehicle. Similarly, in the case of a ball and beam device, the PID's control variable manages the beam's angle, which in turn influences the acceleration of the ball along the beam. The position of the ball along the beam is directly related to the error that the PID aims to reduce to zero.

If a PI control (without derivative action) effectively controls the ball's position on the beam, it should also work when steering a vehicle to maintain its direction towards a target. This can be understood using simple linear math without the need for complex transfer functions.

In the context of steering a vehicle, the PI formula can be represented as CV = KCE + Σ(E Δt / TI) + bias. The steering wheel's rotation (CV) is determined by heading error, integral accumulation, and a bias constant. As the vehicle approaches the desired heading, the proportional, integral, and bias terms in the equation change accordingly to facilitate the turn in the desired direction.

It is important to note that a PI control without derivative action to manage acceleration output for controlling position is not an efficient control strategy. When steering a vehicle, it is instinctive to reduce the degree of turn as the target direction is approached. This adjustment involves both proportional and derivative control elements, showcasing the limitations of a pure PI control approach in such systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The analogy provided is strong, backed by solid control theory. Definitely a favorite of mine.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the discussion, drbitboy explained that once the heading surpasses the set point (SP), the error will become negative. As a result, the proportional term will also turn negative, causing the integral accumulation term to decrease back towards 0. This will gradually reduce the turn to the right until it reaches a neutral position where the negative proportional term offsets the positive integral accumulation term. Subsequently, the turn will shift back to the left towards the SP, but without a significant overshoot. This behavior is common in PI control systems where tuning constants KC and TI are positive values. While the degree of overshoot can be adjusted, it cannot be completely eliminated due to the inherent nature of PI control in such systems.

It was pointed out that a PI control, lacking derivative action, for controlling the acceleration CV output to manage a PV position is ineffective. This can be observed in everyday steering of vehicles, wherein drivers instinctively reduce the degree of turn as they approach their intended direction. This adjustment involves both proportional and derivative control elements.

It was noted that using a PID controller facilitates a smoother and more efficient reaching of the set point, compared to a PI controller which may lead to a zigzagging motion before settling. The importance of proper tuning for minimizing erratic movements was emphasized, highlighting the differences between PI and PID control methods.

The steering wheel analogy was employed to illustrate the advantages of PID control in achieving a steady transition to the set point without excessive oscillations. The concept of "snaking" was discussed in relation to the quality of tuning and the impact on the control behavior.

The conversation provided valuable insights into the principles of PID control theory, enriching the understanding of the control system dynamics. Special thanks were extended to drbitboy for sharing expertise and knowledge on the subject.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a discussion with thehoneybadger, the topic of PID controllers reaching set points faster and with less correction than PI controllers came up. This is generally true, although it is possible to improperly tune a PID controller. When considering a project focused on developing a trainer utilizing PID control, it becomes essential to apply a PID controller for optimal performance. However, settling for a PI controller may lead to less optimal results, as the integrator in a PI controller can slow down the response. The analogy of driving a car using PI control compared to PID control illustrates the difference in handling and smoothness when approaching set points. With PID control, the steering wheel will back off before reaching the set point, resulting in a smoother transition into the desired position. This demonstrates the importance of proper tuning for optimal results in control systems.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Did anyone catch the error in my analogy statement? I noticed it just before falling asleep but decided to leave it as is since it doesn't alter the conclusion. In simpler terms, PD (proportional-derivative) control, without integral action, is sufficient to reach a steady state when the other terms are zero. Using PI control means there will be some adjustment as the error decreases towards zero, but the integral accumulation will continue to increase until the error changes direction. This can lead to the vehicle still turning in one direction even after reaching zero error. This process involves basic arithmetic, rather than complex math, but understanding how the PID equation operates over time is crucial in predicting system behavior. The amount of erratic movement (snaking) of the vehicle depends on the tuning quality, but there will always be some level of deviation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dr. Bitboy questioned if anyone had noticed the error in the analogy statement. While thinking about it before falling asleep, he decided to leave it be. He pondered a challenging ethical dilemma that he often asked himself. Despite the potentially rude appearance of his words, he reassured that he had no ill intentions to upset anyone. He made a promise not to resort to sarcasm or irony, which he admitted he sometimes used. The scenario of foolish individuals giving an AK-74 to an ape and the consequences made him wonder if our actions mirror such recklessness. Do our actions reflect the behavior of those who irresponsibly impart dangerous knowledge to those who lack the understanding? Are we prepared to accept the consequences if our "students" misuse the information and cause harm or damage?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In considering a challenging ethical question, MaxK ponders the responsibility one must bear if a "student" causes damage or harm. This thought-provoking query may warrant further discussion, potentially sparking its own thread. It's likely that even seasoned individuals, like our BDFL Mr. Melore, grapple with this issue. Safety is paramount, especially for those with limited experience who may not fully grasp the risks involved.

While I tend to steer clear of safety-related discussions, I find value in reading them to glean insights from experienced contributors. The forum's flag icon serves as a useful tool for flagging concerning situations, particularly those stemming from different safety standards in other countries. It's hoped that those seeking advice here have some background in the field and understand the potential dangers, though this isn't always the case.

While I may not fret over a table tennis ball breaking loose, the prospect of conductive steel balls wreaking havoc within electronic systems is cause for concern.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is important to possess more intelligence than an ape when it comes to understanding the capabilities of dangerous equipment like an AK-74. Our hydraulics labs have the potential to cause harm, which is why we have installed shields for protection. Unfortunately, there was an incident where a hydraulic valve was damaged, leading to a small but impactful leak at high pressure. Despite these risks, we prioritize safety with regular training classes.

In today's world, there seems to be a shift towards avoiding risks even when it comes to learning new skills. However, it is important to remember that accidents can happen in any activity, whether it be skiing, motorcycling, or even playing table tennis. Our labs are designed to be safe, although accidents like the one I experienced while playing table tennis are still possible.

Although I appreciate GIT's efforts, it seems that the chosen application for the trainer may not be the most effective. The challenges faced so far may only lead to frustrations for students. In my opinion, Ron Beaufort's "hotrod" trainers could be a better alternative for learning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK questioned whether our actions mirror the behavior of individuals lacking adequate understanding. By providing them with knowledge they may not fully comprehend, are we actually endangering society by empowering them with false confidence? This concept can be compared to the idea of teaching someone how to construct a dangerous weapon like an AK-47. If we believe this information should not be available, then should any information be accessible on the internet? Should education even exist? Are books also a threat? The dissemination of knowledge on platforms like plctalk is invaluable for those seeking information. Stripping away this resource won't eliminate curiosity, but will simply redirect it elsewhere. Instead of exploring engineering concepts, individuals may end up delving into potentially harmful knowledge like weapon construction. It's essential to consider the implications of sharing information and the impact it may have on society.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Dr. BitBoy emphasized the importance of acknowledging the risks involved without assuming outcomes. While it may come across as blunt, the intention is to prevent misconceptions and protect individuals rather than offend anyone. Instead of being confrontational, it might be more ethical to approach the topic with a different perspective.

The Honey Badger admitted to feeling overwhelmed by the discussion on transfer functions, particularly when it came to PID control. Reflecting on past experiences in the field, they remembered using PI for simpler systems and PID for more complex ones, such as temperature control. Given the simplicity of the system in question, they suggested that a derivative may not be necessary.

To The Honey Badger, it is advisable to refrain from attempting to tune a PID controller or guiding others through the process until a better understanding of control theory is achieved. Additionally, it is essential to avoid offensive associations when discussing sensitive topics.

In conclusion, rather than proposing a book burning as a solution, it is crucial to maintain a respectful and ethical dialogue, steering clear of inflammatory remarks that may evoke negative historical connotations.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I want to express my gratitude for all the assistance provided. After numerous trials, it was evident that the ping pong ball (or table tennis ball) outperformed all others. While the ball bearing was perfectly round, it was too heavy for my needs. I am in search of a PID system that can be adjusted with P, I, and D parameters without additional specifications. Stay tuned for updates...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As geniusintraining suggested, we may need to go back to the drawing board to fine-tune the PID controller before making any further adjustments. To stabilize the ball effectively, a significant increase in the derivative term (Td) is necessary. By increasing the current value multiple times, we can induce trembles that help counteract decreases in the proportional term (Kc). Only then will the limitations of the PID controller become apparent. Understanding the importance of trembling is crucial to determining where and by how much to adjust the backlash. Additionally, it may be necessary to evaluate if the actuator's speed is adequate for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining commented, "I'll be back." This statement reminds me of Thomas Edison, well done on the analogy. One thing to note is that there was no noticeable phase shift between CV and PV, even when TD was maxed out (as seen in @MaxK's Post #172). Have you considered increasing the loop update time from 0.01s? While the continuous form of the PID+system is effective, the PLC samples the PID at specific intervals, and details about the distance measurement method, resolution, and update frequency are unknown.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK pointed out that to effectively stabilize the ball in the system, a significant increase in the derivative term (Td) of the PID controller is required. This increase in Td can help to generate some oscillation, which in turn may help to counteract any decrease in the proportional term (Kc). By experiencing this oscillation, the weaknesses of the PID controller become more apparent. Understanding the importance of oscillation is crucial in determining the necessary adjustments to reduce any backlash in the system.

Despite maximizing the value of Td as suggested by MaxK, there was minimal improvement in the ball's stabilization. The main issue lies in the ball halting at incorrect positions, and inducing some tremor could potentially address this problem. Exploring different approaches, such as increasing the loop update time beyond 0.01s, did not yield significant improvements.

The system utilizes an IR sensor operating at 60Hz to feed data back to the control board, which then transmits a signal to the PLC in the form of 4-20 mA. The control board further converts this signal from the PLC into a PWM signal, which is ultimately sent to the motor for execution.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geniusintraining mentioned that there wasn't much of a difference either way, but the situation worsened as the levels increased. The IR sensor input runs at 60HZ back to a control board, which then sends the signal to the PLC (4-20 mA). The board converts the 4-20 signal from the PLC to a PWM and sends it to the motor. Despite no phase shift, there may be an issue with the PID configuration. 

One suggestion is to use the SCP instruction in the video to scale the input value over a range of [3000:29500] to match the PID PV's (N7:20) range of [0:100]. By limiting the PID PV input range to [0:100] instead of [0:16383], the KC and TD values would effectively be divided by a factor of 164. This adjustment could provide more flexibility in tuning the system. 

Consider changing the PV SCP to have a "Scaled Max." of 16383 to potentially improve the system's behavior. Remember to adjust the SP (setpoint) and scalings accordingly. While it may seem like a lot of changes, it could lead to better results in the long run. It's worth exploring these options before moving on to the next step.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When it comes to redesigning a project, picture yourself as a racing car designer. You've created a prototype and now it's time to test its performance on a winding track. However, your test driver can only drive in a straight line, preventing you from accurately gauging the car's turning capabilities. The issue lies not with the car itself, but with the limitations of the test driver. With this knowledge in mind, what adjustments would you make to improve the car's ability to navigate sharp turns?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to drbitboy, I understand the desire to make progress, but I strongly believe in the potential of this tool for users, especially considering its price point compared to my other product. I have made numerous improvements to the program, which you can see in the attached file.
In a conversation with Max, the focus was on what modifications would be made to the car. I approach this project with flexibility, as I aim to create tools that enhance students' programming skills and provide them with a better understanding of PID loops. These tools will also be compatible with PLCs that use 4-20mA as input/output. I am open to suggestions for improvements, and if necessary, I am willing to switch to building a truck or a boat instead of a car.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PDF and RSS Program Integration</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During the tuning process, I am open to making any necessary adjustments. If the changes become too complicated, consider starting fresh by transforming the vehicle into a truck or a boat. Regardless, it is essential to follow these steps for optimal performance: 
1. Set the Scaled Max. parameter of the SCP to 16383 in Rung 0001. 
2. Make the SP parameter 3604 (22% of 16383) in Rung 0002 using the Setup Screen or PD9:0.SPS. 
3. Finally, rerun and retune the PID for improved results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By the way, may I ask how much you invested in converting the reading from the infrared distance sensor to the analog input?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a simple process, drbitboy provided instructions for setting up the SCP parameters. Firstly, assign 16383 to the Scaled Max. parameter in Rung 0001. Then, in Rung 0002, set the SP parameter to 3604, which is 22% of 16383. After making these adjustments, revisit and optimize the PID for optimal performance. However, keep in mind that additional changes may be necessary beyond these adjustments. One important change previously made was modifying the input range from raw to 0-100, resulting in a new PV range of 198-20.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user known as geniusintraining mentioned the need to make adjustments beyond just changing the input. They were previously converting the raw input to a 0-100 scale, but now their process variable (PV) range falls between 198 and 20. However, it seems that the rescaling and setpoint (SP) change involves a multiplication factor of 163.83 for both PV and SP. Adjustments in the proportional-integral-derivative (PID) control should account for this rescaling. Is there a specific range for PV in the PID settings? Further clarification is needed on the range mentioned as "198-20."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Drbitboy asked for clarification on the term "198-20." When the ball is at one extreme, the pressure value (PV) was 9, and at the other extreme, it was 100. After implementing your adjustments, the PV now ranges from 20 to 198.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Genius in training mentioned: If the ball is positioned all the way to one side at 9 and on the other side at 100, and after implementing your modifications, it now ranges from 20 to 198. If you adjusted the Scaled Max. on Rung 0001 from 100 to 16383, then when the PV (N7:20) was at 9 and I:1.0 was approximately 5385, the N7:20 value should be 1474 at one end of the beam. Conversely, when N7:20 was at 100 before (I:1.0 was 29500 or higher), post the Scaled Max. adjustment, N7:20 should be at 16383 at the opposite end of the beam. If you are observing different outcomes, it is puzzling how only the Scaled Max. was altered to 16383 while the other SCP parameters remained at their original values (Input Min. at 3000, Input Max. at 29500, and Scaled Min. at 0) to yield those results.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>What are the values of the moment of inertia at I:1.0 when the ball is located at the extremities of the beam?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I may have adjusted the incorrect setting. I will review it again tomorrow morning to confirm.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have a strong suspicion that the value ofInputMax. in the SCP on Rung 0001 was altered from 29500 to 16383, while the value ofScaledMax. remained at 100. Please revert InputMax. back to 29500 and adjust ScaledMax. from 100 to 16383 to ensure that only ScaledMax. is modified in that SCP on Rung 0001 from the PDF you previously shared. This adjustment will maintain consistency with the document provided earlier.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The user geniusintraining expressed uncertainty about their changes and plans to double-check in the morning. Another user chimed in with a humorous response and suggested taking the weekend off to enjoy dinner with their spouses. The project is evolving in a chaotic but interesting way, reminiscent of stumbling in an intoxicated manner down a sidewalk. In the midst of it all, user @PeterN is constantly snacking on Orville Redenbacher popcorn, keeping the brand in business.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy humorously mentioned that @PeterN's love for Orville Redenbacher popcorn is keeping the business afloat. However, it's Friday and time to unwind with a few beers. After analyzing various posts, it is evident that a real motion controller with fast and synchronous updates is essential for optimal performance. While GIT's signals are impressively clean, the asynchronous position updates with a frequency of 60 Hz or 16 ms are deemed inadequate. Despite sharing this thread with colleagues at Delta, replicating GIT's system would cost around $5K, which may not align with their objectives. It is disappointing that the suggested controller gains for achieving a critically damped response have not been tested. Observing other ball and beam systems on YouTube, it is clear that achieving precision control comes at a significant cost and complexity. Nonetheless, perseverance is key in overcoming these challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Indeed, improvements have been made. I plan to dedicate time to fine-tuning the system in the upcoming week. Although I will be preoccupied for the next few days, once I have some free time, I will focus on adjusting the tune accordingly. To summarize, your concern was that the 0-100 scale lacked precision, so this adjustment will provide the PLC with greater flexibility and ensure more accurate readings.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>"Living with closed eyes makes it easy to misunderstand everything you see" - a quote by Lennon that resonates with Peter Nachtwey's frustration. Despite calculating controller gains for optimal response, no one seems to be putting them to the test. Perhaps it's time for a change in perspective and approach. There have been numerous challenges in applying model gains to the actual hardware setup, leading to unsatisfactory results. The journey towards aligning the model with the hardware continues, with a focus on addressing discrepancies and non-idealities. It's evident that improvements are needed before the model gains can truly shine. Let's embrace the process and stay open to learning and adjustments.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining mentioned that once they catch up, they will take a closer look. This phrase has been used for decades. We will be patient, but not holding our breath. 

In a previous conversation, geniusintraining asked if increasing the scale from 0-100 provides more resolution for the PLC to be more accurate. While this may be the case, it doesn't change the basic arithmetic, just the potential for errors. 

It seems like you have made a common mistake with Allen-Bradley PID programming. Have others reviewed your PDF document? Pay attention to values like S:22 (18) and S:35 (10) on page 12, the placement of the unconditional PID instruction in LAD 2 on page 7, and the value of PD9:0.LUTC. Consider checking an image of the Setup Parameter dialog menu from a previous post for reference.

I seem to have plenty of time on my hands to delve into these details. Meanwhile, @Rock is busy with his model, popcorn, and beer.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, drbitboy raised an interesting question: when faced with limited options for directing your energy, how should the plant TF (transfer function) be structured in relation to actuator speed limits in order to identify system TF poles? Share your insights on the ideal process TF configuration and placement, providing a rationale for your choices. This exercise aims to optimize system performance and efficiency.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>If you're looking for ways to channel your energy, here's a question for you to ponder: How should the process TF look like when subject to actuator speed limits, and why? By examining the system TF poles, we can gain insights into the design challenges present.

Some key design issues that may impact the real TF include:input scaling,update period (actual period versus PID instruction Loop Update Time parameter), andV-channel friction.It's crucial to consider how the V-channel's non-linear and non-continuous friction affects the open-loop TF. The relationship between CV and velocity plays a role, especially at zero velocity (static friction). Improvements like changing the angle of contact or creating a more point-like contact may help in approximating the system behavior.

Considering the current actuator speed limits and update periods, it's uncertain if they will pose a problem. However, reducing friction might necessitate a closer look at modeling these aspects.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Using Micro Starter Lite, you can now utilize the PID instruction with a physical MicroLogix 1100. This discovery has opened up a whole new world of possibilities! I believe the revised code below addresses the issues with the lookup table and input scaling. However, some differences to note include the analog inputs and outputs being unique due to the lack of I/O modules. Additionally, the setpoint now ranges from 0 to 16383 (meaning 22% is equivalent to 3604). There may be other potential issues that need to be addressed during retuning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user with the handle "geniusintraining" recommended activating track mode after crashing in the first turn to improve handling. They excitedly took their vehicle, Mango, out of winter storage and enjoyed a thrilling ride through back roads to the next town and back. Driving in track mode was not only enjoyable but also enhanced the experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>GeniusInTraining mentioned that increasing the loop update time did not yield much of a change, and in fact made things worse. The issue stems from not adjusting the actual loop update time (LUT) and misconfiguring the PID parameters, which is a common mistake among first-time users. It's crucial to correctly schedule the PID for effective closed-loop control in PLC systems. Understanding the fundamental principles of time and bookkeeping is essential in setting up a PID system. Searching for PID-related discussions or consulting experts can reveal the importance of proper PID scheduling in resolving control system issues. Remember to always stick to the basics and ensure your system's model aligns with its real-world behavior for optimal performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a recent discussion, MaxK posed an intriguing question regarding the plant transfer function in a control system setup. The challenge lies in determining the appropriate process transfer function considering the speed limits of the actuator, in order to identify the system transfer function poles accurately. The issue at hand stems from assumptions made regarding the rapid movement of the motor in relation to the ball's speed, as well as uncertainties surrounding the motor's speed limits and the linearity of the tilt with respect to motor rotation.

One proposed solution involves introducing a friction term to the transfer function, altering it to K/(s^2+d*s), resembling that of a motor operating in torque mode. The addition of the damping coefficient 'd' helps determine how the motor will decelerate, providing more realistic results based on initial assumptions. Enhancements such as feed forwards and auto tuning capabilities further refine the control system's performance, allowing for a more accurate assessment of the true transfer function.

By addressing potential non-linearities in the motor-to-angle linkage and optimizing gains using splines, the system can achieve precise motion control with minimal overshoot. This method of calculating gains has proven effective in real-world applications, showcasing the benefits of a well-designed and calibrated control system.

Despite challenges and discrepancies observed during the testing process, the fundamental model of the system remains sound, with further optimizations and adjustments warranted to align the actual performance with theoretical expectations. It is evident that thorough testing and calibration are essential in achieving optimal results in control system design.

In conclusion, the importance of practical experience in refining control systems cannot be overstated, highlighting the value of hands-on experimentation and continuous improvement. By leveraging expertise and advanced technologies, such as motion controllers and feedback mechanisms, significant progress can be made in enhancing control system performance and accuracy.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey pointed out that there is uncertainty surrounding how to effectively scale the system. It is important to address this issue before it leads to potential risks, such as a fire caused by a faulty valve cover gasket. Observations made on @GIT's system weeks ago by scaling gains visually and utilizing trend data, led to the realization that there may be a problem with the device. Instead of focusing on trivial matters, it is crucial to assist the Original Poster (OP) and provide valuable support. With years of experience in scaling numbers, Nachtwey is confident in his abilities and is willing to challenge anyone in this field. While he may not be the best, he is definitely among the top 2-3%. This highlights the importance of acknowledging one's own skills and limitations. Ultimately, it is essential to address important topics with care and avoid causing unnecessary conflicts.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned: You guys seem to have some doubts, but the chase is what makes it interesting. @GIT is focused on his business, which is why progress may be slow. The rest of us are busy theorizing, debating, and speculating while waiting for answers. If you can't handle the pressure, step aside. It's important to ask the right questions to make progress faster. Experience is not necessary; the key is to understand the basics, like the angular inertia formula. By the way, I was skiing in Utah recently and owe you a drink or a meal for the insightful discussions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey questioned: Can GIT handle...? Should ...? What if ...? How does ... perform? These four inquiries are crucial. The unsubstantiated claim about scalability truly irked me. My lovely wife overheard and humorously asked, "Who are you swearing at?"</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy, I won't directly quote you as I prefer not to, but it would be beneficial for you to reflect on why you choose to write numerous letters. How does this extensive communication aid the original poster and contribute to the discussion? Are you willing to accept the implication you've indirectly made that "We're all losers, forum ranter"? Additionally, what is your brother's perception of us as a "bunch of yahoos"? It is important to acknowledge that I am aware that I may never reach the ranks of a Fortune500 company.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK inquired: Why do you write numerous letters and how do they benefit the topic starter? This question has been occupying my thoughts recently. For me, the reasons are the pursuit of knowledge and engaging in social discussions on intriguing topics. Regarding the second query, I cannot claim to be of much help due to my limited knowledge, but the topic starter can now explore how to schedule a PID. Why do you choose to post online? The internet offers a platform to publish at a low cost, but it also presents challenges with content quality. Given the limitless boundaries of online publishing, does the content we create truly matter?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The provided .ZIP file contains the RSS and PDF files. A frictionless model has been included in the PLC program, with a value of 1 assigned to B3:0/15. It is important to note that the PID runs at 100Hz as per the Loop Update parameter, not 1kHz. The model utilizes 32-bit floats, which may result in the modeled ball stopping up to 0.05-0.01% away from the setpoint. While this discrepancy could be rectified, it is deemed insignificant as it would not be visibly noticeable on the physical device. 

For entry into a KC with two decimal places, PD9:0.RG must be set to 1. The model employs analytical integration and includes a finite speed for the servo, with the default value likely having minimal effect but adjustable if necessary. 

During scaling and tuning, the relationship between sin(tilt) and CVPID CV limits are set at 40-80%, with a central point of 60% ± 20%. An estimation suggests that the servo moves ±3/4" up or down in a 6" range from the pivot, approximately correlating to 0.125 radians. 

Input channel scaling ranges from [5650:29500], with 23850IC being equivalent to approximately 0.3048m. Meanwhile, PV scaling is between [0:16383], with PV≈ [3000:29500]. The differential equation translates to the open-loop transfer function, with various calculations determining suitable PID gains for the MicroLogix PID instruction. 

The ball takes a few seconds to reach a new setpoint, with potential overshoot attributed to numerical limitations of 32-bit floats. The system appears to be either critically- or over-damped, with minimal oscillations observed. The performance can be optimized by adjusting parameters such as KP and KD, as outlined in the provided PDF document.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I agree with MaxK's opinion that there is too much trial and error involved in this process. This discussion is excessively long, and I believe that there are YouTube videos that can easily demonstrate this concept in two dimensions. I stand by my cautionary post #8, as I know that while this task can be accomplished, it is not simple and the necessary equipment may be costly.

An integer-only PLC may not be the most suitable controller for a task like this. After researching on YouTube, I have found that most projects utilize an Arduino instead. The mathematics involved are complex, making this application unsuitable for PID training, as indicated in post #8. Despite this warning, drbitboy and GIT continue to persist.

I am confident in my ability to calculate the necessary equations to control the ball, an aspect which has not yet been showcased on this forum.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey mentioned that despite the persistence of drbitboy and GIT, the concern is whether they know how to prevent new thread messages from triggering emails. It has been acknowledged that intentionally scheduling a PID is a crucial skill that GIT has learned over time. Despite a few hiccups and a couple of hundred posts, it has been a learning curve for everyone involved. The in-PLC simulation has proven that with the right theory and scaling, trial and error can be minimized. While it may not be easy and the equipment may not be cheap, it has been shown that the PLC can handle the task with modifications to the physical system. Peter Nachtwey suggests that despite the challenges, the outcome may surprise us in terms of cost and feasibility in the long run.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PD control system adjusts to setpoint changes flawlessly with a consistent bias, despite noise interference. This noise may be attributed to prolonged simulator integrations, leading to longer continuous scans, up to a third of the target Loop Update Time (LUT). Although the average LUT remains accurate at 10ms, its variance is not well-regulated. This highlights the robustness of the PID system. In a real-world scenario, faster scan times would prevent this issue. Testing shows that control remains effective up to a LUT of 50ms, with no significant degradation until reaching a few tenths of a second. Additionally, here is a concise Modbus Server code snippet that captured the data, handling almost every other sample efficiently:

Code:
import serial
import struct
f = serial.serialposix.Serial(port='/dev/ttyUSB0',baudrate='38400', parity='N', timeout=0.05)
while True:
    b = f.read(17)
    if len(b) == 17:
        print(list(struct.unpack('>HHHbHHHHH', b)))
        f.write(b)</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In this plot, additional information is provided on the SP and Feed Forward bias. When the TI value is set to 0 (indicating no I-action), the bias and SP have a similar effect but with opposite signs and different scales. The goal is to bring the beam level by adjusting CV values, accounting for bias steps with magnitudes of 780 and 1560. By modifying the physical model to reduce friction, achieving ideal system behavior is possible. This insight into PID operation highlights the importance of tuning systems and the impact of factors like bias, SP changes, and scheduling.

A structured approach to learning PID control includes modules on connecting different components, characterizing the system, and experimenting with manual PID settings. Understanding the effects of Kc, bias, SP adjustments, and scheduling on system behavior is crucial. Exploring the reasons behind PID cycling and windup issues enhances knowledge of closed-loop control mechanisms. Solving equations and analyzing system responses using transfer functions can provide valuable insights into system dynamics and control strategies.

While Laplace Transforms are the theoretical foundation of PID control, practical tuning methods are more accessible for users. Providing practical guidance on system tuning, configuration, and troubleshooting can empower users to effectively utilize PID controllers in various applications. The goal is to equip users with the knowledge and skills needed to optimize system performance and achieve desired control outcomes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Utilizing Laplace transforms is a solid starting point, but delving into differential equations yields even better results. When applying control theory to Generalized Integrator Tracking (GIT), it is crucial to consider the impact of non-linear functions like sin(). In the realm of fluid power control, damping is typically directly proportional to the square of velocity, a concept not easily captured by state space and Laplace transforms. One drawback of using Laplace transforms for simulation is when combining the open-loop system and controller into a single transfer function, which fails to incorporate constraints such as limited controller output (e.g.+/- 10 volts or +/- 100%). The significance of changes in bias can be observed in the second halves of the provided graphs, with the lower graph illustrating bias adjustments and the upper graph showing the resulting behavior of a ball under these changes. The integral term within the control loop serves to gradually correct any discrepancies in bias.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When using GIT's application, we have the option to consider the non-linear sin() function, but it may not be necessary. The elevation of a single point in relation to the beam and pivot centerline is already linear with sin(tilt) when the beam is level. This non-linearity in the servo arm can be addressed by switching to a wheel/rack-and-pinion system or simply overlooked, as the arm system gain is close to linear near beam-level where precise control is crucial. Anything beyond that is only an attempt to return to near beam-level, hence not a major concern.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Peter Nachtwey raised a question regarding the interpretation of the second half of the graphs, specifically in relation to bias changes and the ball's reaction. He mentioned the corrective role of the I term in addressing errors in bias. This aligns closely with his initial statement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I recently returned to town and haven't had a chance to review the post yet, but I plan to do so soon. I want to fine-tune it for better performance. I'm excited to share how it's currently working, as I will be bringing the trainer on my upcoming vacation to work on it. I also removed the CV from the trend due to excessive noise. Stay tuned for a video demonstration on the progress: https://www.youtube.com/watch?v=hXIuVCgjIzE. Additionally, a faster motor is on its way, and I am curious to see how it will impact the performance.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>1) Where can you purchase table tennis balls? 2) How do you manage the scheduling of PID execution to ensure it processes True input rungs consistently?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I have many rubber sheets that I have used on various trainers, but I can't recall exactly where. They are of good quality, although not flawless like some others. These rubber sheets are ITTF approved and both look and perform well. I plan on increasing the "loop update" speed in the PLC scan later to .01.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>A user named geniusintraining expressed interest in increasing the "loop update" parameter on a PLC for faster scanning. However, the focus is not on the value itself but rather on the period between evaluations of the PID rung when the input is True. Is this period controlled or does it simply occur in each continuous scan cycle? The presence of an XIC B3:0.0/0 on the rung suggests it is driven by I:1.0/0 with a constant value of "1" for extended durations to enable PID operation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The majority of my table tennis balls were purchased from Paddle Palace, with additional ones bought from Zero Pong.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy inquired about the control of a particular period in the continuous task (LAD 2) and how it is executed on every scan cycle. The presence of an XIC B3:0.0/0 on the rung suggests it is driven by I:1.0/0, with a constant value of "1" for extended periods to run the PID function. B3:0 is toggled on continuously, as explained by GiT who noted that the PLC scans through LAD2 at a rapid pace, with the B3 used to reset the system when issues arise. Peter recommended Paddle Palace and zero pong for purchasing TT balls, to which a grateful response was given by the original poster.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to geniusintraining, the PLC scans as fast as every scan in LAD2, with the B3 used to reset the system. It's important to note that the primary issue, as identified from Post #1, is the code not properly scheduling the PID. The current code is not providing the correct time intervals for PID calculations, leading to incorrect results. The loop update time parameter in the PID Setup Screen is crucial for setting the actual schedule for the PID instruction. It is recommended to set a loop update time of 20-30ms for optimal ball position control.

One way to achieve this schedule is by using a repeating timer and JSR call in a separate subroutine for the PID. Avoid using XIC T4:0/DN on the input rung feeding the PID in LAD2, as it may reset the PID internals during scan cycles. Consider putting the PID into an STI routine for better control, although this may require more guidance if unfamiliar.

Additionally, it's advised to time the ball's movement and test various PID output CV settings to fine-tune the system. Obtain values for the PID output CV units and the beam end-to-end distance in PID input PV units for accurate tuning recommendations. Keep in mind that measurements will vary based on the device's position, so conduct all readings in a consistent location.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>drbitboy expressed relief after sifting through over 200 posts to reach this pivotal moment. Is it the same program I have been sharing, with the PDF attached? I have previously used the PID in LAD2 without any problems, but I will now focus on implementing these changes.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>During my experience with using the PID in LAD2, I have encountered no issues. However, I will be making some adjustments to optimize its performance. I find this aspect fascinating, as it allows us to gain a deeper understanding of how a PLC operates. Our objective is to align what we desire the PLC to accomplish with what we instruct it to do, as the PLC strictly follows our commands without consideration for our intentions. It is crucial to remember that the responsibility lies with us to ensure consistency between the two.

To enhance the system, consider inserting a rung after the PID. When PD9:0/DN is 1, execute the following steps (identify 3 N7 elements to substitute N7:5/:6/:7 if they have other uses in the system):
- XIC PD9:0/DNBST
- MOV N7:6 N7:5 - store previous 10kHz RTC value in :5N
- MOV S:4 N7:6 - store current 10kHz RTC value in :6N
- OTL S:2/14 - retain low 16 bits in case of overflow
- SUB N7:6 N7:5 N7:7 - calculate the difference between current and previous RTC values
- MUL N7:7 1e-4 F8:1 - convert RTC difference to seconds
- OTU S:5/0 - Clear any overflow

The F8:1 will indicate the actual PID scheduled period, which will be significantly smaller than the PD9:0 Loop Update parameter, typically by a factor of 5-10. Despite potential discrepancies between the actual PID scheduling period and the Loop Update parameter, the PID system remains effective as long as the process speed is within a suitable range for tuning values to compensate for the difference. This demonstrates the robustness and reliability of the PID system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Here are a few questions about GIT that may interest you:1. What is the purpose of this thread?2. Can you determine the value of the services provided to you in this thread? What criteria do you use to justify disregarding or undermining the advice given to you? Please note that I am not requesting any payment for my services. You are a person of average intelligence and reasoning abilities, yet you seem to be making common mistakes. With over 240 posts and specialist support available, who do you plan to market this PID trainer to?</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK questioned the purpose of the thread multiple times, stating that the main goal was to seek assistance with PID setup. Despite having experience tuning PID's in the past and creating a PID Trainer device, the user acknowledged a lack of expertise compared to others in the thread. The primary aim was to ensure the Trainer could be tuned effectively, emphasizing the importance of selling a functional product. MaxK criticized the removal of valuable data (CV) from a graph, questioning the significance of a CV fluctuating from 0 to 100 every 0.03 seconds. The user inquired about the target audience for the PID Trainer, mentioning individuals seeking to enhance their understanding of PLC's. Addressing potential critics, Max asserted the voluntary nature of the site and expressed gratitude for any assistance provided. The user also expressed a desire to hire experts like Peter or Dr to resolve issues promptly, recalling past collaborations with individuals who have aided in similar challenges.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Geniusintraining, mentioned several times before, that they have experience tuning PID controllers and even created a PID Trainer device. However, they sought help on PID setup from others in the community. As drbitboy pointed out, it's important to tune systems, not just PIDs, as different systems require different tuning parameters. The main goal of the discussion was to ensure the trainer could be effectively tuned for selling purposes.

While the intention was originally to assist those looking to learn more about PLCs, it was pointed out that PLCs may not be the best tool for motion control projects. Despite efforts to seek help and even hire assistance, there seems to be a challenge in controlling the system, which may require a proper system identification process.

It was also mentioned that a ball and beam balancing project may be too advanced for beginners, as warned earlier in the discussion. Reflecting on past experiences with modeling temperature control systems in 2005, it was noted that proper system parameters are crucial for successful tuning. Despite available resources in the forum's library, the lack of interest was evident.

In conclusion, while efforts have been made to address the PID tuning issues, it's important to consider the specific requirements of each system and seek proper system identification for accurate modeling and tuning.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Aspiring geniuses looking to master PLCs and understand their functionality may feel frustrated by technical difficulties. While it may seem like a magic wand is needed to make it all work, the key is in properly configuring the system. Those who invest in a DID-trainer won't have the benefit of expert support, leading to potential feelings of helplessness. Stay patient and follow the guidance provided by experts like Peter and Dr. to fine-tune your PLC system for optimal performance. Keep an eye out for the necessary time scaling adjustments as recommended in #238 by drbitboy, and soon you'll be on your way to mastering PIDE settings and achieving your technical goals.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>It is highly recommended that you package and send your demo to Peter or Dr. [Last Name] for review. They have shown a strong interest in discovering new talent, evident by their impressive track record of over 6000 posts within a short span of a few years. Take advantage of this opportunity to showcase your skills and potentially break into the industry.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>PLC</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>PLC suggested packaging and sending your demo to Peter or Dr. for review, as they have shown interest with over 6000 posts in just a few years. It seems like they have the time for it. Do you need help setting up the system? According to PLC, it appears that they have nothing else to do. However, it is important to provide clear examples on how to tune the PID controller to avoid any misunderstandings. We are eager to learn from you and improve our skills in this area.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the span of a few years, PLC has accumulated an impressive total of over 6000 posts. While this number is impressive, the signal-to-noise ratio (SNR) is quite low. It's important to also consider the ratio of posts to actual applications in this context. The internet's ability to reduce the cost of publishing is both a great advantage and a potential downside, as it leads to a flood of information being put out into the digital world.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK asked for an example of a single phrase that effectively conveys the concept of tuning a PID controller. Who are you directing that request to?Let's see where our efforts will lead us...</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In detailing the process for tuning the PID controller for the ball and beam system, I provided the symbolic equations for achieving a critically damped response, ensuring accuracy and effectiveness. However, the key to success lies in inputting the precise values for each variable - a step hindered by the lack of a completed system identification process.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Upon revisiting the thread, I searched for any mention of the recurring time issue that has been causing difficulties. One user, widelto, brought up the potential solution of adjusting the PID instruction timer, which he had experience with while working on RS500. Another user mentioned STI as a possible alternative for achieving a faster response. While this response did not directly address the main issue, it hinted at the importance of scheduling evaluations for the PID instruction. This oversight highlights the need to delve deeper into the issue and consider all possible solutions.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In response to @MaxK's question, drbitboy asked who the request was directed to. As we wait for an answer from @PLC, we are reminded of the proverbial saying, "casting our bread upon the waters."</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The PLC suggests that GIT should package their demo and send it to both Peter and the Dr. who seem to have some free time on their hands, given their extensive online presence. It may be beneficial to send the demo to both recipients as BIT is more theoretical and lacks real-world application experience. Despite having only a ML1100 with free software, GIT should showcase a real-world process factory that they have engineered, built, and programmed themselves. While Peter is retired, he still appears to be interested in new projects, as many retirees tend to lose their enthusiasm over time. There are likely more productive ways to spend one's retirement.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>padees</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Many skeptics, like Padees, argue that Bitcoin is purely theoretical and has yet to prove its practicality in real-world applications. To explore this debate further, check out this 1955 comic strip from "Peanuts": https://www.gocomics.com/peanuts/1955/04/21.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When discussing the use of GIT in real-world applications, it is important to consider both theoretical concepts and practical implications. While GIT may have its limitations, utilizing it in conjunction with a ML1100 and free software can still yield valuable insights. However, the true test comes when engineering, building, and programming a process factory from scratch. Can the system remain stable under the scrutiny of Dr. Bitboy? Share your thoughts on tuning PID controllers or delve into the intricacies of modeling, mathematics, and tuning processes. With your wealth of experience, you are sure to offer unique perspectives that can enrich our understanding. As Dr. Bitboy aptly stated, we must be willing to take risks and explore uncharted territory, even if it means throwing diamonds into the cesspool of innovation.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>While I don't want to come off as pushy, I highly recommend watching this intriguing video with a unique concept. Although it may not be centered around a PLC, the use of a touchscreen to monitor ball position is truly groundbreaking. This innovative idea could potentially benefit projects related to GIT. It might be worth exploring further... Check out the video here: https://www.youtube.com/watch?v=K-F_T59ZDPw</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>thehoneybadger</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>The Honeybadger mentioned a video worth checking out, despite it not being about a PLC. The video introduces a unique idea using a touchscreen to track ball position, which could be valuable for GIT. However, the setup costs more than GIT's budget allows for, and the complex math involved exceeds basic PID calculations.

To accurately track the target position, additional gains for velocity and acceleration feed forward are necessary. These feed forwards must be real calculations, not just biases, and must be multiplied by the target velocity and acceleration, respectively. Symbolic formulas for these calculations are available.

Tuning GIT's system, similar to a spinning motor with inertia, can be simplified with the right adjustments. However, due to low damping, tuning the motor manually can be challenging. Adjusting the derivative gain first is crucial to prevent oscillation before setting the proportional gain. This process may not be intuitive, but understanding these factors can lead to successful tuning of the system.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>By adjusting for the non-linearity of acceleration with respect to CV, the relationship becomes more proportional, as CV is directly proportional to servo angle which is in turn proportional to sine of the angle (θ) and ultimately proportional to acceleration. This correction eliminates the non-linearity, with a formula of √(1 - (k(1-cos(θ))2) where cosine of the angle (θ) is approximately 1.0. This correction is significantly smaller than that for articulated links. In other words, the correction factor is not approximated.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>This page of the distance sensor datasheet reveals a significant issue with the original setup: the distance input signal and the PID's process variable (PV) are not linearly related to the position of the ball. Although the relationship may appear linear near the setpoint, non-linearity for larger errors can pose challenges for a PID system that assumes linearity. Achieving linearization of the sensor's input signal in relation to distance is relatively simple with a few RSLogix 500 rungs. While there is also non-linearity introduced by the servo arm linkage between the PID control variable (CV) and the restoring force sin(tilt) applied to the ball, this may not be as significant as the sensor's non-linearity.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Hello there! Is anyone able to provide or has access to a "ball on a rod" system for experimentation with tuning? I am interested in exploring the concept of PD tuning. 

Step 1: To begin, adjust the parameters kp and kd to achieve stable oscillations within the system, ensuring the ball does not come into contact with the limiters. Determine the oscillation period (denoted as T) to create a rough model of the system using the equation k / s^2 = (2 * pi / T)^2 / kp.

Step 2: Calculate the maximum speed of the actuator V by determining what percentage it can implement in one second when the PID output ranges from 0-100%. The value of kd can be adjusted based on the actuator's speed limitation, with a potential increase of 1.5 - 2 times. Consider additional factors such as noise and encoder quantization to avoid constant shaking of the actuator.

Finally, consider applying a gentle Low Pass Filter (LPF) to the D-term output to minimize the impact of encoder noise.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>@MaxK, it seems like you may have missed some key points in the discussion about GIT's thread on a similar topic. The equations we developed assumed direct bean tilting by the motor and almost instantaneous motor movements. If this is not the case, a cascaded loop may be necessary for the system. Your system model is on the right track, but it appears that you have overlooked the impact of friction. I am unsure of how you arrived at the equations for k, kd, or kp. This is a complex project that may not be suited for beginners. For more information, you can refer to this resource: https://deltamotion.com/peter/Mathcad/Mathcad%20-%20RollingTTBall%20PID.pdf.

In my experience, it may be beneficial to consider implementing gentle LPS (FOL) filtering on the D-term output to minimize the impact of noise from encoder quantization. This approach ensures that the Kp and Kd terms primarily influence changes in the actual position, resembling a 3-pole low-pass filter with poles at --lambda. As a result, overshooting can be minimized.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Peter Nachtwey, this project is best suited for experienced individuals. As for me, I believe in the freedom to pursue my interests as a non-professional enthusiast. Therefore, I kindly ask that you refrain from commenting on my posts if you feel they are not worth your time or expertise. Let's strive for mutual understanding and respect in our interactions. Thank you. MaxK</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>MaxK expressed his belief that his dilettantism is a conscious choice that provides him with freedom. Therefore, he kindly suggests that others refrain from commenting on his posts to save their valuable time and knowledge. In the pursuit of mutual understanding, MaxK hopes for respect in this regard.

While one may choose to ignore MaxK's posts, it is worth noting that others embarking on a similar project might find valuable insights in discussions like the one on GIT's thread. MaxK asserts the accuracy of his formulas and meticulously explains the derivation process step by step.

Despite this forum primarily focusing on PLC discussions rather than control theory, MaxK felt compelled to respond to a comment and now invests more time in engaging with enthusiasts on platforms like Reddit's Control Theory thread to guide them effectively.

MaxK criticizes control theory instructors on platforms like YouTube for wasting students' time with irrelevant concepts and trends that lack significance. Instead, he advocates for a focus on practical and essential theories. Furthermore, he playfully points out that even @drbitboy seems unable to sleep, hinting at shared passion and dedication to the field.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>I greatly appreciate your efforts in satisfying my request. Peter Nachtwey mentioned that the discussion on GIT's thread regarding this topic was quite extensive. However, it seems that you might have overlooked my active participation in the discussion and hastily criticized my work without verifying it. Nachtwey pointed out that there were errors in your formulas, particularly questioning how you derived the equations for k, kd, and kp. He emphasized that his calculations were accurate. It appears that you may have overlooked important factors such as actuator speed limits, ball inertia, backlash, encoder noise, and simplifying the task by introducing rolling resistance. Nachtwey noted that this forum focuses on PLCs, not control theory. In response, I am sharing a practical trial and error method for tuning, including the identification of k with simple formulas and explanations. I am open to feedback and encourage you to test my approach to uncover any overlooked details.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Inquiring if anyone has access to a "ball on a rod" system for tuning purposes, MaxK seeks to experiment with the PD tuning concept. Building a ball-and-beam system is straightforward, with the most challenging parts being the servo drive control and ball position measurement. MaxK discovered that a MicroLogix 1100 can effectively control a servo using PWM on a high-speed output, with some voltage division required. Various options exist for cheaply measuring the ball's position, such as using phone apps with web API access and simple Python scripts. Implementing a PID system running at 30Hz may help control the ball position accurately. While MaxK had to pause the project, the goal is to have everything in place to ensure the system works smoothly from the start. Sharing code and designs for the control and position systems, MaxK encourages others to experiment with building the setup using common materials and tools. There is a fun wager with regards to the PLC's speed capabilities, with the loser buying dinner. Anticipating some rookie errors along the way, the project promises an exciting learning experience.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>When searching for a cost-effective option like the 1763-L15BBB on eBay, consider opting for a programmable model that can be reprogrammed using free software. If you don't require a lot of input/output options, you may even be able to make use of a "broken" unit. Check out the link provided for more information.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In the future, I hope to revisit this project. It's funny how I thought I would have more free time after retiring, but my priorities have shifted, and now "new" projects are at the bottom of my to-do list. Currently, I am focused on trying to make the existing projects function without my direct involvement. Unfortunately, it's proving difficult, as the controls were initially set up to be "non-linear," making them challenging to adjust, even with a real controller instead of a PLC. One important equation to consider is Time = Distance ÷ Speed, no matter how you calculate it, the outcome remains fixed.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>geniusintraining</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>As a budding genius in training, I aspire to revisit this project in the future. It's ironic that I anticipated having more time in retirement, only to find that shifting priorities have placed new projects at the bottom of my to-do list. Struggling to make existing projects function without my constant supervision has proven challenging. The initial obstacle was the non-linear controls, making tuning difficult even with a physical controller instead of a PLC. In the realm of engineering, the formula Time = Distance ÷ Speed is a fundamental truth. No matter how you crunch the numbers, the outcome remains constant.

Linearizing the input is not as difficult as it may seem. I recall@Peter Nachtwey creating a video tutorial on this topic, and I may have attempted to tackle your IR distance sensor plot in the past. Despite these resources, the real challenge lies in finding the time to delve into the more stimulating aspects of the project.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>drbitboy</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>In a forum discussion, user drbitboy mentioned their expectation of occasional mistakes in scaling bookkeeping from newbies. Another user agreed with this sentiment, appreciating the efforts put forth. While claiming to be occupied with job responsibilities related to market strategies and resource calculations, the user admitted to being lazy with below-average skills. They acknowledged others like PN who excel in finding solutions for static and dynamic problems, without being hindered by conventional methods like PID. The user expressed interest in independent thinking and basic mathematical concepts, offering to share insights on logic and problem-solving. However, they pointed out that the existing solution to a particular issue was the 8th attempt and failed to address the core problem effectively.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>Understanding the complexities of PID trainers can be challenging, especially when working with Ball and Beam systems. These systems differ from traditional ones like velocity, position, temperature, and level control. Ball and beam systems are considered double integrator systems, making them more difficult to tune. Unlike single integrator systems, such as position or tank level controls, double integrator systems require additional consideration.

In the case of a Ball and Beam system, it is crucial to incorporate derivative gain to add damping, as there is typically minimal friction and damping present. This necessitates precise feedback with minimal noise interference, making it a challenging system for beginners to work with.

When creating PID trainers, it's essential to consider the various system types available, including non-integrating, integrating, and double integrating systems with different pole configurations. Choosing the right system to work with, whether simple like a temperature system or more complex like a mass on a spring, can impact the effectiveness of the training process.

Taking inspiration from successful examples, such as Ron Beaufort's hotrod system, can provide valuable insights. By utilizing data from established systems like the hotrod temperature system, one can test algorithms and improve controller models effectively. It's worth noting that certain optimization techniques, like gradient descent, may not always be suitable for finding the best controller model, as demonstrated by Ron Beaufort's temperature data analysis.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>Peter Nachtwey</span></li>
            </ul>
        </div>
        
        <div class="bg-white p-3 rounded mb-3">
            <p>According to Peter Nachtwey, beginners often find it challenging to tune Ball and Beam systems. However, some may argue that this concept seems obvious to many participants in the discussion, as they have grasped it thoroughly over a year ago.</p>
            <ul class="post-meta mb-0">
                <li class="post-date"><i class="uil uil-calendar-alt"></i><span>17-07-2024</span></li>
                <li class="post-author"><i class="uil uil-user"></i><span>MaxK</span></li>
            </ul>
        </div>
        
                        </div>
                    <div class="no-replies-message" style="display: none; color: gray;">
        No More Replies.
    </div>
        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 outer-container">
        <!-- Related Topics -->
    <?php include "./related-topic.php" ?>
    </div>
            </div>
             <!-- cta button -->
        <?php include "./cta.php" ?>

            <!-- FAQ Section -->
            <div class='my-5'><h3 class='faq-title text-primary mb-4'>Frequently Asked Questions (FAQ)</h3>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What are some challenges faced with the new PID trainer setup?</h4>
<p class='text-muted'><strong>Answer:</strong> The user is facing difficulties in getting the new PID trainer to function properly despite adjusting the PID settings.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: What components are included in the setup of the new PID trainer?</h4>
<p class='text-muted'><strong>Answer:</strong> The setup includes a basic configuration with a motor for vertical movement.</p>
</div>
<div class='faq-item bg-light p-4 rounded shadow-sm mb-3'>
<h4 class='text-dark'>FAQ: How is the user trying to enhance the complexity of the PID trainer setup?</h4>
<p class='text-muted'><strong>Answer:</strong> The user planned to incorporate oscillating fan movement to add complexity but is currently unable to resolve existing issues before introducing additional variables.</p>
</div>
</div>
        </div>
        <?php include "./footer-banner.php" ?>

        <!-- /footer -->
        <?php include "../include/footer.php" ?>

        <script src="like-view-counter.js"></script>
    </div>
<script>
document.addEventListener("DOMContentLoaded", () => {
    function initializeToggleFunctionality() {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");
        const noRepliesMessage = document.querySelector(".no-replies-message");

        if (!toggleLink || !moreRepliesContent || !noRepliesMessage) {
            console.error("Required elements not found. Ensure the correct class names are used.");
            console.log({
                toggleLink,
                moreRepliesContent,
                noRepliesMessage,
            });
            return;
        }

        const hasReplies = Array.from(moreRepliesContent.children).some(
            (child) => child.nodeType === Node.ELEMENT_NODE
        );

        if (hasReplies) {
            noRepliesMessage.style.display = "none";
        } else {
            noRepliesMessage.style.display = "block";
            toggleLink.style.display = "none";
            return;
        }

        toggleLink.addEventListener("click", (event) => {
            event.preventDefault();
            const isHidden = getComputedStyle(moreRepliesContent).display === "none";
            moreRepliesContent.style.display = isHidden ? "block" : "none";
            toggleLink.textContent = isHidden ? "Hide More Replies" : "More Replies →";
        });
    }

    initializeToggleFunctionality();

    const observer = new MutationObserver(() => {
        const toggleLink = document.querySelector(".toggle-more-replies");
        const moreRepliesContent = document.querySelector(".more-replies-content");

        if (toggleLink && moreRepliesContent) {
            initializeToggleFunctionality();
            observer.disconnect();
        }
    });

    observer.observe(document.body, { childList: true, subtree: true });
});
</script>
</body>
</html>
