////////////////////////////////////////////////////////////////////
//  MOVEABLE SLIDESHOW SCRIPT
////////////////////////////////////////////////////////////////////

// Set slideShowSpeed (milliseconds)
var slideShowSpeed = 300

// Duration of crossfade (seconds)
var crossFadeDuration = 3

// =======================================
// do not edit anything below this line
// =======================================

isIE=document.all;
isNN=!document.all&&document.getElementById;
isN4=document.layers;
isHot=false;

function ddInit(e){	
  topDog=isIE ? "BODY" : "HTML";
  whichDog=document.getElementById("theLayer");  
  hotDog=isIE ? event.srcElement : e.target;  
  while (hotDog.id!="titleBar" && hotDog.tagName!=topDog){
    hotDog=isIE ? hotDog.parentElement : hotDog.parentNode;
  }  
  if (hotDog.id=="titleBar"){
    offsetx=isIE ? event.clientX : e.clientX;
    offsety=isIE ? event.clientY : e.clientY;
    nowX=whichDog.offsetLeft;
    nowY=whichDog.offsetTop;
    ddEnabled=true;
    document.onmousemove=dd;
    return false;
  }
  else ddEnabled = false;
}

function dd(e){
  if (!ddEnabled) return;
  selection = null;
  x = isIE ? nowX+event.clientX-offsetx : nowX+e.clientX-offsetx;
  whichDog.style.left=x+"px";
  y = isIE ? nowY+event.clientY-offsety : nowY+e.clientY-offsety; 
  whichDog.style.top=y+"px";
  return false;  
}

function ddN4(whatDog){
  if (!isN4) return;
  N4=eval(whatDog);
  N4.captureEvents(Event.MOUSEDOWN|Event.MOUSEUP);
  N4.onmousedown=function(e){
    N4.captureEvents(Event.MOUSEMOVE);
    N4x=e.x;
    N4y=e.y;
  }
  N4.onmousemove=function(e){
    if (isHot){
      N4.moveBy(e.x-N4x,e.y-N4y);
      return false;
    }
  }
  N4.onmouseup=function(){
    N4.releaseEvents(Event.MOUSEMOVE);
  }
}

// Hide the SlideShow
function hideMe(){
  if (isIE||isNN) whichDog.style.visibility="hidden";
  else if (isN4) document.theLayer.visibility="hide";
}

// Show the SlideShow
function showMe(){
  if (isIE||isNN) whichDog.style.visibility="visible";
  else if (isN4) document.theLayer.visibility="show";
}

document.onmousedown=ddInit;	// Called when the mouse has been clicked
document.onmouseup=Function("ddEnabled=false");	// Called when the mouse has been released

var t;
var j = 0;
var p = Pic.length;
var pattern = /\'/g;
var curImage = 0;
var curImage2 = 0;
var repeat = 0;
var preLoad = new Array()
preLoadImages();


function preLoadImages(){
	for (i = 0; i < 5; i++){
 	   if(curImage < Pic.length){	
		   preLoad[curImage] = new Image();
		   preLoad[curImage].src = Pic[curImage].replace(pattern, "\'");
		   curImage++;
		}
	}		
}

function runSlideShow(){
   if(repeat==0){
   if (document.all){
      document.images.SlideShow.style.filter="blendTrans(duration=2)";
      document.images.SlideShow.style.filter="blendTrans(duration=crossFadeDuration)";
      document.images.SlideShow.filters.blendTrans.Apply();    
   }
   if (!isN4) document.images.SlideShow.src = preLoad[j].src;
   if (isN4) document.layers['theLayer'].document.images['SlideShow'].src = preLoad[j].src;
   if (document.all){
      document.images.SlideShow.filters.blendTrans.Play();
   }

     
      getImageInfo(preLoad[j]);
 		j = j + 1;
		if(j > 4){
			preLoadImages();
		}		
		curImage2++;
		if(curImage2==(p)){
			//--always repeat
			restartBox = document.getElementById("cbx");
			if(restartBox==null || restartBox.checked==true){	
				repeat = 0;
				curImage=0;
				j=0;
				curImage2=0;
				preLoadImages()
			}
		else{
 			repeat=1;
 			pauseClick=0;
			}
		}
   		t = setTimeout('runSlideShow()', slideShowSpeed);
}
}

