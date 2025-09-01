import { Accordion } from '@/components/atoms/Accordion';
import VectorIcon from '@/icons/vector.svg';
import { Course } from '@/types/api';

type ModulesProps = {
  course: Course;
};

export const Modules = (props: ModulesProps) => {
  return (
    <section className="px-4 w-full 2xl:px-[72px]">
      <section className="flex flex-col gap-4 ">
        <h2 className="font-bold text-dark text-2xl border-l border-l-[6px] pl-2 border-secondary-low">
          O que você vai aprender?
        </h2>

        <Accordion
          items={props.course.modulos?.map((item, index) => ({
            id: item.id,
            title:
              props.course.modulos.length === 1
                ? 'Módulo único'
                : `Módulo ${index + 1} - ${item.titulo}`,
            content: <p>{item.descricao}</p>,
          }))}
        />
      </section>
    </section>
  );
};
