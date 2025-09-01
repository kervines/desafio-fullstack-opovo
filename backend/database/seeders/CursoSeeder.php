<?php

namespace Database\Seeders;

use App\Enums\CategoriasEnum;
use App\Models\Categoria;
use App\Models\Curso;
use App\Models\Info;
use App\Models\Modulo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cursos = [
            [
                "titulo" => "Secretaria Escolar",
                "descricao" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis sagittis nulla. Quisque id magna est. Ut scelerisque elementum dapibus. In feugiat ante nulla, id facilisis quam lobortis eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras commodo eleifend dictum.",
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "valor" => 2835.35,
                "valor_matricula" => 70,
                "thumbnail" => "https:/placehold.co/636x462",
                "lote" => 3,
                "qnt_parcelas" => 15,
                "carga_horaria" => 1500,
                "periodo" => 15,
                "tipo_periodo" => "meses",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::TECNICO, CategoriasEnum::TECNOLOGIA_PROFISSAO],
                "modulos" => [
                    [
                        'titulo' => 'Secretaria escolar',
                        'descricao' => 'Você se apropriará dos conhecimentos relativos ao perfil do secretário escolar, atribuições, rotina e atendimento ao público, compreendendo a relação da ética e moral na vida profissional e, como a liderança e organização podem contribuir para o sucesso desse setor.'
                    ],
                    [
                        'titulo' => 'Redação oficial e informática',
                        'descricao' => 'Apresentação dos modelos de documentos e redação oficiais, apontando programas que auxiliam o profissional da Secretaria Escolar na elaboração dos mesmos. Você saberá a importância da redação oficial no âmbito educacional e aprenderá a utilizar programas como o Word do Microsoft Office e o Writer do OpenOffice.org e, o Excel do Microsoft Office e do Calc do OpenOffice.org., para a criação, edição e impressão de documentos.'
                    ],
                    [
                        'titulo' => 'Estatística básica e indicadores educacionais',
                        'descricao' => 'Estudo sobre Estatística e os Indicadores Educacionais que o profissional de Secretaria Escolar precisa dominar para mensurar alguns resultados da instituição de ensino. Você aprenderá a importância da estatística no dia a dia e no setor de Secretaria Escolar, conhecendo a aplicação da estatística por meio da coleta de dados, representando os resultados de diferentes modos.'
                    ],
                    [
                        'titulo' => 'Planejamento, gestão e legislação educacional',
                        'descricao' => 'Apresentação da história e organização da educação brasileira, imprescindível para o conhecimento da progressão da educação na história social, política, econômica e legislativa do país. Você conhecerá a trajetória histórica da educação, sua organização, os serviços educacionais, sistemas de informatização criados pelo Ministério da Educação, para o controle e acompanhamento das políticas públicas educacionais no país, além de apresentar aspectos ligados ao processo de ensino e aprendizagem, advindos de teorias dos campos da Pedagogia e Psicologia.'
                    ],
                    [
                        'titulo' => 'Funcionamento e organização da secretaria escolar',
                        'descricao' => 'A escrituração escolar, os documentos de gestão e os processos de avaliação na educação. Você aprenderá sobre os registros relativos à vida escolar do aluno e da escola. Os procedimentos de elaboração dos documentos de gestão que norteiam a prática pedagógica e organizam a instituição de ensino de forma democrática. Além disso, conhecerá os processos de avaliação da instituição de ensino e aqueles provenientes do Ministério da Educação.'
                    ],
                    [
                        'titulo' => 'Legislação educacional',
                        'descricao' => 'Estudo da legislação nacional, estadual e modelos de documentos escolares oficiais. Você estudará a legislação nacional que orienta a organização escolar básica, seus níveis e modalidade de ensino, além das orientações de funcionamento escolar a nível estadual e, os documentos escolares oficiais utilizados.'
                    ],
                    [
                        'titulo' => 'Estágio supervisionado',
                        'descricao' => 'O módulo 7 é o momento em que você realizará o Estágio Curricular Supervisionado, conforme regulamenta a Resolução CNE/CEB n° 02/2005 e Resolução n° 466/2018 do Conselho Estadual de Educação do Ceará. Neste período, você irá a campo vivenciar o espaço da Secretaria Escolar, aprimorando os conhecimentos obtidos ao dialogar com a realidade prática profissional.'
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'O curso aborda o papel do(a) secretário(a) escolar, suas atribuições e competências, incluindo organização de arquivos, credenciamento de escolas e relações interpessoais no ambiente de trabalho. Também apresenta noções de redação oficial, com modelos de documentos, gramática aplicada e uso adequado de pronomes de tratamento. Na parte de informática, são exploradas funções básicas de editores de texto e planilhas para organização e apresentação de dados. Por fim, o curso trata dos principais instrumentais da Secretaria Escolar, como a escrituração, documentos de gestão e avaliações de aprendizagem.'
                    ],
                    [
                        'titulo' => 'Para quem se destina',
                        'descricao' => 'Esse curso é para você, que já concluiu ou está concluindo o ensino médio e quer se capacitar para entrar no mercado de trabalho. É gestor escolar e quer ampliar os seus conhecimentos a respeito dos processos realizados na secretaria escolar. Que deseja ter uma formação técnica para estar preparado(a) para realizar concurso público e atuar em escolas públicas ou privadas.'
                    ],
                    [
                        'titulo' => 'Quando será o pagamento da primeira mensalidade e a data de início do curso?',
                        'descricao' => 'As aulas começam 21 de julho, mas a 1ª mensalidade do Curso Técnico em Secretaria Escolar será cobrada apenas 10 de agosto de 2025.'
                    ],
                    [
                        'titulo' => 'Quais são as condições de pagamento e quais os descontos oferecidos?',
                        'descricao' => 'À vista (20% de desconto):
                            Valor final: R$ 2.268,28

                            Parcelado em 2 a 6 vezes (10% de desconto):
                            Valor final: R$ 2.551,80

                            Parcelamento acima de 6 vezes (sem desconto):
                            Valor final: R$ 2.835,35'
                    ],
                ]
            ],
            [
                "titulo" => "Bullying: Conhecer para combater",
                "descricao" => "Etiam pretium, sapien iaculis tristique lacinia, ipsum lorem scelerisque velit, euismod cursus quam quam sed est. Etiam ac eleifend mauris, eu condimentum leo.",
                "valor" => 0,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 1,
                "carga_horaria" => 30,
                "periodo" => 1,
                "tipo_periodo" => "meses",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::CURTA_DURACAO, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Módulo único',
                        'descricao' => 'Este curso tem como objetivo capacitar educadores, gestores e a comunidade em geral para identificar, prevenir e combater o bullying em diferentes ambientes, promovendo uma convivência saudável e respeitosa. Você terá acesso às ferramentas e estratégias necessárias para enfrentar esse desafio de forma eficaz.',
                    ]
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Técnicas e abordagens para reconhecer e intervir em situações de bullying. Estratégias práticas para promover um ambiente inclusivo e livre de hostilidades Noções sobre os aspectos psicológicos, sociais e legais envolvidos no combate ao bullying, garantindo ações éticas e embasadas.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Este curso é voltado para educadores, gestores escolares, profissionais da educação em geral e também para pais, responsáveis e membros da comunidade que desejam compreender melhor o fenômeno do bullying. Além disso, é indicado para estudantes das áreas de pedagogia, psicologia, serviço social e demais interessados em promover ambientes mais seguros e respeitosos, especialmente no contexto escolar. Ao longo do curso, os participantes serão orientados sobre como identificar, prevenir e intervir em situações de bullying, utilizando abordagens práticas e éticas.',
                    ]
                ]
            ],
            [
                "titulo" => "Gestão Fiscal Interfederativa",
                "descricao" => "Phasellus quis lorem id mauris suscipit fringilla. Proin sed cursus dui. Proin scelerisque diam eget sem finibus laoreet. Aliquam erat volutpat. Suspendisse non orci tempus, scelerisque nunc at, volutpat ante. Pellentesque aliquet suscipit diam id hendrerit. Proin faucibus imperdiet molestie.",
                "valor" => 0,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 1,
                "carga_horaria" => 72,
                "periodo" => 3,
                "tipo_periodo" => "meses",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::EXTENSAO, CategoriasEnum::NEGOCIOS],
                "modulos" => [
                    [
                        'titulo' => 'Política Fiscal, Sistema Tributário Brasileiro e a Reforma Tributária',
                        'descricao' => 'Neste módulo, abordaremos os conceitos de Política Fiscal, focando nas fontes de financiamento do Estado e nos princípios da tributação. Você aprenderá sobre o sistema tributário nacional e como as reformas tributárias impactam o federalismo fiscal brasileiro.',
                    ],
                    [
                        'titulo' => 'Orçamento público',
                        'descricao' => 'Neste módulo, vamos explorar os princípios orçamentários que norteiam a elaboração e execução do orçamento público. Você aprenderá sobre as metodologias de classificação das receitas e despesas públicas, fundamentais para entender como os recursos são organizados e distribuídos.

                        Abordaremos também o ciclo orçamentário, que engloba as fases de planejamento, execução e acompanhamento do orçamento, e os instrumentos utilizados nesse processo. Além disso, discutiremos o conceito de orçamento participativo, que visa a inclusão da sociedade na definição das prioridades orçamentárias, garantindo maior transparência e democracia no uso dos recursos públicos.',
                    ],
                    [
                        'titulo' => 'Receitas e Despesas Públicas, Limites Fiscais e Responsabilidade na Gestão de Recursos',
                        'descricao' => 'Neste módulo, vamos abordar os principais conceitos da Política Fiscal, com foco nas receitas do Estado, como impostos e contribuições, e nas despesas públicas. Você também aprenderá sobre o sistema tributário nacional e seus impactos no federalismo fiscal brasileiro. Além disso, discutiremos os limites fiscais, que garantem a sustentabilidade das finanças públicas e a responsabilidade na gestão dos recursos.',
                    ],
                    [
                        'titulo' => 'Planejamento e Gestão Fiscal Estadual e Municipal',
                        'descricao' => 'Neste módulo, você aprenderá sobre os instrumentos de planejamento, como o PPA, LDO, LOA e Plano Diretor, que guiam a gestão pública. Também abordaremos os instrumentos de gestão fiscal, como balanços orçamentário, financeiro e patrimonial, além das demonstrações das variações patrimoniais e fluxo de caixa.',
                    ],
                    [
                        'titulo' => 'Coordenação e Cooperação Fiscal entre Entes Federativos',
                        'descricao' => 'Neste módulo, você aprenderá os conceitos básicos de coordenação e cooperação fiscal entre os diferentes níveis de governo. Abordaremos os instrumentos legais e institucionais que facilitam essa coordenação, além das ferramentas digitais utilizadas para integrar a gestão fiscal entre os entes federativos. Também discutiremos experiências e boas práticas em cooperação fiscal, tanto no Brasil quanto em outros países, e analisaremos os desafios e perspectivas para a melhoria dessa coordenação fiscal no futuro.',
                    ],
                    [
                        'titulo' => 'Transformação Digital e Governança Fiscal Interfederativa Eficaz',
                        'descricao' => 'Neste módulo, vamos explorar os fundamentos da transformação digital no setor público, com foco nas ferramentas e tecnologias digitais aplicadas à governança fiscal. Você aprenderá sobre a governança de dados na gestão fiscal, além de como a transparência e o controle social são aprimorados na era digital. Discutiremos também como a inovação digital pode promover a sustentabilidade fiscal e os desafios e oportunidades para a governança fiscal interfederativa no cenário atual.',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Ao cursar este programa, você desenvolverá competências em gestão fiscal, orçamentária e tributária no setor público. Será capaz de compreender a política fiscal e o funcionamento do sistema tributário brasileiro, interpretar e aplicar os princípios do orçamento público, analisar receitas, despesas e limites fiscais, utilizar instrumentos como o PPA, a LDO e a LOA no planejamento estadual e municipal, além de entender os mecanismos de cooperação entre os entes federativos. Também irá se familiarizar com ferramentas digitais aplicadas à governança fiscal e reconhecer o papel da transformação digital para uma gestão mais eficiente, transparente e sustentável.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'O curso se destina a profissionais interessados em aprofundar seus conhecimentos em gestão financeira e fiscal, bem como nas áreas de educação, saúde, infraestrutura, conservação de bens públicos e saneamento, com foco na inovação, integração entre entes federativos e uso de tecnologias para aprimorar a administração pública.',
                    ]
                ]
            ],
            [
                "titulo" => "Educação Ambiental para um Presente Sustentável",
                "descricao" => "Phasellus quis lorem id mauris suscipit fringilla. Proin sed cursus dui. Proin scelerisque diam eget sem finibus laoreet. Aliquam erat volutpat. Suspendisse non orci tempus, scelerisque nunc at, volutpat ante. Pellentesque aliquet suscipit diam id hendrerit. Proin faucibus imperdiet molestie.",
                "valor" => 0,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 1,
                "carga_horaria" => 72, // sem info no site
                "periodo" => 3, // sem info no site
                "tipo_periodo" => "meses",
                "modalidade" => "ead",
                "categorias" => [], // sem categoria
                "modulos" => [
                    [
                        'titulo' => 'Fundamentos das coisas vivas na Terra. Como ver, como sentir, onde está, como se educar para tudo ao redor.',
                        'descricao' => 'Explora os princípios básicos que sustentam a vida no planeta, estimulando a observação, a sensibilidade e a educação para o cuidado com o ambiente ao nosso redor.',
                    ],
                    [
                        'titulo' => 'Está todo mundo falando de... Mudanças Climáticas. O que é? Onde, quando, agora!',
                        'descricao' => 'Apresenta o conceito, as causas e os efeitos das mudanças climáticas, destacando sua urgência e impacto no presente e no futuro.',
                    ],
                    [
                        'titulo' => 'Eu-Natureza: Natureza não é longe. O mundo natural é meu mundo e tudo ao redor. ',
                        'descricao' => 'Propõe a reconexão com a natureza, reconhecendo que o mundo natural está presente no cotidiano e influencia diretamente nossa vida.',
                    ],
                    [
                        'titulo' => 'Cidade-Orgânica: A cidade como espaço natural e morada de múltiplas espécies.Cidade-Orgânica: A cidade como espaço natural e morada de múltiplas espécies.',
                        'descricao' => 'Discute a cidade como um ecossistema vivo, abordando a importância da biodiversidade e de espaços urbanos sustentáveis.Discute a cidade como um ecossistema vivo, abordando a importância da biodiversidade e de espaços urbanos sustentáveis.',
                    ],
                    [
                        'titulo' => 'A vida na Terra está mudando: Sentindo no corpo, na alimentação, na mente. Modos de viver e fazer diante dessas transformações.',
                        'descricao' => 'Analisa como as alterações ambientais afetam a saúde, a alimentação e o estilo de vida, incentivando práticas mais conscientes e adaptadas.',
                    ],
                    [
                        'titulo' => ' Módulo 6: Cada um de nós é um agente ambiental do planeta.',
                        'descricao' => 'Encoraja a ação individual e coletiva, mostrando como cada pessoa pode contribuir para a preservação e regeneração do meio ambiente.',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Você vai ampliar sua compreensão sobre a vida na Terra e aprender a observar e sentir o meio ambiente de forma mais consciente. Vai entender o que são as mudanças climáticas, seus impactos e por que é urgente agir agora, reconhecendo também que a natureza não está distante, mas presente no seu dia a dia. O curso convida a enxergar a cidade como um ecossistema vivo, onde coexistem múltiplas espécies, e a refletir sobre como as transformações ambientais afetam o corpo, a alimentação e o modo de viver. Além disso, você será estimulado a desenvolver práticas concretas para se tornar um agente de transformação socioambiental, capaz de promover mudanças positivas em casa, na escola e na comunidade.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'O curso é voltado para jovens e adultos que queiram aprofundar seus conhecimentos em educação ambiental e se engajar em ações concretas de preservação.',
                    ]
                ]
            ],
            [
                "titulo" => "Como Implementar a Política Municipal de Educação Ambiental",
                "descricao" => "O curso introdutório “Como Implementar e Fortalecer a Política Municipal de Educação Ambiental” oferece uma visão ampla sobre conceitos essenciais, desafios e estratégias para promover a Educação Ambiental de forma eficaz em sua cidade. Prepare-se para iniciar uma jornada de aprendizado que transformará a gestão ambiental municipal, envolvendo a comunidade e garantindo práticas sustentáveis. Seja agente de mudança rumo a um futuro mais consciente e sustentável.",
                "valor" => 0,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 1,
                "carga_horaria" => 30,
                "periodo" => 1,
                "tipo_periodo" => "meses",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::CURTA_DURACAO, CategoriasEnum::TECNOLOGIA_PROFISSAO],
                "modulos" => [
                    [
                        'titulo' => 'Mõdulo único',
                        'descricao' => 'Este curso visa capacitar gestores públicos e a sociedade, em geral, para fortalecer, desenvolver e implementar a Política Municipal de Educação Ambiental (PMEA), proporcionando as ferramentas necessárias para impulsionar essa iniciativa no setor público.',
                    ],

                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Estratégias e abordagens para implementar a PMEA de forma eficaz. Noções sobre como aplicar a metodologia adequada para o desenvolvimento da PMEA, garantindo resultados duradouros. Informações técnicas e jurídicas, para fomentar a implementação da PMEA de forma legal e eficiente.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Gestores públicos, educadores, profissionais da área ambiental, técnicos municipais e demais agentes envolvidos na formulação e execução de políticas públicas. Também é voltado a integrantes de organizações da sociedade civil, conselhos municipais, estudantes e cidadãos engajados na causa ambiental.',
                    ]
                ]
            ],
            [
                "titulo" => "Sala de Aula Digital",
                "descricao" => "Desperte todo o seu potencial no ensino digital com o Método Professor Digital! Este curso foi criado de professor para professor e oferece uma jornada completa: entenda o universo digital, aprenda a comunicar-se de forma eficaz e persuasiva, e desenvolva carisma para engajar seus alunos. Com módulos focados em produção de conteúdo, gravação e edição de vídeos, e no uso das ferramentas Google, você terá tudo o que precisa para criar e vender cursos online, transformando seu conhecimento em uma significativa fonte de renda.",
                "valor" => 97.00,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 10,
                "carga_horaria" => 40,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::BEM_VIVER, CategoriasEnum::LIVRE],
                "modulos" => [
                    [
                        'titulo' => 'Entendendo o fascinante mundo digital',
                        'descricao' => 'Neste módulo, você conhecerá o universo digital em profundidade. Iremos explorar como funciona a comunicação online, as principais plataformas, o alcance das redes sociais e como aproveitar as oportunidades de educação e negócios digitais. Esse entendimento é fundamental para qualquer professor ou produtor de conteúdo, pois fornece as bases para se adaptar às rápidas mudanças e novas demandas do ensino digital.',
                    ],
                    [
                        'titulo' => 'Os segredos da perfeita comunicação',
                        'descricao' => 'Aqui, o foco é na comunicação eficaz. Você aprenderá técnicas de clareza e objetividade para transmitir seu conhecimento de forma envolvente e compreensível. O módulo cobre aspectos de linguagem, estruturação de ideias e o uso de entonação e expressões para prender a atenção. Essas técnicas garantem que o conteúdo chegue ao público de maneira clara e impactante, aumentando o engajamento e a eficácia da aprendizagem.',
                    ],
                    [
                        'titulo' => 'Desenvolva seu carisma e poder de persuasão',
                        'descricao' => 'Este módulo visa desenvolver habilidades pessoais que criam conexão e empatia com o público. Carisma e persuasão são fundamentais para cativar e manter o interesse dos alunos. Você aprenderá técnicas para se expressar de maneira mais confiante, ganhar a confiança dos alunos e inspirá-los, o que também amplia seu poder de influência, facilitando o aprendizado e promovendo uma experiência mais envolvente.',
                    ],
                    [
                        'titulo' => 'Grave, edite e produza apresentações de alto impacto',
                        'descricao' => 'No quarto módulo, a prática técnica ganha destaque. Você será introduzido ao processo de gravação, edição e produção de apresentações. Aprenderá desde a configuração de câmeras e microfones até técnicas de edição para criar aulas visualmente atrativas. Esse conhecimento permite que você produza materiais de alta qualidade, prontos para encantar e envolver o público de maneira profissional.',
                    ],
                    [
                        'titulo' => 'Como utilizar as ferramentas Google',
                        'descricao' => 'Este módulo oferece um guia prático para as ferramentas Google, como Google Drive, Google Classroom e Google Forms, essenciais para a gestão de cursos online. Você aprenderá a organizar materiais, compartilhar conteúdos e monitorar o progresso dos alunos, tornando o processo de ensino mais organizado e eficiente. Ao dominar essas ferramentas, você ganha praticidade e profissionalismo na criação e entrega de conteúdos digitais.',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Formação voltada ao desenvolvimento de habilidades em mediação de leitura, análise literária, produção de conteúdo e comunicação digital. O curso aborda desde a interpretação de obras, com foco na literatura cearense, até o uso de ferramentas práticas para criar e divulgar conteúdos online. Também ensina como transformar conhecimento em oportunidades de renda, por meio da criação de cursos digitais.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Para professores e educadores de todas as áreas que desejam expandir suas habilidades para o ambiente digital. Para aqueles que querem criar cursos digitais próprios, e transformar o conhecimento em uma fonte de renda digital. Interessados(as) em aprimorar suas habilidades em produção de conteúdo educacional.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
            [
                "titulo" => "Mitologia Criativa",
                "descricao" => "O primeiro curso livre de Mitologia Criativa no Brasil tem como objetivo despertar os potenciais criativos que a mitologia oferece. O contato com os mitos e com as manifestações criativas favorece o desenvolvimento individual, permitindo que velhos problemas sejam vistos sob novas perspectivas. Este conhecimento gera um impacto profundo, afetando não só o intelecto, mas atingindo o ser humano como um todo — suas emoções, imaginação e sonhos. Ao explorar a mitologia de forma criativa, abre-se espaço para mudanças transformadoras em diversas áreas da vida.",
                "valor" => 497.00,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 10,
                "carga_horaria" => 90,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Introdução à mitologia',
                        'descricao' => 'Os temas universais e constantes do pensamento mitológico. Mitologia comparada. Mito. Mitologia. Arquétipo. As diferentes formas de expressão dos arquétipos. As quatro funções do mito. Ordem mitológica. Tipos de ordens mitológicas.
                        Material de estudo que compõe este módulo:
                        1 Episódio de uma série ficcional, dividido em duas partes, uma na abertura e outra no fechamento do módulo;1 Capítulo de livro (em pdf e em html);1 Audioaula, ou seja, uma aula em formato de podcast criado especialmente pro curso;3 Desafios;1 Episódio de podcast como material complementar;1 Exame de autoavaliação, com gabarito disponível pra que você possa avaliar o seu aprendizado;1 Exercício de reflexão, também com gabarito disponível pra você fazer sua autoavaliação;Indicação da bibliografia.',
                    ],
                    [
                        'titulo' => 'Mitologia criativa',
                        'descricao' => 'Diferenças entre a mitologia tradicional e a mitologia criativa. Símbolo. Fantasia. Inconsciente coletivo. Mito vivo. As raízes da mitologia criativa. De que modo obras como Harry Potter, Senhor dos Anéis, Star Wars e Game of Thrones são exemplos de metáforas com força estruturante para as sociedades contemporâneas.
                        Material de estudo que compõe este módulo:
                        1 Episódio de uma série ficcional, dividido em duas partes, uma na abertura e outra no fechamento do módulo;1 Capítulo de livro (em pdf e em html);1 Audioaula, ou seja, uma aula em formato de podcast criado especialmente pro curso;3 Desafios;1 Texto como leitura complementar;1 Exame de autoavaliação, com gabarito disponível pra que você possa avaliar o seu aprendizado;1 Exercício de reflexão, também com gabarito disponível pra você fazer sua autoavaliação;Indicação da bibliografia.',
                    ],
                    [
                        'titulo' => 'A jornada do herói',
                        'descricao' => 'Por que motivo a jornada do Sol foi metaforizada como uma jornada do herói. Perspectiva psicológica dos mitos. A jornada do herói e seus estágios. Como os temas da jornada do herói aparecem no mito, na literatura e no enredo da vida das pessoas. Individuação.
                        Material de estudo que compõe este módulo:
                        1 Episódio de uma série ficcional, dividido em duas partes, uma na abertura e outra no fechamento do módulo;1 Capítulo de livro (em pdf e em html);1 Audioaula, ou seja, uma aula em formato de podcast criado especialmente pro curso;3 Desafios;1 Texto como leitura complementar;2 Episódios de podcast como material complementar;1 Exame de autoavaliação, com gabarito disponível pra que você possa avaliar o seu aprendizado;1 Exercício de reflexão, também com gabarito disponível pra você fazer sua autoavaliação;Indicação da bibliografia.',
                    ],
                    [
                        'titulo' => 'Artistas criativos',
                        'descricao' => 'O artista como o sacerdote da imaginação. As noções de artista criativo, arte, estética e criatividade na visão de James Joyce. Relações entre as emoções trágicas e a arte. Relações entre as emoções cinéticas e a arte. Relações entre a verdade e o intelecto. Relações entre a beleza e a imaginação. Relações entre a arte e o mito. Categorias de arte. Diferenças entre a arte própria e a arte imprópria. Compreensão psicológica da beleza. Fundamentos da beleza universal.
                        Material de estudo que compõe este módulo:
                        1 Episódio de uma série ficcional, dividido em duas partes, uma na abertura e outra no fechamento do módulo;1 Capítulo de livro (em pdf e em html);1 Audioaula, ou seja, uma aula em formato de podcast criado especialmente pro curso;1 Desafio;1 Exame de autoavaliação, com gabarito disponível pra que você possa avaliar o seu aprendizado;1 Exercício de reflexão, também com gabarito disponível pra você fazer sua autoavaliação;Indicação da bibliografia.',
                    ],
                    [
                        'titulo' => 'A psicologia da obra de arte',
                        'descricao' => 'O processo criativo e o inconsciente. Relação entre a Psicologia e a arte. Tipos de obras de arte. Símbolo social. A obra de arte visionária e o inconsciente coletivo. O “segredo\" da criação artística. A obra de arte e a biografia do criador.
                        Material de estudo que compõe este módulo:
                        1 Episódio de uma série ficcional, dividido em duas partes, uma na abertura e outra no fechamento do módulo;1 Capítulo de livro (em pdf e em html);1 Audioaula, ou seja, uma aula em formato de podcast criado especialmente pro curso;1 Desafio;1 Exame de autoavaliação, com gabarito disponível pra que você possa avaliar o seu aprendizado;1 Exercício de reflexão, também com gabarito disponível pra você fazer sua autoavaliação;Indicação da bibliografia.',
                    ],
                    [
                        'titulo' => 'Fantasia e criatividade',
                        'descricao' => 'A descida para o “lugar” onde passado, presente e futuro são uma só e a mesma coisa. O que é a fantasia e para que ela serve. Os dois tipos de pensamento. Noções de fantasma e de atividade imaginativa. Diferenças entre fantasia ativa e fantasia passiva. Depressões criativas. A conexão entre a fantasia e a resolução de problemas.
                        Material de estudo que compõe este módulo:
                        1 Episódio de uma série ficcional, dividido em duas partes, uma na abertura e outra no fechamento do módulo;1 Capítulo de livro (em pdf e em html);1 Audioaula, ou seja, uma aula em formato de podcast criado especialmente pro curso;1 Desafio;1 Exame de autoavaliação, com gabarito disponível pra que você possa avaliar o seu aprendizado;1 Exercício de reflexão, também com gabarito disponível pra você fazer sua autoavaliação;Indicação da bibliografia.',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Este curso estimula o desenvolvimento da criatividade ao propor uma abordagem inovadora para compreender o mundo, incentivando a imaginação e a fantasia ativa por meio da exploração de arquétipos e temas universais da mitologia. Os conceitos míticos são aplicados à vida cotidiana e a campos criativos, como a arte e a psicologia, promovendo uma compreensão mais profunda das experiências humanas. Além disso, o curso contribui para o fortalecimento da inteligência emocional, ampliando a empatia e a habilidade de lidar com emoções complexas. A conexão entre psicologia e criação artística também é abordada, oferecendo ferramentas para interpretar obras de arte e compreender seu impacto emocional e simbólico.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Psicólogos, psicanalistas, ilustradores, publicitários e arquitetos. Músicos, designers, estilistas e desenvolvedores de novos produtos e de novos negócios. Roteiristas, escritores, quadrinistas, ilustradores, publicitários e demais interessados em criatividade, arte, mitologia e psicologia.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ],
                ]
            ],
            [
                "titulo" => "Inclusão Social Através do Esporte",
                "descricao" => "O esporte é uma poderosa ferramenta de transformação social e promoção da paz. O Estatuto da Juventude garante o direito ao esporte e ao acesso a equipamentos inclusivos em todo o Brasil. No curso “Inclusão Social Através do Esporte”, você vai aprender a capacitar profissionais, estudantes e gestores para promover a inclusão real no esporte. Descubra como o esporte pode mudar vidas e fortalecer comunidades. Faça parte dessa transformação e ajude a construir uma sociedade mais justa e igualitária!",
                "valor" => 69.90,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 3,
                "carga_horaria" => 140,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Princípios da Prática Esportiva Inclusiva',
                        'descricao' => 'Princípios da Prática Esportiva Inclusiva.
                        - Ricardo Catunda',
                    ],
                    [
                        'titulo' => 'Prática esportiva para pessoas com deficiência: legislação, normas e fiscalização no Brasil',
                        'descricao' => 'Prática esportiva para pessoas com deficiência: legislação, normas e fiscalização no Brasil.
                        - Wellington Gomes Feitosa',
                    ],
                    [
                        'titulo' => 'O profissional de Educação Física como agente de inclusão pelo esporte',
                        'descricao' => 'O profissional de Educação Física como agente de inclusão pelo esporte.
                        - Carla Samya Nogueira Falcão e David Xavier dos Santos',
                    ],
                    [
                        'titulo' => 'Atividade física versus esportes de alto rendimento: aplicabilidade para pessoas com deficiência.',
                        'descricao' => 'Atividade física versus esportes de alto rendimento: aplicabilidade para pessoas com deficiência.
                        - Adriano César Carneiro Loureiro e Daniel Nogueira Godinho',
                    ],
                    [
                        'titulo' => 'Esporte adaptado como ferramenta para o protagonismo e transformação social.',
                        'descricao' => 'Esporte adaptado como ferramenta para o protagonismo e transformação social.
                        - Mário Antônio de Moura Simim',
                    ],
                    [
                        'titulo' => 'Práticas inclusivas na escola: atribuições da educação física.',
                        'descricao' => 'Práticas inclusivas na escola: atribuições da educação física.
                        - Ana Luisa Batista Santos, José Jander Teixeira de Oliveira e Matheus Pontes Lopes',
                    ],
                    [
                        'titulo' => 'Educação inclusiva para o esporte: modelos de ensino e estratégias pedagógicas.',
                        'descricao' => 'Educação inclusiva para o esporte: modelos de ensino e estratégias pedagógicas.
                        - José Airton de Freitas Pontes Júnior e Lívia Marques Quixadá',
                    ],
                    [
                        'titulo' => 'Identificação e enfrentamento das barreiras físicas e culturais para a acessibilidade.',
                        'descricao' => 'Identificação e enfrentamento das barreiras físicas e culturais para a acessibilidade.
                        - Helvio Feliciano Moreira e Regina Helena Tahim Souza Neiva',
                    ],
                    [
                        'titulo' => 'Tecnologia Assistiva para a inclusão e autonomia da pessoa com deficiência.',
                        'descricao' => 'Tecnologia Assistiva para a inclusão e autonomia da pessoa com deficiência.
                        - Ruth da Silva Lima, Ana Lúcia Silva Farias, Anaxágoras Maia Girão e Izabeli Sales Matos',
                    ],
                    [
                        'titulo' => 'Políticas públicas para inclusão e educação pelo esporte.',
                        'descricao' => 'Políticas públicas para inclusão e educação pelo esporte.
                        - Celina Sousa Gontijo e Bernardo Luiz Brahim Cortez',
                    ],
                    [
                        'titulo' => 'Fundamentos da ação do gestor de esporte para a educação inclusiva.',
                        'descricao' => 'Fundamentos da ação do gestor de esporte para a educação inclusiva.
                        - Felipe J. Aidar',
                    ],
                    [
                        'titulo' => 'Estudo de casos: apresentação e análise de casos de sucesso no esporte inclusivo.',
                        'descricao' => 'Estudo de casos: apresentação e análise de casos de sucesso no esporte inclusivo.
                        - Felipe Nogueira Catunda',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Adquira conhecimento especializado com autores renomados sobre os princípios da prática esportiva inclusiva e a legislação brasileira voltada à inclusão. Aprenda a identificar e enfrentar barreiras físicas e culturais, promovendo a acessibilidade e a participação de todos. Compreenda as políticas públicas que incentivam a inclusão e a educação por meio do esporte, preparando-se para atuar em contextos de gestão esportiva. Ao longo do curso, você desenvolverá habilidades práticas para atuar como agente de inclusão, reconhecendo a importância e a responsabilidade do profissional nesse cenário.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Para profissionais ou estudantes de educação física, e líderes comunitários envolvidos com a prática esportiva. Diretores, coordenadores pedagógicos, e gestores públicos envolvidos com o esporte. Interessados(as) que buscam ampliar suas habilidades e conhecimentos.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
            [
                "titulo" => "Formação de Mediadores de Educação para Patrimônio",
                "descricao" => "O curso Formação de Mediadores de Educação para o Patrimônio é uma iniciativa que busca descentralizar ações formativas, ampliando sua oferta para todos os distritos culturais. Promove uma formação em cultura mais ampla e inclusiva, articulando parcerias com instituições e agentes sociais, como OSCs, coletivos, associações, academias e escolas públicas municipais. Também estimula ações em espaços e equipamentos públicos, fortalecendo a atuação colaborativa e o acesso à educação patrimonial em diferentes territórios.",
                "valor" => 126.00,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 5,
                "carga_horaria" => 160,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Afinal, o que é patrimônio?: conceitos e suas trajetórias.Afinal, o que é patrimônio?: conceitos e suas trajetórias.',
                        'descricao' => 'Afinal, o que é patrimônio?: conceitos e suas trajetórias.
                        - Antonio Gilberto Ramos Nogueira',
                    ],
                    [
                        'titulo' => 'Design, cidades e patrimônio.',
                        'descricao' => 'Design, cidades e patrimônio.
                        - Robledo Duarte e Robledo Duarte',
                    ],
                    [
                        'titulo' => 'É pau, é pedra…: o patrimônio natural.',
                        'descricao' => 'É pau, é pedra…: o patrimônio natural.
                        - Lana Luiza M.F. Sales e Cristina Holanda.',
                    ],
                    [
                        'titulo' => 'Arte e patrimônio.',
                        'descricao' => 'Arte e patrimônio.
                        - Sandra Nancy Ramos Freire Bezerra',
                    ],
                    [
                        'titulo' => 'Saberes e formas de expressão: patrimônios de todos nós.',
                        'descricao' => 'Saberes e formas de expressão: patrimônios de todos nós.
                        - Rosilene Melo',
                    ],
                    [
                        'titulo' => 'A diversidade das “celebrações”: nosso patrimônio imaterial.',
                        'descricao' => 'A diversidade das “celebrações”: nosso patrimônio imaterial.
                        - Emmanuel Bastos de M. Lopes',
                    ],
                    [
                        'titulo' => 'Os “lugares” e sua dimensão imaterial.',
                        'descricao' => 'Os “lugares” e sua dimensão imaterial.
                        - Aterlane Martins',
                    ],
                    [
                        'titulo' => 'Museus e patrimônio.',
                        'descricao' => 'Museus e patrimônio.
                        - Yazid Jorge Guimarães Costa',
                    ],
                    [
                        'titulo' => 'Políticas públicas: preservação do patrimônio brasileiro',
                        'descricao' => 'Políticas públicas: preservação do patrimônio brasileiro.
                        - Átila Tolentino',
                    ],
                    [
                        'titulo' => 'Turismo e Patrimônio.',
                        'descricao' => 'Turismo e Patrimônio.
                        - Carla Vieira',
                    ],
                    [
                        'titulo' => 'Instrumentos possíveis para uma intervenção nas cidades (PARTE I).',
                        'descricao' => 'Instrumentos possíveis para uma intervenção nas cidades (PARTE I).
                        - Graciele Siqueira',
                    ],
                    [
                        'titulo' => 'Instrumentos possíveis para uma intervenção nas cidades (PARTE II).',
                        'descricao' => 'Instrumentos possíveis para uma intervenção nas cidades (PARTE II).
                        - Adson Rodrigo S. Pinheiro',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Neste curso, os alunos desenvolvem uma compreensão ampla do conceito de patrimônio, explorando suas múltiplas dimensões — cultural, natural e imaterial — e reconhecendo sua importância histórica e social. A formação oferece ferramentas práticas para a elaboração de projetos de intervenção urbana, com foco na preservação e valorização do patrimônio local de forma sustentável. Além disso, aprofunda a consciência sobre o patrimônio imaterial, destacando a diversidade de celebrações e saberes das diferentes culturas. Com isso, o curso se torna um diferencial para quem deseja atuar de forma qualificada e promover transformações positivas na sociedade.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Para professores, sociólogos ou educadores sociais. Profissionais do trade de turismo ou historiadores. Interessados(as) que buscam ampliar suas habilidades e conhecimentos.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
            [
                "titulo" => "Capacitação de agentes culturais",
                "descricao" => "Visa capacitar gestores, produtores e trabalhadores da cultura em todo o Brasil. Totalmente a distância, o curso une formação acadêmica e prática, promovendo a profissionalização no setor cultural e incentivando a expansão de projetos nas diversas regiões do país. Os conteúdos abordam ferramentas, práticas e métodos de financiamento de projetos culturais, públicos e privados. O curso ajuda os participantes a desenvolver uma visão estratégica e adaptada ao mercado cultural, especialmente diante das transformações provocadas pela pandemia.",
                "valor" => 69.90,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 2,
                "carga_horaria" => 160,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Projetos e produção culturais',
                        'descricao' => '(Fascículo 1) Projetos Culturais - Larissa Biasoli
                        Elaboração com dicas e ferramentas para serem aplicadas ao mercado de projetos, buscando a escrita prática e as diversas versões de aplicabilidade com foco em sustentabilidade e no bom desempenho de produtores e gestores que atuam na área.
                        (Fascículo 2) Gestão de Projetos Culturais - Alice Coutinho
                        (1) Planejamento: favorecimento da percepção do problema, a priorização de informações no desenvolvimento e a adequação da solução às ferramentas utilizadas.
                        (2) Finanças: instrumentos e ferramentas de gestão financeira básicos para não financeiros.
                        (3) Avaliação: ferramentas para mensurar resultados de projetos e ações culturais, possibilitando análises críticas, a fim de gerar indicadores para comprovar a eficácia das propostas.
                        (Fascículo 3) Produção Cultural - Marcela Amaral
                        Produção executiva, logística, aspectos legais e gestão prática de projetos e eventos culturais.',
                    ],
                    [
                        'titulo' => 'Legislação e prestação de contas',
                        'descricao' => '(Fascículo 4) Leis de Incentivo - Carolina Kazumi
                        As leis federais de incentivo disponíveis para a cultura (Rouanet e audiovisual). O funcionamento dessas leis e a importância do desenvolvimento do projeto cultural no que tange à produção textual, orçamentária, formatação, enquadramento, gestão.
                        (Fascículo 5) Prestação de Contas - Amanda Mendes
                        Dicas e ferramentas que facilitam a organização de documentos e informações necessárias à gestão de projetos incentivados, abordando aspectos físicos e financeiros, vedações, sanções e limitações, evitando problemas e inconsistências em seu fechamento.
                        (Fascículo 6) Direitos Culturais - Ivan Borges
                        Direitos autorais e de uso de imagem, LGPD e outras legislações especialmente pensadas a partir das novas dinâmicas trazidas pela ampla utilização das mídias digitais.',
                    ],
                    [
                        'titulo' => 'Captação de recursos',
                        'descricao' => '(Fascículo 7) Fontes de Financiamento - Larissa Biasoli
                        As diferentes fontes de recursos e as múltiplas modalidades de financiamento e estudos de viabilidade para empreendimentos culturais e criativos, trazendo conceitos básicos para guiar a elaboração de um plano de captação, do planejamento à conquista.
                        (Fascículo 8) Captação de Recursos - Daniele Torres
                        A lógica dos patrocínios empresariais, como comercializar projetos e programas culturais; dicas práticas, exemplos e cases de sucesso; abordagem, pesquisa de prospects e adequação de discurso. Compliance e contratos. Pós-venda e fidelização.
                        (Fascículo 9) Editais - Marcos Librantz
                        Os conceitos por trás das políticas públicas e de patrocínios empresariais; contrapartidas e reciprocidades; dicas práticas de inscrição de projetos em editais privados e públicos.',
                    ],
                    [
                        'titulo' => 'Inovação e empreendedorismo',
                        'descricao' => '(Fascículo 10) Comunicação de Projetos Culturais - Christiane Campos
                        instrumentos para quem cria projetos culturais e ajuda na construção de uma estratégia de comunicação eficiente e eficaz. Desde os conceitos básicos para a criação de um plano de comunicação, passando por relacionamento com a imprensa e uso das principais mídias sociais.
                        (Fascículo 11) Empreendedorismo - Erik Krulikowski
                        Inovação, mercado e empreendedorismo com objetivo de tirar os gestores da inércia e do lugar-comum, ampliando o olhar para a inovação e as novas perspectivas de negócios. Como elaborar um plano de negócios para empresas e projetos nas áreas criativas.
                        (Fascículo 12) Marketing Digital - Rose Meusburger
                        Oportunidade de conhecer as possibilidades e as ferramentas que o marketing oferece para conseguir alavancar negócios criativos. Com a crescente popularização da internet e do consumo cultural online a partir da pandemia, que ampliou a demanda por soluções digitais inovadoras e criativas para produtos culturais, o marketing digital tornou-se uma das alternativas mais viáveis e rentáveis para empresas e organizações criativas e, por isso, se faz necessário considerar em seu planejamento a sua inclusão.',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Aprenda a planejar projetos e iniciativas culturais de forma estruturada, transformando ideias em ações concretas e sustentáveis. Ao longo do curso, você terá acesso ao conhecimento necessário para elaborar e executar projetos culturais, incluindo o uso estratégico de leis de incentivo e incentivos fiscais como ferramentas de financiamento. Além disso, será orientado a conhecer e utilizar de maneira plena e consciente os mecanismos disponíveis, promovendo autonomia financeira e sustentabilidade para suas iniciativas.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Para profissionais e entusiastas da cultura, arte e educação, que desejam expandir suas competências no setor cultural. Criadores, produtores, gestores de espaços e projetos culturais, e educadores. Pessoas interessadas em desenvolver ou apoiar iniciativas culturais e sociais em diferentes contextos.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
            [
                "titulo" => "Literatura Cearense",
                "descricao" => "Cuidadosamente elaborado para revelar a essência da produção literária cearense, do século XIX aos dias atuais. A cada módulo, você mergulha em autores, movimentos e obras que refletem a cultura do Ceará e dialogam com a Literatura Brasileira. Explore temas como romantismo, realismo, modernismo, literatura fantástica e cordel. Enriquecer seu repertório, aprimorar sua prática profissional ou alimentar sua paixão pela leitura e cultura são caminhos possíveis neste curso.",
                "valor" => 50.00,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 2,
                "carga_horaria" => 140,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Literatura cearense: Notas introdutórias',
                        'descricao' => 'Literatura cearense: Notas introdutórias
                        - Charles Ribeiro e Lílian Martins',
                    ],
                    [
                        'titulo' => 'Sob as asas da jandaia: Romantismo parte I',
                        'descricao' => 'Sob as asas da jandaia: Romantismo parte I
                        - Paulo de Tarso Pardal',
                    ],
                    [
                        'titulo' => 'Poemas para a liberdade: Romantismo parte II',
                        'descricao' => 'Poemas para a liberdade: Romantismo parte II
                        - Carlos Vazconcelos',
                    ],
                    [
                        'titulo' => 'Mulheres escritoras: as pioneiras no século XIX',
                        'descricao' => 'Mulheres escritoras: as pioneiras no século XIX
                        - Gildênia Moura e Carla Castro',
                    ],
                    [
                        'titulo' => 'Juntou a fome com a vontade de ler: realismo/naturalismo',
                        'descricao' => 'Juntou a fome com a vontade de ler: realismo/naturalismo
                        - José Leite Jr.',
                    ],
                    [
                        'titulo' => 'À espera do pão: a padaria espiritual e o simbolismo',
                        'descricao' => 'À espera do pão: a padaria espiritual e o simbolismo
                        - Sânzio de Azevedo',
                    ],
                    [
                        'titulo' => 'O canto novo de uma raça: pré-modernismo e modernismo',
                        'descricao' => 'O canto novo de uma raça: pré-modernismo e modernismo
                        - Raymundo Netto',
                    ],
                    [
                        'titulo' => 'Literatura e artes plásticas: grupos clã e SCAP',
                        'descricao' => 'Literatura e artes plásticas: grupos clã e SCAP
                        - Vera Lúcia de Moraes e Anderson Sousa',
                    ],
                    [
                        'titulo' => 'Da vanguarda à ditadura: Literatura em encruzilhadas',
                        'descricao' => 'Da vanguarda à ditadura: Literatura em encruzilhadas
                        - Fernanda Diniz e Kedma Damasceno',
                    ],
                    [
                        'titulo' => 'Escritos do ignoto: A literatura fantástica',
                        'descricao' => 'Escritos do ignoto: A literatura fantástica
                        - Aíla Sampaio',
                    ],
                    [
                        'titulo' => 'Mala de romances: A literatura de cordel',
                        'descricao' => 'Mala de romances: A literatura de cordel
                        - Arievaldo Viana e Stélio Torquato',
                    ],
                    [
                        'titulo' => 'Itinerários de leitura: Um passeio pela literatura do Ceará',
                        'descricao' => 'Itinerários de leitura: Um passeio pela literatura do Ceará
                        - Lílian Martins, Vanessa Passos e Nina Rizzi',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Esta formação proporciona o desenvolvimento de habilidades para a análise e interpretação de obras literárias cearenses, com atenção aos contextos históricos, temas centrais e influências culturais. Os participantes serão capacitados a realizar pesquisas literárias e históricas, aprofundando-se em autores, movimentos e temáticas relevantes, o que permite ampliar a compreensão crítica das produções regionais. O curso também promove a contextualização da literatura cearense em relação aos cenários social, histórico e cultural, estabelecendo conexões com os movimentos literários do Brasil e do mundo.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Para profissionais da educação e cultura, gestores, bibliotecários e servidores públicos. Acadêmicos, pesquisadores, historiadores, e profissionais das cadeias criativa e produtiva do livro. Interessados(as) pelo tema que buscam ampliar suas habilidades e conhecimentos.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
            [
                "titulo" => "Práticas Sociais de Leitura",
                "descricao" => "O curso aborda temas essenciais como Letramento e Literacia, discutindo suas definições e aplicabilidades em diferentes contextos. Dentro do conteúdo, exploram-se práticas sociais, saberes e vivências que se manifestam por meio da literatura e suas múltiplas linguagens. Os participantes irão refletir sobre a leitura e escrita literária, e como essas práticas se conectam ao cotidiano. Além disso, o curso destaca as práticas de leitura em comunidades e oferece estratégias para criar e implementar projetos de mediação de leitura em variados contextos sociais.",
                "valor" => 198.75,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 5,
                "carga_horaria" => 90,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'Leitura e escrita literária: entremeios com o cotidiano - Lidia Eugenia',
                        'descricao' => 'A literatura, ao refletir as experiências humanas, permite que o leitor faça conexões entre suas vivências pessoais e os textos lidos, criando um espaço de reflexão crítica e emocional. Além disso, ao escrever, o indivíduo transforma sua visão de mundo em palavras, utilizando a linguagem literária para expressar pensamentos e sentimentos que surgem no contexto do cotidiano. Essa relação torna a leitura e a escrita poderosas ferramentas de autoconhecimento, análise social e expressão cultural.',
                    ],
                    [
                        'titulo' => 'Práticas sociais de leitura e escrita na comunidade - Laiana Ferreira',
                        'descricao' => 'Iniciativas que envolvem a leitura e a escrita como atividades coletivas, desenvolvidas em espaços comunitários. Essas práticas visam promover o acesso à literatura e à cultura escrita de forma inclusiva, reforçando a importância da leitura como um ato social. Elas criam ambientes onde pessoas de diferentes contextos podem compartilhar experiências, histórias e conhecimentos, fortalecendo o senso de pertencimento e construção coletiva.',
                    ],
                    [
                        'titulo' => 'Elaboração de projetos de mediação da leitura - Damaris de Queiroz',
                        'descricao' => 'Envolve o planejamento e implementação de iniciativas que conectam leitores a textos, promovendo a prática da leitura de maneira acessível e significativa. Esses projetos buscam criar oportunidades em que o ato de ler seja incentivado em diferentes contextos sociais, como escolas, bibliotecas, comunidades ou espaços culturais, facilitando o acesso ao conhecimento e à cultura literária.',
                    ],

                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Esta formação capacita profissionais para atuarem como mediadores de leitura, desenvolvendo habilidades em leitura e escrita literária e promovendo o acesso à literatura em diversos contextos sociais. Os participantes irão aprimorar suas competências literárias, compreendendo as relações entre leitura, cotidiano e vida em sociedade. Também serão incentivados a aplicar práticas sociais de leitura em comunidades, fortalecendo o engajamento cultural. O curso aborda estratégias para formar professores-leitores e elaborar projetos de mediação voltados para escolas, bibliotecas e espaços culturais. Um dos módulos é dedicado à leitura no ambiente digital, preparando os alunos para os desafios da conectividade. Ao final, o participante estará apto a transformar a relação das pessoas com a leitura, promovendo inclusão e impacto social por meio de práticas literárias significativas.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Educadores, bibliotecários e agentes educacionais culturais. Contadores de histórias e agentes de leitura. Interessados(as) que buscam ampliar suas habilidades e conhecimentos.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
            [
                "titulo" => "Básico de História em Quadrinhos",
                "descricao" => "O Curso Básico de Histórias em Quadrinhos é uma iniciativa da Fundação Demócrito Rocha, em parceria com a Secretaria Municipal da Cultura de Fortaleza (SecultFOR), com o objetivo de promover a formação e incentivar o debate sobre empreendedorismo entre profissionais das cadeias criativa e produtiva de quadrinhos no Ceará. A proposta é dar visibilidade a esses profissionais, fortalecer o mercado cultural, gerar trabalho e renda, estimular a leitura, a produção de HQs, além de enriquecer o cenário cultural local com novas expressões e talentos criativos.",
                "valor" => 60.00,
                "valor_matricula" => 0,
                "thumbnail" => "https://placehold.co/636x462",
                "autor" => "Fundação Demócrito Rocha",
                "lote" => null,
                "qnt_parcelas" => 2,
                "carga_horaria" => 120,
                "periodo" => 120,
                "tipo_periodo" => "dias",
                "modalidade" => "ead",
                "categorias" => [CategoriasEnum::LIVRE, CategoriasEnum::BEM_VIVER],
                "modulos" => [
                    [
                        'titulo' => 'A linguagem e os princípios da produção em HQs.',
                        'descricao' => 'A linguagem e os princípios da produção em HQs.',
                    ],
                    [
                        'titulo' => 'Roteiro e Narrativa.',
                        'descricao' => 'Roteiro e Narrativa.',
                    ],
                    [
                        'titulo' => 'Criação e desenvolvimento de personagens.',
                        'descricao' => 'Criação e desenvolvimento de personagens.',
                    ],
                    [
                        'titulo' => 'Composição para quadrinhos.',
                        'descricao' => 'Composição para quadrinhos.',
                    ],
                    [
                        'titulo' => 'Imagens: estilos e possibilidades.',
                        'descricao' => 'Imagens: estilos e possibilidades.',
                    ],
                    [
                        'titulo' => 'Tiras de Quadrinhos.',
                        'descricao' => 'Tiras de Quadrinhos.',
                    ],
                    [
                        'titulo' => 'Quadrinhos alternativos.',
                        'descricao' => 'Quadrinhos alternativos.',
                    ],
                    [
                        'titulo' => 'Balonamento, tipografia e onomatopeia.',
                        'descricao' => 'Balonamento, tipografia e onomatopeia.',
                    ],
                    [
                        'titulo' => 'Arte-final: tradicional e digital.',
                        'descricao' => 'Arte-final: tradicional e digital.',
                    ],
                    [
                        'titulo' => 'Cores para quadrinhos.',
                        'descricao' => 'Cores para quadrinhos.',
                    ],
                    [
                        'titulo' => 'Edição de HQs.',
                        'descricao' => 'Edição de HQs.',
                    ],
                    [
                        'titulo' => 'Mercado de HQs.',
                        'descricao' => 'Mercado de HQs.',
                    ],
                ],
                "infos" => [
                    [
                        'titulo' => 'Competências que você vai desenvolver',
                        'descricao' => 'Este curso proporciona o domínio completo da criação de histórias em quadrinhos, guiando você desde a concepção de roteiros e personagens até a montagem das páginas e a escolha das cores. Ao longo do processo, você desenvolverá habilidades criativas e técnicas fundamentais para atuar no mercado. Além disso, terá a oportunidade de explorar tanto técnicas tradicionais quanto digitais de arte-final, ampliando sua versatilidade e permitindo combinar abordagens conforme as necessidades de cada projeto. O curso também foca no desenvolvimento de roteiros e estilos visuais, incentivando a experimentação de diferentes métodos narrativos e gráficos, para que você descubra e aprimore seu próprio estilo, integrando texto e imagem de forma harmoniosa e expressiva.',
                    ],
                    [
                        'titulo' => 'Para quem se destina?',
                        'descricao' => 'Ilustradores, quadrinistas, entusiastas das áreas de arte e educação, além de empreendedores e profissionais do mercado cultural. Professores e para aqueles que desejam explorar o potencial das HQs como ferramenta pedagógica, interessados(as) que buscam ampliar suas habilidades e conhecimentos.',
                    ],
                    [
                        'titulo' => 'Quanto tempo terei para acessar o curso?',
                        'descricao' => 'O período de acesso ao curso é de 120 dias corridos, contados a partir da data da matrícula. Fique atento! Esse prazo é contínuo, ou seja, inclui finais de semana e feriados.',
                    ]
                ]
            ],
        ];

        foreach ($cursos as $cursoRaw) {
            $data = Arr::only($cursoRaw, ['titulo','descricao','valor','valor_matricula','lote','qnt_parcelas','carga_horaria','periodo','tipo_periodo','modalidade', 'thumbnail', 'autor']);

            $curso = Curso::create($data);

            foreach ($cursoRaw["categorias"] as $categoriaRaw) {
                $categoria = Categoria::where('slug', $categoriaRaw)->first();

                if ($categoria) {
                    $curso->categorias()->attach($categoria->id);
                }
            }

            foreach ($cursoRaw['modulos'] as $modulo) {
                $modulo['curso_id'] = $curso->id;

                Modulo::create($modulo);
            }

            foreach ($cursoRaw['infos'] as $info) {
                $info['curso_id'] = $curso->id;

                Info::create($info);
            }
        }
    }
}
