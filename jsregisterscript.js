function passwordcheck()
    {
        let passlength=document.getElementById('pass').value;
        function passchecktext()
        {
            if(passlength.length<4)
            {
                document.getElementById('password-length').innerHTML='Password is too short';
            }
            else if(passlength.length<8)
            {
                document.getElementById('password-length').innerHTML='Password is okey';
            }
            else
            {
                document.getElementById('password-length').innerHTML='Password is good';
            }
        }
        function passcheckstyle()
        {
            if(passlength.length<4)
            {
                document.getElementById('password-length').style.color='red';
            }
            else if(passlength.length<8)
            {
                document.getElementById('password-length').style.color='yellow';
            }
            else
            {
                document.getElementById('password-length').style.color='green';
            }
        }
        passchecktext();
        passcheckstyle();
    }