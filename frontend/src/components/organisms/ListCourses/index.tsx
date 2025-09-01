import { Swiper } from '@/components/atoms/Swiper';
import { CourseCard } from '@/components/molecules/CourseCard';
import { getCourses } from '@/repositories/api';

export const ListCourses = async () => {
  const courses = await getCourses();

  return (
    <section className="curso px-3 w-full 2xl:px-[72px]">
      <h2 className="text-2xl text-dark font-bold mb-4">Cursos</h2>

      <Swiper
        items={courses.map((course) => (
          <CourseCard course={course} key={`course_card_${course.id}`} />
        ))}
      />
    </section>
  );
};
