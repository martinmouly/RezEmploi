<?php

?>



<!doctype html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <meta charset="utf-8">
    <script src="webroot/js/functions.js"></script>
   <title>Social Network</title>
    <link rel = "stylesheet" href = "styleside.css">
    <link rel = "stylesheet" href = "stylejobs.css">
</head>
<body>
    <nav>
        <div class = "nav-left">
            <img src = "images/logo.png" class = "logo"onclick="location.href='index.php'">
            <ul>
                <li><img src = "images/notification.png" ></li>
                <li><img src = "images/inbox.png" onclick="location.href='messagerie.html'"></li>
                <li><img src = "images/job.png" onclick="location.href='jobs.html'"></li>
              </ul>
        
        </div>
        <div class = "nav-right">
            <div class ="search-box">
                <img src = "images/search.png">
                <input type ="text" placeholder = "Search">
            </div>
            <div class = "nav-user-icon">
                <a onclick="getProfile()">
                    <img src = "images/profile-pic.png" >
                </a>

                

            </div>
        </div>
    </nav>
    <div class="container">
        <div class="left-sidebar" id = "cprofile">
            <div class="imp-links">
                <a href="#"><img src = "images/news.png">News</a>
                <a href="#"><img src = "images/friends.png" onclick="location.href='listppl.html'">Friends</a>
                 <a href="#"><img src = "images/group.png">Group</a>
                <a href="#"><img src = "images/watch.png">watch</a>

            </div>

        </div>
        <div class="job-ads">
            
            <?php
            class Annonce{
                public $job_title;
                public $compagny;
                public $logo ;
                public $text ;
                function __construct($job_title, $compagny,$logo,$text) {
                    $this->job_title = $job_title;
                    $this->compagny = $compagny;
                    $this->logo = $logo;
                    $this->text = $text;
            }
            function get_job_title() {
                return $this->job_title;
              }
              function get_compagny() {
                return $this->compagny;
              }
              function get_logo() {
                return $this->logo;
              }
              function get_text() {
                return $this->text;
              }
              function get_small_text(){
                  
                return substr($this->text,0,100) . "...";
              }
            }
            $job_title = "job title";
            $compagny = "Avalanche";
            $logo = "images/avalanche.png";
            $text = "Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.";
            $annonce1 = new Annonce($job_title,$compagny,$logo,$text);
            echo "<div class='listannonces'>";
            function printOneAd($annonce)
            {
                // onclick =getAll($txt)
                $txt = printDescription($annonce);
                echo
            "
            
                <div class='small-ad' >
                    <div>
                        <img src={$annonce->get_logo()}  class='brand-logo'>
                        <span>
                            <h4>{$annonce->get_job_title()} </h4>
                            <h5>{$annonce->get_compagny()}</h5>
                        </span>
                        
                        
                    </div>
                    <p>{$annonce->get_small_text()}</p>
           
                </div>"
                ;}
                 for($u =0;$u<10;$u+=1){
                     printOneAd($annonce1);
                 }
                echo "</div>";
                function printDescription($annonce)
                {return "
                <div>
                    <img src={$annonce->get_logo()}  class='brand-logo'>
                    <span>
                        <h4>{$annonce->get_job_title()} </h4>
                        <h5>{$annonce->get_compagny()}</h5>
                    </span>
                    
                    
                </div>
                <p>{$annonce->get_text()}</p>
       
            ";}
            
                ?>
                
            
            

        </div>

        <div class="right-sidebar" id = "cprofile">
            <div class="sidebar-title">
                <h4>Events</h4>
                <a href = "#">See All</a>
            </div>

            <div class="event">
                <div class="left-event">
                    <h3>18</h3>
                    <span>March</span>
                </div>
                <div class="rightleft-event">
                    <h4>Event 1 </h4>
                    <p>description</p>
                    <a href="#">More info</a>
                </div>
            </div>
            <div class="sidebar-title">
                <h4>Publicité</h4>
                <a href = "#">close</a>
            </div>
            <img src="images/advertisement.png" class="sidebar-ads">
            <div class="sidebar-title">
                <h4>Conversation</h4>
                <a href = "#">hide chat</a>
            </div>

            <div class="online-list">
                <div class="online">
                    <img src="images/member-1.png" >
                </div>
                <p>Prenom Nom</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-2.png" >
                </div>
                <p>Prenom2 Nom2</p>
            </div>
            <div class="online-list">
                <div class="online">
                    <img src="images/member-3.png" >
                </div>
                <p>Prenom3 Nom3</p>
            </div>

        </div>
        
    </div>
</body>
<html>