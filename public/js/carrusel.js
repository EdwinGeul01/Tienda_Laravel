
   console.log("funcionando a medias");
    
document.addEventListener("DOMContentLoaded", function()
{

    let imagearr = 0;

    let carruselimg = document.getElementsByClassName("img-carrusel");
    

    console.log(carruselimg);

    for (let index = 0; index < carruselimg.length; index++) {
        carruselimg[index].style.visibility = "hidden";
    }

    carruselimg[0].style.visibility = "visible";
   
    document.getElementById("nextbutton").addEventListener("click",()=>
    {
        if(imagearr+1 >= carruselimg.length )
        {
            
            imagearr = 0;
            carruselimg[carruselimg.length-1].style.visibility = "hidden";
            carruselimg[0].style.visibility = "visible";
        }else{

            imagearr++;
            carruselimg[imagearr-1].style.visibility = "hidden";
            carruselimg[imagearr].style.visibility = "visible";
    
        }

    });

    document.getElementById("prevbutton").addEventListener("click",()=>
    {
        if(imagearr-1 < 0 )
        {
            
            imagearr = carruselimg.length-1;
            carruselimg[0].style.visibility = "hidden";
            carruselimg[imagearr].style.visibility = "visible";
        }else{

            imagearr--;
            carruselimg[imagearr+1].style.visibility = "hidden";
            carruselimg[imagearr].style.visibility = "visible";
    
        }

    });



    setInterval(()=>{

        if(imagearr+1 >= carruselimg.length )
        {
            
            imagearr = 0;
            carruselimg[carruselimg.length-1].style.visibility = "hidden";
            carruselimg[0].style.visibility = "visible";
        }else{

            imagearr++;
            carruselimg[imagearr-1].style.visibility = "hidden";
            carruselimg[imagearr].style.visibility = "visible";
    
        }

    },5000);

});
