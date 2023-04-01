import React, { Component } from 'react';
import api from './api';
import './App.css';
import { NumericFormat, PatternFormat } from 'react-number-format';

class App extends Component {

  state = {
    projetos: [],
  };

  async componentDidMount() {
    const response = await api.get('');
    this.setState({ projetos: response.data });
  };

  render() {

    const { projetos } = this.state;

    return (
      <div>
        <div className='titulo'>Ver Outros Projetos do Proponente</div>
        <div className='grid_container'>
          {console.log(projetos)}
          {projetos.map(projeto => (
            <div className='grid_item card' key={projeto.id_projeto}>
              <div className='rouanet card_texto'>ROUANET</div>
              <div className='proj_nome card_texto nome'>{projeto.nome}</div>
              <div className='municipio card_texto'>{projeto.municipio} <span>&#8226;</span> {projeto.uf}</div>
              <div className='sit card_texto'>{projeto.situacao}</div>
              <div className='card_texto'><span className='valor'>Aprovado</span><NumericFormat className='valor_num' value={projeto.valor_aprovado} displayType={'text'} thousandSeparator={true} prefix={'R$ '} /></div>
              <div className='card_texto'><span className='valor'>Captado</span><NumericFormat className='valor_num' value={projeto.valor_captado} displayType={'text'} thousandSeparator={true} prefix={'R$ '} /></div>
              <div className='card_footer'><div className='add_card'><button className='add'>ADICIONAR</button></div><div className='like'><span >&#9825;</span></div></div>
              </div>
          ))}
        </div>
      </div>
    );
  };
};

export default App;
