function frmLogin(e)
{
    e.preventDefault();
    const usuario=document.getElementById("usuario");
    const clave=document.getElementById("password");
    if(usuario.value=="" && clave.value=="")
    {
        usuario.classList.add("is-invalid");
        clave.classList.add("is-invalid");
        usuario.focus();
    }
    else
    if(usuario.value=="")
    {
        clave.classList.remove("is-invalid");
        usuario.classList.add("is-invalid");
        usuario.focus();
    }
    else if(clave.value=="")
    {
        usuario.classList.remove("is-invalid");
        clave.classList.add("is-invalid");
        clave.focus();
    }
    else
    {
       
       const url=window.location.href+"Usuario/validar";
       const frm=document.getElementById("frmLogin");
       var datos=new FormData(frm);
       fetch(url,{method:'POST',body:datos})
       .then(res=>res.json())
       .then(data=>
        {
            console.log(data)
            if(data=="OK")
            {
                window.location=window.location.href+"Usuario";
            }
         }
        )
       //faltaverificar y direccionar a index
    }
}