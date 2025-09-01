import { Course } from '@/types/api';

type StatisticsProps = {
  course: Course;
};

export const Statistics = (props: StatisticsProps) => {
  return (
    <section className="estatistica grid gap-4 text-xl grid-cols-[140px_140px] md:flex md:justify-between w-full md:px-4 items-end 2xl:mt-[48px] 2xl:mb-4 2xl:px-[72px]">
      <div className="carga-horaria text-center">
        <h3 className="text-gray-medium uppercase 2xl:text-[28px]">
          Carga Horária
        </h3>
        <p className="text-large font-light 2xl:text-[48px]">
          {props.course.carga_horaria} horas
        </p>
      </div>
      <div className="conteudo text-xl text-center">
        <h3 className="text-gray-medium uppercase 2xl:text-[28px]">Conteúdo</h3>
        <p className="text-large font-light 2xl:text-[48px]">
          {props.course.modulos?.length} módulos
        </p>
      </div>
      <div className="periodo text-xl text-center">
        <h3 className="text-gray-medium uppercase 2xl:text-[28px]">
          Período de acesso
        </h3>
        <p className="text-large font-light 2xl:text-[48px]">
          {props.course.periodo} {props.course.tipo_periodo}
        </p>
      </div>
      <div className="modalidade text-xl text-center">
        <h3 className="text-gray-medium uppercase 2xl:text-[28px]">
          Modalidade
        </h3>
        <p className="text-large font-light 2xl:text-[48px]">
          {props.course.modalidade.toUpperCase()}
        </p>
      </div>
    </section>
  );
};
