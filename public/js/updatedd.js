let content = document.querySelector('#content');

((doc,win)=>{
    'use strict';
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
        let thUpdate = createTH("Update","col");
        let thHead = [thId,thName,thLastName,thEmail,thSubject,thMessage,thUpdate];

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
        let tdUpdate = doc.createElement('td');
        let linkUpdate = doc.createElement('button');
        linkUpdate.style.cursor = 'pointer';
        linkUpdate.setAttribute('class', "btn btn-primary border-dark w-100")
        linkUpdate.setAttribute("onclick", "updated("+data.id+")");
        linkUpdate.appendChild(doc.createTextNode("Atualizar"));

        tdUpdate.appendChild(linkUpdate);
        for(let i=0;i<6;i++){
            let td = doc.createElement('td');
            td.appendChild(doc.createTextNode(data[i]));
            tr.appendChild(td);
        }
        tr.appendChild(tdUpdate);
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



})(document,window)

async function updated(id){
    let req = await fetch('../../controller/update.php', {
        cache: "default",
        headers: {
            "Content-Type": "application/json"
        },
        mode: "cors",
        method: "POST",
        body: JSON.stringify({
            id: id
        })
    });
    let response = await req.json();
    showAlertUpdate(response);
}

function showAlertUpdate(data){ 
    let background = document.querySelector('#background')
    background.classList.remove('d-none');
    background.classList.add('d-flex');


    let form,name,lastname,email,subject,message;
    form = document.querySelector("#button");
    name = document.querySelector("#nome");
    lastname = document.querySelector("#sobrenome");
    email = document.querySelector("#email");
    subject = document.querySelector("#assunto");
    message = document.querySelector("#mensagem");

    name.value = data.nome;
    lastname.value = data.sobrenome;
    email.value = data.email;
    subject.value = data.assunto;
    message.value = data.mensagem;
     
    form.addEventListener('click',(evt)=>{
        evt.preventDefault();
        let errors=[];

        const verify=(field,maxlenght=300,minlenght=2)=>{
            field.classList.remove('is-valid');
            field.classList.remove('is-invalid');
            let alert = document.querySelector("#m"+field.id);
    
            if(field.value.trim() == null || field.value.trim() == "" || field.value.trim().length == 0){
                let texto = "Ops, esse "+field.id+" campo esta vazio ou nulo.";
                errors.push(field.id);
                field.classList.add('is-invalid');
                alert.innerHTML = texto;
                return;
            }
            else if(field.value.trim().length > maxlenght){
                let texto = "Eita, esse "+field.id+" campo esta com o maior que permitido! (max: "+maxlenght+")";
                errors.push(field.id);
                field.classList.add('is-invalid');
                alert.innerHTML = texto;
                return;
            }
            else if(field.value.trim().length < minlenght){
                let texto = "Oh não, este campo "+field.id+" esta muito curto, verifique ele por favorzinho hihi! (min: "+minlenght+")";
                errors.push(field.id);
                field.classList.add('is-invalid');
                alert.innerHTML = texto;
                return;
            }
            else {
                field.classList.add('is-valid');
            }
        }

        verify(name, 50,3);
        verify(lastname, 50,3);
        verify(email, 100,5);
        verify(subject, 20,4);
        verify(message, 300,2);

        if(errors.length == 0){
            form.value = "Campo atualizado com sucesso!";
            sendData(JSON.stringify({
                name: name.value,
                lastname: lastname.value,
                email: email.value,
                subject: subject.value,
                message: message.value,
                id: data.id
            })) ;
            Load();
        }  
        
    })
   
    let closed = background.querySelector('#closed');
    closed.addEventListener('click',(evt)=>{
        background.classList.add('d-none');
        background.classList.remove('d-flex');
    });

    const sendData=async(data)=>{
        let request = await fetch('../../controller/updateData.php',{
            method: 'POST',
            mode: 'cors',
            headers: {
                "Content-Type": "application/json"
            },
            cache: "default",
            body:data
        });
        let response = await request.text();
        console.log(response);

    }


    const Load=()=>{
        setTimeout(() => {
            form.value = "Enviar mensagem";

            background.classList.add('d-none');
            background.classList.remove('d-flex');
        }, 3500);
    }

    
}