function newAVImage1()
{
document.getElementById("av1").src="http://localhost:8012/Main/IPP/images/stories/av1_a.jpg";
}

function oldAVImage1()
{
document.getElementById("av1").src="http://localhost:8012/Main/IPP/images/stories/av1_b.jpg";
}

function newAVImage2()
{
document.getElementById("av2").src="http://localhost:8012/Main/IPP/images/stories/av2_a.jpg";
}

function oldAVImage2()
{
document.getElementById("av2").src="http://localhost:8012/Main/IPP/images/stories/av2_b.jpg";
}

function newAVImage3()
{
document.getElementById("av3").src="http://localhost:8012/Main/IPP/images/stories/av3_a.jpg";
}

function oldAVImage3()
{
document.getElementById("av3").src="http://localhost:8012/Main/IPP/images/stories/av3_b.jpg";
}

function avvideo1()
{
    window.open("<?php echo base_url(); ?>Sitecontrol/galleryVideo1", '', "width=700, height=400, scrollbars=yes")
}