function Botoes({ b1, b2, b3, b4, valor, setValor }) {
  return (
    <div className="botoes">
        <button onClick={() => setValor(valor + b1)}>{b1}</button>
        <button onClick={() => setValor(valor + b2)}>{b2}</button>
        <button onClick={() => b3 === "=" ? calcular(valor, setValor) :
           setValor(valor + b3)}>{b3}</button>
        <button onClick={() => setValor(valor + b4)}>{b4}</button>
        <br />

    </div>
    );
}

function calcular(valor, setValor) {
    try {
        const resultado = eval(valor);
        setValor(resultado.toString());
    } catch (error) {
        console.error("Erro ao calcular:", error);
        setValor("Erro");
    }
}

export default Botoes;