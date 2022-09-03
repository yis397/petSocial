import './bootstrap';
import Dropzone from 'dropzone';


Dropzone.autoDiscover=false
if(document.querySelector('[name="img"]')){
    if (document.querySelector('[name="img"]').value) {
        console.log('yes')

    }
}
if(document.getElementById("dropzone")) {

    let dropzone=new Dropzone('.dropzone',{
       dictDefaultMessage:'Sube tu imagen',
       acceptedFiles:'.png,.jpg,.jpeg',
       addRemoveLinks:true,
       dictRemoveFile:'remover archivo',
       maxFiles:1,
       uploadMultiple:false,

       init:function(){
          if (document.querySelector('[name="img"]').value.trim()) {

            const imgpublicada={};
            imgpublicada.size=1234;
            imgpublicada.name=document.querySelector('[name="img"]').value;

            this.options.addedfile.call(this,imgpublicada);
            this.options.thumbnail.call(
                this,
                imgpublicada,
                `/uploads/${imgpublicada.name}`
            );
            imgpublicada.previewElement.classList.add('dz-success','dz-complete');


          }
       }
    });
    dropzone.on('success',function(file,response){

        document.querySelector('[name="img"]').value=response.img;
    })
    dropzone.on('removedfile',function(){
        document.querySelector('[name="img"]').value="";
    })
}

