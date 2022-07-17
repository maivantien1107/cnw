star_larges=document.querySelectorAll('.large');
console.log(star_larges);
var i,j;
for( i=0;i<star_larges.length;i++) {
    star_larges[i].addEventListener('mousemove',function(e){
        e.preventDefault();
        thisdata = this.getAttribute('data-index');
        this.setAttribute('name','submit-rate');
        this.setAttribute('value',thisdata);
        data=this.parentNode.parentNode;
        data1=data.querySelectorAll('.large');
       data1.forEach(function(e){
        if (e.getAttribute('data-index')>thisdata){
            e.setAttribute('name',0);
            e.classList.add('non-star');
        }
        if (e.getAttribute('data-index')<=thisdata){
            e.classList.remove('non-star');
        }
        if (e.getAttribute('data-index')<thisdata){
            e.setAttribute('name',0);
        }

       });
        
    })

}
for( i=0;i<star_larges.length;i++) {
    star_larges[i].addEventListener('click',function(e){
        e.preventDefault();
        thisdata = this.getAttribute('data-index');
        this.setAttribute('name','submit-rate');
        this.setAttribute('value',thisdata);
        data=this.parentNode.parentNode;
        data1=data.querySelectorAll('.large');
       data1.forEach(function(e){
        if (e.getAttribute('data-index')>thisdata){
            e.classList.add('non-star');
            e.setAttribute('name',0);
        }
        if (e.getAttribute('data-index')<=thisdata){
            e.classList.remove('non-star');
        }
        if (e.getAttribute('data-index')<thisdata){
            e.setAttribute('name',0);
        }

       });
        
    })

}

