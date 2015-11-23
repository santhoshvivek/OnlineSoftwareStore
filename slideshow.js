
window.onload=function()
{
	alert("insdie javascript")
var slideimages = new Array() // create new array to preload images
slideimages[0] = new Image() // create new instance of image object
slideimages[0].src = "http://localhost/images/logo-2.png" // set image src property to image path, preloading image in the process
slideimages[1] = new Image()
slideimages[1].src = "http://localhost/images/logo-3.png"
slideimages[2] = new Image()
slideimages[2].src = "http://localhost/images/logo-5.png"
slideit();

}

function slideit()
{
 //if browser does not support the image object, exit.
 var step=0

 if (!document.images)
  return
 document.getElementById('slide').src = slideimages[step].src;
 if (step<2)
  step++
 else
  step=0
 //call function "slideit()" every 2.5 seconds
 setTimeout("slideit()",2500)
}





