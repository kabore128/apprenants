// afficher phto dans imput enregistrement
var photo=document.getElementById('inputphoto');
var lab=document.getElementById('labelphoto');
var con=document.getElementById('cont');
var sub=document.getElementById('sub');
if(photo){
  photo.addEventListener('change',function(){
    var lecteur= new FileReader();
      lecteur.readAsDataURL(this.files[0]);
      lecteur.onloadend =function(e){
        console.log(e.target.result);
          lab.src=e.target.result;
      }
  });
}
$('#rech').Jsearch({content:"",url:"includes/list.php"});


