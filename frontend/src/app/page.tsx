import Image from 'next/image';
import HamburgerIcon from '@/icons/hamburger.svg';

export default function Home() {
  return (
    <div className="home-page ">
      <section className="slide p-2">
        <div className="slide-item">
          <Image
            src="/image/366x244.svg"
            alt="icone de usuario"
            width={366}
            height={244}
          />
          <div className="categorias flex gap-2">
            <span className="border-2 border-sky-500">CATEGORIA</span>
            <span className="border-2 border-sky-500">CATEGORIA</span>
          </div>
          <h2 className="text-2xl">Nome do curso</h2>
        </div>
        <div className="slide-item">
          <img src="" alt="imagem do curso" className="bg-img" />
          <span>Curso livre</span>
          <h2>Nome do curso</h2>
          <button>Ver mais</button>
        </div>
        <div className="slide-item">
          <img src="" alt="imagem do curso" className="bg-img" />
          <span>Curso livre</span>
          <h2>Nome do curso</h2>
          <button>Ver mais</button>
        </div>
      </section>
      <hr />
      <section className="curso">
        <h2>Cursos</h2>
        <button>ver mais</button>

        <div className="card">
          <img src="" alt="imagem de curso" />
          <span>Extensão</span>
          <span>Bem-viver</span>
          <h3>Educação Ambiental para um Presente Sustentável</h3>
          <span>Por Fundação Demócrito Rocha</span>
        </div>
        <div className="card">
          <img src="" alt="imagem de curso" />
          <span>Extensão</span>
          <span>Bem-viver</span>
          <h3>Educação Ambiental para um Presente Sustentável</h3>
          <span>Por Fundação Demócrito Rocha</span>
        </div>
        <div className="card">
          <img src="" alt="imagem de curso" />
          <span>Extensão</span>
          <span>Bem-viver</span>
          <h3>Educação Ambiental para um Presente Sustentável</h3>
          <span>Por Fundação Demócrito Rocha</span>
        </div>
        <div className="card">
          <img src="" alt="imagem de curso" />
          <span>Extensão</span>
          <span>Bem-viver</span>
          <h3>Educação Ambiental para um Presente Sustentável</h3>
          <span>Por Fundação Demócrito Rocha</span>
        </div>
      </section>
      <hr />
      <section className="sobre-uane">
        <h2>Sobre a UANE</h2>
        <button>ver mais</button>

        <div className="sobre-uane-item">
          <h3>+40</h3>
          <p>anos de mercado</p>
        </div>
        <div className="sobre-uane-item">
          <h3>+1,6M</h3>
          <p>alunos em todo Brasil</p>
        </div>
        <div className="sobre-uane-item">
          <h3>+90</h3>
          <p>Cursos de extensão</p>
        </div>
        <div className="sobre-uane-item">
          <h3>+60</h3>
          <p>Cursos gratuitos</p>
        </div>
        <div className="sobre-uane-item">
          <h3>31</h3>
          <p>POLOS DE APOIO PRESENCIAL NOS MUNICÍPIOS</p>
        </div>
        <div className="sobre-uane-item">
          <h3>+30</h3>
          <p>TURMAS DO CURSO NOVOS TALENTOS PARA JORNALISMO</p>
        </div>
        <div className="sobre-uane-item">
          <h3>+35</h3>
          <p>TURMAS DE CURSOS TÉCNICOS SECRETARIA ESCOLAR</p>
        </div>
        <div className="sobre-uane-item">
          <h3>+150</h3>
          <p>
            TUTORES ATUARAM EM ATENDIMENTO DE SUPORTE E ACOMPANHAMENTO
            PEDAGÓGICO DOS CURSOS
          </p>
        </div>
      </section>
      <hr />
      <section className="parcerias">
        <h2>Parcerias</h2>
        <button>ver mais</button>
        <div className="parcerias-logo">
          <img src="" alt="Universidade Federal do Ceará" />
          <img src="" alt="Universidade Estadual do Ceará" />
          <img src="" alt="UERN" />
        </div>
      </section>
      <hr />
      <section className="mais-informacao">
        <h2>Precisa de mais informações sobre os cursos?</h2>
        <p>
          Te ajudamos a decidir qual o melhor curso para você, de acordo com as
          suas necessidades e expectativas!
        </p>
        <button>Tire suas dúvidas</button>
        <button>Precisa de ajuda?</button>
      </section>
      <hr />
    </div>
  );
}
