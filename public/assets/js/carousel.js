$('.carousel').carousel({
    interval: 3000,
    pause: "false"
    });

 window.onload=function(){
        $(function(){
            if(window.location.protocol==="https:")
                window.location.protocol="http";
        });
    }
