/*function toggleham
{
  var side = document.getElementById("")
}
*/
//toggle navbar
function openNav() 
{
  var nav = document.getElementById("mySidenav");
  var maincont = document.getElementById("maincontainer");
  if(nav.style.width == "0px" && maincont.style.marginLeft == "0px")
  {
    nav.style.width = "260px";
    maincont.style.marginLeft = "260px";
  }
  else
  {
    nav.style.width = "0px";
    maincont.style.marginLeft = "0px";
  }

  // document.getElementById("mySidenav").style.width = "260px";
  // document.getElementById("maincontainer").style.marginLeft = "260px";
}

//close nav with cross
function closeNav() 
{
  document.getElementById("mySidenav").style.width = "0";
  document.getElementById("maincontainer").style.marginLeft= "0";
}


//close side nav with click on container
var sidenav = document.getElementById("mySidenav");
var maincontent = document.getElementById("maincontainer");
window.onclick = function(event)
{
  
  if(event.target == maincontent)
  {
    sidenav.style.width = "0px";
    maincontent.style.marginLeft = "0px";
  }
}





var snav = document.getElementById("mySidenav");
var bt1 = snav.getElementsByClassName("btn");



for (var i = 0; i < bt1.length; i++) 
{
  bt1[i].addEventListener("click", function activeClass()
  {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className +=" active";
  }
);
}

var tnav = document.getElementById("top-nav");
var bt2 = tnav.getElementsByClassName("btn");



for (var i = 0; i < bt2.length; i++) 
{
  bt2[i].addEventListener("click", function()
  {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className +=" active";
  }
);
}
// chatbox
function openForm() 
{
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

// Scroll to Top


// When the user scrolls down 20px from the top of the document, show the button
var mybutton = document.getElementById("topbtn");
window.onscroll = function scrollFunction()
{
    
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) 
    {
      mybutton.style.display = "block"; 
    } 
    else 
    {
      mybutton.style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() 
{
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// SignIn JS
function myFunction() 
{
  document.getElementById("SignInDropdown").classList.toggle("show");
}


window.onclick = function(event) 
{
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}


// var loader = document.getElementById('loading');
// 	// function loadfunction()
// 	// {
// 	// 	// const sleeptime = setTimeout(preloadfunction, 2500);
    
//   //   window.addEventListener("load", preloadfunction());
    
// 	// }
//   window.addEventListener("load", function preloadfunction(){
// 	    loader.style.display = "none";
//       document.getElementById('body').style.overflow = "scroll";
// 	});



  

	// function loadfunction()
	// {
	// 	// const sleeptime = setTimeout(preloadfunction, 2500);
    
  //   window.addEventListener("load", preloadfunction());
    
	// }
   
  // backimg.style.backgroundImage = "url('images/loading3.gif')";
  window.addEventListener("load",setTimeout(preload, 2000));
  function preload()
  {
      let loader = document.getElementById('loading');
      let backimg = document.getElementById('loading');
      loader.style.display = "none";
      backimg.style.backgroundImage = "none";
      document.getElementById('body').style.overflow = "scroll";
  }



  