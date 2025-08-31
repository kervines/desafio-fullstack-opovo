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
                "valor" => 2835.35,
                "valor_matricula" => 70,
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
        ];

        foreach ($cursos as $cursoRaw) {
            $data = Arr::only($cursoRaw, ['titulo','descricao','valor','valor_matricula','lote','qnt_parcelas','carga_horaria','periodo','tipo_periodo','modalidade', 'thumbnail']);

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