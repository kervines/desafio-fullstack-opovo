import Image from 'next/image';
import HamburgerIcon from '@/icons/hamburger.svg';
import { Hero } from '@/components/organisms/Single/Hero';
import { Statistics } from '@/components/organisms/Single/Statistics';
import { Infos } from '@/components/organisms/Single/Infos';
import { Modules } from '@/components/organisms/Single/Modules';
import { ListCourses } from '@/components/organisms/ListCourses';
import { Investiment } from '@/components/organisms/Single/Investment';
import { getCourseById } from '@/repositories/api';

export default async function Home() {
  const course = await getCourseById(1);

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
