(function(win, doc){
    'use strict';
    function confirmDel(event){
        event.preventDefault();
        if(confirm("Deseja mesmo apagar? ")){
            let ajax = new XMLHttpRequest();
            ajax.open("delete", event.target.parentNode.href);
            let token = doc.getElementsByName('_token')[0].value;
            ajax.setRequestHeader('X-CSRF-TOKEN', token);
            ajax.onreadystatechange = function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="books";
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }

    if(doc.querySelector('.js-del')){
        let btn = doc.querySelectorAll('.js-del');
        let botoes = Array.from(btn);
        botoes.forEach(element => {
            element.addEventListener('click', confirmDel, false)
        });
    }
})(window, document);