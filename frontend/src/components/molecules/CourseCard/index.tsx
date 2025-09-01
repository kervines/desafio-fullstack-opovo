import { Tag } from '@/components/atoms/Tag';
import { Course } from '@/types/api';
import Image from 'next/image';

type CourseCardProps = {
  course: Course;
};

export const CourseCard = ({ course }: CourseCardProps) => {
  return (
    <a
      href={`/cursos/${course.id}`}
      className="bg-primary-high border border-gray-200 rounded-lg flex flex-col w-[306px]"
    >
      <img
        src={course.thumbnail}
        alt={`banner ${course.titulo}`}
        className="w-[306px] h-[306p]"
      />
      <div className="flex flex-col h-[212px] py-4 px-3 justify-between">
        <div className="flex flex-col gap-2">
          <div className="categorias flex gap-2 mt-4">
            {course.categorias.map((category) => (
              <Tag size="low" key={category.slug} label={category.titulo} />
            ))}
          </div>
          <h5 className="text-2xl font-bold text-white">{course.titulo}</h5>
        </div>

        <p className="text-white">
          Por <span>{course.autor}</span>
        </p>
      </div>
    </a>
  );
};
