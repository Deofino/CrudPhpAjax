((doc,win)=>{
    'use strict';
    let content = doc.querySelector('#content');

    const getData=(callback)=>{
        let ajax = new XMLHttpRequest();
        ajax.open('get','../../controller/read.php');
        ajax.onreadystatechange = ()=>{
            if(ajax.status == 200 && ajax.readyState == 4){
                callback(JSON.parse(ajax.response));
            }
        }
        ajax.send();
    }
    
    const constructTable=(datas)=>{
        let table = doc.createElement('table');
        table.setAttribute('class', 'table table-dark  table-striped table-hover table-bordered');
        let thead = doc.createElement('thead');
        let tbody = doc.createElement('tbody');
        let trHead = doc.createElement('tr');
        let Caption = doc.createElement('caption');
        Caption.appendChild(doc.createTextNode('Dados das mensagens cadastradas.'));
        table.appendChild(Caption);

        let thId = createTH("Id","col");
        let thName = createTH("Nome","col");
        let thLastName = createTH("Sobrenome","col");
        let thEmail = createTH("E-mail","col");
        let thSubject = createTH("Assunto","col");
        let thMessage = createTH("Mensagem","col");
        let thDelete = createTH("Delete","col");

        let thHead = [thId,thName,thLastName,thEmail,thSubject,thMessage,thDelete];

        thHead.forEach(element=>{
            trHead.appendChild(element);
        });

        datas.forEach(element=>{
            createTableRow(element,tbody);
        });
        
        thead.appendChild(trHead);

        table.appendChild(thead);
        table.appendChild(tbody);
        content.appendChild(table);
    }
 
    const createTableRow=(data,tbody)=>{
        let tr = doc.createElement('tr');
        let tdDelete = doc.createElement('td');
        let linkDelete = doc.createElement('button');
        linkDelete.style.cursor = 'pointer';
        linkDelete.setAttribute('class', "btn btn-primary border-dark w-100")
        linkDelete.setAttribute("onclick", "deletar("+data.id+")");
        linkDelete.appendChild(doc.createTextNode("Apagar"));

        tdDelete.appendChild(linkDelete);
        for(let i=0;i<6;i++){
            let td = doc.createElement('td');
            td.appendChild(doc.createTextNode(data[i]));
            tr.appendChild(td);
        }
        tr.appendChild(tdDelete);

        tbody.appendChild(tr);
    }

    const createTH=(text,scope)=>{
        let th = doc.createElement('th');
        th.appendChild(doc.createTextNode(text));
        th.setAttribute('scope',scope);
        return th;
    }

    const callback=(response)=>{
        if(response.length == 0){
            let withoutData = "Não encontramos nenhuma mensagem salva, você pode inserir alguma, clique na parte de INSERT dentro da barra de navegação superior que você sera redirecioando.";
            let h2 = doc.createElement('h2');
            h2.appendChild(doc.createTextNode(withoutData));
            h2.setAttribute('class', 'black text-center lh-3 bold')
            content.appendChild(h2);
        }else{
            constructTable(response);
        }
    }
    
    getData(callback);

})
(document,window)
const deletar = async (id) =>{
    if(confirm("Deseja mesmo deletar o campo id:{"+id+"}?")){

        let req = await fetch('../../controller/delete.php',{
            cache: "default",
            method: 'POST',
            headers: {
                "Content-Type": "application/json"
            },
            body:JSON.stringify({id: id}),
            mode: "cors",
        });
    
        let response = await req.text();
        console.log(response);
        if(response == 'ok'){
            document.querySelector("#alerta_error").classList.add('d-none');
            document.querySelector("#alerta_success").classList.remove('d-none');
            setTimeout(() => {
                window.location.reload();
            }, 5000);
        }else{
            document.querySelector("#alerta_error").classList.remove('d-none');
            document.querySelector("#alerta_success").classList.add('d-none');
            setTimeout(() => {
                window.location.reload();
            }, 5000);
        }
    }   
}