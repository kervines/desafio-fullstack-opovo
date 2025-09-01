import { Hero } from '@/components/organisms/Single/Hero';
import { Statistics } from '@/components/organisms/Single/Statistics';
import { Infos } from '@/components/organisms/Single/Infos';
import { ListCourses } from '@/components/organisms/ListCourses';
import { Investiment } from '@/components/organisms/Single/Investment';
import { getCourseById } from '@/repositories/api';
import { Modules } from '@/components/organisms/Single/Modules';
import { Metadata } from 'next';

export async function generateMetadata({
  params,
}: {
  params: { id: number };
}): Promise<Metadata> {
  const course = await getCourseById(Number(params.id));

  return {
    title: course.titulo,
    description: course.descricao,
    openGraph: {
      title: course.titulo,
      description: course.descricao,
      images: [course.thumbnail ?? ''],
    },
  };
}

export default async function Single(pageProps: PageProps<'/cursos/[id]'>) {
  const { id } = await pageProps.params;

  const course = await getCourseById(Number(id));

  return (
    <main className="gap-8 flex flex-col items-center bg-[#F3F3F3] text-black">
      <Hero course={course} />
      <Statistics course={course} />
      <Infos course={course} />
      <Modules course={course} />
      <ListCourses />
      <Investiment course={course} />
    </main>
  );
}
