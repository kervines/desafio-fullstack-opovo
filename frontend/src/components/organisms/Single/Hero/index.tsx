import { Button } from '@/components/atoms/Button';
import { Tag } from '@/components/atoms/Tag';
import { Course } from '@/types/api';

type HeroProps = {
  course: Course;
};

export const Hero = ({ course }: HeroProps) => {
  return (
    <section className="destaque p-2 2xl:px-[72px] 2xl:py-12 md:px-10 bg-primary-low text-white">
      <div className="descricao-curso flex flex-col 2xl:flex-row-reverse gap-5 content-center">
        <img
          src={course.thumbnail ?? ''}
          alt="Banner do curso"
          width={366}
          height={244}
          className="rounded-lg w-full my-4"
        />

        <div className="flex flex-col 2xl:gap-4">
          <div className="categorias flex gap-2 mt-4">
            {course.categorias?.map((category) => (
              <Tag key={category.slug} label={category.titulo} />
            ))}
          </div>
          <h2 className="text-large leading-[38px] md:leading-[48px] md:text-[40px] pt-2 pb-2 font-bold">
            {course.titulo}
          </h2>
          <p>{course.descricao}</p>
          <div className="flex flex-col md:flex-row gap-5 items-center justify-center md:justify-start my-4 gap-4">
            <img
              src="/image/marca.png"
              alt="logo uane e logo fundação democrito rocha"
              width={235}
              height={57}
            />
            <Button>Faça sua matrícula</Button>
          </div>
        </div>
      </div>
    </section>
  );
};
