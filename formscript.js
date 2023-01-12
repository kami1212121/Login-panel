function checkform()
        {
            const rlog=/^[A-Za-z0-9]{3,}$/;
            const rname=/^[A-Za-z]{2,}$/;
            const rlast=/^[A-Za-z]{2,}$/;
            const remail=/^[A-Za-z0-9_.-]+@+[A-Za-z0-9]+\.+[A-Za-z]{2,3}$/;
            const rpass=/^[A-Za-z0-9]{5,}$/;
            const rrepass=/^[A-Za-z0-9]{5,}$/;
            let log=document.getElementById('logg').value;
            let name=document.getElementById('namee').value;
            let last=document.getElementById('lastt').value;
            let email=document.getElementById('emaill').value;
            let pass=document.getElementById('pass').value;
            let repass=document.getElementById('repasss').value;
            if(!rlog.test(log))
            {
                document.getElementById('logg').style.background="red";
                return false;
            }
            else if(!rname.test(name))
            {
                document.getElementById('namee').style.background="red";
                return false;
            }
            else if(!rlast.test(last))
            {
                document.getElementById('lastt').style.background="red";
                return false;
            }
            else if(!remail.test(email))
            {
                document.getElementById('emaill').style.background="red";
                return false;
            }
            else if(!rpass.test(pass))
            {
                document.getElementById('pass').style.background="red";
                return false;
            }
            else if(!rrepass.test(repass))
            {
                document.getElementById('repasss').style.background="red";
                return false;
            }
            else if (pass!=repass)
            {
                document.getElementById('passwords').innerHTML="Password are not the same";
                return false;
            }
            else
            {
                return true;
            }
        }