import logo from './logo.svg';
import './App.css';

function App() {
  const alunni = [
    {
      "id" : "1",
      "nome" : "claudio",
      "cognome" : "benve"
    },
    {
      "id" : "2",
      "nome" : "ivan",
      "cognome" : "bruno"
    }
  ];

  return (
    <>
    <table border="1" id="alunni">
      {
        alunni.map(alunno =>
          <tr>
            <td>{alunno.id}</td>
            <td>{alunno.nome}</td>
            <td>{alunno.cognome}</td>
          </tr>
        )
      }
    </table>
    </>
  );
}

export default App;
