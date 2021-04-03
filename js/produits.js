
function reste_stock(){
  var i;
  
  for(i = 0 ; i <document.getElementsByClassName('stock').length ; i++){
    
    if(document.getElementsByClassName('stock')[i].style.display=='none'){
    document.getElementsByClassName('stock')[i].style.display ='table-cell';
  }
    else{
      document.getElementsByClassName('stock')[i].style.display ='none';
    }
  }
}
function moins(article,quantite){
  const v_quantite=document.getElementById(quantite);

  if(v_quantite.value>0){
    v_quantite.value--;
  }
}
function plus(article,quantite){
  const v_quantite=document.getElementById(quantite);
  const v_article=document.getElementById(article);

  if(v_quantite.value<parseInt(v_article.innerHTML)){
    v_quantite.value++;
  }
}


