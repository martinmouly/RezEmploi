<?php
class Side{
    function ethPourPierroHead(){
        echo
        '<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="description" content="Login system for web app, built using MetaMask, JavaScript, PHP, MySQL/PostgreSQL, JWT">
		
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/web3@latest/dist/web3.min.js"></script>
		
		<script type="text/javascript" src="https://unpkg.com/web3modal@1.9.0/dist/index.js"></script>
		<script type="text/javascript" src="https://unpkg.com/evm-chains@0.2.0/dist/umd/index.min.js"></script>
		<script type="text/javascript" src="https://unpkg.com/@walletconnect/web3-provider@1.2.1/dist/umd/index.min.js"></script>
';
    }
    function navbar(){
   
        echo"<nav>
        <div class = 'nav-left'>
            <img src = 'images/logo.png' class = 'logo'>
            <ul>
                <li><img src = 'images/notification.png' ></li>
                <a href = 'messagerie.php'>
                <li><img src = 'images/inbox.png' ></li>
                </a>
                <li><img src = 'images/job.png'onClick=`window.location.href='jobs.php'`></li>
              </ul>
              
              
        
        </div>
        
            
            <form class ='search-box' action='listppl.php' method='post'>
                
                
                <input type ='text' placeholder = 'Search' name='keyword'>
                <input type='submit'>
            </form>";
            if(isset($_POST['keyword']))
        {		
        $_POST['keyword'];
        }
            echo"
            
            <div class = 'nav-user-icon'>
                <a onclick='UpdateStatus()' value='Status Update'>
                    <img src = 'images/profile-pic.png' >
                </a>

                

            </div>
        </div>
    </nav>
    "
    ;
    }
    function left(){
        echo'<div class="left-sidebar" id ="cprofile">
        <div class="imp-links">
            <a href="#"><img src = "images/news.png">News</a>
            <a href="#"><img src = "images/friends.png" onclick="location.href=`listppl.html`">Friends</a>
            <a href="#"><img src = "images/group.png">Group</a>
            <a href="#"><img src = "images/watch.png">watch</a>

        </div>
        </div>';
    }
    function right(){
        echo'<div class="right-sidebar"id ="cprofile">
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

    </div>';
    }
}
?>