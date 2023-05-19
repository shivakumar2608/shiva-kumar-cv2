function showmore() {
    var list =document.querySelector('.projects-list')
    list.classList.toggle('showmore')
    if(list.classList.contains('showmore')){
        document.querySelector('.btn-showmore').innerHTML="VIEW ALL PROJECTS"
    }
    else{
        document.querySelector('.btn-showmore').innerHTML="CLOSE GRID"
        
    }
}

