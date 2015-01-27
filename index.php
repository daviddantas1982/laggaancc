<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>LagaanCC</title>
    <link href="NewFile.css" rel="stylesheet" />
</head>
<body>
    <header>
        <hgroup>
            <h1>Lagaan Cricket Club</h1>
            
        </hgroup>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php" >About Us</a>
               

            </li>
            <li><a href="#" >Seasons</a>
                <ul>                             
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>                
                </ul>
            </li>
            <li><a href="http://www.mscl.org/schedule.php?mtype=1" target="blank">Schedules</a></li>
            <li><a href="#">Contact US</a></li>
        </ul>
    </nav>
    <section id="home">
    <article id="first">
     <script>
        window.onload = rotate;
        var x = 0;//counter
        var img = ['imgg/first.jpe', 'imgg/second.jpe', 'imgg/third.jpe', 'imgg/forth.jpe'];
        function rotate() {
           
                x++;//counter addition
                if (x == img.length) {//counter == img array length
                    x = 0;//counter become zero 
                }
                document.getElementById("imgg").src = img[x];//change source as per array
                setTimeout(rotate, 4 * 1000);//image rotation after every four minutes;
            }
              
    </script>

    <img src="imgg/first" alt="ground" id="imgg"  />
    </article>
    <article id="first1">
    
    
    
    </article>
     <article id="second">
    
    
    
    </article>
     <article id="third">
    
    
    
    </article>
        
    </section>
    
    <aside>
    
   		<h1>Proud Sponsores</h1>
   
   		<section class="aside">
  		
  		 <img height="50" src="http://www.venuscapital.com/images_new/logo-venus.gif" style="margin:5px 10px 0px 0px;display:inline;float:left" width="200" />
   <p>Specializes in emerging markets and prides itself on 
being a high quality institutional money management firm. Venus Capital 
has built an extensive infrastructure to provide the best capabilities 
and service for its clients. Additionally, through its history, Venus 
Capital has developed a very strong relationship ecosystem that includes
 brokers, analysts, fund managers and independent investors, all of whom
 are invaluable in assisting us to identify, source, and analyze 
opportunities.  This infrastructure and ecosystem has been built over 
several years of successful operations and has proven itself over a long
 period of time.</p>
   
   </section>
    
    </aside>

  
   <footer>
       <small>2014@lagaancc</small>
   </footer>
    <script src="JavaScript1.js"></script>
</body>
</html>