// Set the current images to the preview image
function previewImage(p){
   //document.images.SlideShow.src = myImages[p];
   clearTimeout(t);
   j = p;
   if (!preLoad[p]) {
     curImage = p;
     preLoadImages();
   }
   runSlideShow();
}

var pauseClick=0;
// Pause the slideshow
function btnPauseClick(){
	pauseClick=1;
    clearTimeout(t)
    getImageInfo();
}

// Start the slideshow
function btnStartClick(){
	if(pauseClick==0){
		repeat = 0;
		curImage=0;
		j=0;
		curImage2=0;
		preLoadImages()
	}
    t = setTimeout('runSlideShow()', slideShowSpeed);
}

// View Previous image
function btnPreviousClick(){
    clearTimeout(t);
    if(j == 0){
        j = preLoad.length - 1;
    }
    else{
        j = j - 1;
    }
    document.images.SlideShow.src = preLoad[j].src;
    getImageInfo(preLoad[j]);
    t = setTimeout('runSlideShow()', slideShowSpeed);
    btnPauseClick();
}

// View next image
function btnNextClick(){
    clearTimeout(t);
    if(j == preLoad.length - 1){
        j = 0;
    }
    else
    {
        j = j + 1;
    }
    document.images.SlideShow.src = preLoad[j].src;
    getImageInfo(preLoad[j]);
    t = setTimeout('runSlideShow()', slideShowSpeed);
    btnPauseClick();
}

/////////////////////////////////////////////////////////////////
// END SLIDESHOW SCRIPT
//////////////////////////////////////////////////////////////////

//////////////////////////////////////////////////////////////////
// SCROLL IMAGES SCRIPT
//////////////////////////////////////////////////////////////////


dir=1 // 0 = left 1 = right
speed=0
imageSize=0  // % set to zero to use fixedWidth and fixedHeight values
fixedWidth=40 // set a fixed width
fixedHeight=40 // set a fixed height
spacerWidth=5 // space between images

popupLeft= 100 // pixels
popupTop= 100 // pixels

biggest=0;
ieBorder=0;
totalWidth=0;
hs3Timer=null;

preload=new Array();
for(var i=0;i<myImages.length;i++){
	preload[i]=new Image();
	preload[i].src=myImages[i];
}

function initHS3(){
	scroll1=document.getElementById("scroller1")
	
	for(var j=0;j<myImages.length;j++){
		//<!--scroll1.innerHTML+='<img id="pic'+j+'" src="'+preload[j].src+'" alt="'+myImages[j][2]+'" onclick="previewImage('+j+')" style="cursor:pointer;">'-->
		scroll1.innerHTML+='<img id="pic'+j+'" src="'+preload[j].src+'" alt="'+myImages[j]+'" onclick="previewImage('+j+')" style="cursor:pointer;">'
		if(imageSize!=0){ // use percentage size
			newWidth=preload[j].width/2000*imageSize;
			newHeight=preload[j].height/1600*imageSize;
		}
		else{ // use fixed size
			newWidth=fixedWidth;
			newHeight=fixedHeight;
		}
		
		document.getElementById("pic"+j).style.width=newWidth+"px"
		//document.getElementById("pic"+j).style.height=newHeight+"px"
		
		
		if(document.getElementById("pic"+j).offsetHeight>biggest){
			biggest=document.getElementById("pic"+j).offsetHeight
		}
		
		document.getElementById("pic"+j).style.marginLeft=spacerWidth+"px"
		
		totalWidth+=document.getElementById("pic"+j).offsetWidth+spacerWidth
	}
	
	totalWidth+=1
	
	for(var k=0;k<myImages.length;k++){ // vertically center images
		document.getElementById("pic"+k).style.marginBottom = (biggest-document.getElementById("pic"+k).offsetHeight)/2+"px"
	}
	
	if(document.getElementById&&document.all){
		ieBorder=parseInt(document.getElementById("scrollbox").style.borderTopWidth)*2
	}
	
	document.getElementById("scrollbox").style.height=biggest+ieBorder+"px"
	
	scroll1.style.width=totalWidth+"px"
	
	scroll2=document.getElementById("scroller2")
	scroll2.innerHTML=scroll1.innerHTML
	scroll2.style.left= (-scroll1.offsetWidth)+"px"
	scroll2.style.top= -scroll1.offsetHeight+"px"
	scroll2.style.width=totalWidth+"px"
	
	if(dir==1){
	speed= -speed
	}
	//<!--scrollHS3()-->
}


