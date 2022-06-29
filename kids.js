
  $(document).ready(function(){
    //ocultamos txt
    $('#txt').hide();
    //barra draggalge
    $('#config').draggable();
    //creamos el CANVAS
     var clic=false;
     var x = "";
     var y = "";
     var canvas=document.getElementById("canvas");
     //ancho y alto de la ventana 100%
     canvas.width = window.innerWidth;
     canvas.height = window.innerHeight;
     var cntx = canvas.getContext("2d");
     //border de la linea -> redondeado
     cntx.lineCap = 'round';
     //barra de tamaños
    $(":input").change(function(){
      $("#n_range").html($("#rr").val());
      var a = $('#n_range').text();
        cntx.lineWidth = a;
    });

     //si hacemos click
     $("#canvas").mousedown(function(canvas){
       clic=true;
       cntx.save();
       x = canvas.pageX-this.offsetLeft;
       y = canvas.pageY-this.offsetTop;
    });

    $(document).mouseup(function(){
       clic=false;
    });

    $(document).click(function(){
       clic=false;
    });
    //pincel
    //var valor = document.getElementById('herramientas option[value=""]');
    $( "#herramientas" ).change(function() {
        var str = "";
        $( "#herramientas option:selected" ).each(function() {
          str += $( this ).text();
        });
      //pincel
        if (str == 'Pincel') {
        $("#canvas").mousemove(function(canvas){
           if(clic==true){
               cntx.beginPath();
               cntx.moveTo(canvas.pageX-this.offsetLeft,canvas.pageY-this.offsetTop);
               cntx.lineTo(x, y);
               cntx.stroke();
               x = canvas.pageX-this.offsetLeft;
               y = canvas.pageY-this.offsetTop;
           }
        });
        $('#txt').hide();
      }
      //goma
      if (str == 'Goma') {
        $("#canvas").mousemove(function(canvas2){
           if(clic==true){
               cntx.beginPath();
               cntx.moveTo(canvas.pageX-this.offsetLeft,canvas.pageY-this.offsetTop);
               cntx.clearRect(x, y, $('#n_range').text(),$('#n_range').text());
               cntx.stroke();
               cntx.closePath();
               x = canvas.pageX-this.offsetLeft;
               y = canvas.pageY-this.offsetTop;
           }
        });
        $('#txt').hide();
      }
      //tipografías
      //texto que mostrar
      if (str == 'Texto') {
        $('#txt').show();
        //escribimos
        var texto = document.getElementById('valor_t');
        ////////////
        $("#canvas").mousedown(function(canvas){
         var fnt = "";
          $( "#texto option:selected" ).each(function() {
            fnt += $( this ).text();
          });
           cntx.font = 'bold ' + $('#n_range').text()+'px' + ' ' + fnt;
           clic=true;
           cntx.save();
           x = canvas.pageX-this.offsetLeft;
           y = canvas.pageY-this.offsetTop;
           var a = cntx.fillText($(texto).val(),x,y);
           var s = $(texto).val("");
        });
      }
        }).trigger( "change" );

        //Añadimos color
        var content = $('#color').val(); 
        var c = $('#c');
        c.html($(content));
        $('#color').on('change', function() {
          cntx.strokeStyle =  (this.value);
          cntx.fillStyle = (this.value);
      });
      //color de fondo del canvas
      $('#canvas').css('background-image','url("img/bgcanvas.png")');
      var content = $('#bg_color').val(); 
        var bgc = $('#bg_c');
        bgc.html($(content));
        $('#bg_color').on('change', function() {
        $('#canvas').css('background-image','none');
        $('#canvas').css('background-color',(this.value));
      });
      
      //creamos la imágen del canvas
      var jpeg = document.getElementById("jpeg");
      jpeg.addEventListener("click",function(){ 
        var dato = canvas.toDataURL("image/jpeg");
        dato = dato.replace("image/jpeg", "image/octet-stream");
        document.location.href = dato;  
      },false);

  });

