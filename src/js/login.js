(function () {
  const btnlogin = document.querySelector("#bt-login");
  //     const formlogin = document.querySelector("#formlogin").addEventListener("submit",(e) => {
  //       e.preventDefault()
  //       alert("inciiando");
  //   });

  btnlogin.addEventListener("click", (e) => {
    e.preventDefault();
    login();
  });

  async function login() {
    
    try {
      const resultado = await fetch("http://localhost:3210/login", { method: "POST" });
      const respuesta = await resultado.json();
      alert("inciiando form");
      console.log(respuesta);
      if (respuesta.respuesta == true) {
        window.location.href = "http://google.com";
      }
    } catch (error) {
        console.log(error);
    }
  }
})();
