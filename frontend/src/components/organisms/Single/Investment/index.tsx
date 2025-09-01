import Image from 'next/image';
import LogoOpovo from '@/icons/opovo+.svg';
import { Course } from '@/types/api';
import { formatCurrency } from '@/utils';
import { Button } from '@/components/atoms/Button';

type InvestimentProps = {
  course: Course;
};

export const Investiment = (props: InvestimentProps) => {
  return (
    <section className="investimento flex flex-col gap-4 mb-8 px-4 w-full 2xl:px-[72px]">
      <h2 className="font-bold text-dark text-2xl border-l border-l-[6px] pl-2 border-secondary-low">
        Investimento
      </h2>

      <div className="grid grid-cols-1 2xl:grid-cols-2 gap-4 2xl:justify-between">
        <div className="flex items-center flex-col gap-4 p-8 bg-primary-high border border-gray-200 rounded-lg shadow-sm">
          <div className="flex flex-col items-center">
            <div className="mb-1 text-base tracking-tight text-white">
              {props.course.lote && <span>{props.course.lote}º lote</span>}:
              Total de{' '}
              <span>
                {props.course.valor.toLocaleString('pt-BR', {
                  style: 'currency',
                  currency: 'BRL',
                })}
              </span>{' '}
            </div>
            {props.course.valor_matricula && (
              <span className="mb-1 text-base tracking-tight text-white">
                + Matrícula de{' '}
                {props.course.valor_matricula.toLocaleString('pt-BR', {
                  style: 'currency',
                  currency: 'BRL',
                })}
              </span>
            )}
          </div>
          {props.course.qnt_parcelas > 1 && (
            <p className="mb-3 font-bold text-white text-large text-center">
              Até {props.course.qnt_parcelas}X de{' '}
              {formatCurrency(
                Number(props.course.valor / props.course.qnt_parcelas)
              )}
            </p>
          )}

          <Button>Faça sua matrícula</Button>
        </div>

        <div className="flex items-center flex-col gap-4 p-8 bg-gray border border-[#70707082] rounded-lg">
          <LogoOpovo />
          <a href="#">
            <h5 className="mb-2 font-bold tracking-tight text-[#7070708]">
              Ganhe acesso grátis por 90 dias.
            </h5>
          </a>
          <ul className="mb-3 font-normal text-dark text-center">
            <li>Reportagens & Colunistas;</li>
            <li>Filmes & Séries;</li>
            <li>Podcasts & Web Stories.</li>
          </ul>
          <a href="#" className="font-bold text-secondary-medium">
            Conheça o OPOVO+
          </a>
        </div>
      </div>
    </section>
  );
};
