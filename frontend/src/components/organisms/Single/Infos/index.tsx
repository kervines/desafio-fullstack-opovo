import { Accordion } from '@/components/atoms/Accordion';
import { Course } from '@/types/api';

type InfosProps = {
  course: Course;
};

export const Infos = (props: InfosProps) => {
  return (
    <section className="flex flex-col gap-4 px-4 w-full 2xl:px-[72px]">
      <h2 className="font-bold text-dark text-2xl border-l border-l-[6px] pl-2 border-secondary-low">
        Informações para decidir
      </h2>

      <Accordion
        items={props.course.infos?.map((item) => ({
          id: item.id,
          title: item.titulo,
          content: <p>{item.descricao}</p>,
        }))}
      />
    </section>
  );
};
