// let adminLoginBtn = document.getElementById('adminLoginBtn');
// adminLoginBtn.addEventListener('click',function(){
//     $('#adminLoginForm').on
// })

$(document).ready(function () {                 
    $('#adminLoginBtn').on('click',function (event) { 
        event.preventDefault();                 
        var form = document.getElementById('adminLoginForm'); 
        var formData = new FormData(form); 
        // let  username = formData.getAll('username');
        // let  password = formData.getAll('password');
        $.ajax({ 
            url: 'http://localhost/mycoaching/auth/login/', 
            method: 'POST', 
            data: formData,
            processData: false, 
            contentType: false, 
            success: function (response) {
                if(response==1)
                    {
                        window.location.href="http://localhost/mycoaching/dashboard";
                        alert('You have logged in successfully.'); 
                    }
                if(response==0)
                    {
                        // alert("password inccorect!");
                        let usernameInput = document.getElementById('usernameInput');
                        usernameInput.innerHTML="Incorrect Password!";
                        usernameInput.style.color="red";

                        
                    }
                if(response==2)
                    {
                        let usernameInput = document.getElementById('usernameInput');
                        usernameInput.innerHTML="User Not Found!";
                        usernameInput.style.color="red";
                    }              
            }, 
            error: function (xhr, status, error) { 
                console.log(response);                       
                alert('Your form was not sent successfully.'); 
                console.error(error); 
            } 
        }); 
    }); 
}); 
