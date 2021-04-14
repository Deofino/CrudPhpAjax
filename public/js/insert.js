((doc,win)=>{
    'use strict';
    let form,name,lastname,email,subject,message;
    form = doc.querySelector("#button");
    name = doc.querySelector("#nome");
    lastname = doc.querySelector("#sobrenome");
    email = doc.querySelector("#email");
    subject = doc.querySelector("#assunto");
    message = doc.querySelector("#mensagem");



    form.addEventListener('click',(event)=>{
        event.preventDefault();
        let errors=[];
        
        const verify=(field,maxlenght=300,minlenght=2)=>{
            field.classList.remove('is-valid');
            field.classList.remove('is-invalid');
            let alert = doc.querySelector("#m"+field.id);

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
            sendAjax(JSON.stringify({
                name: name.value,
                lastname: lastname.value,
                email: email.value,
                subject: subject.value,
                message: message.value,
            }));
            clearFields();
        }
        
        
    })

    const sendAjax = (messageData)=>{
        let ajax = new XMLHttpRequest();
        ajax.open("POST", "../../controller/insert.php");
        ajax.setRequestHeader("Content-Type", "application/json");
        ajax.onreadystatechange = ()=>{
            if(ajax.readyState == 4 && ajax.status == 200){
                if(ajax.responseText=="error"){
                    doc.querySelector("#alerta_error").classList.remove('d-none');
                    doc.querySelector("#alerta_success").classList.add('d-none');
                }else{
                    doc.querySelector("#alerta_success").classList.remove('d-none');
                    doc.querySelector("#alerta_error").classList.add('d-none');
                }
            }                
        }   
        ajax.send(messageData);
    }

    const clearFields=()=>{
        setTimeout(() => {
            let values = [name,lastname,email,subject,message];
            values.forEach(element=>{
                element.value = "";
                element.classList.remove('is-valid')
            })

        }, 3500);
    }

})(document,window)