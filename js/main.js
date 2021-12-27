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

  function validateForm() {
    var naziv = document.forms["unosFilmova"]["naziv"].value;
    var budzet = document.forms["unosFilmova"]["budzet"].value;
    var opis = document.forms["unosFilmova"]["opis"].value;
    var godina = document.forms["unosFilmova"]["godina"].value;
    if (naziv == "" || budzet == "" || opis == "" || godina == "") {
      alert("Polja ne smeju biti prazna! ");
      return false;
    }
  }

  function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("tabelaFilmovi");
    switching = true;
    
    dir = "asc";
    
    while (switching) {
      switching = false;
      rows = table.rows;
     for (i = 1; i < (rows.length - 1); i++) {
        shouldSwitch = false;
       x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
       if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
             shouldSwitch = true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
           shouldSwitch = true;
            break;
          }
        }
      }
      if (shouldSwitch) {
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        switchcount ++;
      } else {
       if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }