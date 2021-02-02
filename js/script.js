window.onload = function(){
    
    
    
    
    const Form = document.getElementById('form')
    Form.addEventListener('submit', formSend);
    
    async function formSend(e){
        e.preventDefault();
        
        let error = 0;
//        let error = backformValidate(backform);
        let formData = new FormData(Form);
        console.log(formData);
                
        let url = 'sendmail.php';
        
        if (error === 0){
            let response = await fetch (url,{
                method: 'POST',
                body: formData
                
            });
            if(response.ok){
                let result = await response.json();
//                alert(result.message);
                Form.reset();
//                popupNoActiv();
                if(message = 'ОТПРАВЛЕННО'){
                    alert('Ваші данні знаходяться в обробці, найближчим часом оператор передзвонить вам и надасть більше інформації.');
                }else{
                    alert('Вибачте будь ласка але на даний час, сервер не відповідає, спробуйте пізніше.');
                }
            }else{
                alert('Вибачте будь ласка але на даний час, сервер не відповідає, спробуйте пізніше.');
            }
        } else{
            alert('Внесіть бкдь ласка дані');
        }
    };
    

    
//    function backformValidate(backform) {
//        let error = 0;
//        let backformReq = document.querySelectorAll('._req');
//        
//        
//        for (let index = 0; index < backformReq.length; index++ ){
//            const input = backformReq[index];
//            formRemoveError(input);
//                        
//            if (input.value === ''){
//                formAddError(input);
//                error++
//            }
//        }
//        return error;
//    }
//    
//    function formAddError(input) {
//        input.parentElement.classList.add('_error');
//        input.classList.add('_error');
//    }
//    
//    function formRemoveError(input) {
//        input.parentElement.classList.remove('_error');
//        input.classList.remove('_error');
//    }
//    
    
    
    
    
    
    
    
}