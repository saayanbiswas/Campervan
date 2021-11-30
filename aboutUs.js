var img1="https://pinnaclevehicles.com/wp-content/uploads/2018/02/Finetza-Motorhome-by-PSV.jpg";
var img2="https://pinnaclevehicles.com/wp-content/uploads/2018/02/3306.jpg";
var imgs=[img2,img1];
var gallery=document.getElementById("photo");
gallery.src=imgs[0];
index=0;
function showPrevImg()
{
 index--;
 if(index<0)
 index=imgs.length-1;

 gallery.src=imgs[index];
}
function showNextImg()
{
 index++;
 
 if(index>=imgs.length)
 index=0;

 gallery.src=imgs[index];
}

