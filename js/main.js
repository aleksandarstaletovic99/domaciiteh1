$('#dodajFormuZaUnosFilmova').submit(function(){
    event.preventDefault();
    console.log("Dodavanje");
    const $form =$(this);
    const $input = $form.find('input, select, textarea');
  
    const serijalizacija = $form.serialize();
    console.log(serijalizacija);
  
    $input.prop('disabled', true);
  
    req = $.ajax({
        url: 'kontroler/add.php',
        type:'post',
        data: serijalizacija
    });
  
    req.done(function(res, textStatus, jqXHR){
        if(res=="Success"){
            alert("Oglas uspešno dodat");
            console.log("Dodat oglas");
            location.reload(true);
        }else console.log("Oglas nije dodat "+res);
        console.log(res);
    });
  
    req.fail(function(jqXHR, textStatus, errorThrown){
        console.error('Sledeca greska se desila> '+textStatus, errorThrown)
    });
  });