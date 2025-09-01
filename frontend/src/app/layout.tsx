import type { Metadata } from 'next';
import { Open_Sans, Noto_Sans } from 'next/font/google';
import './globals.css';
import 'swiper/css';
import 'swiper/css/navigation';
import { PageHeader } from '@/components/organisms/Layout/Header';
import { PageFooter } from '@/components/organisms/Layout/Footer';
import 'flowbite';

const openSans = Open_Sans({
  variable: '--font-open-sans',
  subsets: ['latin'],
});

const notoSans = Noto_Sans({
  variable: '--font-open-sans',
  subsets: ['latin'],
});

export const metadata: Metadata = {
  title: 'Desafio FullStack',
  description: 'Site para desafio fullstack Jornal O Povo',
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="en">
      <body className={`${notoSans.variable} antialiased`}>
        <PageHeader />
        {children}
        <PageFooter />
      </body>
    </html>
  );
}
