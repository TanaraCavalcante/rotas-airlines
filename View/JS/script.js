document.addEventListener("DOMContentLoaded", () => {
    const formDestino = document.getElementById("formDestino");
    const tipoViagem = document.getElementById("tipoViagem");
    const dataVolta = document.getElementById("dataVolta");
  
    if (formDestino) {
      formDestino.addEventListener("submit", (event) => {
        if (tipoViagem.value === "1" && dataVolta.value === "") {
          event.preventDefault();
          alert("Por favor, selecione a data de volta.");
        }
      });
    }
  
    const campoOrigemVoo = document.getElementById("origemVoo");
    const listaResultados = document.getElementById("resultado-pesquisa");
  
    if (campoOrigemVoo) {
      campoOrigemVoo.addEventListener("input", () => {
        if (campoOrigemVoo.value.trim() === "") {
          listaResultados.style.display = "none";
        } else {
          pesquisar(campoOrigemVoo, listaResultados, listaResultadosOrigem);
        }
      });
    }
  
    const campoOrigemVooDestino = document.getElementById("DestinoVoo");
    const listaResultadosDestino = document.getElementById("resultado-pesquisaDestino");
  
    if (campoOrigemVooDestino) {
      campoOrigemVooDestino.addEventListener("input", () => {
        if (campoOrigemVooDestino.value.trim() === "") {
          listaResultadosDestino.style.display = "none";
        } else {
          pesquisar(campoOrigemVooDestino, listaResultadosDestino, listaResultadosDestinoData);
        }
      });
    }
  
    function pesquisar(campo, lista, dados) {
      const texto = campo.value.trim();
      lista.innerHTML = "";
  
      if (texto !== "") {
        const resultados = dados.filter((item) =>
          item.toLowerCase().includes(texto.toLowerCase())
        );
  
        resultados.forEach((resultado) => {
          const li = document.createElement("li");
          li.textContent = resultado;
          li.addEventListener("click", () => {
            campo.value = resultado;
            lista.style.display = "none";
          });
          lista.appendChild(li);
        });
  
        lista.style.display = "block";
      } else {
        lista.style.display = "none";
      }
    }
  });
  