function scrollHS3(){
if(paused==1){return}
clearTimeout(hs3Timer)

//speed=-3
scroll1Pos=parseInt(scroll1.style.left)
scroll2Pos=parseInt(scroll2.style.left)

scroll1Pos-=speed
scroll2Pos-=speed

scroll1.style.left=scroll1Pos+"px"
scroll2.style.left=scroll2Pos+"px"

hs3Timer=setTimeout("scrollHS3()",50)

if(dir==0){
if(scroll1Pos< -scroll1.offsetWidth){
scroll1.style.left=scroll1.offsetWidth+"px"
}

if(scroll2Pos< -scroll1.offsetWidth){
scroll2.style.left=scroll1.offsetWidth+"px"
}
}

if(dir==1){
if(scroll1Pos>parseInt(document.getElementById("scrollbox").style.width)){
scroll1.style.left=-scroll1.offsetWidth+"px"
}

if(scroll2Pos>parseInt(document.getElementById("scrollbox").style.width)){
//scroll2.style.left=scroll1Pos+ (-scroll2.offsetWidth)+"px"
scroll2.style.left=-scroll1.offsetWidth+"px"
}
}

}

function pause(){
clearTimeout(hs3Timer)
}

paused=0
picWin=null
chkTimer=null

function showBigPic(p){

if(myImages[p]!=""){
paused=1

if(picWin&&picWin.open&&!picWin.closed){picWin.close()} // if picWin exists close it

if(myImages[p].indexOf("htm")==-1){
bigImg=new Image()
bigImg.src=myImages[p]
data="\n<center>\n<img src='"+bigImg.src+"'>\n</center>\n"

var winProps = "left= "+popupLeft+", top = "+popupTop+", width="+(bigImg.width+20)+", height="+(bigImg.height+20)+", scrollbars=no, toolbar=no, directories=no, menu bar=no, resizable=yes, status=no"

picWin=window.open("","win1",winProps)
picWin.document.write("<HTML>\n<HEAD>\n<TITLE></TITLE>\n")
picWin.document.write("</HEAD>\n")
picWin.document.write("<BODY bgcolor='black' topmargin=10px leftmargin=10>\n")
picWin.document.write("<div id=\"display\">"+data+"</div>")
picWin.document.write("\n</BODY>\n</HTML>")
}
else{
picWin=window.open(myImages[p][1])
}

}
clearTimeout(chkTimer)
}

window.onfocus=function(){
clearTimeout(chkTimer)
if(picWin&&picWin.open&&!picWin.closed){
}
paused=0
<!--scrollHS3()-->
}

function setDirLeft(){
dir=0
speed=3
scrollHS3()
}

function setDirRight(){
dir=1
speed=-3
scrollHS3()
}

// Get and display information about the current image
function getImageInfo(someImage){
	if (!someImage) return;
    var strName = someImage.src;
    strName = strName.substr(strName.lastIndexOf("/") + 1, strName.length - strName.lastIndexOf("/"));
    
    var strSize = someImage.width + "x" + someImage.height;
//    var strFileSize = someImage.fileSize + " bytes";
    nameCell = document.getElementById("imgName");
    if (nameCell) nameCell.innerHTML = "Name: "+ decodeURI(strName) +
    "<br><br>" + "Dimensions: " + strSize;
//    "<br><br>" + "Size: " + strFileSize;
    
}
//////////////////////////////////////////////////////////////////////
// END SCROLL IMAGES SCRIPT
//////////////////////////////////////////////////////////////////////

